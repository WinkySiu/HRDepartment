@extends('layout.app')

@section('content')
<div class="container-fluid">
  <div class="info">
      <img src="./img/csr.png" alt="" width="100%">
  </div>
</div>


<div class="csr-body">
  <div class="page-header">
    <h3>CSR資訊管理
      <small>CSR Information Management</small>
      <div style="display:inline;float:right">
        <a href="./form_maker" target="_blank"><button type="button" class="btn btn-secondary"><i class="far fa-plus"></i> 自訂義資料</button></a>
      </div>
    </h3>
    <hr>
  </div>
<!-- csr-tab -->
  <div class="" style="width:100%;">
    <ul class="nav nav-tabs" id="search-result-tab">
      <li class="nav-item">
        <a data-toggle="tab" aria-expanded="true" class="nav-link active" href="#my-form">已填寫的資料</a>
      </li>
      <li class="nav-item">
        <a data-toggle="tab" aria-expanded="false" class="nav-link" href="#form-list">需要填寫的資料</a>
      </li>
    </ul>

    <div class="tab-content" id="search-result-content" style="height:75vh;overflow:scroll;">
      <div id="my-form" class="tab-pane fade active show">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="width:15%;">日期<small><b> Date</b></small></th>
              <th scope="col">標題<small><b> Title</b></small></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2018/10/01</td>
              <td><a href="./form" target="_blank">HR Department Example</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="form-list">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="width:15%;">日期<small><b> Date</b></small></th>
              <th scope="col">標題<small><b> Title</b></small></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2018/10/01</td>
              <td><a href="./form" target="_blank">HR Department Example</a></td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
  </div>

</div>


<style media="screen">
  .container-fluid {
    padding-left: 0;
    padding-right: 0;
  }

  .csr-body {
    width: 100%;
    padding: 30px 10% 30px 10%;
  }

  .profile-grid {
    padding: 10px 10px 10px 10px;
  }

  small.card-text {
    color: gray;
    line-height: 3;
  }

  h5.card-title{
      line-height: 0.3;
  }

  .csr-tab {
    overflow: hidden;
    overflow: scroll;
  }

  .table thead th {
    border-top: 0px;
  }


</style>
<script type="text/javascript">
  $(document).ready(function() {
    document.title = 'CSR資訊管理 CSR Information Management';
  });
</script>

@endsection
