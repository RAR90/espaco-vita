<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "includes/head/meta.php";
      include "includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Relatórios</title>

    <?php
      include "includes/head/vendors.css.php";
    ?>

    <!-- BEGIN: PAGE VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/chartist-js/chartist.css">
    <!-- END: PAGE VENDOR CSS-->

    <?php
      include "includes/head/theme.css.php";
    ?>

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/charts-sparkline.css">
    <!-- END: Page Level CSS-->

    <?php
      include "includes/head/custom.css.php";
    ?>

  </head>
  <!-- END: Head-->

  <body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns"
    data-open="click"
    data-menu="vertical-modern-menu"
    data-col="2-columns"
  >

    <?php
      include "includes/menus/header.php";
      include "includes/menus/aside-relatorios.php";
    ?>


    <!-- BEGIN: Page Main-->
    <div id="main">

      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-light-blue"></div>

        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">

              <!-- Title & Breadcrumbs -->
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Relatórios</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item">
                    <a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#">Relatórios</a>
                  </li>
                </ol>
              </div>
              <!--/ Title & Breadcrumbs -->

            </div>
          </div>
        </div>

        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">

              <!-- Page Length Options -->
              <div class="row">
                <div class="col s12">
                  <div class="card border-radius-6">
                    <div class="card-content">

                      <!--Line Chart-->
                      <div id="chartjs-line-chart">
                          <div class="card-content">
                            <h4 class="card-title">Line Chart</h4>
                            <p class="caption">
                                <a href="http://www.chartjs.org/docs/#getting-started" target="_blank">Chart.js</a> provides simple,
                                responsive,
                                clean and engaging charts for designers and developers.
                            </p>
                            <div class="row">
                                <div class="col s12">
                                  <p class="mb-2">
                                      A line chart is a way of plotting data points on a line. Often, it is used to show trend data, and
                                      the
                                      comparison of two data sets.
                                  </p>
                                  <div class="sample-chart-wrapper"><canvas id="line-chart" height="400"></canvas></div>
                                </div>
                            </div>
                          </div>
                      </div>

                      <!--Bar Chart-->
                      <div id="chartjs-bar-chart">
                          <div class="card-content">
                            <h4 class="card-title">Bar Chart</h4>
                            <div class="row">
                                <div class="col s12">
                                  <p class="mb-2">
                                      A bar chart is a way of showing data as bars. It is sometimes used to show trend data, and the
                                      comparison
                                      of multiple data sets side by side.
                                  </p>
                                  <div class="sample-chart-wrapper"><canvas id="bar-chart" height="400"></canvas></div>
                                </div>
                            </div>
                          </div>
                      </div>

                      <!--Radar Chart-->
                      <div id="chartjs-radar-chart">
                          <div class="card-content">
                            <h4 class="card-title">Radar Chart</h4>
                            <div class="row">
                                <div class="col s12">
                                  <p class="mb-2">
                                      A radar chart is a way of showing multiple data points and the variation between them.They are often
                                      useful
                                      for comparing the points of two or more different data sets.
                                  </p>
                                  <div class="sample-chart-wrapper"><canvas id="radar-chart" height="400"></canvas></div>
                                </div>
                            </div>
                          </div>
                      </div>

                      <!--Polar Chart-->
                      <div id="chartjs-polar-chart">
                          <div class="card-content">
                            <h4 class="card-title">Polar Chart</h4>
                            <div class="row">
                                <div class="col s12">
                                  <p class="mb-2">
                                      Polar area charts are similar to pie charts, but each segment has the same angle - the radius of the
                                      segment differs depending on the value.
                                  </p>
                                  <div class="sample-chart-wrapper"><canvas id="polar-chart" height="400"></canvas></div>
                                </div>
                            </div>
                          </div>
                      </div>

                      <!--Pie & Doughnut Charts-->
                      <div id="chartjs-pie-chart">
                          <div class="card-content">
                            <h4 class="card-title">Pie & Doughnut Charts</h4>
                            <div class="row">
                                <div class="col s12">
                                  <p class="mb-2">
                                      Pie and doughnut charts are probably the most commonly used chart there are. They are divided into
                                      segments, the arc of each segment shows the proportional value of each piece of data.
                                  </p>
                                  <div class="row">
                                      <div class="col s12 m6 l6">
                                        <div class="sample-chart-wrapper"><canvas id="pie-chart" height="400"></canvas></div>
                                        <p class="header center">Pie Charts</p>
                                      </div>
                                      <div class="col s12 m6 l6">
                                        <div class="sample-chart-wrapper"><canvas id="doughnut-chart" height="400"></canvas></div>
                                        <p class="header center">Doughnut Charts</p>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>


                      <div class="seaction" id="materialize-chartist">

                        <!--Simple Line Chart-->
                        <div id="ct1-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Simple Line Chart</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> An example of a simple line chart with three series. You can edit this example in realtime.
                              </p>
                          </div>
                        </div>

                        <!--Holes In Data-->
                        <div id="ct2-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Holes In Data</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> Chartist does not freak out if you have holes in your data. Instead it will render the lines in segments and handles these holes gracefully. This also allows you to introduce a line at a later point or to terminate the series before others.
                              </p>
                          </div>
                        </div>

                        <!--Line Scatter Diagram With Responsive Settings-->
                        <div id="ct3-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Line Scatter Diagram With Responsive Settings</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> This advanced example uses a line chart to draw a scatter diagram. The data object is created with a functional style random mechanism. There is a mobile first responsive configuration using the responsive options to show less labels on small screens.
                              </p>
                          </div>
                        </div>

                        <!--Line Chart With Area-->
                        <div id="ct4-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Line Chart With Area</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> This chart uses the showArea option to draw line, dots but also an area shape. Use the low option to specify a fixed lower bound that will make the area expand. You can also use the areaBase property to specify a data value that will be used to determine the area shape base position (this is 0 by default).
                              </p>
                          </div>
                        </div>

                        <!--Bi-polar Line Chart With Area Only-->
                        <div id="ct5-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Bi-polar Line Chart With Area Only</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> You can also only draw the area shapes of the line chart. Area shapes will always be constructed around their areaBase (that can be configured in the options) which also allows you to draw nice bi-polar areas.
                              </p>
                          </div>
                        </div>

                        <!--Using Events To Replace Graphics-->
                        <div id="ct6-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Using Events To Replace Graphics</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> Chartist has fixed graphical representations that are chosen because of their flexibility and to provide a high level of separation of the concerns. However, sometimes you probably would like to use different shapes or even images for your charts. One way to achieve this is by using the draw events and replace or add custom SVG shapes.
                              </p>
                          </div>
                        </div>

                        <!--Bi-Polar Bar Chart-->
                        <div id="ct7-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Bi-Polar Bar Chart</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> A bi-polar bar chart with a range limit set with low and high. There is also an interpolation function used to skip every odd grid line / label.
                              </p>
                          </div>
                        </div>

                        <!--Overlapping Bars On Mobile-->
                        <div id="ct8-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Overlapping Bars On Mobile</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> This example makes use of label interpolation and the seriesBarDistance property that allows you to make bars overlap over each other. This then can be used to use the available space on mobile better. Resize your browser to see the effect of the responsive configuration.
                              </p>
                          </div>
                        </div>

                        <!--Simple Pie Chart-->
                        <div id="ct9-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Simple Pie Chart</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> A very simple pie chart with label interpolation to show percentage instead of the actual data series value.
                              </p>
                          </div>
                        </div>

                        <!--Animating A Donut With Svg.animate-->
                        <div id="ct10-chart" class="ct-chart">
                          <div class="card-content">
                              <h4 class="card-title">Animating A Donut With Svg.animate</h4>
                              <p class="caption">
                                <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> Although it'd be also possible to achieve this animation with CSS, with some minor suboptimal things, here's an example of how to animate donut charts using Chartist.Svg.animate and SMIL.
                              </p>
                          </div>
                        </div>

                      </div>

