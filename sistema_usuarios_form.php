<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Professores</title>

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/sistema-usuarios-form.css">
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
      include "app-includes/menus/aside-sistema.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Adicionar Usuário</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="professores_list.php">Sistema</a>
                  </li>
                  <li class="breadcrumb-item active">Adicionar Usuário
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
                  <div class="card border-radius-6">
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">desktop_windows</i> Informações</h6>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="professores_form.php" class="pr-5">
                            <div class="row center-align">
                              <img class="responsive-img circle z-depth-5" width="200" src="app-assets/images/user/12.jpg" alt="">
                            </div>
                            <div class="row">
                              <div class="file-field input-field upload-profile-action">
                                <div class="btn">
                                  <span>Foto</span>
                                  <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="name3" type="text">
                                <label for="name3" class="active">Nome</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email3" type="email">
                                <label for="email3" class="active">Email</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  <i class="material-icons left">save</i>
                                  GRAVAR
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

                <div class="col s12 l6">

                  <!-- Acesso App -->
                  <div class="card border-radius-6">
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">desktop_windows</i> Acesso</h6>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="index.php" class="pr-5">
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password3" type="password">
                                <label for="password3" class="active">Senha</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password4" type="password">
                                <label for="password4" class="active">Repita a senha</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Atualizar
                                  <i class="material-icons left">save</i>
                                </button>
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                   <!--/ Acesso App -->

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
    <script src="app-assets/js/scripts/sistema-usuarios-form.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>