@extends('welcome')
@section('content')


<a href="/contas">contas</a>
<a href="/contas/create">Adicionar</a>

<hr>
<div class="row">

    <div class="col s12 m3 l2"> <!-- Note that "m4 l3" was added -->

        <div class="collection">

            <a href="/contas/" class="collection-item">item</a>
            <a href="/contas/" class="collection-item">item</a>
            <a href="/contas/" class="collection-item">item</a>
            <a href="/contas/" class="collection-item">item</a>
            <a href="/contas/" class="collection-item">item</a>

        </div>



    </div>



    <div class="row">


        <div class="col s8">@yield('contas')</div>
    </div>


</div>




@endsection