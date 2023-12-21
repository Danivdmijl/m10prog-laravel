<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add() {
            // Maak een model aan
    $model = new Project();
    // definieer de velden
    $model->titel = 'o mijn god - sam 2020';
    $model->description = 'Je lijkt op een wesp';

    // sla het model op
    $model->save();
    }

    public function index() {
        return view ('project');
    }

    public function show(Project $show)
    {
        return view('project.show', ['project'=>$show]);
    }

}