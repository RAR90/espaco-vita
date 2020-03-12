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

        <!-- Title & Breadcrumbs -->
        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Planos de Contas</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Financeiro</a>
                  </li>
                  <li class="breadcrumb-item active">Planos de Contas
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--/ Title & Breadcrumbs -->

        <!-- Conteúdo -->
        <div class="col s12">
          <div class="container">

            <!-- Tabela de Dados -->
            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12">
                  <div class="card border-radius-6">
                    <div class="card-content">

                      <table id="page-length-option" class="data-table">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th class="text-center" style="width: 50px">Editar</th>
                            <th class="text-center" style="width: 50px">Remover</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>Infraestrutura</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#plano-de-conta', 'ajax/plano_de_conta.php', {'acao':'editar'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>Funcionários</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#plano-de-conta', 'ajax/plano_de_conta.php', {'acao':'editar'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>Professores</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#plano-de-conta', 'ajax/plano_de_conta.php', {'acao':'editar'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>Terceirizados</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#plano-de-conta', 'ajax/plano_de_conta.php', {'acao':'editar'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>Avulsos</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#plano-de-conta', 'ajax/plano_de_conta.php', {'acao':'editar'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                <i class="material-icons">edit</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red white-text">
                                <i class="material-icons">delete</i>
                              </button>
                            </td>
                          </tr>

                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Remover</th>
                          </tr>
                        </tfoot>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Tabela de Dados -->

            <!-- Novo Plano de Conta -->
            <div id="plano-de-conta" class="modal" style="width: 600px; overflow:visible">
              <div class="modal-content">
                <div class="col s12 pt-5 pb-5 text-center">
                  <a onclick="closeModal('#plano-de-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">CANCELAR</a>
                </div>
              </div>
            </div>
            <!--/ Novo Plano de Conta -->

            <?php
              include "includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="#" onclick="ajaxModal('#plano-de-conta', 'ajax/plano_de_conta.php', {'acao':'novo'})" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
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