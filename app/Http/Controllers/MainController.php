<?php

namespace App\Http\Controllers;

use App\Services\MainService;
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
}
