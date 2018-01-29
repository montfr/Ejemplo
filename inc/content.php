<?php
$route = ( isset( $_GET['p'] ) ) ? $_GET['p'] : 'home';

switch ( $route ) {
  case 'home':
    require('./inc/template-parts/home.php');
    break;
  case 'nosotros':
    require('./inc/template-parts/nosotros.php');
    break;
  case 'categoria':
    require('./inc/template-parts/categoria.php');
    break;
  case 'contacto':
    require('./inc/template-parts/contacto.php');
    break;
  case 'login':
    require('./inc/template-parts/login.php');
    break;
  case 'admin':
    session_validate('admin');
    break;
  case 'perfil':
    session_validate('perfil');
    break;
  case 'logout':
    session_logout();
    break;
  default:
    require('./inc/template-parts/404.php');
    break;
}
