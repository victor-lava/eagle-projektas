<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /* Logika */
    public function index() {

      $projects = Project::all();

      return view('pages/home', ['projects' => $projects]);
      // Atvaizduoja HTML kodą iš /resources/views/pages/home.blade.php
    }

}
