<div class="container">
	<h1 class="col-md-10">Listagem de Banners</h1>
	<br>
        <a href="<?php echo base_url()?>banner/incluir" class="pull-right btn btn-primary">Incluir</a>
	<br>
	  <!-- Table -->
	  <table class="table">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nome</th>
                                <th>Descrição</th>
                                <th>Inicio</th>
                                <th>Fim</th>
				<th>Gerenciar</th>
			</tr>
		</thead>
                
                <tbody>
			<?php foreach ($banner as $ban){?>

			<tr>
				<td><?php echo $ban->ban_codigo ?></td>
                                <td><img src="<?php echo base_url()?>uploads/banners/<?php echo $ban->ban_nome?>" style="width: 100px;"/></td>
                                <td><?php echo $ban->ban_descricao?></td>
                                <td><?php echo $ban->ban_data_inicio?></td>
                                <td><?php echo $ban->ban_data_fim?></td>

				<td>
					<a href="<?php echo base_url('banner/deletar/'.$ban->ban_codigo)?>" onclick= confirm('Deseja realmente excluir o procedimento?");>
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
			<?php }?>
		</tbody>
	  </table>
</div>