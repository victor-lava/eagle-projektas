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
        for ($i=0; $i < 20; $i++) {

          $faker = Faker\Factory::create('lt_LT');

          $contact = new Contact;
          // Stulpeliai ir reikšmės, kairėje pusėje stulpelių pavadinimai, o dešinėje jų reikšmės
          $contact->full_name = $faker->name;
          $contact->email = $faker->email;
          $contact->subject = 'Uzsakymas';
          $contact->message = $faker->realText(600);
          $contact->save();
          
        }
    }
}
