<?php

namespace App\Http\Controllers;

use App\Services\MainService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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

        if(!$tasksAndWeeks['status']){
            echo "Deu ruim";
        }
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

    public function createTaskSubmit(Request $request) {
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

        $result = $this->service->createTaskSubmit($newTask);

        if(!$result['status']) {
            return redirect()
                ->back()
                ->withInput()
                ->with("createTaskFailed", $result['msg']);
        }

        return redirect()->route('home');
    }

    public function updateTask($task_id)
    {
        $this->service->updateTask($task_id);
    }
}
