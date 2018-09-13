<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('welcome')->with(compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $project = new Project;
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->save();
    }
}
