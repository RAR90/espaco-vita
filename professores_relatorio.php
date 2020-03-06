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
    <!-- END: PAGE VENDOR CSS-->

    <?php
      include "includes/head/theme.css.php";
    ?>

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/style.css">
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
      include "includes/menus/aside-professores.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Professores</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="professores_list.php">Professores</a>
                  </li>
                  <li class="breadcrumb-item active">Relatório do Professor
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

                <div class="col l3 s12">
                  <div class="card-target card animate fadeLeft border-radius-6">
                    <div class="card-content" style="height: 275px;">
                      <h4 class="card-title mb-0">Aulas Ministradas</h4>
                      <div class="current-balance-container text-center">
                        <h5 class="center-align">
                          <i class="material-icons" style="font-size:70px">event_available</i><br>158
                        </h5>
                      </div>
                      <div class="input-field">
                        <select class="icons">
                          <option value="" disabled selected>Novembro</option>
                        </select>
                        <label>Mês</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col l3 s12">
                  <div class="card-target card animate fadeLeft border-radius-6">
                    <div class="card-content" style="height: 275px;">
                      <h4 class="card-title mb-0">Aulas Canceladas</h4>
                      <div class="current-balance-container text-center">
                        <h5 class="center-align">
                          <i class="material-icons" style="font-size:70px">event_busy</i><br>10
                        </h5>
                      </div>
                      <div class="input-field">
                        <select class="icons">
                          <option value="" disabled selected>Novembro</option>
                        </select>
                        <label>Mês</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col l3 s12">
                  <div class="card-target card animate fadeLeft border-radius-6">
                    <div class="card-content" style="height: 275px;">
                      <h4 class="card-title mb-0">Acessos ao App</h4>
                      <div class="current-balance-container text-center">
                        <h5 class="center-align">
                          <i class="material-icons" style="font-size:70px">smartphone</i><br>15805
                        </h5>
                      </div>
                      <div class="input-field">
                        <select class="icons">
                          <option value="" disabled selected>Novembro</option>
                        </select>
                        <label>Mês</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col l3 s12">
                  <div class="card-target card animate fadeLeft border-radius-6">
                    <div class="card-content" style="height: 275px;">
                      <h4 class="card-title mb-0">Aniversário</h4>
                      <p>Este professor faz aniversário em:</p>
                      <div class="current-balance-container text-center">
                        <h5 class="center-align">
                          <i class="material-icons mt-2" style="font-size:70px">event_note</i><br>25 de Dezembro
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col s12">
                  <div class="card border-radius-6">
                    <div class="card-content">

                      <!--Line Chart-->
                      <div id="chartjs-line-chart">
                          <div class="card-content">
                            <h4 class="card-title">Relação financeira do professor</h4>
                            <p class="caption">
                              Veja, através desse gráfico, a relação financeira do professor. Quanto ele arrecadou para a empresa em detrimento a quanto ele custou.
                            </p>
                            <div class="row mt-3">
                                <div class="col s12">
                                  <div class="sample-chart-wrapper"><canvas id="line-chart" height="400"></canvas></div>
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
    <!-- END PAGE VENDOR JS-->

    <?php
      include "includes/footer/theme.js.php";
      include "includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/scripts/professores_relatorio.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>