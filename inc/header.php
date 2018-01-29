<?php
session_start();
print('
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kyrie Store</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> 
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
    ');
    if (isset($_SESSION['session_status']))
    {
      echo '
      <header class="navbar-fixed">
        <nav>   
          <div class="nav-wrapper  container">
            <a class="logo" href="./" class="brand-logo">Kyrie Store</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="nosotros">Nosotros</a></li>
              <li><a href="categoria">Categoria</a></li>
              <li><a href="contacto">Contacto</a></li>
              <li><a href="admin">Administrar</a></li>
              <li><a href="perfil">Perfil</a></li>
              <li><a href="logout">Logout</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="nosotros">Nosotros</a></li>
              <li><a href="categoria">Categoria</a></li>
              <li><a href="contacto">Contacto</a></li>
              <li><a href="admin">Administrar</a></li>
              <li><a href="perfil">Perfil</a></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </div>
        </nav>
      ';
    }
      else
      {
        echo '
        <header class="navbar-fixed">
        <nav>   
          <div class="nav-wrapper  container">
            <a class="logo" href="./" class="brand-logo">Kyrie Store</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="nosotros">Nosotros</a></li>
              <li><a href="categoria">Categoria</a></li>
              <li><a href="contacto">Contacto</a></li>
              <li><a href="logout">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="nosotros">Nosotros</a></li>
              <li><a href="categoria">Categoria</a></li>
              <li><a href="contacto">Contacto</a></li>
              <li><a href="logout">Login</a></li>
            </ul>
          </div>
        </nav>
        ';
      }
    
    print('
      </header>
      <main class="container">
    ');