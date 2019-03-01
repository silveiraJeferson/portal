@extends('portal.gestao.contas.index')
@section('conteudo')


<table>
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Parcelas</th>
            <th>Dia do vencimento</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$show[0]->descricao}}</td>
            <td>{{$show[0]->valor}}</td>
            <td>{{$show[0]->parcelas}}</td>
            <td>{{$show[0]->vencimento}}</td>
            <td><a href="#"><i class="material-icons blue-text tooltipped" data-position="top" data-tooltip="Editar">edit</i></a></td>
            <td><a class="modal-trigger" href="#modal1"><i class="material-icons red-text tooltipped" data-position="top" data-tooltip="Excluir">delete</i></a></td>
        </tr>


    </tbody>
</table>

@endsection
<!-- Modal Structure -->
<div id="modal1" class="modal  modal-fixed-footer">
    <div class="modal-content">
        <h4>Alerta</h4>
        <p>Deseja realmente excluir?</p>
    </div>
    <div class="modal-footer">
        


        <form action="{{ route('contas.destroy', $show[0]->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button  class="a modal-close waves-effect waves-green btn-flat red white-text">Delete User</button>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
        </form>




    </div>
</div>