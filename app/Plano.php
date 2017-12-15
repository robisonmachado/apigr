<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $table = 'planos';

    protected $fillable = ['nome'];

    public function profissionais(){
        return $this->belongsToMany('App\Profissional');
    }

}
