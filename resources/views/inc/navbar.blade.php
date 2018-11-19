<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="./img/logo_black.png" height="30" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">問卷管理 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">數據檢索</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">員工管理</a>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           個人帳號
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="#">帳號設定</a>
           <a class="dropdown-item" href="./login">登出</a>
         </div>
     </li>
    </ul>
  </div>
</nav>

<style media="screen">
  .navbar{
    /* position: fixed; */
    /* top: 0; */
    padding-left: 100px;
    padding-right: 100px;
  }

  #navbarNav{
    margin-left: 50px;
  }

  #navbarNav li {
    margin-left: 10px;
  }
</style>
