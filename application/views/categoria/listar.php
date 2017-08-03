<div class="container">
	<h1 class="col-md-10">Listagem de Categorias</h1>
	<br>
        <a href="<?php echo base_url()?>categoria/incluir" class="pull-right btn btn-primary">Incluir</a>
	<br>
	  <!-- Table -->
	  <table class="table">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Gerenciar</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($categoria as $cat){?>

			<tr>
				<td><?php echo $cat->cat_codigo ?></td>
				<td><?php echo $cat->cat_nome?></td>

				<td>
					<a href="<?php echo base_url('categoria/deletar/'.$cat->cat_codigo)?>" onclick="confirm('Deseja realmente excluir o procedimento?");>
						<span class="glyphicon glyphicon-trash"></span>
					</a>
					&nbsp
					<a href="<?php echo base_url('categoria/editar/'.$cat->cat_codigo)?>">
						<span class="glyphicon glyphicon glyphicon-cog"></span>
					</a>
				</td>
			</tr>
			<?php }?>
		</tbody>
	  </table>
</div>