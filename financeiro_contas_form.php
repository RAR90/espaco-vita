<?php

$planoDeContas = '';
$professor = '';
$valor = '';
$vencimento = '1990-03-26';
$obs = '';

$pageTitle = 'Lançar Conta';

if (isset($_GET['action']) && $_GET['action'] == 'edit') {
  $pageTitle = 'Editar Conta';
}


?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Adicionar Conta</title>

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/aulas-form.css">
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><?=$pageTitle;?></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="aulas_list.php">Financeiro</a>
                  </li>
                  <li class="breadcrumb-item active">
                    <?=$pageTitle;?>
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

                  <!-- Informações Básicas -->
                  <div class="card border-radius-6">
                    <div class="card-content">

                      <div class="row">
                        <div class="col s12 pt-2">
                          <form action="financeiro_contas_form.php" class="pr-5">

                            <!-- Plano de Contas -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">menu_book</i>
                              <select name="planoDeContas">
                                <option value="" disabled selected>Escolha um plano de contas</option>
                                <option value="">Infraestrutura</option>
                                <option value="">Funcionários</option>
                                <option value="">Terceirizados</option>
                                <option value="">Avulsos</option>
                              </select>
                              <label>Plano de Contas</label>
                            </div>
                            <!--/ Plano de Contas -->

                            <!-- Funcionário ou Professor -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">account_circle</i>
                              <select name="professor">
                                <option value="" disabled selected>Escolha um Funcionário ou Professor</option>
                                <option value="">Hugo Savoia</option>
                                <option value="">Rafael Ribeiro</option>
                                <option value="">Raquel Pacheco</option>
                              </select>
                              <label>Funcionário ou Professor (opcional)</label>
                            </div>
                            <!--/ Funcionário ou Professor -->

                            <!-- Valor -->
                            <div class="input-field col s4">
                              <i class="material-icons prefix">attach_money</i>
                              <input id="valor" name="valor" type="text" placeholder="50,00" value="<?=$valor;?>">
                              <label for="valor" class="active">Valor</label>
                            </div>
                            <!--/ Valor -->

                            <!-- Vencimento -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">today</i>
                              <input id="vencimento" name="vencimento" type="date" class="datepicker" value="<?=$vencimento;?>">
                              <label for="vencimento" class="active">Data de vencimento</label>
                            </div>
                            <!--/ Vencimento -->

                            <!-- Observação -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">book</i>
                              <textarea name="obs" id="obs" rows="10"><?=$obs;?></textarea>
                              <label for="obs" class="active label-textarea">Observação</label>
                            </div>
                            <!--/ Observação -->

                            <!-- Botão Lançar -->
                            <div class="row">
                              <div class="input-field col s12">
                                <button type="submit" class="waves-effect waves-light btn-large float-right mr-1 mb-1">
                                  LANÇAR
                                </button>
                              </div>
                            </div>
                            <!--/ Botão Lançar -->

                          </form>

                        </div>
                      </div>

                    </div>
                  </div>
                  <!--/ Informações Básicas -->

                </div>

              </div>
            </div>

            <?php
              include "app-includes/menus/aside-right.php";
            ?>

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
    <script src="app-assets/js/scripts/aulas-form.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>