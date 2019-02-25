<div class="collection">
    <a href="/painel" class="collection-item black-text">Ver sorteios</a>
    <a href="#!" class="collection-item black-text">Minhas Apostas</a>

    <ul class="collapsible">
        <li>
            <div class="collapsible-header">First</div>
            <div class="collapsible-body">
                
                    <form method="POST" action="/sorteio" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <label>Arquivo</label>
                        <input type="file" name="arquivo"><br><br>
                        <input type="submit" value="Enviar">
                    </form>
                
            </div>
        </li>
    </ul>

</div>

