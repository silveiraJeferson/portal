@extends('welcome')
@section('content')
<div class="row">
    
    <div class="col s12 m4 l2"><p>@include('portal.loto.pagina.funcionalidades')</p></div>
    <div class="col s12 m4 l8 red"><p>@yield('centro')</p></div>
    <div class="col s12 m4 l2 purple"><p>s12 m4</p></div>
</div>
<div class="row">
    <div class="col s12 m6 l3 green"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3 pink"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3 blue-grey"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3 yellow"><p>s12 m6 l3</p></div>
</div>

@endsection