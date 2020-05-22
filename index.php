<?php
  $route  = '/' . explode('/', $_SERVER['REDIRECT_QUERY_STRING'])[1];
  $routes = include('routes.php');

  if( !$routes[$route] ) {
    header('Location: not-found');
    exit;
  }

  $currentRoute = $routes[$route];
  $file = './pages/' . $currentRoute['file'];
  $css_file = 'assets/css/' . explode('.', $currentRoute['file'])[0] . '.css';
  $has_css = file_exists('./' . $css_file);

  if( $currentRoute['template'] ) {
    if( array_key_exists('isAdmin', $currentRoute) ) {
		require_once './template/header-admin.php';
		require_once $file;
		require_once './template/footer-admin.php';
	} 
	else if( array_key_exists('loginArea', $currentRoute) ) {
		require_once './template/header-login.php';
		require_once $file;
		require_once './template/footer-login.php';
	}
	else {   
		require_once './template/header.php';
		require_once $file;
		require_once './template/footer.php';
    }
  } else {
		require_once $file;
  }

?>