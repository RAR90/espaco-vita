<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "includes/head/meta.php";
      include "includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Usuários do Sistema</title>

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
    <link rel="stylesheet" type="text/css" href="assets/css/pages/sistema-usuarios-list.css">
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
      include "includes/menus/aside-sistema.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Usuários</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Sistema</a>
                  </li>
                  <li class="breadcrumb-item active">Lista de Usuários
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
                        <div class="col s12">
                          <table id="page-length-option" class="display">
                            <thead>
                              <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th style="width: 160px">Entrou em</th>
                                <th class="text-center" style="width: 100px">Ativo</th>
                                <th class="text-center" style="width: 100px">Editar</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td>Rafael Antonio</td>
                                <td>rafael@teclabs.com.br</td>
                                <td>22/12/2019</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="sistema_usuarios_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Hugo Rossetti Savoia</td>
                                <td>hugo@espacovitarp.com.br</td>
                                <td>22/12/2019</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="sistema_usuarios_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>


                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th style="width: 160px">Entrou em</th>
                                <th class="text-center" style="width: 100px">Ativo</th>
                                <th class="text-center" style="width: 100px">Editar</th>
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

            <?php
              include "includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="sistema_usuarios_form.php" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
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
    <script src="assets/vendors/data-tables/js/dataTables.select.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "includes/footer/theme.js.php";
      include "includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/scripts/sistema-usuarios-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>