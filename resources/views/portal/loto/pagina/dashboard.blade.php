@extends('portal.loto.index')
@section('loteria')
<?php $jogo = session()->get('loteria'); ?>

<ul class="collapsible">
    <li>
        <div class="collapsible-header"><i class="material-icons">monetization_on</i>{{$jogo->nome}}</div>
        <div class="collapsible-body"><span>{{$jogo->instrucao}}</span></div>
    </li>
</ul>
<div class="row">

    <div class="col s4 ">
        Últimos sorteios        
        <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
                <li class="tab"><a href="#test4">Sorteios</a></li>
                <li class="tab"><a class="" href="#test5">Atualizar</a></li>
                <li class="tab"><a href="#test6">Digitar</a></li>
            </ul>
        </div>
    </div>
    <div class="col s4 center-align">
        Números 
    </div>
    <div class="col s4 right-align">
        Apostas
    </div>
</div>


@include('portal.loto.pagina.partes.sorteios')

@endsection