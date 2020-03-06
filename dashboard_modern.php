<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "includes/head/meta.php";
      include "includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Dashboard</title>

    <?php
      include "includes/head/vendors.css.php";
    ?>

    <!-- BEGIN: PAGE VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/chartist-js/chartist-plugin-tooltip.css">
    <!-- END: PAGE VENDOR CSS-->

    <?php
      include "includes/head/theme.css.php";
    ?>

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/intro.css">
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
      include "includes/menus/aside-dashboard.php";
    ?>

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-light-blue"></div>
        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h3 class="breadcrumbs-title mt-0 mb-0">Bem Vindo!</h3>
                <span class="breadcrumbs mb-0 text-white">
                  Obtenha aqui uma visão geral do sistema
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">

            <!-- Taréfas, Metas de Locação, Metas de Vendas -->
            <div class="row">

              <div class="col l6">
                <div class="card subscriber-list-card animate fadeRight border-radius-6">
                  <div class="subscriber-list-card-container">
                    <table class="subscription-table responsive-table highlight">
                      <tbody>
                        <tr>
                          <td class="red-text text-center p-0 pt-2 pb-2 pl-2">
                            Aula<br>Reagendada
                          </td>
                          <td class="pl-5">
                            <span>Aluno: Marcelo Rossi - Professor: Marcio Eiras - de 22/03/2019 às 22:00 para 24/03/2019 às 22:00</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="green-text text-center p-0 pt-2 pb-2 pl-2">
                            Aula<br>Finalizada
                          </td>
                          <td class="pl-5">
                            <span>Aluno: Marcelo Rossi - Professor: Marcio Eiras - 22/03/2019 às 22:00</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="blue-text text-center p-0 pt-2 pb-2 pl-2">
                            Aula Iniciada
                          </td>
                          <td class="pl-5">
                            <span>Aluno: Hugo Savoia - Professor: Marcio Eiras - 22/03/2019 às 22:00</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="blue-text text-center p-0 pt-2 pb-2 pl-2">
                            Aula Iniciada
                          </td>
                          <td class="pl-5">
                            <span>Aluno: Hugo Savoia - Professor: Marcio Eiras - 22/03/2019 às 22:00</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="blue-text text-center p-0 pt-2 pb-2 pl-2">
                            Aula Iniciada
                          </td>
                          <td class="pl-5">
                            <span>Aluno: Hugo Savoia - Professor: Marcio Eiras - 22/03/2019 às 22:00</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="blue-text text-center p-0 pt-2 pb-2 pl-2">
                            Aula Iniciada
                          </td>
                          <td class="pl-5">
                            <span>Aluno: Hugo Savoia - Professor: Marcio Eiras - 22/03/2019 às 22:00</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="blue-text text-center p-0 pt-2 pb-2 pl-2">
                            Aula Iniciada
                          </td>
                          <td class="pl-5">
                            <span>Aluno: Hugo Savoia - Professor: Marcio Eiras - 22/03/2019 às 22:00</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="blue-text text-center p-0 pt-2 pb-2 pl-2">
                            Aula Iniciada
                          </td>
                          <td class="pl-5">
                            <span>Aluno: Hugo Savoia - Professor: Marcio Eiras - 22/03/2019 às 22:00</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>

              <div class="col l3">
                <!-- Current Balance -->
                <div class="card-target card animate fadeLeft border-radius-6">
                  <div class="card-content">
                    <h4 class="card-title mb-0">Professores</h4>
                    <p class="medium-small">Professores ativos no sistema</p>
                    <div class="current-balance-container text-center">
                      <h2 class="center-align pt-5">
                        <i class="material-icons" style="font-size:80px">assignment_ind</i>
                        <br>
                        58
                      </h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col l3">
                <!-- Current Balance -->
                <div class="card-target card animate fadeLeft border-radius-6">
                  <div class="card-content">
                    <h4 class="card-title mb-0">Alunos</h4>
                    <p class="medium-small">Alunos ativos no sistema</p>
                    <div class="current-balance-container text-center">
                      <h2 class="center-align pt-5">
                        <i class="material-icons" style="font-size:80px">account_box</i>
                        <br>
                        20
                      </h2>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- /Taréfas, Metas de Locação, Metas de Vendas -->

            <!-- Overview do sistema -->
            <div class="row">
              <div class="col s12 m6 l3">
                <div class="ct-chart card z-depth-2 border-radius-6">
                  <div class="card-content">
                    <div class="row">
                      <div class="col s12">
                        <h4 class="card-title">Novos Alunos</h4>
                      </div>
                      <div class="col s12">
                        <h5 class="mt-4 pink-text accent-2 float-left"><i class="material-icons vertical-align-bottom">arrow_upward</i>
                          94
                        </h5>
                        <div id="sales-bar-1" class="float-right"></div>
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
                        <h4 class="card-title">Aulas Dadas</h4>
                      </div>
                      <div class="col s12">
                        <h5 class="mt-4 blue-text float-left"><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                          1896
                        </h5>
                        <div id="sales-bar-2" class="float-right"></div>
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
                        <h4 class="card-title">Alunos Pilates</h4>
                      </div>
                      <div class="col s12 light-green-text">
                        <h5 class="mt-4 float-left green-text"><i class="material-icons vertical-align-bottom">arrow_upward</i>
                          856
                        </h5>
                        <div id="sales-bar-3" class="float-right"></div>
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
                        <h4 class="card-title">Aulas Canceladas</h4>
                      </div>
                      <div class="col s12 amber-text accent-2">
                        <h5 class="mt-4 amber-text float-left"><i class="material-icons dp48 vertical-align-bottom">arrow_downward</i>
                          -15%
                        </h5>
                        <div id="sales-bar-4" class="float-right"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Overview do sistema -->

            <!-- Total Movimentado e Arrecadação por modalidade -->
            <div class="row">
              <div class="col s12 l4">

                <div class="card user-statistics-card animate fadeLeft border-radius-6" style="height: 388px">
                  <div class="card-content">
                    <h4 class="card-title mb-0">Alunos por modalidade</h4>
                    <div class="row">
                      <div class="col s12 m6">
                        <ul class="collection border-none mb-0">
                          <li class="collection-item avatar">
                            <i class="material-icons circle orange accent-2">trending_up</i>
                            <p class="medium-small">Pilates</p>
                            <h5 class="mt-0 mb-0">60%</h5>
                          </li>
                        </ul>
                      </div>
                      <div class="col s12 m6">
                        <ul class="collection border-none mb-0">
                          <li class="collection-item avatar">
                            <i class="material-icons circle orange-dark accent-4">trending_down</i>
                            <p class="medium-small">Funcional</p>
                            <h5 class="mt-0 mb-0">40%</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="user-statistics-container">
                      <div id="user-statistics-bar-chart" class="user-statistics-shadow"></div>
                    </div>
                  </div>
                </div>
              </div>

              <!--Line Chart-->
              <div class="col s12 m8 l8 animate fadeRight">
                <div id="chartjs-line-chart" class="card border-radius-6">
                  <div class="card-content">
                    <h4 class="card-title">Frequência por modalidade</h4>
                    <div class="row">
                      <div class="sample-chart-wrapper"><canvas id="line-chart" height="300"></canvas></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!--/ Total Movimentado e Arrecadação por modalidade -->

            <?php
              include "includes/menus/aside-right.php";
            ?>

            <!-- Modal Intro -->
            <div id="intro">
              <div class="row">
                <div class="col s12">
                  <div id="img-modal" class="modal white">
                    <div class="modal-content">
                      <div class="bg-img-div"></div>
                      <p class="modal-header right modal-close">
                        Pular Introdução <span class="right"><i class="material-icons right-align">clear</i></span>
                      </p>
                      <div class="carousel carousel-slider center intro-carousel">
                        <div class="carousel-fixed-item center middle-indicator">
                          <div class="left">
                            <button class="movePrevCarousel middle-indicator-text btn btn-flat orange-text waves-effect waves-light btn-prev">
                            <i class="material-icons">navigate_before</i> <span class="hide-on-small-only">Prev</span>
                            </button>
                          </div>
                          <div class="right">
                            <button class=" moveNextCarousel middle-indicator-text btn btn-flat orange-text waves-effect waves-light btn-next">
                            <span class="hide-on-small-only">Próximo</span> <i class="material-icons">navigate_next</i>
                            </button>
                          </div>
                        </div>
                        <div class="carousel-item slide-1">
                          <h5 class="intro-step-title mt-7 center animated fadeInUp">Bem vindo ao Materialize Teclabs</h5>
                          <img src="assets/images/gallery/intro-slide-1.png" alt="" class="responsive-img animated fadeInUp slide-1-img">
                          <p class="intro-step-text mt-5 animated fadeInUp">
                              O Materialize Teclabs é a Dashboard baseada em Material Design da Teclabs.
                              Oferece centenas de recursos, plugins e estilos para construção de qualquer sistema.
                              Desenvolvido utilizando todas as recomendações do Google, é a base para construção de qualquer sistem web ou mobile<br> Aproveite! =))
                          </p>
                        </div>
                        <div class="carousel-item slide-2">
                          <h5 class="intro-step-title mt-7 center">Example Request Information</h5>
                          <img src="assets/images/gallery/intro-features.png" alt="" class="responsive-img slide-2-img">
                          <p class="intro-step-text mt-5">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit.
                            Aperiam deserunt nulla
                            repudiandae odit quisquam incidunt, maxime explicabo.
                          </p>
                          <div class="row">
                            <div class="col s6">
                              <div class="input-field">
                                <label for="first_name">Name</label>
                                <input placeholder="Name" id="first_name" type="text" class="validate">
                              </div>
                            </div>
                            <div class="col s6">
                              <div class="input-field">
                                <select>
                                  <option value="" disabled selected>Choose your option</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                                </select>
                                <label>Materialize Select</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item slide-3">
                          <h5 class="intro-step-title mt-7 center">Showcase App Features</h5>
                          <img src="assets/images/gallery/intro-app.png" alt="" class="responsive-img slide-1-img">
                          <div class="row">
                            <div class="col m5 offset-m1 s12">
                              <ul class="feature-list left-align">
                                <li><i class="material-icons">check</i> Email Application</li>
                                <li><i class="material-icons">check</i> Chat Application</li>
                                <li><i class="material-icons">check</i> Todo Application</li>
                              </ul>
                            </div>
                            <div class="col m6 s12">
                              <ul class="feature-list left-align">
                                <li><i class="material-icons">check</i>Contacts Application</li>
                                <li><i class="material-icons">check</i>Full Calendar</li>
                                <li><i class="material-icons">check</i> Ecommerce Application</li>
                              </ul>
                            </div>
                            <div class="row">
                              <div class="col s12 center">
                                <button class="get-started btn waves-effect waves-light gradient-45deg-purple-deep-orange mt-3 modal-close">Get
                                Started</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Modal Intro -->

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
    <script src="assets/vendors/chartist-js/chartist-plugin-tooltip.js" type="text/javascript"></script>
    <script src="assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js" type="text/javascript"></script>
    <script src="assets/vendors/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "includes/footer/theme.js.php";
      include "includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/scripts/dashboard-modern.js" type="text/javascript"></script>
    <!-- <script src="assets/js/scripts/intro.js" type="text/javascript"></script> -->
    <!-- END PAGE LEVEL JS-->

  </body>
</html>