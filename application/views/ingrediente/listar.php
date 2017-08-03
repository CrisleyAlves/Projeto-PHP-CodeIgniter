<div class="container">
	<h1 class="col-md-10">Listagem de Ingredientes</h1>
	<br>
        <a href="<?php echo base_url()?>ingrediente/incluir" class="pull-right btn btn-primary">Incluir</a>
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
			<?php foreach ($ingrediente as $ing){?>

			<tr>
				<td><?php echo $ing->ing_codigo ?></td>
				<td><?php echo $ing->ing_nome?></td>

				<td>
					<a href="<?php echo base_url('ingrediente/deletar/'.$ing->ing_codigo)?>" onclick="confirm('Deseja realmente excluir o procedimento?");>
						<span class="glyphicon glyphicon-trash"></span>
					</a>
					&nbsp
					<a href="<?php echo base_url('ingrediente/editar/'.$ing->ing_codigo)?>">
						<span class="glyphicon glyphicon glyphicon-cog"></span>
					</a>
				</td>
			</tr>
			<?php }?>
		</tbody>
	  </table>
</div>