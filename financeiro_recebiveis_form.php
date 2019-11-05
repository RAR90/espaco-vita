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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/financeiro-recebiveis-form.css">
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Incluir Recebível</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="aulas_list.php">Financeiro</a>
                  </li>
                  <li class="breadcrumb-item active">Incluir Recebível
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

                <div class="col s12 l6">

                  <!-- Informações Básicas -->
                  <div class="card border-radius-6 pt-5">
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="financeiro_contas_list.php" class="pr-5">

                            <div class="input-field col s12">
                              <i class="material-icons prefix">today</i>
                              <input id="data" type="text" class="datepicker" placeholder="04/11/2019">
                              <label for="data" class="active">Data de vencimento</label>
                            </div>

                            <div class="input-field col s12">
                              <i class="material-icons prefix">assignment</i>
                              <select>
                                <option value="" disabled selected>Aluno</option>
                                <option value="" disabled selected>Outros</option>
                              </select>
                              <label>Categoria</label>
                            </div>

                            <div class="input-field col s12">
                              <i class="material-icons prefix">assignment</i>
                              <select>
                                <option value="" disabled selected>Aluno</option>
                                <option value="" disabled selected>Outros</option>
                              </select>
                              <label>Escolha um Aluno</label>
                            </div>

                            <div class="input-field col s12">
                              <i class="material-icons prefix">attach_money</i>
                              <input id="data" type="text" placeholder="50,00">
                              <label for="data" class="active">Descrição</label>
                            </div>

                            <div class="input-field col s12">
                              <i class="material-icons prefix">today</i>
                              <select>
                                <option value="" disabled selected>Mensal</option>
                                <option value="" disabled selected>Semanal</option>
                                <option value="" disabled selected>Único</option>
                              </select>
                              <label>Período</label>
                            </div>

                            <div class="input-field col s12">
                              <i class="material-icons prefix">assignment_ind</i>
                              <input id="data" type="text" placeholder="04/11/2019">
                              <label for="data" class="active">Identificação</label>
                            </div>

                            <div class="input-field col s12">
                              <i class="material-icons prefix">attach_money</i>
                              <input id="data" type="text" placeholder="50,00">
                              <label for="data" class="active">Valor</label>
                            </div>

                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  Incluir
                                </button>
                              </div>
                            </div>

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
    <script src="app-assets/js/scripts/financeiro-recebiveis-form.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>