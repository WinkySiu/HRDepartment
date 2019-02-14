@extends('layout.app')

@section('content')
<div class="container-fluid">
  <div class="info">
      <img src="./img/analysis.png" alt="" width="100%">
  </div>

  <div class="analysis-body">
    <div class="page-header">
      <h3>CSR資訊分析
        <small>CSR Information Analysis</small>
      </h3>
      <hr>
    </div>

    <div class="chart-list">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" style="width:15%;">日期 <small><b>Date</b></small></th>
            <th scope="col">標題 <small><b>Title</b></small></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2018/10/01</td>
            <td><a href="./formresult" target="_blank">HR Department Example</a></td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>

<style media="screen">
  .container-fluid {
    padding-left: 0;
    padding-right: 0;
  }

  .analysis-body {
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

  .chart-list {
    width: 100%;
    height: 75vh;
    overflow: scroll;
  }
</style>
<script type="text/javascript">
  $(document).ready(function() {
    document.title = 'CSR資訊分析 CSR Information Analysis';
  });
</script>
@endsection
