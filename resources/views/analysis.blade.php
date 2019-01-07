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
        <div class="dropdown" style="display:inline;float:right">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            問卷選擇
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">問卷一</a>
            <a class="dropdown-item" href="#">問卷二</a>
            <a class="dropdown-item" href="#">問卷三</a>
          </div>
        </div>
      </h3>
      <hr>
    </div>

    <div class="chart">
      <h5>1. 問題一</h5>
      <canvas id="myChart" width="400" height="150"></canvas>
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

  .chart {
    width: 100%;
    padding: 30px 0 30px 0;
  }
</style>

<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
</script>

@endsection
