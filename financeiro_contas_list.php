<?php

$planoDeConta = '';

$origem =	'Salário do professor Rafael Antônio';
$vencimento =	'22/12/2019';

if (isset($_GET['planoDeConta'])) {
  $planoDeConta = $_GET['planoDeConta'];
}

?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "includes/head/meta.php";
      include "includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Financeiro Contas</title>

    <?php
      include "includes/head/vendors.css.php";
    ?>

    <!-- BEGIN: PAGE VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/data-tables/css/select.dataTables.min.css">
    <!-- END: PAGE VENDOR CSS-->

    <?php
      include "includes/head/theme.css.php";
    ?>

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/financeiro-contas-list.css">
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
      include "includes/menus/aside-financeiro.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Contas a Pagar - <?=$planoDeConta;?></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Financeiro</a>
                  </li>
                  <li class="breadcrumb-item active">Lista de Contas
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
              <div class="row">
                <div class="col s12">
                  <div class="card border-radius-6">
                    <div class="card-content">

                      <table id="page-length-option" class="data-table">
                        <thead>
                          <tr>
                            <th style="width: 100px">Vencimento</th>
                            <th style="width: 100px">Valor</th>
                            <th>Origem</th>
                            <th style="width: 100px">Status</th>
                            <th class="text-center" style="width: 100px">Editar</th>
                            <th class="text-center" style="width: 100px">Dar Baixa</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td class="text-center">22/12/2019</td>
                            <td class="text-center">R$ 13000,00</td>
                            <td>Nome de origem de conta, montado automaticamente através das opções escolhidas no lançamento.</td>
                            <td class="blue-text text-center">Em dia</td>
                            <td class="text-center">
                              <a href="financeiro_contas_form.php?action=edit" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </a>
                            </td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#baixar-conta', 'ajax/baixar_conta.php', {'id':'01'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                <i class="material-icons">assignment_turned_in</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">22/12/2019</td>
                            <td class="text-center">R$ 13000,00</td>
                            <td>Nome de origem de conta, montado automaticamente através das opções escolhidas no lançamento.</td>
                            <td class="blue-text text-center">Em dia</td>
                            <td class="text-center">
                              <a href="financeiro_contas_form.php?action=edit" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </a>
                            </td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#baixar-conta', 'ajax/baixar_conta.php', {'id':'01'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                <i class="material-icons">assignment_turned_in</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">22/12/2019</td>
                            <td class="text-center">R$ 13000,00</td>
                            <td>Nome de origem de conta, montado automaticamente através das opções escolhidas no lançamento.</td>
                            <td class="blue-text text-center">Em dia</td>
                            <td class="text-center">
                              <a href="financeiro_contas_form.php?action=edit" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </a>
                            </td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#baixar-conta', 'ajax/baixar_conta.php', {'id':'01'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                <i class="material-icons">assignment_turned_in</i>
                              </button>
                            </td>
                          </tr>

                        </tbody>
                        <tfoot>
                          <tr>
                            <th style="width: 100px">Vencimento</th>
                            <th style="width: 100px">Valor</th>
                            <th>Nome do Professor</th>
                            <th style="width: 100px">Status</th>
                            <th class="text-center" style="width: 100px">Editar</th>
                            <th class="text-center" style="width: 100px">Dar Baixa</th>
                          </tr>
                        </tfoot>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Baixar Conta -->
            <div id="baixar-conta" class="modal" style="width: 650px">
              <div class="modal-content">
                <!-- Gravar -->
                <div class="col s12 pb-5 text-center">
                  <a onclick="closeModal('#baixar-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light grey light-2 white-text">FECHAR</a>
                </div>
                <!--/ Gravar -->
              </div>
            </div>
            <!--/ Modal Baixar Conta -->

            <?php
              include "includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="financeiro_contas_form.php?action=edit" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
                <i class="material-icons">add</i>
              </a>
            </div>

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
    <script src="assets/vendors/data-tables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/vendors/formatter/jquery.formatter.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "includes/footer/theme.js.php";
      include "includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/scripts/financeiro-contas-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>