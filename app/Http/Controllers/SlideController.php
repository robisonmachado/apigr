<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        
        return Slide::all()->->paginate(20);
        /*
        return json_encode([
            [
                'descricao' => 'unimed-es',
                'url'=> "http://www.folhaiconha.com.br/wp-content/uploads/2017/09/unimede-sul-capixaba.jpg"
            ],
            [
                'descricao' => 'clinica_sao_joao',
                'url' => "http://revistacomunique.com.br/site/wp-content/uploads/2016/05/Saude-do-Coracao.jpg"
            ],
            [
                'descricao' => 'clinica_marataizes',
                'url'=> "http://divinews.com/wp-content/uploads/2017/08/vigilancia-saude.jpg"
            ],
            [
                'descricao' => 'clinica_piuma',
                'url' => "http://www.revistaapolice.com.br/wp-content/uploads/2016/08/14_-das-empresas-possuem-programas-de-gestão-em-saúde.jpg"
            ],
            [
                'url' => "http://www.saude.salvador.ba.gov.br/wp-content/uploads/2013/12/saude-para-voce-2-702x336.jpg"
            ],
            [
                'url' => "http://medicinarosario.com.br/wp-content/uploads/2016/05/plano-saude.jpg"
            ]            
            
        ]);
        */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
