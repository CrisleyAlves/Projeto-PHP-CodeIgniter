<div class="container">
    <h1>Listagem de Produtos</h1>
    <br>
    <a href="<?php echo base_url() ?>produto/form" class="pull-right btn btn-primary">Incluir</a>
    <br>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Status</th>
                <th>Categoria</th>
                <th>Gerenciar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($produto as $pro) { ?>

                <tr>
                    <td><?php echo $pro->pro_codigo ?></td>
                    <td><?php echo $pro->pro_nome ?></td>
                    <td><?php echo $pro->pro_descricao ?></td>
                    <td><?php echo $pro->pro_valor ?></td>
                    <td><?php echo $pro->pro_status ?></td>
                    <td><?php echo $pro->categoria ?></td>

                    <td>
                        <a href="<?php echo base_url('produto/deletar/' . $pro->pro_codigo) ?>" onclick="confirm('Deseja realmente excluir o produto?");>
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        &nbsp
                        <a href="<?php echo base_url('produto/editar/' . $pro->pro_codigo) ?>">
                            <span class="glyphicon glyphicon glyphicon-cog"></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>