<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects_full = Project::where('is_full', '1')->get();
        $projects_tasks = Project::where('is_full', '0')->get();

        return view('welcome', compact('projects_full', 'projects_tasks'));
    }
}
