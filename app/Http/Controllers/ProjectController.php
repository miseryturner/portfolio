<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Info;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        $projects_full = $projects->where('is_full', 1);
        $projects_tasks = $projects->where('is_full', 0); 

	    $info = Info::all();
        
        return view('welcome', compact('projects_full', 'projects_tasks', 'info'));
    }
}
