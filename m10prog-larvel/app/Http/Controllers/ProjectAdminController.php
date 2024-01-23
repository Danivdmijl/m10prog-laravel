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
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required|unique:projects|max:255',
            'onderdeel' => 'required',
        ]);

        $project = Project::create($validData);

        return redirect()->route('projects.index');
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

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'intro', 'description', 'active'];

    protected $table = 'projects';

    $item = new Model( $validData );
    $item->save();

    return redirect( route('project.show', $project->id ) );


}
