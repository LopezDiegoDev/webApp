<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('projects.index', [
            
            'projects' => Project::latest()->paginate()

        ]);
    }

    public function show(Project $project)
    {
         return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }



    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated() );

        return redirect()->route('projects.index');
    }



    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }



    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project);
    }
}
