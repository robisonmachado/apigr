<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Plano_Profissional extends Model
{
    protected $table = 'plano_profissional';
    
    protected $fillable = ['plano_id', 'profissional_id'];

    public function profissional(){
        return $this->belongsTo('App\Profissional');
    }

    public function plano(){
        return $this->belongsTo('App\Plano');
    }
    

}
