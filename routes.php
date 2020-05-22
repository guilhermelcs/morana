<?php
return [
  '/' => [
    'routeName' => 'Home',
    'file' => 'index.html',
    'template' => 1,
  ],
  '/catalogo' => [
    'routeName' => 'Catalogo',
    'file' => 'index.html',
    'template' => 1,
  ],
  '/not-found' => [
    'routeName' => '404 - Not Found',
    'file' => '404.html',
    'template' => 0,
  ],
  '/produto' => [
    'routeName' => 'Produto',
    'file' => 'produto.html',
    'template' => 1,
    'showMap' => 0
  ],
  '/carrinho' => [
    'routeName' => 'Carrinho',
    'file' => 'carrinho.html',
    'template' => 1,
  ],
  '/morana-admin' => [
    'routeName' => 'Morana admin',
    'file' => 'morana-admin.html',
    'template' => 1,
    'isAdmin' => 1,
    'canRequest' => 1
  ],
  '/morana-admin-pagamentos' => [
    'routeName' => 'Morana admin Pagamentos',
    'file' => 'morana-admin-pagamentos.html',
    'template' => 1,
    'isAdmin' => 1
  ],
  '/morana-login' => [
    'routeName' => 'Morana admin Login',
    'file' => 'login.html',
    'template' => 1,
    'loginArea' => 1
  ],
];
?>