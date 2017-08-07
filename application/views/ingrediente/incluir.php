<div class="container">
	<h1>Cadastro de Ingredientes</h1>
	<br>

	<form action="<?php echo base_url()?>ingrediente/salvar" method="POST" class="teste">

		<div class="row">
			<div class="col-md-12">
				<div class="input-group col-md-12">
					<label for="ing__nome">Nome do Ingrediente</label>
					<input type="text" class="form-control col-md-12" name="ing_nome" id="ing__nome" placeholder="Nome do Ingrediente">
				</div>
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col-md-5 pull-right">
				<div class="pull-right action">
					<button class="btn btn-success">Salvar</button>
				</div>

				<div class="pull-right action">
					<a href="<?php echo base_url()?>ingrediente" class="btn btn-danger">Cancelar</a>
				</div>
			</div>
		</div>
	</form>
</div>