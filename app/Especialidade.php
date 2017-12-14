<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $table = 'especialidades';

    protected $fillable = ['nome'];
    
    public function profissionais(){
        return $this->hasMany('App\Profissional');
    }
}
