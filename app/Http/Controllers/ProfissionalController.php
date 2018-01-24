<?php

namespace App\Http\Controllers;

use App\Profissional;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Profissional::orderby('nome')->paginate(20);
    }

    public function planos(int $profissional_id)
    {
        return json_encode( Profissional::find($profissional_id)->planos()->orderby('nome')->get() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->filled([
            'nome', 
            'cidade_id', 
            'especialidade_id', 
            'bairro', 
            'endereco', 
            'telefone1'
            ])) {


                $dados = [
                'nome' => $request->input('nome'),
                'cidade_id' =>  $request->input('cidade_id'),
                'especialidade_id' =>  $request->input('especialidade_id'),
                'bairro' => $request->input('bairro'),
                'endereco' => $request->input('endereco'),
                'telefone1' => $request->input('telefone1'),
                'telefone2' => $request->input('telefone2'),
                'whatsapp' => $request->input('whatsapp'),
                'email' => $request->input('email'),
                'foto' => $request->input('foto')
                ];


                $profissional = Profissional::create($dados);


                if( $request->filled('planos') ){
                    $profissional->planos()->sync($request->input('planos'));    
                }
                 


                return $profissional;

        }

        return json_encode(['errorMessage' => 'Não foi possível inserir os dados']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profissional  $profissional
     * @return \Illuminate\Http\Response
     */
    public function show(Profissional $profissional)
    {
        return $profissional;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profissional  $profissional
     * @return \Illuminate\Http\Response
     */
    public function edit(Profissional $profissional)
    {
        //
    }

    public function adicionarPlanos(Request $request)
    {
        if ( $request->filled(['profissional_id','planos']) ) {
            $profissional_id = $request->input('profissional_id');
            $planos = $request->input('planos');

            $profissional = profissional::find($profissional_id);
            $profissional->planos()->sync($planos); 

            return $profissional->planos;

        }

        
        return ['errorMessage' => 'Não foi possível inserir os dados'];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profissional  $profissional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profissional $profissional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profissional  $profissional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profissional $profissional)
    {
        //
    }
}
