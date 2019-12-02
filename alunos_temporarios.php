<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Dashboard</title>

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/alunos.css">
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
      include "app-includes/menus/aside-alunos.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Alunos Temporários</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Alunos</a>
                  </li>
                  <li class="breadcrumb-item active">Lista de Alunos Temporários
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
                          <p class="pb-3">
                            Lista de alunos que fizeram precadastro e participaram de algum evento ou aula experimental. <br>
                            Pode ser convertido em aluno se o cadastro for completado.
                          </p>
                          <table id="page-length-option" class="display">
                            <thead>
                              <tr>
                                <th>Nome</th>
                                <th style="width: 160px">Entrou em</th>
                                <th class="text-center" style="width: 100px">Editar</th>
                                <th class="text-center" style="width: 100px">Ativo</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td>Rafael Antonio</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Hugo Rossetti Savoia</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 0</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 1</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 2</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 3</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 4</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 5</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 6</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 7</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 8</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 9</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 10</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 11</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 12</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 13</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 14</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 15</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 16</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 17</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 18</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 19</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 20</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 21</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 22</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 23</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 24</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 25</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 26</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 27</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                              <tr>
                                <td>Nome de Exemplo 28</td>
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
                                  <a href="alunos_form.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>

                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Nome</th>
                                <th>Entrou em</th>
                                <th>Ativo</th>
                                <th>Editar</th>
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
              include "app-includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="alunos_temporarios_form.php" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
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
    <script src="app-assets/js/scripts/alunos.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>