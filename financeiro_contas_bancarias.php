<?php

// Inputs Invisíveis
$alunoID = '';

// Informações Pessoais
$alunoMatricula = '';
$alunoNome = '';
$alunoSexo = 'm'; // 'm' ou 'f'
$alunoDataNascimento = '1990-03-26';
$alunoCPF = '405.953.048-42';
$alunoIdentidade = '';
$alunoUFIdentidade = '';
$alunoEstadoCivil = 'a'; // 'c', 's' ou 'a'
$alunoProfissao = '';
$alunoEmpresa = '';
$alunoTelefoneEmpresa = '';
$alunoObs = '';

// Informações de Contato
$alunoTelefone = '';
$alunoCelular = '';
$alunoEmail = '';

// Endereço
$alunoEndereco = '';
$alunoBairro = '';
$alunoCidade = '';
$alunoCEP = '';
$alunoEstado = '';

// Outras informações
$alunoDataExame = '1990-03-26';
$alunoDataAvaliacao = '1990-03-26';
$alunoHorario = '04:20 PM';
$alunoSenha = '';
$alunoSenhaRetype = '';

//Quiz
$alunoObjetivo = '';
$alunoSoubeAcademia = '';

// Responsáveis

// Informações dos responsáveis
$alunoResponsavel = '';
$alunoResponsavelCPF = '';
$alunoTelefoneResponsavel = '';
$alunoPai = '';
$alunoPaiCPF = '';
$alunoTelefonePai = '';
$alunoMae = '';
$alunoMaeCPF = '';
$alunoTelefoneMae = '';

$numAgencia = '';
$numConta = '';

?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Financeiro Contas</title>

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/financeiro-contas-list.css">
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Contas Bancárias</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Financeiro</a>
                  </li>
                  <li class="breadcrumb-item active">Contas Bancárias
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

                      <table id="page-length-option" class="data-table">
                        <thead>
                          <tr>
                            <th>Titular</th>
                            <th>Agência</th>
                            <th>Número</th>
                            <th class="text-center" style="width: 50px">Editar</th>
                            <th class="text-center" style="width: 50px">Remover</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>Nome do Títular</td>
                            <td>0000</td>
                            <td>01234-0</td>
                            <td class="text-center">
                              <button onclick="openModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
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
                            <td>Nome do Títular</td>
                            <td>0000</td>
                            <td>01234-0</td>
                            <td class="text-center">
                              <button onclick="openModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
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
                            <td>Nome do Títular</td>
                            <td>0000</td>
                            <td>01234-0</td>
                            <td class="text-center">
                              <button onclick="openModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
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
                            <td>Nome do Títular</td>
                            <td>0000</td>
                            <td>01234-0</td>
                            <td class="text-center">
                              <button onclick="openModal('#plano-de-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
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
                            <th>Titular</th>
                            <th>Agência</th>
                            <th>Número</th>
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

            <!-- Novo Plano de Conta -->
            <div id="plano-de-conta" class="modal" style="width: 600px">
              <div class="modal-content">
                <div class="col s12">
                  <h5>Contas Bancárias</h5>
                  <p>Preencha os dados da conta. As contas cadastradas serão usadas para dar baixa em recebimentos quando este for efetuado através de depósito.</p>

                  <form action="#">

                    <!-- Nome -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="alunoNome" name="alunoNome" value="<?=$alunoNome;?>" type="text">
                        <label for="alunoNome" class="active">Títular</label>
                      </div>
                    </div>
                    <!--/ Nome -->

                    <!-- CPF -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="alunoCPF" name="alunoCPF" class="maskCpf" value="<?=$alunoCPF;?>" type="text">
                        <label for="alunoCPF" class="active">CPF do Títular</label>
                      </div>
                    </div>
                    <!--/ CPF -->

                    <!-- Agência -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="numAgencia" name="numAgencia" value="<?=$numAgencia;?>" type="text">
                        <label for="numAgencia" class="active">Número da Agência</label>
                      </div>
                    </div>
                    <!--/ Agência -->

                    <!-- Conta -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="numConta" name="numConta" value="<?=$numConta;?>" type="text">
                        <label for="numConta" class="active">Número da Conta</label>
                      </div>
                    </div>
                    <!--/ Conta -->

                    <!-- Observação -->
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea name="alunoObs" id="alunoObs" rows="10"><?=$alunoObs;?></textarea>
                        <label for="alunoObs" class="active label-textarea">Observação</label>
                      </div>
                    </div>
                    <!--/ Observação -->

                  </form>
                </div>
                <div class="col s12 pb-5 text-center">
                  <button type="submit" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">CADASTRAR</button>
                  <a onclick="closeModal('#baixar-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light grey light-2 white-text">FECHAR</a>
                </div>
              </div>
            </div>
            <!--/ Novo Plano de Conta -->

            <?php
              include "app-includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="#" onclick="openModal('#plano-de-conta')" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
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
    <!-- END PAGE VENDOR JS-->

    <?php
      include "app-includes/footer/theme.js.php";
      include "app-includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/financeiro-contas-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>