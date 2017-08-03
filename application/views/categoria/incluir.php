<div class="container">
	<h1>Cadastro de Categorias</h1>
	<br>

	<form action="<?php echo base_url()?>categoria/salvar" method="POST" class="teste">

		<div class="row">
			<div class="col-md-12">
				<div class="input-group col-md-12">
					<label for="cat_nome">Nome da Categoria</label>
					<input type="text" class="form-control col-md-12" name="cat_nome" id="cat_nome" placeholder="Nome da Categoria">
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
					<a href="<?php echo base_url()?>categoria" class="btn btn-danger">Cancelar</a>
				</div>
			</div>
		</div>
	</form>
</div>