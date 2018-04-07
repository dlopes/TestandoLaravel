<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultor extends Model
{
    //
     public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
