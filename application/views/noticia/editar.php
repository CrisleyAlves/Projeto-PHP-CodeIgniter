

<div class="container">
	<h1>Cadastro de Notícias</h1>
	<br>
        <?php echo form_open_multipart('noticia/editar_salvar');?>
        
                <input type="hidden" name="id" id="id" value="<?php echo $noticia[0]->not_codigo?>">
		<div class="input-group col-md-12">
			<label for="not_titulo">Título da notícia</label>
			<input type="text" class="form-control col-md-12" name="not_titulo" id="not_titulo" placeholder="Título" value="<?php echo $noticia[0]->not_titulo ?>">
		</div>

		<br>
                
                <div class="input-group col-md-12">
                    <label for="not_texto" class="">Texto da notícia</label>
                    <br>
                    <textarea name="not_texto" id="not_texto" class="summernote" value="<?php echo $noticia[0]->not_texto ?>"></textarea>
		</div>
                
                <div class="input-group col-md-12">
			<label for="not_imagem">Imagem da notícia</label>
			<input type="file" class="" name="not_imagem" id="not_imagem">
		</div>
                
                <br>
                
                <div class="input-group col-md-12">
			<label for="not_data">Data de Postagem</label>
			<input type="date" class="form-control col-md-12" name="not_data" id="not_data" value="<?php echo $noticia[0]->not_data ?>">
		</div>
                
                <br>

		<div class="input-group col-md-12">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
                        <?php
                        foreach ($categorias as $cat) {
                            if ($cat->cat_codigo != $noticia[0]->categoria) {
                                ?>
                                    <option value="<?php echo $cat->cat_codigo ?>"><?php echo $cat->cat_nome ?></option>
                                <?php
                            } else {
                                ?>
                                    <option value="<?php echo $cat->cat_codigo ?>" selected><?php echo $cat->cat_nome ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>

		<br>

		<div class="pull-right action">
			<button class="btn btn-success">Salvar</button>
		</div>

		<div class="pull-right action">
			<a href="<?php echo base_url()?>categoria" class="btn btn-danger summer-save-text">Voltar</a>
		</div>
	</form>
</div>