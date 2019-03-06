@extends('portal.gestao.index')
@section('contas')

<h5>Adicionar Contas</h5>
<div class="row ">
    
    <form method="post" action="/contas" class="col s12">
        <div class="row">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="visible" value="<?php echo true; ?>">
            <div class="input-field col s12">
                <input id="descricao" name="descricao" type="text" class="">
                <label for="descricao">Descrição</label>
            </div>
            <div class="input-field col s12">
                <input id="valor" name="valor" type="number" class="">
                <label for="valor">Valor</label>
            </div>
            <div class="input-field col s12">
                <input id="parcelas" name="parcelas" type="number" class="">
                <label for="parcelas">Parcelas</label>
            </div>
            <div class="input-field col s12">
                <input id="vencimento" name="vencimento" type="number" class="">
                <label for="vencimento">Vencimento</label>
            </div>
            
            <input type="submit" class="btn col s12">
            
            
            
            
        </div>
            
        
    </form>
</div>


@endsection