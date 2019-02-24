@extends('welcome')
@section('content')

<div class="row">
    <a href="/gestao">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Gestão</span>
                    <p>Sistema pessoal de gestão financeira.</p>
                </div>

            </div>
        </div>
    </a>


    <a href="/loto">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Loto</span>
                    <p>Sistema de gerenciamento de jogos.</p>
                </div>

            </div>
        </div>
    </a>




    <a href="#">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Outros</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>

            </div>
        </div>
    </a>
</div>
@endsection