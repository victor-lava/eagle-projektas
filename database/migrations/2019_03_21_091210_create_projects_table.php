<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
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
            $table->string('kategorija');
            $table->timestamps(); // created_at ir updated_at TIMESTAMP
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
