<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct() {
      $this->middleware('auth'); // Gali patekti tik prisijungę
    }

    public function index() {

      // $contacts = Contact::all(); // Naudojame, kai reikia tiesiog gauti visus įrašus ir viskas.

      $contacts = Contact::orderBy('created_at', 'desc')->get(); // su get() metodu, galima atlikti daugiau veiksmų, pvz. surikiuoti įrašus.

      return view('/admin/index', ['contacts' => $contacts]);
    }



    /* Projektų sąrašas,
       projektų sukūrimo mygtukas */
}
