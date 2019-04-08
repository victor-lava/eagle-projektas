<?php
/*
1. Susikurti seederi
php artisan make:seeder ProjectsTableSeeder
2. Susikurti Eloquent modelį per kurį galėsite pasiekti duomenų bazę
php artisan make:model Project
3. Nueiti ProjectsTableSeeder failiuką ir įsidėti modelį
use App\Project;
4. Naudojant Eloquent biblioteką įdėti įrašą run() metode:
$project = new Project;
$project->title = 'Antraste';
$project->save();
5. Susirasti DatabaseSeeder.php failiuką ir ten išsikviesti katik apsirašytą seederį.
$this->call(ProjectsTableSeeder::class);
6. Iškviesti seederį terminale su komanda
php artisan db:seed

*/
// require_once ""; // Nenaudojame require_once laravelyje

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /* https://laravel.com/docs/5.8/eloquent */
      /* Laravelyje "plain" SQL praktiškai nenaudojame,
         naudojame Eloquent biblioteką */

      /* Kad galėtume dirbti su Eloquent reikia turėti modelį */
      for ($i=0; $i < 10; $i++) {
        $faker = Faker\Factory::create('lt_LT');

        $categories = ['creative', 'natural', 'personal', 'photography'];

        $project = new Project; // modelio Project iškvietimas
        $project->title = $faker->realText(30);
        $project->description = $faker->realText(600);
        $project->year = $faker->biasedNumberBetween(2000, 2019);
        $project->client = $faker->company();
        $project->image_url = $faker->imageUrl(380, 400, 'nature');
        $project->kategorija = 1;
        $project->save();
      }

    }
}
