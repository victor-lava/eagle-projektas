<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

  // Jei siunčiate duomenis:
  //     1. Naudoti POST metodą būtinai apsirašant HTML formą. Pvz. method="POST"
  //     2. Formoje turi būti CSRF laukelis, iškviečiamas su csrf_field() komanda. Skirtas apsisaugoti nuo CSRF atakų.
  //     3. Routas aprašytas turi būti su post metodu, pvz. Route::post()
  //     4. Routo metode (pvz. ContactController@save) išsikviesti duomenis. Pvz.   public function save(Request $request) {}
  //     * - nepamiršti, jog HTML formos input laukeliai privalo turėti atribūtą name
  //

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
