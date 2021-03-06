<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="./js/app.js"></script>
  </head>
  <body>
    @include('inc.navbar')

    @yield('content')

    <div id="app"></div>
  </body>
  <script type="text/javascript">
    $(document).ready(function () {
      var url = window.location;
      $('.navbar-nav li').removeClass('active');
      $('ul.navbar-nav a[href="'+ url +'"]').parent().addClass('active');
      $('ul.navbar-nav a').filter(function() {
          return this.href == url;
      }).parent().addClass('active');
    });
  </script>
</html>
