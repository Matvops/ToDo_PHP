<?php

namespace App\Services;

use App\Models\Task;
use App\Models\Week;

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