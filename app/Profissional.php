<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = 'profissionais';

    protected $fillable = [
        'nome', 
        'especialidade_id', 
        'endereco', 
        'telefone1',
        'telefone2',
        'whatsapp',
        'email',
        'cidade_id'
    ];

    public function especialidade(){
        return $this->belongsTo('App\Especialidade');
    }

    public function cidade(){
        return $this->belongsTo ('App\Cidade');
    }


    public function planos(){
        return $this->belongsToMany('App\Plano');
    }

    
    
}
