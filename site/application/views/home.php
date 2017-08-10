<div class="container">
    
    <ul class="bxslider">
        
        <?php
            
        foreach ($banner as $ban) {
            ?>
        <li>
                    <img src="<?php echo base_url() ?>../uploads/banners/<?php echo $ban->ban_nome; ?>" />
                </li>
            <?php
        }
        ?>
                

    </ul>
    
    
    <div class="col-md-12">
        <h2>Produtos</h2>
        <?php foreach ($produto as $pro) {
            ?>
        <div class="col-md-3" style="border: 1px solid #e6e6e6; margin-bottom: 20px; margin-right: 10px; padding-bottom: 10px;">
                    <h4><?php echo $pro->pro_nome;?></h4>
                    <img style="width: 200px; height: 200px;" src="<?php echo base_url() ?>../uploads/produtos/<?php echo $pro->pro_img; ?>" />
                    </br></br>
                    <a class="btn btn-warning" href="<?php echo base_url('carrinho/adicionarProdutoCarrinho/'.$pro->pro_codigo)?>">Adicionar Produto</a>
                </div>
        <?php }
                
            ?>
        
    </div>
</div>