<div class="container">
    <h1>Listagem de Notícias</h1>
    <br>
    <a href="<?php echo base_url() ?>noticia/incluir" class="pull-right btn btn-primary">Incluir</a>
    <br>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Imagem</th>
                <th>Data</th>
                <th>Categoria</th>
                <th>Gerenciar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($noticia as $not) { ?>

                <tr>
                    <td><?php echo $not->not_codigo ?></td>
                    <td><?php echo $not->not_titulo ?></td>
                    <td><?php echo substr($not->not_texto, 0, 200); ?></td>
                    <td><img src="<?php echo base_url()?>uploads/noticia/<?php echo $not->not_imagem?>" style="width: 200px;"/></td>
                    <td><?php echo $not->not_data ?></td>
                    <td><?php echo $not->cat_nome ?></td>

                    <td>
                        <a href="<?php echo base_url('noticia/deletar/' . $not->not_codigo) ?>" onclick="confirm('Deseja realmente excluir o produto?");>
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        &nbsp
                        <a href="<?php echo base_url('noticia/editar/' . $not->not_codigo) ?>">
                            <span class="glyphicon glyphicon glyphicon-cog"></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>