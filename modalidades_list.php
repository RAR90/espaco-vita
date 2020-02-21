<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Aulas</title>

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/aulas-list.css">
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
      include "app-includes/menus/aside-aulas.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Modalidades</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Modalidades</a>
                  </li>
                  <li class="breadcrumb-item active">Lista de Modalidades
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
                                <th>Nome da Modalidade</th>
                                <th style="width: 120px">Tipo do Crédito</th>
                                <th class="text-center" style="width: 100px">Editar</th>
                              </tr>
                            </thead>

                            <tbody>

                              <tr>
                                <td>Pilates</td>
                                <td>Meia hora</td>
                                <td class="text-center">
                                  <button onclick="openModal('#editar-modalidade')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                    <i class="material-icons">edit</i>
                                  </button>
                                </td>
                              </tr>

                              <tr>
                                <td>Pilates</td>
                                <td>Uma hora</td>
                                <td class="text-center">
                                  <button onclick="openModal('#editar-modalidade')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                    <i class="material-icons">edit</i>
                                  </button>
                                </td>
                              </tr>

                              <tr>
                                <td>Pilates</td>
                                <td>Meia hora</td>
                                <td class="text-center">
                                  <button onclick="openModal('#editar-modalidade')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
                                    <i class="material-icons">edit</i>
                                  </button>
                                </td>
                              </tr>



                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Nome da Modalidade</th>
                                <th style="width: 120px">Tipo do Crédito</th>
                                <th class="text-center">Editar</th>
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

            <!-- Modal Detalhes da Aula -->
            <div id="editar-modalidade" class="modal" style="width: 600px">
              <div class="modal-content">
                <div class="col s12">
                  <h5>Editar Modalidade</h5>
                  <p>As modalidades não podem ser removidas depois de cadastradas. Editando essa modalidade, tudo relacionada a ela é alterado.</p>
                </div>
                <div class="col s12">

                  <form action="aulas_list.php" class="pr-5">

                    <div class="input-field col s12">
                      <i class="material-icons prefix">fitness_center</i>
                      <input id="name3" type="text">
                      <label for="name3" class="active">Nome da Modalidade</label>
                    </div>

                    <div class="input-field col s12 mb-0">
                      <i class="material-icons prefix">access_time</i>
                      <select>
                        <option value="" disabled selected>Selecione o Tipo de Crédito</option>
                        <option value="" disabled selected>Uma Hora</option>
                        <option value="" disabled selected>Meia Hora</option>
                      </select>
                      <label>Tipo de Crédito</label>
                    </div>


                    <div class="row mb-5">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                          <i class="material-icons left">today</i>
                          GRAVAR
                        </button>
                      </div>
                    </div>

                  </form>

                </div>
              </div>
            </div>
            <!--/ Modal Detalhes da Aula -->

            <?php
              include "app-includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a onclick="openModal('#editar-modalidade')" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
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
    <script src="app-assets/js/scripts/aulas-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>