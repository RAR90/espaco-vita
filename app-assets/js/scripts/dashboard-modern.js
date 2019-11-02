// Dashboard - Modern
//----------------------

(function (window, document, $) {
    // //Sample toast
    setTimeout(function () {
        M.toast({ html: "Olá! Eu sou um exemplo de Toast" });
    }, 2000);


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
                labelString: "Aulas"
             }
          }
       ]
    },
    title: {
       display: true,
       text: "Frequência dos alunos por modalidade"
    }
 };

 // Chart Data
 var chartData = {
    labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
    datasets: [
       {
          label: "Pilates",
          data: [65, 59, 80, 81, 56, 55, 40],
          fill: false,
          borderColor: "#e91e63",
          pointBorderColor: "#e91e63",
          pointBackgroundColor: "#FFF",
          pointBorderWidth: 2,
          pointHoverBorderWidth: 2,
          pointRadius: 4
       },
       {
          label: "Funcional",
          data: [28, 48, 40, 19, 86, 27, 90],
          fill: false,
          borderColor: "#03a9f4",
          pointBorderColor: "#03a9f4",
          pointBackgroundColor: "#FFF",
          pointBorderWidth: 2,
          pointHoverBorderWidth: 2,
          pointRadius: 4
       },
       {
          label: "Estética",
          data: [45, 25, 16, 36, 67, 18, 76],
          fill: false,
          borderColor: "#ffc107",
          pointBorderColor: "#ffc107",
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


    // User Statics
    var UserStatisticsBarChart = new Chartist.Bar(
        "#user-statistics-bar-chart",
        {
            labels: ["B1", "B2", "B3", "B4", "B5", "B6"],
            series: [[4000, 8000, 12000, 14000, 12000, 18000], [5000, 10000, 13000, 12000, 11000, 15000]]
        },
        {
            // Default mobile configuration
            stackBars: true,
            chartPadding: 0,
            axisX: {
                showGrid: false
            },
            axisY: {
                showGrid: false,
                labelInterpolationFnc: function (value) {
                    return value / 1000 + "k";
                },
                scaleMinSpace: 50
            },
            plugins: [Chartist.plugins.tooltip({ class: "user-statistics-tooltip", appendToBody: true })]
        },
        [
            // Options override for media > 800px
            [
                "screen and (min-width: 800px)",
                {
                    stackBars: false,
                    seriesBarDistance: 10
                }
            ],
            // Options override for media > 1000px
            [
                "screen and (min-width: 1000px)",
                {
                    reverseData: false,
                    horizontalBars: false,
                    seriesBarDistance: 15
                }
            ]
        ]
    );

    UserStatisticsBarChart.on("draw", function (data) {
        if (data.type === "bar") {
            data.element.attr({
                style: "stroke-width: 12px",
                x1: data.x1 + 0.001
            });
            data.group.append(
                new Chartist.Svg(
                    "circle",
                    {
                        cx: data.x2,
                        cy: data.y2,
                        r: 6
                    },
                    "ct-slice-pie"
                )
            );
            data.element.animate({
                y2: {
                    begin: 500,
                    dur: 500,
                    from: data.y1,
                    to: data.y2
                }
            });


        }
    });

    UserStatisticsBarChart.on("created", function (data) {
        var defs = data.svg.querySelector("defs") || data.svg.elem("defs");
        defs
            .elem("linearGradient", {
                id: "barGradient1",
                x1: 0,
                y1: 0,
                x2: 0,
                y2: 1
            })
            .elem("stop", {
                offset: 0,
                "stop-color": "#F79543"
            })
            .parent()
            .elem("stop", {
                offset: 1,
                "stop-color": "#F79543"
            });

        defs
            .elem("linearGradient", {
                id: "barGradient2",
                x1: 0,
                y1: 0,
                x2: 0,
                y2: 1
            })
            .elem("stop", {
                offset: 0,
                "stop-color": "#bb5f14"
            })
            .parent()
            .elem("stop", {
                offset: 1,
                "stop-color": "#bb5f14"
            });
        return defs;
    });

    $("#sales-bar-1").sparkline([2, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7], {
      type: 'bar',
      height: '50',
      width: '80',
      barSpacing: 2,
      barColor: '#FF4081',
      //tooltipFormat: $.spformat('{{value}}', 'tooltip-class')
    });

    $("#sales-bar-2").sparkline([2, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7], {
      type: 'bar',
      height: '50',
      width: '80',
      barSpacing: 2,
      barColor: '#2196f3',
      //tooltipFormat: $.spformat('{{value}}', 'tooltip-class')
    });

    $("#sales-bar-3").sparkline([2, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7], {
      type: 'bar',
      height: '50',
      width: '80',
      barSpacing: 2,
      barColor: '#8bc34a',
      //tooltipFormat: $.spformat('{{value}}', 'tooltip-class')
    });

    $("#sales-bar-4").sparkline([2, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7], {
      type: 'bar',
      height: '50',
      width: '80',
      barSpacing: 2,
      barColor: '#ffd740',
      //tooltipFormat: $.spformat('{{value}}', 'tooltip-class')
    });

})(window, document, jQuery);