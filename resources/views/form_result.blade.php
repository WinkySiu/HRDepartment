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
      <div class="question">
        <div class="chart">
          <canvas id="q_1" height="110"></canvas>
        </div>
        <hr>
      </div>

      <div class="question">
        <div class="chart">
          <canvas id="q_2" height="110"></canvas>
        </div>
        <div class="chart">
          <canvas id="q_2_1" height="110"></canvas>
        </div>
        <hr>
      </div>

      <div class="question">
        <div class="chart">
          <canvas id="q_3" height="110"></canvas>
        </div>
        <hr>
      </div>

      <div class="question">
        <div class="chart">
          <canvas id="q_4" height="110"></canvas>
        </div>

        <div class="chart">
          <canvas id="q_4_1" height="110"></canvas>
        </div>
        <hr>
      </div>
    </div>
  </body>
  <script type="text/javascript">

		var barChartData1 = {
			labels: ['Male (By Gender)', 'Female (By Gender)', '<40 (By Age)', '>=40 (By Age)', 'Total'],
			datasets: [{
				label: 'Managerial level',
				backgroundColor: "#4EDDF8",
				data: [
          2,2,1,3,4
				]
			}, {
				label: 'Officer',
				backgroundColor: "#E39595",
				data: [
          8,12,10,10,20
				]
			}, {
				label: 'Frontline Operations',
				backgroundColor: "#B4E395",
				data: [
          6,8,12,2,14
				]
			}]
		};

		var barChartData2 = {
			labels: ['Male', 'Female', '<= aged 40', '> aged 40', 'Total'],
			datasets: [{
				label: '1) Number of new employees',
				backgroundColor: "#4EDDF8",
				borderColor: "#4EDDF8",
				borderWidth: 1,
				data: [
					3,2,3,2,5
				]
			}, {
				label: '2) No. of staff resigned during the year',
				backgroundColor: "#E39595",
				borderColor: "#B4E395",
				borderWidth: 1,
				data: [
					1,0,1,0,1
				]
			}, {
				label: '3) Total no. of staff at the beginning of the year',
				backgroundColor: "#B4E395",
				borderColor: "#B4E395",
				borderWidth: 1,
				data: [
					14,20,21,13,34
				]
			}, {
				label: '4) Total no. of staff at the end of the year',
				backgroundColor: "#F8C14E",
				borderColor: "#F8C14E",
				borderWidth: 1,
				data: [
					16,22,23,15,38
				]
			}, {
				label: '5) Staff turnover rate',
				backgroundColor: "#5DD4A9",
				borderColor: "#5DD4A9",
				borderWidth: 1,
				data: [
					6,0,4,0,3
				]
			}]
		};

    var barChartData2_1 = {
			labels: ['Male', 'Female', '<= aged 40', '> aged 40', 'Total'],
			datasets: [{
				label: '5) Staff turnover rate',
				backgroundColor: "#4EDDF8",
				borderColor: "#4EDDF8",
				borderWidth: 1,
				data: [
					6,0,4,0,3
				]
			}]
		};


		var pieChart3 = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
            7,6,8,1,8,1,5,8,1,0
					],
					backgroundColor: [
            "#4EDDF8",
            "#B4E395",
            "#F8C14E",
            "#E39595",
            "#9867F3",
            "#DCDCDC",
            "#384E95",
            "#B4F84E",
            "#5D4EF8",
            "#A9F3C1"
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Medical and Life Insurance Scheme',
					'Annual leave',
					'Sick Leave',
					'Compassionate leave',
          'Marriage leave',
          'Jury Service Leave',
          'Maternity leave',
          'Study leave',
          'Pension fund',
          'Study subsidy'
				]
			},
			options: {
				responsive: true,
        title: {
          display: true,
          text: '3. Benefits',
          fontSize: 20
        }
			}
		};

    var barChartData4 = {
      labels: ['Managerial level', 'Officer', 'Frontline Operations'],
      datasets: [{
        label: 'Male',
        backgroundColor: "#4EDDF8",
        borderColor: "#4EDDF8",
        borderWidth: 1,
        data: [
          5,40,27
        ]
      }, {
        label: 'Female',
        backgroundColor: "#E39595",
        borderColor: "#E39595",
        borderWidth: 1,
        data: [
          12,75,89
        ]
      }]
    };

    var barChartData4_1 = {
      labels: ['Managerial level', 'Officer', 'Frontline Operations', 'Cost spent on Training and Education'],
      datasets: [{
        label: '% Male',
        backgroundColor: "#4EDDF8",
        data: [
          29,35,23,35
        ]
      }, {
        label: '% Female',
        backgroundColor: "#E39595",
        data: [
          71,65,77,65
        ]
      }]
    };


		window.onload = function() {
			var ctx1 = document.getElementById('q_1').getContext('2d');
			window.myBar = new Chart(ctx1, {
				type: 'bar',
				data: barChartData1,
				options: {
					title: {
						display: true,
						text: '1. Staff age  and gender distribution',
            fontSize: 20
					},
					tooltips: {
						mode: 'index',
						intersect: false
					},
					responsive: true,
					scales: {
						xAxes: [{
							stacked: true,
						}],
						yAxes: [{
							stacked: true
						}]
					}
				}
			});

      var ctx2 = document.getElementById('q_2').getContext('2d');
			window.myBar = new Chart(ctx2, {
				type: 'bar',
				data: barChartData2,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
            display: true,
						text: '2. New employees hires and turnover rate',
            fontSize: 20
					}
				}
			});

      var ctx2_1 = document.getElementById('q_2_1').getContext('2d');
			window.myBar = new Chart(ctx2_1, {
				type: 'bar',
				data: barChartData2_1,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: '5) Staff turnover rate',
            fontSize: 20
					}
				}
			});

      var ctx3 = document.getElementById('q_3').getContext('2d');
			window.myPie = new Chart(ctx3, pieChart3);

      var ctx4 = document.getElementById('q_4').getContext('2d');
      window.myBar = new Chart(ctx4, {
        type: 'bar',
        data: barChartData4,
        options: {
          responsive: true,
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: '4. Training and Educaiton (hr)',
            fontSize: 20
          }
        }
      });

      var ctx4_1 = document.getElementById('q_4_1').getContext('2d');
      window.myBar = new Chart(ctx4_1, {
        type: 'bar',
        data: barChartData4_1,
        options: {
          responsive: true,
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: '4. Training and Educaiton (hr)',
            fontSize: 20
          },
					tooltips: {
						mode: 'index',
						intersect: false
					},
					responsive: true,
					scales: {
						xAxes: [{
							stacked: true,
						}],
						yAxes: [{
							stacked: true
						}]
					}
        }
      });
		};
  </script>
  <style media="screen">
    body {
      padding-top: 30px;
    }

    .container #title{
      text-align: center;
    }

    .question-body {
      padding: 0px 100px 50px 100px
    }

    .question {
      /* margin-bottom: 50px; */
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
