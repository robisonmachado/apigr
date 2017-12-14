<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano_Profissional extends Model
{
    protected $table = 'plano_profissional';
    
    public function profissional(){
        return $this->hasOne('App\Profissional');
    }

    public function plano(){
        return $this->hasOne('App\Plano');
    }

}
