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
                                })->orderby('nome')->get();
    }

    function especialidade(int $especialidade_id){
        
        return Profissional::whereHas('cidade', function($query) use ($especialidade_id){
                                    $query->where('cidade_id', $this->id)
                                    ->where('especialidade_id', $especialidade_id);
                                })->orderby('nome')->get();
    }
    
    

}
