<?php

namespace App\Services;

use App\Models\Task;
use App\Models\User;
use App\Models\Week;
use Exception;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class MainService {

    public function getTasksAndWeeks(): array
    {
        $tasks = $this->getTasks();
        $weeks = $this->getWeeks();

        if(!$tasks) {
            return $this->createResponse(false, "Falha ao buscar tarefas!");
        }   

        $tasksAndWeeks = [
            'weeks' => $weeks,
            'tasks' => $tasks
        ];

        return $this->createResponse(true, "Consulta de tasks e weeks realizadas com sucesso!", $tasksAndWeeks);
    }

    public function createTaskSubmit(array $task): array
    {
        try{
            DB::beginTransaction(); 

            $task['week_id'] = Crypt::decrypt($task['week_id']);

            $newTask = new Task();
            $newTask->title = $task['title'];
            $newTask->priority = $task['priority'];
            $newTask->week_id = $task['week_id'];
            $newTask->user_id = session('user.user_id');
            $newTask->save();

            DB::commit(); 

            return $this->createResponse(true, "Tarefa criada com sucesso!");
        } catch (Exception $e) {
            error_log($e->getMessage());
            DB::rollBack(); 
            return $this->createResponse(false, "Falha ao criar nova tarefa!");
        }
    }

    public function updateTask(string $task_id){
        try {
            
            $task = $this->getTaskByIdEncrypted($task_id);

            if(!$task) {
                return $this->createResponse(false, 'Tarefa não foi encontrada');
            }

            return $this->createResponse(true, 'Tarefa foi encontrada', $task);
        } catch (DecryptException $e) {
            error_log($e->getMessage());
            return $this->createResponse(false, 'Tarefa inválida');
        } catch (Exception $e) {
            error_log($e->getMessage());
            return $this->createResponse(false, 'Erro inesparado. Favor relatar ao suporte!');
        }
    }

    public function updateTaskSubmit(array $updatedTask){
        
        try {
            
            $oldTask = $this->getTaskByIdEncrypted($updatedTask['id']);
            $newTask = $this->getOnlyTaskAttributes($updatedTask);

            if(!$oldTask || !$newTask) {
                return $this->createResponse(false, 'Tarefa não foi encontrada');
            }
         
            $result = $oldTask->update($newTask);    
            
            if(!$result) {
                return $this->createResponse(false, 'Não foi possível atualizar esta tarefa!');
            }
            return $this->createResponse(true, 'Tarefa atualizada com sucesso!');
        } catch (DecryptException $e) {
            error_log($e->getMessage());
            return $this->createResponse(false, $e->getMessage());
        } catch (Exception $e) {
            error_log($e->getMessage());
            return $this->createResponse(false, 'Erro inesparado. Favor relatar ao suporte!');
        }  
    }

    public function deleteSubmit(string $task_id): array
    {
        try {
            $task = $this->getTaskByIdEncrypted($task_id);
            $task->forceDelete();

            return $this->createResponse(true, "Task excluida com sucesso!");
        } catch (DecryptException $e) {
            error_log($e->getMessage());
            return $this->createResponse(false, $e->getMessage());
        } catch (Exception $e) {
            error_log($e->getMessage());
            return $this->createResponse(false, 'Erro inesparado. Favor relatar ao suporte!');
        }  
    }

    public function getMonthlySalary(){
        try {
            $salary = User::where('id', session('user.user_id'))
                        ->select('salary')
                        ->first();

            if(!$salary) {
                return $this->createResponse(false, 'Seu salário não foi cadastrado!');
            }

            return $this->createResponse(true, "Salario encontrado com sucesso!", $salary['salary']);
        } catch(Exception $e) {
            error_log($e->getMessage());
            return $this->createResponse(false, 'Erro inesparado. Favor relatar ao suporte!');
        }
    }

    private function getTasks(): array
    {
        $tasks = Task::where('user_id', session('user.user_id'))
            ->orderByRaw('priority ASC')
            ->with('weeks')
            ->get()
            ->toArray();

        return $tasks;
    }

    private function getWeeks(): array
    {
        return Week::all()->toArray();
    }

    private function getTaskByIdEncrypted(string $id): Task
    {
       
        $taskIdDecrypted = Crypt::decrypt($id);
        $task = Task::where('id', $taskIdDecrypted)->first();

        if(isset($task)) {
            return $task;
        } else {
            throw new DecryptException("Erro de descriptografia");
        }
    }

    private function getOnlyTaskAttributes(array $task): array
    {
        return array_intersect_key(array_diff_key($task, ['id']));
    }

    private function createResponse(bool $status, String $message, $data = null): array
    {
        return [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];
    }
}