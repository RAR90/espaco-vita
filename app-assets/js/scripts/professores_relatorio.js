// /*
// * ChartJS - Chart
// */

// Line chart
// ------------------------------
$(window).on("load", function() {
    //Get the context of the Chart canvas element we want to select
    var ctx = $("#line-chart");

    // Chart Options
    var chartOptions = {
       responsive: true,
       maintainAspectRatio: false,
       legend: {
          position: "bottom"
       },
       hover: {
          mode: "label"
       },
       scales: {
          xAxes: [
             {
                display: true,
                gridLines: {
                   color: "#f3f3f3",
                   drawTicks: false
                },
                scaleLabel: {
                   display: true,
                   labelString: "Mês"
                }
             }
          ],
          yAxes: [
             {
                display: true,
                gridLines: {
                   color: "#f3f3f3",
                   drawTicks: false
                },
                scaleLabel: {
                   display: true,
                   labelString: "Reais"
                }
             }
          ]
       },
       title: {
          display: true,
          text: "Relação Financeira"
       }
    };

    // Chart Data
    var chartData = {
       labels: ["Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro"],
       datasets: [
          {
             label: "Arrecadado professor",
             data: [3500, 4800, 4850, 4750, 3890, 4030, 4000],
             fill: false,
             borderColor: "#66bb6a",
             pointBorderColor: "#66bb6a",
             pointBackgroundColor: "#FFF",
             pointBorderWidth: 2,
             pointHoverBorderWidth: 2,
             pointRadius: 4
          },
          {
             label: "Salário do professor",
             data: [2800, 3200, 5050, 3650, 2950, 3050, 3100],
             fill: false,
             borderColor: "#ff5722",
             pointBorderColor: "#ff5722",
             pointBackgroundColor: "#FFF",
             pointBorderWidth: 2,
             pointHoverBorderWidth: 2,
             pointRadius: 4
          }
       ]
    };

    var config = {
       type: "line",

       // Chart Options
       options: chartOptions,

       data: chartData
    };

    // Create the chart
    var lineChart = new Chart(ctx, config);

 });
