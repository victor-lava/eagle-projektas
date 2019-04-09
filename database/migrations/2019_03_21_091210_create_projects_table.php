<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /*
    1. Migracijų lentelių sukūrimas:
    php artisan make:migration $veiksmas_lenteles_pav_daugiskaita_table $nustatymai

	php artisan make:migration create_projects_table (sukuria migracijų failą, kuris vėliau sukurs lentelę pavadinimų projects)

	php artisan make:migration create_projects_table --create=projects (sukuria migracijų faila su pavadinimu create_projects_table, create nustatymas reiškia, jog kuriame naują lentelę)

	php artisan make:migration added_title_to_projects_table --table=projects (table nustatymas naudojamas koreguojant lentelę)

	php artisan migrate (paleidžia migracijų lenteles, paleidžia tik up() lentelėse)

	php artisan migrate:fresh (paleidžia ir up() ir down() metodus lentelėse)
    */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            // title, description, year, client, image, kategorija
            $table->bigIncrements('id'); // sukuria id stuleplį su bigint tipu, uždeda, jog jis yra "primary", uždeda auto_increment
            $table->string('title'); // varchar
            $table->text('description'); // text
            $table->integer('year'); // int
            $table->string('client');
            $table->string('image_url');
            $table->unsignedBigInteger('kategorija')->nullable(); // teigiami sveikiejie skaiciai
            $table->timestamps(); // created_at ir updated_at TIMESTAMP
            $table->softDeletes();

            // foreign šioje lentelėje esantis stulpelis, references - kitoje lentelėje esantis stulpelis, on - kitos lentelės pavadinimas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
