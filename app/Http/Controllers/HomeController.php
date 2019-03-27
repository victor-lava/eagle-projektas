<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
      return view('welcome'); // Atvaizduoja HTML kodą iš /resources/views/welcome.blade.php
    }

}
