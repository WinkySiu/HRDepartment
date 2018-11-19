<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HR Department</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./fonts/iconic/css/material-design-iconic-font.min.css"> -->
    <script src="./js/app.js"></script>
    <style media="screen">
      body, html {
        overflow: hidden;
        height: 100%;
        margin: 0;
      }

      .bg {
        height: 100%;
        background-image: url("./img/login_bg.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
      }

      .bg .logo {
        position:relative;
        top:25%;
      }

      .bg .login-form {
        margin: 3% auto;
        width: 25%;
      }

      .login-form .input-group{
        margin: 5% auto;
        display: block;
        width: 100%;
        height: 60px;
        background-color: rgba(45,45,45,0.8);
        border-radius: 5px;
      }

      .input-group {
        text-align:left;
        padding: 5px 20px 5px 20px;
      }

      .login-form .input-group span input, .login-form .input-group input, .login-form a{
        display: block;
      }

      .login-form .input-group span {
        /* font-family: Montserrat-SemiBold; */
        font-size: 0.5em;
        font-weight: bold;
        color: #fff;
      }

      .login-form .input-group input {
        width: 100%;
        background-color: rgba(0,0,0,0);
        border: 0px;
        color: white;
      }

      textarea:focus, input:focus{
        outline: none;
      }

      .login-form button{
        width: 150px;
        height: 35px;
        font-weight: bold;
        border-radius: 8em;
        background-color: #85C2D5;
        color: white;
      }

      .login-form button i{
        margin-left: 5px;
      }

      .login-form a{
        color: white;
        text-shadow: 2px 2px 3px #000000;
      }

    </style>
  </head>
  <body>
    <div class="bg">
      <div class="logo">
        <img src="./img/logo.png" alt="" height="100px">

        <div class="login-form">
          <div class="input-group">
            <span>USERNAME*</span>
            <input type="text" name="" value="" placeholder="Enter Your Username">
          </div>

          <div class="input-group">
            <span>PASSWORD*</span>
            <input type="text" name="" value="" placeholder="Enter Your Password">
          </div>

          <a href="#">Forgot Your Password?</a>
          <button type="button" class="btn btn-info" onclick="myFunction()">Submit <i class="fas fa-arrow-right"></i></button>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    function myFunction(){
      window.location.replace('./');
    }
  </script>
</html>
