

<div class="container">
	<h1>Cadastro de Banners</h1>
	<br>
        <?php echo form_open_multipart('banner/salvar');?>

		<div class="input-group col-md-12">
			<label for="ban_descricao">Descrição do Banner</label>
			<input type="text" class="form-control col-md-12" name="ban_descricao" id="ban_descricao" placeholder="Descrição do Banner" value="">
		</div>

		<br>
                
                <div class="input-group col-md-12">
			<label for="ban_data_inicio">Data Inicio</label>
			<input type="date" class="form-control col-md-12" name="ban_data_inicio" id="ban_data_inicio">
		</div>

		<br>
                
                <div class="input-group col-md-12">
			<label for="ban_data_fim">Data Fim</label>
			<input type="date" class="form-control col-md-12" name="ban_data_fim" id="ban_data_fim">
		</div>
                
		 <br>
                
                <div class="input-group col-md-12">
			<label for="ban_nome">Foto do Produto</label>
			<input type="file" class="" name="ban_nome" id="ban_nome">
		</div>
                

		<div class="pull-right action">
			<button class="btn btn-success">Salvar</button>
		</div>

		<div class="pull-right action">
			<a href="<?php echo base_url()?>banner" class="btn btn-danger">Voltar</a>
		</div>
	</form>
</div>