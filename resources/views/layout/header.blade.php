<!--Sitio web desarrollado para AIMCO Corporation de México
    Desarrollado por Jesus Arciniega chubuntu.github.io
    Desarrollado en PHP - HTML5 - Javascript - CSS
    Utilizando Materialize http://materializecss.com/
    Laravel 5.1 https://laravel.com/
    Derechos Reservados 2016-->
<!DOCTYPE html>
<html>
  <head>
    <!--Meta-Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="autor" content="Jesus Arciniega">
    <meta name="description" content="Dashboard Corporativo de AIMCO Corporation de México" />
    <!--/Meta-Tags-->
    <title>AIMCO CORPORATION DE MÉXICO SA DE CV</title>
    <!--Stylesheets-->
    <link rel="stylesheet" href="css/materialize.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/diseno.css" media="screen" title="no title" charset="utf-8">
    <!--/Stylesheets-->
  </head>
  <body>
    <!--Barra superior - Header-->
    <header class="z-depth-1">
        <ul>
          <li><a class="activo" href="#">AIMCO</a></li>
          <li><a href="http://aimco-global.com/" target="_blank">Nosotros</a></li>
          <li><a href="http://www.aimco-solutions.com/acradyne.asp" target="_blank" id="ocultar">AcraDyne</a></li>
          <li><a href="http://www.eagle-premier.com/" target="_blank" id="ocultar">Eagle</a></li>
          <li><a href="http://www.aimco-solutions.com/online_catalog.asp" target="_blank" id="ocultar">Catalogos</a></li>
          <li><a href="#" id="ocultar">Servicios</a></li>
          <li><a href="#modal2" class="modal-trigger">Contacto</a></li>
          <li><a href="#modal1" class="modal-trigger">Acceso</a></li>
          <!-- Pantalla modal de login -->
          <div id="modal1" class="modal">
             <div class="modal-content">
               <form class="col s12" method="post">
                  <div class="row">
                    <h4>Acceso</h4>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" name="email" type="text">
                      <label for="email">Usuario</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" name="password" type="password" class="validate">
                      <label for="password">Contraseña</label>
                    </div>
                    <button type="submit" id="login" name="login" class="waves-effect waves-light btn red darken-4">ok</button>
                </form>
                <?php
                if(isset($_POST['login'])){
                  $_SESSION['user'] = $_POST['email'];
                  $_SESSION['pass'] = $_POST['password'];
                  error_reporting(0);
                  $sql = "";
                  $sql = mysql_query("SELECT * FROM Usuarios where User = '".$_SESSION['user']."'", $_SESSION['conn']);
                  while ($row = mysql_fetch_array($sql))
                  {
                    $valor =  $row['Pass'];
                    $_SESSION['Nombre_Usuario'] =  $row['Name'];
                    $_SESSION['Usuario_Actual'] =  $row['Sap'];
                    $_SESSION['Rango'] = $row['UserType'];
                    $_SESSION['Comedor'] = $row['ResetMenu'];
                  }
                if ($valor == $_SESSION['pass']) {
                  header('Location: dashboard');
                }
              else {
                {
                  echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";
                }
              }}
                			 ?>
             </div>
           </div>
          <!-- Pantalla modal de login -->
        </ul>
    </header>

    <nav id="tiulo_pagina">
      <div class="nav-wrapper red darken-4 z-depth-3">
        <img src="img/logo.png" id="logo">
          <a href="#" id="aimco">AIMCO Corporation de México</a>
      </div>
    </nav>
    <!--/Barra superior - Header-->
    <!-- Modal Contacto -->
    <div id="modal2" class="modal bottom-sheet">
      <div class="modal-content">
        <h5>Contacto AIMCO</h5>
        <p>Tel: (614) 380 1010</p>
      </div>
    </div>
    <!-- /Modal Contacto -->
    
    </body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/master.js"></script>
  </html>
