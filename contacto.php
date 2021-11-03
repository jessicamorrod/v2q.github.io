<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<?php include('php/scripts.php'); ?>

<script type="text/javascript" src="js/validacion.js"></script> 
<script type="text/javascript" src="js/md5.js"></script> 
<script type="text/javascript" src="js/jcap.js"></script>


</head>
<body>


<?php include('php/menu.php'); ?>

<br />

<div class="container ">
        	<div class="row justify-content-center">
            	<div class="col-md-7">
                	<form class="needs-validation" novalidate method="post" onSubmit="return validar(this)" id="form1" action="gracias.php">
	<input type="hidden" name="token" value="<?=$token?>" />
	   <div class="form-group">
	    <label for="validationCustom01"><strong><label style="color: #c9302c;">*</label> Nombre</strong></label>
	    <input name="name" type="text" class="form-control " id="name"  required >
        <div class="invalid-feedback">
        Proporcione su name 
        </div>
	   </div>        	
	  <div class="form-group">
	    <label for="validationCustom02"><strong><label style="color: #c9302c;">*</label> Correo electrónico</strong></label>
	    <input name="email" type="email" class="form-control" id="email"  required>
        <div class="invalid-feedback">
        Proporcione su correo electrónico 
        </div>
	  </div>
      <div class="form-group">
	    <label for="validationCustom03"><strong><label style="color: #c9302c;">*</label> Empresa</strong></label>
	    <input name="asunto" type="text" class="form-control" id="asunto" >
	   </div>          
	  <div class="form-group">
	    <label for="validationCustom03"><strong><label style="color: #c9302c;">*</label> Requerimientos</strong></label>
	    <textarea name="message" class="form-control" id="message" rows="3" required></textarea>
        <div class="invalid-feedback">
        Proporcione su mensaje 
        </div>
	  </div>
	  <script type="text/javascript">cimg()</script><br>
	  <div class="form-group">
	    <label for="validationCustom04"><strong><label style="color: #c9302c;">*</label> Proporcione el c&oacute;digo de la imagen</strong></label>
	    <input name="uword" type="text" class="form-control" id="uword"  required>
        <div class="invalid-feedback">
        Proporcione el codigo de la imagen 
        </div>
	   </div>
	   <label for="formGroupExampleInput" style="color: #c9302c;"><strong>* Datos obligatorios</strong></label><br>
<br>

	   <button type="submit"  >Enviar comentarios</button>
</form>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassname('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

		
		</div>
		</div>
	</div> 
</div>



<br />
<br />

<?php include('php/pie.php'); ?>


       
</body>
</html>
