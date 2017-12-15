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
        return Especialidade::whereHas('profissionais', function($query){
                                    $query->where('cidade_id', $this->id);
                                })->get();
    }
    

}
