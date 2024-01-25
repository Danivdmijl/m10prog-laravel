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
        $project = new Project();
        return view('dashboard.projects.create', ['project' => $project]);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'titel' => 'required|min:3',
            'description' => 'required|min:10',
        ]);

        $project = new Project($data);
        $project->save();

        return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
    }


    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', ['project' => $project]);
    }



    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'titel' => 'required|min:3',
            'description' => 'required|min:10',
        ]);

        $project->update($data);
        $project->save();

        return redirect()->route('projects.index');   
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');   
    }
}
