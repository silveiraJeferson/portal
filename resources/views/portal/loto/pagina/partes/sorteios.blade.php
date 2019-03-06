<div class="card-content grey lighten-4">
    <div id="test4">
        <div class="row">
            1
        </div>
    </div>
    <div id="test5">
        <div class="row">
            <form method="POST" action="/sorteio" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="jogo" value="{{$jogo->id}}">
                
                    <input class="" type="file" name="arquivo"><br>
                
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <div id="test6">
        <div class="row">
            3
        </div>
    </div>
</div>