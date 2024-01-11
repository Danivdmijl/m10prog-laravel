<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add() {
    $model = new Project();
    $model->titel = 'o mijn god - sam 2020';
    $model->description = 'Je lijkt op een wesp';

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