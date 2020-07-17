<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Investindo</title>
  @yield('css-view')
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
</head>
<body>
  @include('templates.menu-lateral')
  @yield('conteudo-view')
  @yield('js-view')
</body>
</html>