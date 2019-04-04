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

      $contacts = Contact::orderBy('created_at', 'desc')->get(); // su get() metodu, galima atlikti daugiau veiksmų, pvz. surikiuoti įrašus. Order by leidžia atlikti rikiavimos.
      // SELECT * FROM contacts ORDER BY created_at DESC

      return view('/admin/index', ['contacts' => $contacts]);
    }

    public function removeContact(Request $request) {


      $contact = Contact::findOrFail($request->id);
      $contact->delete(); // trina įrašą

      // Contact::destroy($request->id); // trina įrašą

      return redirect()->route('admin.index')
                        ->with('message', "Įrašas #$request->id sėkmingai ištrintas.");

    }



    /* Projektų sąrašas,
       projektų sukūrimo mygtukas */
}
