<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
        
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
        
</head>
<body>

<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="<?php echo base_url()?>login/logar">
                            
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="usu_email" type="email" class="form-control" name="usu_email" value="" placeholder="Email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="usu_senha" type="password" class="form-control" name="usu_senha" placeholder="Senha">
                                    </div>
                                    

                                
                                <div style="margin-top:10px" class="form-group">

                                    <div class="col-sm-12 controls">

                                        <input type="submit" value="Login" id="btn-login" class="btn btn-success">

                                    </div>
                                </div>


                                
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%; text-align: center;" >
                                            Todos os direitos reservados!
                                        </div>
                                    </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
         </div> 




<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

</body>
</html>    