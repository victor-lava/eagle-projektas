<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

      /* Projektų sąrašas,
         projektų sukūrimo mygtukas */
      return view('/admin/index');
    }
}
