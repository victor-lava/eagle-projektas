<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyProjectsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {

          $table->foreign('kategorija')
                ->references('id')
                ->on('projects_category');
                // ->onDelete('cascade'); // onDelete('cascade') reiškia, jog ištrins visus susietus įrašus, paprasčiausias sprendimas. 
                // Kitu atvėju naudoti softDelete
                // * https://laravel.com/docs/5.7/eloquent#soft-deleting

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
          $table->dropForeign('projects_kategorija_foreign');
        });
    }
}
