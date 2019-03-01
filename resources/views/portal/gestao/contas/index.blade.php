<?php
if (session()->get('contas')) {
    $contas = session()->get('contas');
}
?>
@extends('welcome')
@section('content')
<a href="/contas">contas</a>
<a href="/contas/create">Adicionar</a>

<hr>

<div class="row">

    <div class="col s12 m3 l2"> <!-- Note that "m4 l3" was added -->

        <div class="collection">
            @forelse($contas as $conta)
            @if($conta->visible == true)
            <a href="/contas/{{$conta->id}}" class="collection-item">{{$conta->descricao}}</a>
            @endif
            @empty
            nada cadastrado
        </div>


        @endforelse
    </div>






</div>
<div class="row">


    <div class="col s8">@yield('conteudo')</div>
</div>

@include('portal.gestao.graficos.barras')
@endsection