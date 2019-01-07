@extends('layout.form_app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">表單製作</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-plus"></i></a>
      </li>
    </ul>
    <button type="button" class="btn btn-light">完成</button>
  </div>
</nav>

<div class="container-fluid">
  <div class="form-panel">
    <div class="question-panel">
      <input type="text" name="form-title" class="title-input" placeholder="表單標題 Title">
      <textarea name="form-description" row="5" placeholder="表單描述 Description"></textarea>
      <hr>
    </div>

    <div class="question-panel">
      <input type="text" name="form-title" class="question" placeholder="問題 Question">
      <div class="answer">
        <input type="text" name="" value="" class＝"short-answer" placeholder="簡短回答" style="width:100px">
      </div>
    </div>
  </div>

  <!-- 簡答題 -->
  <div class="form-panel">
    <div class="question-panel">
      <input type="text" name="form-title" class="question" placeholder="問題 Question">
      <div class="answer">
        <input type="text" name="" value="" class＝"short-answer" placeholder="簡短回答" style="width:100px">
      </div>
    </div>
  </div>

  <div class="form-panel">
    <div class="question-panel">
      <input type="text" name="form-title" class="question" placeholder="問題 Question">
      <div class="answer">
        <div class="selection">
          <i class="far fa-square icon"></i>
          <input type="text" name="" value="" class＝"short-answer" placeholder="簡短回答" style="width:100px">
        </div>
        <div class="selection">
          <i class="far fa-square icon"></i>
          <input type="text" name="" value="" class＝"short-answer" placeholder="簡短回答" style="width:100px">
        </div>
      </div>
    </div>
  </div>
</div>

<style media="screen">
  body{
    background: #efefef;
  }
  
  hr {
    margin-top: 40px;
  }

  .navbar {
    padding-left: 10%;
    padding-right: 10%;
    background:#1696D5;
  }

  .navbar .navbar-brand{
    color: white !important;
  }

  .nav-item i {
    color: white;
  }

  .btn {
    padding-left:30px;
    padding-right:30px;
  }

  .container-fluid {
    padding: 20px 20% 30px 20%;
  }

  .form-panel {
    margin-top: 20px;
    background-color: white;
    border-radius: 2px;
    box-shadow: 2px 2px 10px #dfdfdf;
  }

  .question-panel {
    width: 100%;
    padding: 2% 10% 5% 10%;
  }

  .setting-panel {
    background-color: #1696D5;
    width: 100%;
    height: 30px;
    padding: 2% 10% 5% 10%;
  }

  .title-input {
    font-size: 30px;
  }

  textarea {
    resize: none;
    height: 100px;
  }

  input, textarea {
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    margin-top: 15px;
    width: 100%;
    border-bottom: 2px solid #dfdfdf;
  }

  *:focus {
    outline: none;
    border-bottom: 2px solid gray;
  }

  .question {
    font-size: 20px;
    width: 100%;
  }

  .short-answer {
    width: 40px !important;
    background: yellow;
  }

  .icon {
    font-size: 20px;
    color: gray;
    padding-right: 10px;
  }

  .fa-ellipsis-h {
    color: gray;
    /* margin-left: 6%; */
    font-size: 15px;
  }

  #dropdownMenu2 {
    background: rgba(255, 0, 0, 0);
    border: 0px;
  }
</style>

@endsection
