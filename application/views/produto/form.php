

<div class="container">
	<h1>Cadastro de Produtos</h1>
	<br>
        <?php echo form_open_multipart('produto/salvar');?>

		<div class="input-group col-md-12">
			<label for="pro_nome">Nome do Produto</label>
			<input type="text" class="form-control col-md-12" name="pro_nome" id="pro_nome" placeholder="Nome do Produto" value="">
		</div>

		<br>
                
                <div class="input-group col-md-12">
			<label for="pro_descricao">Descrição do Produto</label>
			<input type="text" class="form-control col-md-12" name="pro_descricao" id="pro_descricao" placeholder="Nome do Produto" value="">
		</div>
                
                <br>
                
                <div class="input-group col-md-12">
			<label for="pro_img">Foto do Produto</label>
			<input type="file" class="" name="pro_img" id="pro_img">
		</div>
                
                <br>

		<div class="input-group col-md-12">
			<label for="pro_valor">Valor</label>
			<input type="text" class="form-control col-md-12" name="pro_valor" id="pro_valor" placeholder="Valor do Produto" value="">
		</div>

		<br>

		<div class="input-group col-md-12">
			<label for="categoria">Categoria</label>
			<select name="categoria" class="form-control">
				<?php 
				foreach ($categoria as $cat) {
				?>
					<option value="<?php echo $cat->cat_codigo ?>"><?php echo $cat->cat_nome ?></option>
				<?php

				}
				 ?>
			</select>
		</div>

		<br>
                
                <div class="input-group col-md-12">
			<label for="pro_status">Status</label>
			<select name="pro_status" class="form-control">
				<option value="A">Ativo</option>
                                <option value="D">Desativado</option>
			</select>
		</div>
                
		<br>

		<div class="pull-right action">
			<button class="btn btn-success">Salvar</button>
		</div>

		<div class="pull-right action">
			<a href="<?php echo base_url()?>categoria" class="btn btn-danger">Voltar</a>
		</div>
	</form>
</div>