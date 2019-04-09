<?php

namespace App; // Galima isivaizduoti kaip folderį, kuriame yra Project klasė
// šitos klasės kelias yra App\Project
// Šitą klasę galima įsikelti su taisykle
// use App\Project

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function category() {
      // Relationship (one to one)
      // Vienas projektas turi vieną kategoriją
      return $this->hasOne('App\Category', 'id', 'kategorija');

    }
}
