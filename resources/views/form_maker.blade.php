@extends('layout.form_app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light first-nav">
  <a class="navbar-brand" href="#">表單製作</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-plus-square"></i> 新增問題
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" id="single-question"><i class="far fa-check-circle"></i> 單一選項</a>
            <a class="dropdown-item" id="multi-question"><i class="far fa-check-square"></i> 多選項</a>
            <a class="dropdown-item" id="short-question"><i class="fas fa-align-left"></i> 簡短回答</a>
            <a class="dropdown-item" id="long-question"><i class="fas fa-align-justify"></i> 詳細回答</a>
            <hr>
            <a class="dropdown-item" id="section-title"><i class="fas fa-ad"></i> 小標題</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-light">完成</button>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="form-question" id="form-question">
    <div class="question">
      <input type="text" id="" class="title-input" placeholder="表單標題" style="width:100%">
      <textarea name="form-description" row="5" placeholder="表單描述 Description"></textarea>
    </div>
    <hr>

    <!-- <div class="section">
      <div>
        <span class="badge badge-secondary">小標題</span>
      </div>
      <input type="text" id="" class="" placeholder="小標題" disabled>
    </div>

    <div class="question">
      <div>
        <span class="badge badge-secondary">簡短回答</span>
      </div>
      <input type="text" id="" class="question-title" placeholder="問題">
      <input type="text" id="" class="" placeholder="簡短回答" disabled>
      <hr>
    </div>

    <div class="question">
      <div>
        <span class="badge badge-secondary">詳細回答</span>
      </div>
      <input type="text" id="" class="question-title" placeholder="問題">
      <textarea name="form-description" row="5" placeholder="詳細回答" disabled></textarea>
      <hr>
    </div>

    <div class="question">
      <div>
        <span class="badge badge-secondary">多選項</span>
      </div>
      <input type="text" id="" class="question-title" placeholder="問題">

      <div class="checkbox-list">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input" disabled>
            </div>
          </div>
          <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox" aria-label="Checkbox for following text input" disabled>
            </div>
          </div>
          <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div>
      </div>
      <hr>
    </div>

    <div class="question">
      <div>
        <div>
          <span class="badge badge-secondary">單一選項</span>
        </div>
      </div>
      <input type="text" id="" class="question-title" placeholder="問題">

      <div class="radio-list">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" aria-label="Radio button for following text input" disabled>
            </div>
          </div>
          <input type="text" class="form-control" aria-label="Text input with radio button">
        </div>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio" aria-label="Radio button for following text input" disabled>
            </div>
          </div>
          <input type="text" class="form-control" aria-label="Text input with radio button">
        </div>
      </div>
      <hr>
    </div> -->

  </div>
</div>

<style media="screen">
body {
  height: 100vh;
  overflow: hidden;
  font-family: Arial, Helvetica, sans-serif;
  /* background-image: url(./img/test.png);
  background-repeat: no-repeat;
  background-size: 100vw auto;
  background-position: center center; */
  background-color: #efefef;
}

.first-nav{
  background-color: #454545 !important;
  padding-left: 22%;
  padding-right: 22%;
}

.navbar-light .navbar-brand {
  color: white !important;
}

.navbar li {
  margin-left: 20px;
}

.container {
  width: 60%;
  padding: 0 0 100px 0;
  background-color: white;
  height: 100vh;
  box-shadow: 2px 2px 10px lightgray;
  overflow: scroll;
}

.question {
  width: 100%;
  padding: 40px 10% 0px 10%;
}

.question hr {
  margin-top: 40px;
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
  width: 30%;
  border-bottom: 2px solid #dfdfdf;
}

.section{
  background-color: lightgray;
  width: 100%;
  padding: 20px 10% 40px 10%;
}

.section span{
  margin-top: 10px;
}

.section input {
  font-size: 20px;
  background-color: rgba(255, 0, 0, 0) !important;
  border-color: white;
  margin-top: 0px;
  width: 100%
}

.section input::placeholder {
  color: white;
  font-size: 20px;
}

*:focus {
  outline: none;
  border-bottom: 2px solid gray;
}

.question-title {
  font-size: 20px;
  width: 80%;
}

.question textarea{
  width: 80%;
}

.checkbox-list, .radio-list{
  margin-top: 20px;
}

.input-group .input-group-text {
  margin-top: 15px !important;
}

.input-group .input-group-text input[type="checkbox"], .input-group .input-group-text input[type="radio"] {
  width: auto;
}

.input-group > .form-control, .input-group > .custom-select, .input-group > .custom-file {
  flex: 0;
  width: 150px;
}


</style>

<script type="text/javascript">
  $( "#single-question" ).click(function() {
    let form_question = $("#form-question");

    let htmlString = '<div class="question"><div><div><span class="badge badge-secondary">單一選項</span></div></div><input type="text" id="" class="question-title" placeholder="問題"><div class="radio-list"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="radio" aria-label="Radio button for following text input" disabled></div></div><input type="text" class="form-control" aria-label="Text input with radio button"></div><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="radio" aria-label="Radio button for following text input" disabled></div></div><input type="text" class="form-control" aria-label="Text input with radio button"></div></div><hr></div>'

    form_question.append(htmlString);

    $("#form-question").show();
  });

  $( "#multi-question" ).click(function() {
    let form_question = $("#form-question");

    let htmlString = '<div class="question"><div><span class="badge badge-secondary">多選項</span></div><input type="text" id="" class="question-title" placeholder="問題"><div class="checkbox-list"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="checkbox" aria-label="Checkbox for following text input" disabled></div></div><input type="text" class="form-control" aria-label="Text input with checkbox"></div><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><input type="checkbox" aria-label="Checkbox for following text input" disabled></div></div><input type="text" class="form-control" aria-label="Text input with checkbox"></div></div><hr></div>'

    form_question.append(htmlString);

    $("#form-question").show();
  });

  $( "#short-question" ).click(function() {
    let form_question = $("#form-question");

    let htmlString = '<div class="question"><div><span class="badge badge-secondary">簡短回答</span></div><input type="text" id="" class="question-title" placeholder="問題"><input type="text" id="" class="" placeholder="簡短回答" disabled><hr></div>'

    form_question.append(htmlString);

    $("#form-question").show();
  });

  $( "#long-question" ).click(function() {
    let form_question = $("#form-question");

    let htmlString = '<div class="question"><div><span class="badge badge-secondary">詳細回答</span></div><input type="text" id="" class="question-title" placeholder="問題"><textarea name="form-description" row="5" placeholder="詳細回答" disabled></textarea><hr></div>'

    form_question.append(htmlString);

    $("#form-question").show();
  });

  $( "#section-title" ).click(function() {
    let form_question = $("#form-question");

    let htmlString = '<div class="section"><div><span class="badge badge-secondary">小標題</span></div><input type="text" id="" class="" placeholder="小標題"></div>'

    form_question.append(htmlString);

    $("#form-question").show();
  });
</script>

@endsection
