<?php

namespace App\Http\Controllers;

use App\Project; // Užkraunama klasė Project, kuri yra Eloquent Modelis
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() { // atvaizduos visus

      $projects = Project::all(); // Statinė klasė, panašiai į $project->all(); SELECT * FROM projects

      // dd($projects[2]->title); // die dump, atspausdina informacija ir sustabdo kodą einanti po šios komandos


      return view('pages/projects', ['projects' => $projects]);
      // Užkrauna resources/views/pages/projects.blade.php
      // Persiunčia $projects kintamojo duomenis į vaizdą, pavadinimu $projects
    }

    public function view() { // atvaizduos viena irasa

    }
}
