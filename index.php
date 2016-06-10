<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modal</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css/font-awesome.min.css">
	<style>
		.fa{
			display: inline;
		}
	</style>
</head>
<body>



	<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal"><span arial-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>

    <div class="modal-header"><h4 class="modal-tittle" id="MyModalLabel">Mi titulo</h4></div>
    modal grande
      ...
      	<div class="row">
      		

				<div class="col-lg-11">
					
 <!-- formulario de actualizacion de clientes -->

                  <form id="form" name="form" novalidate class="form-horizontal form-label-left">

                    <div class="form-group">

                      <label class="control-label col-md-1 col-xs-12" for="fecha">Fecha
                      </label>
                      <div class="col-md-3 col-xs-12">
                        <input type="text" id="fecha" name="fecha" required="required" value="<?php date_default_timezone_set('America/Bogota');echo date("Y-m-d H:i:s");?>" readonly="readonly" class="form-control col-md-3 col-xs-12 has-feedback-left">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>

                       <label class="control-label col-md-1 col-xs-12" for="ip">IP
                      </label>
                      <div class="col-md-3 col-xs-12">
                        <input type="text" id="ip" name="ip" required="required" value="<?php echo $_SERVER['REMOTE_ADDR'];?>" readonly="readonly" class="form-control col-md-3 col-xs-12 has-feedback-left">
                        <span class="fa fa-cloud form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <label class="control-label col-md-1 col-xs-12" for="navegador">Navegador
                      </label>
                      <div class="col-md-3 col-xs-12">
                        <input type="text" id="navegador" name="navegador" value="<?php echo $_SERVER['HTTP_USER_AGENT'];?>" readonly="readonly" required="required" class="form-control col-md-3 col-xs-12 has-feedback-left">
                        <span class="fa fa-desktop form-control-feedback left" aria-hidden="true"></span>
                      </div>
                   </div>


					<div class="modal-footer">
						                  <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">username
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="username" name="username" data-parsley-minlength="5" placeholder="Satel Importadores / Pepito Pérez" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left">
                        
                      </div>
                   </div>
						
					</div>




                   
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5 col-xs-offset-3">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        
                      </div>
                    </div>
                    

                            
           </form>
           
                        

                <!-- formulario de actualizacion de clientes -->

				</div>

      	</div>
    </div>
  </div>
</div>

<i class="fa fa-refresh fa-spin"></i>
<span class="result">aaa</span>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>