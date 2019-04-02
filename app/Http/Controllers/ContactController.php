<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

  // Jei siunčiate duomenis:
  //     1. Naudoti POST metodą būtinai apsirašant HTML formą. Pvz. method="POST"
  //     2. Formoje turi būti CSRF laukelis, iškviečiamas su csrf_field() komanda. Skirtas apsisaugoti nuo CSRF atakų.
  //     3. Routas aprašytas turi būti su post metodu, pvz. Route::post()
  //     4. Routo metode (pvz. ContactController@save) išsikviesti duomenis. Pvz.   public function save(Request $request) {}
  //     * - nepamiršti, jog HTML formos input laukeliai privalo turėti atribūtą name

    /* Atvaizduojame formą, HTML kodą */
    public function index() {
        return view('pages/contact');
    }

    /* Validuoja ir išsaugo duomenis */
    public function save(Request $request) {

      // dd($request);

      // Validate validuoja gautus duomenis
      // Laukelius ir validacijos taisykles surašome asociatyviniame masyve
      $request->validate([
        'name' => 'required|alpha|max:20', // privalomas ir tik string (neleis skaiciu)
        'email' => 'required|email',
        'phone' => 'regex:/^[+0-9. ()-]*$/ui',
        'subject' => 'required|max:255',
        'message' => 'required|max:500'
      ], [ // klaidų taisyklių ir žinučių masyvas
        'required' => 'Laukelis :attribute yra privalomas.', // bendra klaidos žinute, taisyklei required,
        'max' => 'Laukelis :attribute viršija maksimalų simbolių skaičių (:max)',
        'phone.regex' => "Blogai suvedėte telefono numerį, priimtinas formatas yra +370 63 1111 66"
      ]);

      // 1. Jei forma nevaliduota, tai apačioje esantis kodas nebevyksta. Vartotojas grąžinamas atgal ir jam atsiunčiamas globalus kintamasis $errors, kuris viduje turi klaidų žinutes.

      // 2. Jei forma validuota, tai kodas keliauja žemyn. Mes išsaugome duomenis.


      // dd('asdqweqwe');
      /* Kairėje lygybės pusėje yra duomenų lentelės struktūra, o dešinėje duomenys iš $_POST arba $_GET masyvo, <input name="email"> */
      $contact = new Contact();
      $contact->full_name = $request->name;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->message = $request->message;
      $contact->save();

      return redirect()->route('contact')->with('message', 'Jūsų duomenys sėkmingai gauti, susisieksime su jumis per 24h.');
      /* Nukreipia į routą, kurio vardas "contact", taisyklė with persiunčia žinutę sesijoje ir sesija galioja tik vieną kartą (vieną užklausą, one request). Veikia panašiai kaip:

      header('Location: http://google.com');
      exit;
      */

      // return view('pages/success');

      // dd('ssdfwer');

      /* $request yra arba $_POST arba $_GET */

      /* 1. Pagauti duomenis iš $_POST */
      /* 2. Validuoti pagautus duomenis */
      /* 3. Jei nevaliduota rodyti klaidas */
      /* 3. Jei validuota įkelti duomenis ir duosime žinutę "Su jumis susisieksime"... */

      // echo 'veikia';

    }
}
