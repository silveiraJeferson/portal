<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Conta;
use Khill\Lavacharts\Lavacharts;

class ContasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contas = Conta::all();
        $reasons = \Lava::DataTable();
        
        $reasons->addStringColumn('Reasons')
                ->addNumberColumn('Percent');       
        foreach ($contas as $conta){
            $result = [
                $conta->descricao , $conta ->valor
            ];
            $reasons->addRow($result);
        }
                
        foreach (range(0, count($contas)) as $i){
            $slice = ['offset' => 0.2];
        }
        \Lava::PieChart('IMDB', $reasons, [
            'title' => 'Contas',
            'is3D' => true,
            'slices' => [
                ['offset' => 0.2],
                ['offset' => 0.25],
                ['offset' => 0.2]
            ]
        ]);


        session()->put('contas', Conta::all());
        return view('portal.gestao.contas.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('portal.gestao.contas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $conta = new Conta($request->all());
        $conta->save();

        return redirect('/contas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $show = Conta::where('id', $id)->get();
        return view('portal.gestao.contas.show', compact('show'));
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

        Conta::where('id', $id)->update(['visible' => false]);
        return redirect('/contas');
    }

}
