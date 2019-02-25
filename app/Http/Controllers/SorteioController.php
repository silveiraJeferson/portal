<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;

class SorteioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $meuArray = Array();
        $file = fopen($request['arquivo'], 'r');
        var_dump($file);
        while (($line = fgetcsv($file)) !== false) {
            $meuArray[] = $line;
        }
        fclose($file);

        $ganhadores = [];
        for ($i = 0; $i < count($meuArray); $i++) {
            $jogo = [];
            $jogo['concurso'] = $meuArray[$i][0];
            $jogo['data'] = $meuArray[$i][1];
            $dezenas = [];
            for ($j = 2; $j < count($meuArray[$i]); $j++) {

                $dezenas[] = $meuArray[$i][$j];
            }

            $jogo['dezenas'] = $dezenas;
            $ganhadores[] = $jogo;
        }
        session()->put('sorteios', $ganhadores);
        
        return redirect('/painel');
          
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
