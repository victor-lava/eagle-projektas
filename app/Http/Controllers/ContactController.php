<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    /* Atvaizduojame formą, HTML kodą */
    public function index() {

        return view('pages/contact');
    }


    /* Validuoja ir išsaugo duomenis */
    public function save(Request $request) {

      dd($request);
      /* $request yra arba $_POST arba $_GET */

      /* 1. Pagauti duomenis iš $_POST */
      /* 2. Validuoti pagautus duomenis */
      /* 3. Jei nevaliduota rodyti klaidas */
      /* 3. Jei validuota įkelti duomenis ir duosime žinutę "Su jumis susisieksime"... */

      // echo 'veikia';

    }
}
