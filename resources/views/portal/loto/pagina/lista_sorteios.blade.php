<?php
$sorteios = session()->get('sorteios');


?>
@extends('portal.loto.pagina.painel')
@section('centro')
<h5>Resultados</h5>
<div style="overflow:scroll;height:400px;width:100%;overflow:auto">    
    <table>
        <thead>
            <tr>
                <th>Concurso</th>
                <th>Data</th>
                <th>Números Sorteados</th>
            </tr>
        </thead>

        <tbody>
            @forelse($sorteios as $sorteio)
            <tr>
                <td>{{$sorteio['concurso']}}</td>
                <td>{{$sorteio['data']}}</td>
                    <?php sort($sorteio['dezenas'])?>
                <td>
                   @foreach($sorteio['dezenas'] as $dezena)
                    @if($dezena < 10)
                        0{{$dezena}} -
                    @else
                        {{$dezena}} -
                    @endif
                    
                   @endforeach
                </td>
            </tr>
            @empty
            
            @endforelse
            
        </tbody>
    </table>
</div>

@endsection