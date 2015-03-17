<script type="text/javascript">
$(document).ready(function() {
	$("body").ezBgResize({
		img : "<?=base_url()?>images/fondo.jpg", // Relative path example.  You could also use an absolute url (http://...).
		opacity : 0.8, // Opacity. 1 = 100%.  This is optional.
		center  : true // Boolean (true or false). This is optional. Default is true.
	});
});

</script>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js'></script>
<script type="text/javascript" src="<?=base_url()?>js/funciones.js"></script>


<style type="text/css">

body{
}
 .wrapper{
            
 }
 .autocompletar{
	display: block;
	width: 100%;
	height: 34px;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.42857143;
	color: #555;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
	-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
	-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; 	
	margin-bottom: 10px;
 }
.contenedor p{
	font-size: 12px;
	background-color: #D2D5E7;
	/* color: #0A0A0A; */
	padding: 6px 10px;
	border: 1px solid #ccc;
	/* max-width: 328px; */
	margin-top: -8px;
	border-radius: 10px 10px 10px 10px;
	-moz-border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 3px 3px 3px 3px;
	border: 0px solid #171717;
}

.contenedor a {
color: #4D4D4D;
text-decoration: none;
}

.contenedor a:hover, a:focus {
	color: #000000;
	text-decoration: none;
}

table {
border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
border: 0px solid #000000;
}

td, th {
padding: 5px;
padding-right: 5px;
}


select {
display: block;
width: 100%;
height: 34px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
}

</style>




  <?php


/*
	if(isset($_POST['submit']))
	{
	  $nombre = array('name' => 'nombre', 'placeholder' => 'Nombre', 'value' =>  $_POST['nombre'] , 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $apellido = array('name' => 'apellido', 'placeholder' => 'Apellido', 'value' =>  $_POST["apellido"] , 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $correo = array('name' => 'correo', 'placeholder' => 'Correo', 'value' =>  $_POST["correo"] , 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $usuario = array('name' => 'usuario', 'placeholder' => 'Usuario', 'value' =>  $_POST["usuario"] , 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');  
	  $contrasena = array('name' => 'contrasena', 'placeholder' => 'Contraseña', 'required'  => '', 'type' => 'password', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $fechaNac = array('name' => 'fechaNac', 'required'  => '', 'type' => 'date', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $submit = array('name' => 'submit', 'value' => 'Registrarme', 'title' => 'Registrarme', 'class' => 'btn btn-lg btn-outline', 'onclick' => 'show_alert();');  

  	}
 	 else {
	  $nombre = array('name' => 'nombre', 'placeholder' => 'Nombre', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $apellido = array('name' => 'apellido', 'placeholder' => 'Apellido', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $correo = array('name' => 'correo', 'placeholder' => 'Correo', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $usuario = array('name' => 'usuario', 'placeholder' => 'Usuario', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');  
	  $contrasena = array('name' => 'contrasena', 'placeholder' => 'Contraseña', 'required'  => '', 'type' => 'password', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $fechaNac = array('name' => 'fechaNac', 'required'  => '', 'type' => 'date', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $submit = array('name' => 'submit', 'value' => 'Registrarme', 'title' => 'Registrarme', 'class' => 'btn btn-lg btn-outline', 'onclick' => 'show_alert();');
  	}	

	$m_status = 'unchecked';
	$f_status = 'unchecked';
	$o_status = 'unchecked';

	if (isset($_POST['submit'])) {

		$selected_radio = $_POST['sexo'];

		if ($selected_radio == 'M') {
			$m_status = 'checked';
		}
		else if ($selected_radio == 'F') {
			$f_status = 'checked';
		}
		else {	
			$o_status = 'checked';
		}
	}
*/


	  $nombre = array('name' => 'nombre', 'placeholder' => 'Nombre', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $apellido = array('name' => 'apellido', 'placeholder' => 'Apellido', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $correo = array('name' => 'correo', 'placeholder' => 'Correo', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $usuario = array('name' => 'usuario', 'placeholder' => 'Usuario', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');  
	  $contrasena = array('name' => 'contrasena', 'placeholder' => 'Contraseña', 'required'  => '', 'type' => 'password', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $fechaNac = array('name' => 'fechaNac', 'required'  => '', 'type' => 'date', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1', 'style' => '');
	  $submit = array('name' => 'submit', 'value' => 'Registrarme', 'title' => 'Registrarme', 'class' => 'btn btn-lg btn-outline', 'onclick' => 'show_alert();');


	$atributos = array('onsubmit' => 'return validar(this);');

  ?>


<table  width="50%" align="right" style="margin-right: 50px;">
	<tr>
		<td><h1 style="text-align: left;">Registrate!! Es gratis... </h1></td>
	</tr>
</table>
	<?=form_open(base_url().'login/newRegister', $atributos)?>
	<table  width="50%" align="right" style="margin-right: 50px; background-color:rgba(233, 231, 244, 0.51);">
	  <tr>
	    <td><?=form_input($nombre)?></td>
	    <td><?=form_input($apellido)?></td>
	  </tr>
	  <tr>
	    <td colspan="2"><?=form_input($correo)?></td>
	  </tr>
	  <tr>
	 	<td><?=form_input($usuario)?></td>
	    <td><?=form_input($contrasena)?></td>
	  </tr>
	  <tr>
	    <td align="center"><h4 style="margin-top: 0px; margin-bottom: 0px;">Fecha de Nacimiento:</h4></td>
		<td align="center"><h4 style="margin-top: 0px; margin-bottom: 0px;">Sexo:</h4></td>
	  </tr>
	  <tr> 
	  	<td><?=form_input($fechaNac)?></td> 
	   	<td style="text-align: center;" colspan="2">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="sexo" value="M"  required/>Masculino
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="sexo" value="F" />Femenino
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="sexo" value="O" />Otro
                </label>
	        </div>
		</td>
	  </tr>
	  <tr>
		<td colspan="2"><div class="wrapper">
				            <input type="text" name="localidad" maxlength="30" onpaste="return false" class="autocompletar" placeholder="Localidad" required/>
				            <div class="contenedor"></div>
			        	</div>
			        	<input type="hidden" name="localidad_id" class="autocompletarHidden" value="NULL">
		</td>
	  </tr>	  
	  <tr>
	    <td style="text-align:left;"><p id="mensaje"></p></td>
	    <td style="text-align:right;"><?=form_submit($submit)?></td>
	  </tr>	  
	</table>
	<?=form_close()?>


<script src="<?=base_url()?>js/jquery.ez-bg-resize.js" type="text/javascript" charset="utf-8"></script>

<script language="javascript" type="text/javascript">

function validar(f)
{
	document.getElementById("mensaje").innerHTML = "";

	if (document.getElementsByName("localidad_id")[0].value == 0){
		document.getElementById("mensaje").innerHTML = "La Localidad ingresada es erronea. Elija una opcion de las que son propuestas.";
		return (false);
	}

}

</script>

</body>
