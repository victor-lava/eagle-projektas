<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project; // Užkraunama klasė Project, kuri yra Eloquent Modelis
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() { // atvaizduos visus

      $projects = Project::all(); // Statinė klasė, panašiai į $project->all(); SELECT * FROM projects
      $categories = Category::all();

      // dd($projects[2]->title); // die dump, atspausdina informacija ir sustabdo kodą einanti po šios komandos


      return view('pages/projects', compact('projects', 'categories'));
      // Užkrauna resources/views/pages/projects.blade.php
      // Persiunčia $projects kintamojo duomenis į vaizdą, pavadinimu $projects
    }

    public function view($slug) { // atvaizduos viena irasa

                 // Project::find($id); // SELECT * FROM projects WHERE id = 5
      // $project = Project::findOrFail($id); // Daro tą patį, bet jei neranda įrašo išmeta ModelNotFoundException klaidą (atidaro 404 puslapį)
      $project = Project::where('slug', $slug)->first();


      return view('pages/project', ['project' => $project]);
    }
}
