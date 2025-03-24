<?php

namespace App\Services;

use App\Models\Task;
use App\Models\Week;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class MainService {

    public function getTasksAndWeeks(): array
    {
        $tasks = $this->getTasks();
        $weeks = $this->getWeeks();

        if(!$tasks) {
            return [
                'status' => false,
                'msg' => 'Vazio',
                'data' => null
            ];
        }   

        $tasksAndWeeks = [
            'weeks' => $weeks,
            'tasks' => $tasks
        ];


        return [
            'status' => true,
            'msg' => 'Consulta de tasks e weeks realizadas com sucesso!',
            'data' => $tasksAndWeeks
        ];

    }

    public function createTaskSubmit(array $task){
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
            return [
                'status' => true,
                'msg' => "Tarefa criada com sucesso!",
            ];

        } catch (Exception $e) {
            DB::rollBack(); 
            return [
                'status' => false,
                'msg' => "Falha ao criar nova tarefa!",
            ];
        }
    }

    public function updateTask($task_id){
        
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
}