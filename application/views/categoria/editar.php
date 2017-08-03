<div class="container">
    <h1>Atualização de Categorias</h1>
    <br>

    <form action="<?php echo base_url() ?>categoria/editar_salvar" method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $categoria[0]->cat_codigo?>">
        <div class="input-group col-md-12">
            <label for="cat_nome">Nome da Categoria</label>
            <input type="text" class="form-control col-md-12" name="cat_nome" id="cat_nome" placeholder="Nome da Categoria" value="<?php echo $categoria[0]->cat_nome ?>">
        </div>

        <br>

        <div class="pull-right action">
            <button class="btn btn-success">Salvar</button>
        </div>

        <div class="pull-right action">
            <a href="<?php echo base_url() ?>categoria" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>