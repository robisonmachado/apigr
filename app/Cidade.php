<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nome'];

    public function profissionais(){
        return $this->hasMany('App\Profissional');
    }

    function especialidades(){
        //return $this->hasManyThrough('App\Especialidade', 'App\Profissional');
        return $this->with( ['profissionais', 'profissionais.especialidade'] )->get();
    }

}
