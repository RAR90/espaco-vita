<?php

$usuarioImageUrl = 'app-assets/images/user/12.jpg';
$usuarioNome = '';
$usuarioEmail = '';
$usuarioSenha = '';
$usuarioSenhaRetype = '';

?>

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

        <!-- Title & Breadcrumbs -->
        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
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
            </div>
          </div>
        </div>
        <!--/ Title & Breadcrumbs -->

        <div class="col s12">
          <div class="container">

            <!-- Conteúdo -->
            <div class="section section-data-tables">
              <div class="row">

                <!-- Card - Informações Básicas -->
                <div class="col s12 l6">
                  <div class="card border-radius-6">

                    <!-- Título do Card -->
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">desktop_windows</i> Informações</h6>
                    </div>
                    <!--/ Título do Card -->

                    <!-- Conteúdo do Card -->
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">

                          <form action="sistema_usuarios_form.php" class="pr-5">

                            <!-- Foto do usuário -->
                            <div class="row center-align">
                              <img class="responsive-img circle z-depth-5" width="200" src="<?=$usuarioImageUrl;?>">
                            </div>
                            <!--/ Foto do usuário -->

                            <!-- Alterar Foto -->
                            <div class="row">
                              <div class="file-field input-field upload-profile-action">
                                <div class="btn">
                                  <span>ESCOLHER OUTRA FOTO</span>
                                  <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text">
                                </div>
                              </div>
                            </div>
                            <!--/ Alterar Foto -->

                            <!-- Nome -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="usuarioNome" type="text" value="<?=$usuarioNome;?>">
                                <label for="usuarioNome" class="active">Nome</label>
                              </div>
                            </div>
                            <!--/ Nome -->

                            <!-- E-mail -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="usuarioEmail" type="text" value="<?=$usuarioEmail;?>">
                                <label for="usuarioEmail" class="active">E-mail</label>
                              </div>
                            </div>
                            <!--/ E-mail -->

                            <!-- Gravar  -->
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  <i class="material-icons left">save</i>
                                  GRAVAR
                                </button>
                              </div>
                            </div>
                            <!--/ Gravar  -->

                          </form>

                        </div>
                      </div>
                    </div>
                    <!--/ Conteúdo do Card -->

                  </div>
                </div>
                <!--/ Card - Informações Básicas -->

                <!-- Card - Acesso App -->
                <div class="col s12 l6">
                  <div class="card border-radius-6">

                    <!-- Título do Card -->
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">desktop_windows</i> Acesso</h6>
                    </div>
                    <!--/ Título do Card -->

                    <!-- Conteúdo do Card -->
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">

                          <form action="sistema_usuarios_form.php" class="pr-5">

                            <!-- Senha -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="usuarioSenha" name="usuarioSenha" value="<?=$usuarioSenha;?>" type="password">
                                <label for="usuarioSenha" class="active">Senha</label>
                              </div>
                            </div>
                            <!--/ Senha -->

                            <!-- Repita a senha -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="usuarioSenhaRetype" name="usuarioSenhaRetype" value="<?=$usuarioSenhaRetype;?>" type="password">
                                <label for="usuarioSenhaRetype" class="active">Repita a senha</label>
                              </div>
                            </div>
                            <!--/ Repita a senha -->

                            <!-- Gravar -->
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  Atualizar
                                  <i class="material-icons left">save</i>
                                </button>
                              </div>
                            </div>
                            <!--/ Gravar -->

                          </form>

                        </div>
                      </div>
                    </div>
                    <!--/ Conteúdo do Card -->

                  </div>
                </div>
                <!--/ Card - Acesso App -->

                <!-- Card - Permissões -->
                <div class="col s12 l6">
                  <div class="card border-radius-6">

                    <!-- Título do Card -->
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">lock</i> Permissões</h6>
                    </div>
                    <!--/ Título do Card -->

                    <!-- Conteúdo do Card -->
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">

                          <form action="sistema_usuarios_form.php" class="pr-5">

                            <div class="row">

                              <!-- Alunos -->
                              <div class="col s12 mb-3">
                                <h6>Alunos</h6>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Alunos Temporários</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Novo Aluno Temporário</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Lista de alunos</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Novo Aluno</span>
                                  </label>
                                </p>
                              </div>
                              <!--/ Alunos -->

                              <!-- Professores -->
                              <div class="col s12 mb-3">
                                <h6>Professores</h6>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Lista de Professores</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Novo professor</span>
                                  </label>
                                </p>
                              </div>
                              <!--/ Professores -->

                              <!-- Aulas -->
                              <div class="col s12 mb-3">
                                <h6>Aulas</h6>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Modalidades</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Lista de Aulas</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Agendar Aula</span>
                                  </label>
                                </p>
                              </div>
                              <!--/ Aulas -->

                              <!-- Eventos -->
                              <div class="col s12 mb-3">
                                <h6>Eventos</h6>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Lista de Eventos</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Criar Eventos</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Eventos Passados</span>
                                  </label>
                                </p>
                              </div>
                              <!--/ Eventos -->

                              <!-- Financeiro -->
                              <div class="col s12 mb-3">
                                <h6>Financeiro</h6>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Caixa</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Inclusões</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Recebíveis</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Contas a Pagar</span>
                                  </label>
                                </p>
                              </div>
                              <!--/ Financeiro -->

                              <!-- Sistema -->
                              <div class="col s12 mb-3">
                                <h6>Sistema</h6>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Lista de usuários</span>
                                  </label>
                                </p>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Novo Usuário</span>
                                  </label>
                                </p>
                              </div>
                              <!--/ Sistema -->

                              <!-- Relatorios -->
                              <div class="col s12 mb-3">
                                <h6>Relatorios</h6>
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Exemplo de Relatório</span>
                                  </label>
                                </p>
                              </div>
                              <!--/ Relatorios -->

                            </div>

                            <!-- Gravar -->
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  Atualizar
                                  <i class="material-icons left">save</i>
                                </button>
                              </div>
                            </div>
                            <!--/ Gravar -->

                          </form>

                        </div>
                      </div>
                    </div>
                    <!--/ Conteúdo do Card -->

                  </div>
                </div>
                <!--/ Card - Permissões -->

              </div>
            </div>
            <!--/ Conteúdo -->

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