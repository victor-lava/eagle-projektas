<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact;
        // Stulpeliai ir reikšmės, kairėje pusėje stulpelių pavadinimai, o dešinėje jų reikšmės
        $contact->full_name = 'Viktoras Lava';
        $contact->email = 'info@viktoraslava.lt';
        $contact->subject = 'Uzsakymas';
        $contact->message = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $contact->save();
    }
}
