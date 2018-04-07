<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //

    protected $fillable = ['title','description','start','price','finish','categoria_id','consultor_id','endereco_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'cursos';

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function consultor(){
        return $this->belongsTo(Consultor::class);
    }

    public function endereco(){
        return $this->belongsTo(Endereco::class);
    }
}
