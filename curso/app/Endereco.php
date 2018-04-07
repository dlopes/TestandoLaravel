<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //

     public function Cursos(){
        return $this->hasMany(Curso::class);
    }
}
