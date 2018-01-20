<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = 'profissionais';

    protected $fillable = [
        'nome', 
        'especialidade_id',
        'cidade_id',
        'bairro',
        'endereco', 
        'telefone1',
        'telefone2',
        'whatsapp',
        'email',
        'foto'
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