<!--Simple Line Chart-->
<div class="row">
            <div class="col s12 m6 l3">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <div class="row">
                                    <div class="col s12">
                                          <h4 class="card-title">Total Visit</h4>
                                    </div>
                                    <div class="col s12 display-flex">
                                          <div id="sales-bar-1"></div>
                                          <p class="mt-4 pink-text accent-2"><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                                                9504</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m6 l3">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <div class="row">
                                    <div class="col s12">
                                          <h4 class="card-title">Total Page Views</h4>
                                    </div>
                                    <div class="col s12 display-flex">
                                          <div id="sales-bar-2"></div>
                                          <p class="mt-4 blue-text"><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                                                1896</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m6 l3">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <div class="row">
                                    <div class="col s12">
                                          <h4 class="card-title">Unique Visitor</h4>
                                    </div>
                                    <div class="col s12 display-flex light-green-text">
                                          <div id="sales-bar-3"></div>
                                          <p class="mt-4 "><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                                                8546</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m6 l3">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <div class="row">
                                    <div class="col s12">
                                          <h4 class="card-title">Bounce Rate</h4>
                                    </div>
                                    <div class="col s12 display-flex amber-text accent-2">
                                          <div id="sales-bar-4"></div>
                                          <p class="mt-4 "><i class="material-icons dp48 vertical-align-bottom">arrow_downward</i>
                                                15%</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m6 l4">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <h4 class="card-title">Inline Chart</h4>
                              <div id="invoice-line" class="center"></div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m6 l4">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <h4 class="card-title">Bar Chart</h4>
                              <div id="clients-bar" class="center"></div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m12 l4">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <div class="row">
                                    <div class="col s12">
                                          <h4 class="card-title">Pie Chart</h4>
                                    </div>
                                    <div class="col s12">
                                          <div id="pie-chart-sample" class="center"></div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m12 l4">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <h4 class="card-title">Tristate chart</h4>
                              <div id="profit-tristate" class="center"></div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m12 l4">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <div class="row">
                                    <div class="col s12">
                                          <h4 class="card-title">Bar Chart</h4>
                                    </div>
                                    <div class="col s12">
                                          <div id="bar-chart-sample" class="center"></div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col s12 m12 l4">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                        <div class="card-content">
                              <h4 class="card-title">Bar + line composite charts</h4>
                              <div id="sales-compositebar" class="center"></div>
                        </div>
                  </div>
            </div>
      </div>


                    </div>
                  </div>
                </div>
              </div>

            </div>

            <?php
              include "includes/menus/aside-right.php";
            ?>

          </div>
        </div>
      </div>

    </div>
    <!-- END: Page Main-->

    <?php
      include "includes/footer/credits.php";
      include "includes/footer/vendor.js.php";
    ?>

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="assets/vendors/chartjs/chart.min.js" type="text/javascript"></script>
    <script src="assets/vendors/chartist-js/chartist.min.js" type="text/javascript"></script>
    <script src="assets/vendors/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "includes/footer/theme.js.php";
      include "includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/scripts/charts-chartjs.js" type="text/javascript"></script>
    <script src="assets/js/scripts/charts-chartist.js" type="text/javascript"></script>
    <script src="assets/js/scripts/charts-sparklines.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>