<?php

namespace App\Http\Controllers;

use App\Services\MainService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MainController extends Controller
{
    private MainService $service;

    public function __construct()
    {
        $this->service = new MainService;
    }

    public function home(): View
    {
        $tasksAndWeeks = $this->service->getTasksAndWeeks();
        
        return view('home', 
            [
                'weeks' => $tasksAndWeeks['data']['weeks'],
                'tasks' => $tasksAndWeeks['data']['tasks']
            ]
        );
    }

    public function createTask($week_id): View
    {
        return view('createTask', ['week_id' => $week_id]);
    }

    public function createTaskSubmit(Request $request)
     {
        $request->validate(
            [
                'title' => 'required|min:6',
                'priority' => 'required',
                'week_id' => 'required'
            ],
            [
                'title.required' => "Titulo da tarefa obrigatório",
                'title.min' => "O número minímo de caracteres é :min",
                'priority.required' => "Selecione uma prioridade",
                'week_id.required' => "Semana obrigatória"
            ]
        );

        $newTask = [
            'title' => $request->input('title'),
            'priority' => $request->input('priority'),
            'week_id' => $request->input('week_id')
        ];

        $createTaskResponse = $this->service->createTaskSubmit($newTask);
        

        if(!$createTaskResponse['status']) {
            return redirect()
                ->back()
                ->withInput()
                ->with("createTaskFailed", $createTaskResponse['message']);
        }

        return redirect()->route('home');
    }

    public function updateTask($task_id)
    {   
        $task = $this->service->updateTask($task_id);

        if(!$task['status']) {
            return redirect()
                ->back()
                ->withInput()
                ->with('updateTaskFailed', $task['message']);
        }

        return view('updateTask', ['task' => $task['data']]);
    }

    public function updateTaskSubmit(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'title' => 'required|min:6',
                'priority' => 'required',
                'task_id' => 'required'
            ],
            [
                'title.required' => "Titulo da tarefa obrigatório",
                'title.min' => "O número minímo de caracteres é :min",
                'priority.required' => "Selecione uma prioridade",
                'task_id.required' => "Tarefa obrigatória"
            ]
        );

        $task = [
            'id' => $request->input('task_id'),
            'title' => $request->input('title'),
            'priority' => $request->input('priority')  
        ];

        $updateTaskResponse = $this->service->updateTaskSubmit($task);

        if(!$updateTaskResponse['status']) {
            return redirect()
                ->back()
                ->withInput()
                ->with('updateTaskFailed', $updateTaskResponse['message']);
        }

        return redirect()->route('home');
    }
}
