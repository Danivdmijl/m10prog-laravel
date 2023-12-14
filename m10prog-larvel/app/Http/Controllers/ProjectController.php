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
    $model->field_one = 'mijn data';
    // sla het model op
    $model->save();
    }
}
