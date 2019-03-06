<?php
if (session()->get('contas')) {
    $contas = session()->get('contas');
}
?>
@extends('portal.gestao.index')
@section('contas')
<a href="/contas">contas</a>
<a href="/contas/create">Adicionar</a>

<hr>



@include('portal.gestao.graficos.pizza')
@endsection