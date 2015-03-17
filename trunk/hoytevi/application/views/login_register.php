 <script type="text/javascript">
$(document).ready(function() {
  $("body").ezBgResize({
    img : "<?=base_url()?>images/fondo.jpg", // Relative path example.  You could also use an absolute url (http://...).
    opacity : 0.8, // Opacity. 1 = 100%.  This is optional.
    center  : true // Boolean (true or false). This is optional. Default is true.
  });
});

</script>

<style type="text/css">

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

</style>


  <?php
  $username = array('name' => 'username', 'placeholder' => 'Usuario', 'style' => '', 'required'  => '', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1');
  $password = array('name' => 'password', 'placeholder' => 'Contraseña', 'style' => '', 'required'  => '', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1');
  $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión', 'class' => 'btn btn-lg btn-outline');
  ?>

<BR>
<BR>

<?=form_open(base_url().'login/new_user')?>
<table width="50%" align="center" style="background-color:rgba(233, 231, 244, 0.51);">
  <tr>
    <th colspan="3"><h1 style="text-align: left; margin-left: 30px;">Ingrese sus datos para loguarse</h1></th>
  </tr>
  <tr>
    <td rowspan="4"></td>
    <td><?=form_input($username)?></td>
    <td rowspan="4"></td>
  </tr>
  <tr>
    <td><?=form_password($password)?></td>
    <?=form_hidden('token',$token)?>
  </tr>
  <tr>
    <td style="text-align:right;"><?=form_submit($submit)?></td>
  </tr>
  <tr>
    <td><?=form_error('username')?><?=form_error('password')?><?=form_close()?></td>
  </tr>
</table>

<script src="<?=base_url()?>js/jquery.ez-bg-resize.js" type="text/javascript" charset="utf-8"></script>


