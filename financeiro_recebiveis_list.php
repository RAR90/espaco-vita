<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Financeiro Recebíveis</title>

    <?php
      include "app-includes/head/vendors.css.php";
    ?>

    <!-- BEGIN: PAGE VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/select.dataTables.min.css">
    <!-- END: PAGE VENDOR CSS-->

    <?php
      include "app-includes/head/theme.css.php";
    ?>

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/financeiro-recebiveis-list.css">
    <!-- END: Page Level CSS-->

    <?php
      include "app-includes/head/custom.css.php";
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
      include "app-includes/menus/header.php";
      include "app-includes/menus/aside-financeiro.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Recebíveis</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Financeiro</a>
                  </li>
                  <li class="breadcrumb-item active">Recebíveis
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



                      <div class="row">
                        <div class="col s12 p-0 mb-3">
                          <ul class="tabs">
                            <li class="tab col m3"><a class="active" href="#test1">ALUNOS</a></li>
                            <li class="tab col m3"><a href="#test2">OUTROS</a></li>
                          </ul>
                        </div>

                        <div id="test1" class="col s12 pl-1">
                          <table style="width:100%" id="page-length-option">
                            <thead>
                              <tr>
                                <th style="width: 100px">Data</th>
                                <th style="width: 100px">Valor</th>
                                <th>Nome</th>
                                <th style="width: 100px">Status</th>
                                <th class="text-center" style="width: 100px">Detalhes</th>
                                <th class="text-center" style="width: 100px">Dar Baixa</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>

                              <tr>
                                <td class="text-center">22/11/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Hugo Savoia</td>
                                <td class="text-center red-text">Atrasado</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Rafael Ribeiro</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                              <th style="width: 100px">Data</th>
                                <th style="width: 100px">Valor</th>
                                <th>Nome</th>
                                <th style="width: 100px">Status</th>
                                <th class="text-center" style="width: 100px">Detalhes</th>
                                <th class="text-center" style="width: 100px">Dar Baixa</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>

                        <div id="test2" class="col s12 pl-1">
                          <table style="width:100%" id="page-length-option-alt">
                            <thead>
                              <tr>
                                <th style="width: 100px">Data</th>
                                <th style="width: 100px">Valor</th>
                                <th>Origem</th>
                                <th style="width: 100px">Status</th>
                                <th class="text-center" style="width: 100px">Detalhes</th>
                                <th class="text-center" style="width: 100px">Dar Baixa</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">R$ 3800,00</td>
                                <td>Docinhos</td>
                                <td class="blue-text text-center">Em dia</td>
                                <td class="text-center">
                                  <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">search</i>
                                  </button>
                                </td>
                                <td class="text-center">
                                  <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                    <i class="material-icons">assignment_turned_in</i>
                                  </button>
                                </td>
                              </tr>

                            </tbody>
                            <tfoot>
                              <tr>
                              <th style="width: 100px">Data</th>
                                <th style="width: 100px">Valor</th>
                                <th>Origem</th>
                                <th style="width: 100px">Status</th>
                                <th class="text-center" style="width: 100px">Detalhes</th>
                                <th class="text-center" style="width: 100px">Dar Baixa</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>

                      </div>




                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- Modal Detalhes da Conta -->
            <div id="detalhes-conta" class="modal" style="width: 310px">
              <div class="modal-content">
                <div class="col s12">
                  <h5>Detalhes da Conta</h5>
                  <p>Detalhes da conta e o arquivo anexado.</p>
                </div>
                <!-- <div class="col s12">
                  <ul>
                    <li><strong>Professor: </strong>Alexandre Exemplo</li>
                    <li><strong>Aluno: </strong>Rafael Ribeiro</li>
                  </ul>
                  <ul>
                    <li><strong>Data: </strong>22/12/2019</li>
                    <li><strong>Horário: </strong>08:30</li>
                  </ul>
                </div> -->
                <!-- <div class="col s12 pb-5 text-center">
                  <a href="aulas_form.php" class="btn mb-5 mt-5 btn-small btn-flat waves-effect waves-light red accent-2 white-text">REAGENDAR</a>
                </div> -->
                <div class="col s12 pb-5 text-center">
                  <a onclick="closeModal('#detalhes-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">FECHAR</a>
                </div>
              </div>
            </div>
            <!--/ Modal Detalhes da Conta -->

            <!-- Modal Baixar Conta -->
            <div id="baixar-conta" class="modal" style="width: 400px">
              <div class="modal-content">
                <div class="col s12">
                  <h5>Dar Baixa na Conta</h5>
                  <p>Para dar baixa na conta, preencha os dados e faça upload do comprovante.</p>

                  <form action="#">
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>Comprovante</span>
                        <input type="file">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>
                  </form>

                </div>
                <div class="col s12 pb-5 text-center">
                  <a onclick="closeModal('#baixar-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">FECHAR</a>
                </div>
              </div>
            </div>
            <!--/ Modal Baixar Conta -->

            <?php
              include "app-includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="financeiro_recebiveis_form.php" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
                <i class="material-icons">add</i>
              </a>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- END: Page Main-->

    <?php
      include "app-includes/footer/credits.php";
      include "app-includes/footer/vendor.js.php";
    ?>

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/data-tables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/data-tables/js/dataTables.select.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "app-includes/footer/theme.js.php";
      include "app-includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/financeiro-recebiveis-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>