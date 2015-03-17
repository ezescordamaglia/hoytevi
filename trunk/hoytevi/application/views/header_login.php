<html lang="es"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url()?>images/favicon.ico">

    <title>Hoy Te Vi</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?=base_url()?>css/bootstrap-theme.css" rel="stylesheet">

  </head>

  <body style="margin-top: 50px;">

  <?php
  $username = array('name' => 'username', 'placeholder' => 'Usuario', 'style' => '', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1');
  $password = array('name' => 'password', 'placeholder' => 'Contraseña', 'style' => '', 'required'  => '', 'type' => 'text', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1');
  $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión', 'style' => 'margin: 10px;', 'class' => 'btn btn-lg btn-outline');
  ?>

<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>">HOY TE VI</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li><a href="#">Ayuda</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Ayuda</a></li>
        <li><a href="<?=base_url()?>login/logueo">Ya estoy registrado</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Log In<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <?=form_open(base_url().'login/new_user')?>
            <li>  <table>
                    <tr>
                      <td><?=form_input($username)?></td>
                    </tr>
                    <tr>
                      <td><?=form_password($password)?></td>
                      <?=form_hidden('token',$token)?>
                    </tr>
                    <tr>
                      <td><?=form_submit($submit)?></td>
                    </tr>
                    <tr>
                      <td><?=form_error('username')?><?=form_error('password')?><?=form_close()?></td>
                    </tr>                    
                  </table>
            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
  

