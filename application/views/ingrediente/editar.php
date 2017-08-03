<div class="container">
    <h1>Atualização de Ingrediente</h1>
    <br>

    <form action="<?php echo base_url() ?>ingrediente/editar_salvar" method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $ingrediente[0]->ing_codigo?>">
        <div class="input-group col-md-12">
            <label for="ing_nome">Nome do Ingrediente</label>
            <input type="text" class="form-control col-md-12" name="ing_nome" id="ing_nome" placeholder="Nome do Ingrediente" value="<?php echo $ingrediente[0]->ing_nome ?>">
        </div>

        <br>

        <div class="pull-right action">
            <button class="btn btn-success">Salvar</button>
        </div>

        <div class="pull-right action">
            <a href="<?php echo base_url() ?>ingrediente" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>