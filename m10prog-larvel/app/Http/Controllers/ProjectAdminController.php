<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(2);
        return view('dashboard.projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
    {
        return "ja binnen";
    }

    public function show(Project $project)
    {
    }

    public function edit(Project $project)
    {
    }

    public function update(Request $request, Project $project)
    {
    }

    public function destroy(Project $project)
    {
    }
}


