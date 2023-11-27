<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo (isset($pages_title) ? $pages_title : 'Gaming Gear'); ?></title>
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/owl-carousel-2/owl.theme.default.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/css/style.css">
  <link rel="shortcut icon" href="<? echo _WEB_ROOT ?>/public/assets/admin/img/logo4.jpg" />
</head>

<body>
  <?php
  date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
  $this->render('./admin/blocks_admin/sidebar');
  $this->render('./admin/blocks_admin/navbar');
  $this->render($body, $sub_content);
  $this->render('./admin/blocks_admin/footer');
  ?>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/off-canvas.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/script.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/hoverable-collapse.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/sidebar.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/chart.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/settings.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/todolist.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
  <script type="text/javascript">
      // Revenue 1 month
      (function ($) {
          'use strict';
          $.fn.andSelf = function () {
              return this.addBack.apply(this, arguments);
          }
          $(function () {
              if ($("#transaction-history").length) {
                  var areaData = {
                      labels: ["Credit", "Cash"],
                      datasets: [{
                          data: [<?= $totalOrderPaymentCredit['totalOrderPaymentCredit'] == null ? 0 : $totalOrderPaymentCredit['totalOrderPaymentCredit'] ?>,
                              <?= $totalOrderPaymentCash['totalOrderPaymentCash'] == null ? 0 : $totalOrderPaymentCash['totalOrderPaymentCash'] ?>
                          ],
                          backgroundColor: [
                              "#111111", "#ffab00"
                          ]
                      }]
                  };
                  var areaOptions = {
                      responsive: true,
                      maintainAspectRatio: true,
                      segmentShowStroke: false,
                      cutoutPercentage: 70,
                      elements: {
                          arc: {
                              borderWidth: 0
                          }
                      },
                      legend: {
                          display: false
                      },
                      tooltips: {
                          enabled: true
                      }
                  }
                  var transactionhistoryChartPlugins = {
                      beforeDraw: function (chart) {
                          var width = chart.chart.width,
                              height = chart.chart.height,
                              ctx = chart.chart.ctx;

                          ctx.restore();
                          var fontSize = 1;
                          ctx.font = fontSize + "rem sans-serif";
                          ctx.textAlign = 'left';
                          ctx.textBaseline = "middle";
                          ctx.fillStyle = "#ffffff";

                          var text = "$<?php echo $totalRevenueToday['totalRevenueToday'] ? $totalRevenueToday['totalRevenueToday'] : 0 ?>",
                              textX = Math.round((width - ctx.measureText(text).width) / 2),
                              textY = height / 2.4;

                          ctx.fillText(text, textX, textY);

                          ctx.restore();
                          var fontSize = 0.75;
                          ctx.font = fontSize + "rem sans-serif";
                          ctx.textAlign = 'left';
                          ctx.textBaseline = "middle";
                          ctx.fillStyle = "#6c7293";

                          var texts = "<?= $countOrderToday['countOrderToday'] ? $countOrderToday['countOrderToday'] : 0 ?> Order Today",
                              textsX = Math.round((width - ctx.measureText(text).width) / 2.4),
                              textsY = height / 1.7;

                          ctx.fillText(texts, textsX, textsY);
                          ctx.save();
                      }
                  }
                  var transactionhistoryChartCanvas = $("#transaction-history").get(0).getContext("2d");
                  var transactionhistoryChart = new Chart(transactionhistoryChartCanvas, {
                      type: 'doughnut',
                      data: areaData,
                      options: areaOptions,
                      plugins: transactionhistoryChartPlugins
                  });
              }
          });
      })(jQuery);

      // Revenue 12 month
      $(function () {
          'use strict';

          var data = {
              labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              datasets: [{
                  label: 'Total $',
                  data: [<?php
                      // total revenue 12 month
                      $twelveMonth = [];
                      for ($month = 1; $month <= 12; $month++) {
                          $start_date = date('Y-' . sprintf('%02d', $month) . '-01 00:00:00');
                          $end_date = date('Y-' . sprintf('%02d', $month + 1) . '-01 00:00:00');
                          if ($month == 12) {
                              $end_date = date('Y-01-01 00:00:00', strtotime('+1 year', strtotime($start_date)));
                          }
                          $totalRevenue = $this->db->table('orders')
                              ->select("SUM(order_total) as totalRevenueMonth$month")
                              ->where('create_at', '>', $start_date)
                              ->where('create_at', '<', $end_date)
                              ->where('is_delete', '=', 0)
                              ->first();
                          $twelveMonth["totalRevenueMonth$month"] = $totalRevenue;
                      }
                      for ($month = 1; $month <= 12; $month++) {
                          foreach ($twelveMonth["totalRevenueMonth$month"] as $value) {
                              echo $value ? $value : 0;
                          }
                          // Add a comma if it's not the last iteration
                          if ($month < 12) {
                              echo ', ';
                          }
                      }
                      ?>,],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)',
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
                      'rgba(255, 159, 64, 1)',
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1,
                  fill: false
              }]
          };
          // Get context with jQuery - using jQuery's .get() method.
          if ($("#barChart").length) {
              var barChartCanvas = $("#barChart").get(0).getContext("2d");
              // This will get the first returned node in the jQuery collection.
              var barChart = new Chart(barChartCanvas, {
                  type: 'bar',
                  data: data,
                  options: options
              });
          }

          var multiLineData = {
              labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
              datasets: [{
                  label: 'Dataset 1',
                  data: [12, 19, 3, 5, 2, 3],
                  borderColor: [
                      '#587ce4'
                  ],
                  borderWidth: 2,
                  fill: false
              },
                  {
                      label: 'Dataset 2',
                      data: [5, 23, 7, 12, 42, 23],
                      borderColor: [
                          '#ede190'
                      ],
                      borderWidth: 2,
                      fill: false
                  },
                  {
                      label: 'Dataset 3',
                      data: [15, 10, 21, 32, 12, 33],
                      borderColor: [
                          '#f44252'
                      ],
                      borderWidth: 2,
                      fill: false
                  }
              ]
          };
          var options = {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      },
                      gridLines: {
                          color: "rgba(204, 204, 204,0.1)"
                      }
                  }],
                  xAxes: [{
                      gridLines: {
                          color: "rgba(204, 204, 204,0.1)"
                      }
                  }]
              },
              legend: {
                  display: false
              },
              elements: {
                  point: {
                      radius: 0
                  }
              }
          };


          var doughnutPieData = {
              datasets: [{
                  data: [30, 40, 30],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.5)',
                      'rgba(54, 162, 235, 0.5)',
                      'rgba(255, 206, 86, 0.5)',
                      'rgba(75, 192, 192, 0.5)',
                      'rgba(153, 102, 255, 0.5)',
                      'rgba(255, 159, 64, 0.5)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
              }],

              // These labels appear in the legend and in the tooltips when hovering different arcs
              labels: [
                  'Pink',
                  'Blue',
                  'Yellow',
              ]
          };
          var doughnutPieOptions = {
              responsive: true,
              animation: {
                  animateScale: true,
                  animateRotate: true
              }
          };
          var areaData = {
              labels: ["2013", "2014", "2015", "2016", "2017"],
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
                  borderWidth: 1,
                  fill: true, // 3: no fill
              }]
          };

          var areaOptions = {
              plugins: {
                  filler: {
                      propagate: true
                  }
              },
              scales: {
                  yAxes: [{
                      gridLines: {
                          color: "rgba(204, 204, 204,0.1)"
                      }
                  }],
                  xAxes: [{
                      gridLines: {
                          color: "rgba(204, 204, 204,0.1)"
                      }
                  }]
              }
          }

          var multiAreaData = {
              labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              datasets: [{
                  label: 'Facebook',
                  data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
                  borderColor: ['rgba(255, 99, 132, 0.5)'],
                  backgroundColor: ['rgba(255, 99, 132, 0.5)'],
                  borderWidth: 1,
                  fill: true
              },
                  {
                      label: 'Twitter',
                      data: [7, 17, 12, 16, 14, 18, 16, 12, 15, 11, 13, 9],
                      borderColor: ['rgba(54, 162, 235, 0.5)'],
                      backgroundColor: ['rgba(54, 162, 235, 0.5)'],
                      borderWidth: 1,
                      fill: true
                  },
                  {
                      label: 'Linkedin',
                      data: [6, 14, 16, 20, 12, 18, 15, 12, 17, 19, 15, 11],
                      borderColor: ['rgba(255, 206, 86, 0.5)'],
                      backgroundColor: ['rgba(255, 206, 86, 0.5)'],
                      borderWidth: 1,
                      fill: true
                  }
              ]
          };

          var multiAreaOptions = {
              plugins: {
                  filler: {
                      propagate: true
                  }
              },
              elements: {
                  point: {
                      radius: 0
                  }
              },
              scales: {
                  xAxes: [{
                      gridLines: {
                          display: false
                      }
                  }],
                  yAxes: [{
                      gridLines: {
                          display: false
                      }
                  }]
              }
          }

          var scatterChartData = {
              datasets: [{
                  label: 'First Dataset',
                  data: [{
                      x: -10,
                      y: 0
                  },
                      {
                          x: 0,
                          y: 3
                      },
                      {
                          x: -25,
                          y: 5
                      },
                      {
                          x: 40,
                          y: 5
                      }
                  ],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)'
                  ],
                  borderWidth: 1
              },
                  {
                      label: 'Second Dataset',
                      data: [{
                          x: 10,
                          y: 5
                      },
                          {
                              x: 20,
                              y: -30
                          },
                          {
                              x: -25,
                              y: 15
                          },
                          {
                              x: -10,
                              y: 5
                          }
                      ],
                      backgroundColor: [
                          'rgba(54, 162, 235, 0.2)',
                      ],
                      borderColor: [
                          'rgba(54, 162, 235, 1)',
                      ],
                      borderWidth: 1
                  }
              ]
          }

          var scatterChartOptions = {
              scales: {
                  xAxes: [{
                      type: 'linear',
                      position: 'bottom',
                      gridLines: {
                          color: "rgba(204, 204, 204,0.1)"
                      }
                  }],
                  yAxes: [{
                      gridLines: {
                          color: "rgba(204, 204, 204,0.1)"
                      }
                  }]
              }
          }

          if ($("#lineChart").length) {
              var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
              var lineChart = new Chart(lineChartCanvas, {
                  type: 'line',
                  data: data,
                  options: options
              });
          }

          if ($("#linechart-multi").length) {
              var multiLineCanvas = $("#linechart-multi").get(0).getContext("2d");
              var lineChart = new Chart(multiLineCanvas, {
                  type: 'line',
                  data: multiLineData,
                  options: options
              });
          }

          if ($("#areachart-multi").length) {
              var multiAreaCanvas = $("#areachart-multi").get(0).getContext("2d");
              var multiAreaChart = new Chart(multiAreaCanvas, {
                  type: 'line',
                  data: multiAreaData,
                  options: multiAreaOptions
              });
          }

          if ($("#doughnutChart").length) {
              var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
              var doughnutChart = new Chart(doughnutChartCanvas, {
                  type: 'doughnut',
                  data: doughnutPieData,
                  options: doughnutPieOptions
              });
          }

          if ($("#pieChart").length) {
              var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
              var pieChart = new Chart(pieChartCanvas, {
                  type: 'pie',
                  data: doughnutPieData,
                  options: doughnutPieOptions
              });
          }

          if ($("#areaChart").length) {
              var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
              var areaChart = new Chart(areaChartCanvas, {
                  type: 'line',
                  data: areaData,
                  options: areaOptions
              });
          }

          if ($("#scatterChart").length) {
              var scatterChartCanvas = $("#scatterChart").get(0).getContext("2d");
              var scatterChart = new Chart(scatterChartCanvas, {
                  type: 'scatter',
                  data: scatterChartData,
                  options: scatterChartOptions
              });
          }

          if ($("#browserTrafficChart").length) {
              var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
              var doughnutChart = new Chart(doughnutChartCanvas, {
                  type: 'doughnut',
                  data: browserTrafficData,
                  options: doughnutPieOptions
              });
          }
      });
  </script>
</body>

</html>