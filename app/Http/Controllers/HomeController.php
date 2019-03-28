<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /* Logika */
    public function index() {

      return view('pages/home');
      // Atvaizduoja HTML kodą iš /resources/views/pages/home.blade.php
    }

}
