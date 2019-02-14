<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HR Department Example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="./js/app.js"></script>
  </head>
  <body>
    <div class="container">
      <h3 id="title">HR Department Example</h3>
      <hr>

      <div class="question-body">
        <div class="question">
          <h5>Number of Managerial (e.g. CEO, Directors, Manager)</h5>
          <div class="chart">
            <canvas id="question1" height="100"></canvas>
          </div>
          <hr>
        </div>

        <div class="question">
          <h5>Number of Officer (i.e., non-managerial staff members working at head office, e.g. Secretary, HR Officer, Designer, Admin, Coordinator, etc.)</h5>
          <div class="chart">
            <canvas id="question2" height="100"></canvas>
          </div>
          <hr>
        </div>

        <div class="question">
          <h5>Number of Frontline Operations (e.g. F&B waitress, courier persons, cleaners/housekeepers, drivers, etc.)</h5>
          <div class="chart">
            <canvas id="question3" height="100"></canvas>
          </div>
          <hr>
        </div>

        <div class="question">
          <h5>Number of new employees</h5>
          <div class="chart">
            <canvas id="question4" height="100"></canvas>
          </div>
          <hr>
        </div>

        <div class="question">
          <h5>Age of new employee</h5>
          <div class="chart">
            <canvas id="question5" height="100"></canvas>
          </div>
          <hr>
        </div>

        <div class="question">
          <h5>No. of staff resigned during the year</h5>
          <div class="chart">
            <canvas id="question6" height="100"></canvas>
          </div>
          <hr>
        </div>

        <div class="question">
          <h5>Total no. of staff at the beginning of the year</h5>
          <div class="chart">
            <canvas id="question7" height="100"></canvas>
          </div>
          <hr>``
        </div>

        <div class="question">
          <h5>Medical and Life Insurance Scheme.% of total staff cost.</h5>
          <div class="chart">
            <canvas id="question8" height="100"></canvas>
            <canvas id="question8-1" height="100"></canvas>
          </div>
          <hr>
        </div>

        <div class="question">
          <h5>Average hours of training per year by Position Level</h5>
          <div class="chart">
            <canvas id="question9" height="100"></canvas>
          </div>
          <hr>
        </div>

        <div class="question">
          <h5>Cost spent on Training and Education</h5>
          <div class="chart">
            <canvas id="question10" height="100"></canvas>
          </div>
          <hr>
        </div>

      </div>
    </div>
  </body>
  <script type="text/javascript">
  var labels1= ['Male','Female'];
  var ctx1 = document.getElementById('question1').getContext('2d');
  var pieChart1 = new Chart(ctx1, {
    type: 'pie',
    data : {
      labels:labels1,
      datasets: [{
          data:[23,41],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var labels2= ['Male','Female'];
  var ctx2 = document.getElementById('question2').getContext('2d');
  var pieChart2 = new Chart(ctx2, {
    type: 'pie',
    data : {
      labels:labels2,
      datasets: [{
          data:[33,22],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var labels3= ['Male','Female'];
  var ctx3 = document.getElementById('question3').getContext('2d');
  var pieChart3 = new Chart(ctx3, {
    type: 'pie',
    data : {
      labels:labels3,
      datasets: [{
          data:[44,77],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var labels4= ['Male','Female'];
  var ctx4 = document.getElementById('question4').getContext('2d');
  var pieChart4 = new Chart(ctx4, {
    type: 'pie',
    data : {
      labels:labels4,
      datasets: [{
          data:[40,90],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var labels5= ['Aged 40 or below','Aged 40 or above'];
  var ctx5 = document.getElementById('question5').getContext('2d');
  var pieChart5 = new Chart(ctx5, {
    type: 'pie',
    data : {
      labels:labels5,
      datasets: [{
          data:[20,30],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var labels6= ['Male','Female'];
  var ctx6 = document.getElementById('question6').getContext('2d');
  var pieChart6 = new Chart(ctx6, {
    type: 'pie',
    data : {
      labels:labels6,
      datasets: [{
          data:[90,80],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var labels7= ['Male','Female'];
  var ctx7 = document.getElementById('question7').getContext('2d');
  var pieChart7 = new Chart(ctx7, {
    type: 'pie',
    data : {
      labels:labels7,
      datasets: [{
          data:[40,90],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var labels8= ['Yes','No'];
  var ctx8 = document.getElementById('question8').getContext('2d');
  var pieChart8 = new Chart(ctx8, {
    type: 'pie',
    data : {
      labels:labels8,
      datasets: [{
          data:[40,10],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var ctx81 = document.getElementById("question8-1").getContext('2d');
  var myChart81 = new Chart(ctx81, {
      type: 'bar',
      data: {
          labels: ["30", "40", "70", "100"],
          datasets: [{
              label: '# of Votes',
              data: [10, 19, 8, 22],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(100, 100, 86, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(100, 100, 86, 0.2)'
              ],
              borderWidth: 1
          }]
      }
      ,
      options: {
        legend:{
          display:false
        },
        scales: {
          yAxes: [{
            display: true,
            ticks: {
              beginAtZero: true   // minimum value will be 0.
            }
          }]
        }
      }
  });

  var labels9= ['Managerial level','Officer’s level'];
  var ctx9 = document.getElementById('question9').getContext('2d');
  var pieChart9 = new Chart(ctx9, {
    type: 'pie',
    data : {
      labels:labels9,
      datasets: [{
          data:[3,5],
          backgroundColor: [
            "rgba(255,99,132,1)",
            "rgba(54, 162, 235, 1)"
          ],
      }],
    }
  });

  var ctx10 = document.getElementById("question10").getContext('2d');
  var myChart = new Chart(ctx10, {
      type: 'bar',
      data: {
          labels: ["10", "8", "12"],
          datasets: [{
              label: '# of Votes',
              data: [10, 19, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)'
              ],
              borderWidth: 1
          }]
      }
      ,
      options: {
        legend:{
          display:false
        },
        scales: {
        yAxes: [{
          display: true,
            ticks: {
              beginAtZero: true   // minimum value will be 0.
            }
          }]
        }
      }
  });
  </script>
  <style media="screen">
    body {
      padding-top: 30px;
    }

    .container #title{
      text-align: center;
    }

    .question-body {
      padding: 20px 100px 50px 100px
    }

    .question {
      margin-bottom: 50px;
      width: 100%;
      height: auto;
    }

    .chart {
      margin-left: auto;
      margin-right: auto;
      padding-bottom: 20px;
      height: auto;
    }
  </style>
</html>
