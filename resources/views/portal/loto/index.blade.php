@extends('welcome')
@section('content')
<div class="card ">
    <div class="card-content">
        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
    </div>
    <div class="card-tabs">
        <ul class="tabs tabs-fixed-width">
            <li class="tab"><a href="#test4">Jogos Cadastrados</a></li>
            <li class="tab"><a class="" href="#test5">Adicionar Tipo de Jogo</a></li>
            <li class="tab"><a href="#test6">Test 3</a></li>
        </ul>
    </div>



    <div class="card-content grey lighten-4">
        <div id="test4">
            <div class="row">
                @forelse($jogos as $jogo)
                <div class="collection col m6 card">
                    <a href="#!" class="collection-item">{{$jogo->nome}}</a>                
                </div>
                @empty
                <p>Nenhum jogo cadastrado</p>
                @endforelse
            </div>
        </div>
        <div id="test5">
            <div class="row">
                <form method="POST" action="/loto"class="col s12">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="nome"id="nome" type="text" class="validate">
                            <label for="Nome">Nome</label>
                        </div>
                    </div>
                    <!--                    ------------------------------------------------------------->
                    <div class="input-field col s6">
                        <select name="qdt_sorteados">
                            <option value="" disabled selected>Selecione...</option>
                            @foreach(range(6,25) as $i)
                            <option value="{{$i}}">{{$i}} números</option>
                            @endforeach                            
                        </select>
                        <label>Quantidade de n° sorteados</label>
                    </div>




                    <div class="input-field col s6">
                        <select name="num_possiveis">
                            <option value="" disabled selected>Selecione...</option>
                            @foreach(range(1,60) as $i)
                            <option value="{{$i}}">{{$i}}</option>
                            @endforeach                            
                        </select>
                        <label>Números para apostar</label>
                    </div>   
                    <input type="submit" class="waves-effect waves-light btn-small"/>
                </form>
            </div>

        </div>
        <div id="test6">Test 3</div>
    </div>

</div>


@endsection