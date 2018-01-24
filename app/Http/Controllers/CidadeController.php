<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //header("Access-Control-Allow-Origin: *");
        //header("Access-Control-Allow-Headers: Content-Type");
        return Cidade::orderby('nome')->paginate(20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'nome'
            ])) {


                $dados = [
                'nome' => $request->input('nome')
                ];

                $city = Cidade::create($dados);
                return $city;

        }

        return json_encode(['errorMessage' => 'Não foi possível inserir os dados']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        return $cidade;
    }

    public function especialidade(int $cidade_id, int $especialidade_id)
    {
        /* var_dump($cidade_id);
        var_dump($especialidade_id); */
        return Cidade::find($cidade_id)->especialidade($especialidade_id);
    }

    public function especialidades(int $cidade_id)
    {
        /* var_dump($cidade_id); */
        //header("Access-Control-Allow-Origin: *");
        //header("Access-Control-Allow-Headers: Content-Type");

        return Cidade::find($cidade_id)->especialidades();
    }

    public function profissionais(int $cidade_id)
    {
        /* var_dump($cidade_id); */
        return Cidade::find($cidade_id)->profissionais;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        //
    }
    
   
    
}
