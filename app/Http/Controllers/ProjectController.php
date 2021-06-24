<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
//    public function index()
//    {
//        $projects = Project::latest()->paginate(5);
//
//        return view('projects.index', compact('projects'))
//            ->with('i', (request()->input('page', 1) - 1) * 5);
//    }


    public function show(Project $project)
    {
        return view('test.show', compact('project'));
    }



    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('test.index')
            ->with('success', 'Project deleted successfully');
    }
}
