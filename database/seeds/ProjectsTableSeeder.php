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

      $project = new Project; // modelio Project iškvietimas
      $project->title = 'Web & graphic design company';
      $project->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      $project->year = 2015;
      $project->client = 'Google';
      $project->image_url = 'http://lorempixel.com/400/400/sports/';
      $project->kategorija = 'creative';
      $project->save();

    }
}
