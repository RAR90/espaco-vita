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

//Quiz
$alunoObjetivo = '';
$alunoSoubeAcademia = '';

?>

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/alunos-form.css">
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Aluno</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="alunos_list.php">Lista de Alunos</a>
                  </li>
                  <li class="breadcrumb-item active">Aluno
                  </li>
                </ol>
              </div>
              <!--/ Title & Breadcrumbs -->

            </div>
          </div>
        </div>

        <!-- Forms Accordion -->
        <div class="col l8 s12">
          <div class="container">
            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12">
                  <ul class="collapsible collapsible-accordion border-radius-6 white" style="overflow:hidden" data-collapsible="accordion">

                    <!-- Form "Informações Pessoais" -->
                    <li class="active">
                      <div class="collapsible-header">
                        <i class="material-icons">assignment</i> Informações Pessoais
                      </div>
                      <div class="collapsible-body">
                        <form action="alunos_form.php" class="pr-5">

                          <!-- TODO: replicar para a página "alunos_temporarios_form.php" -->

                          <!-- Inputs Invisíveis -->
                          <input type="hidden" name="alunoID" value="<?=$alunoID;?>">
                          <input type="hidden" name="alunoExcluido" value="<?=$alunoExcluido;?>">
                          <input type="hidden" name="alunoDtCadastro" value="<?=$alunoDtCadastro;?>">
                          <input type="hidden" name="alunoTemCartao" value="<?=$alunoTemCartao;?>">
                          <input type="hidden" name="alunoCartao" value="<?=$alunoCartao;?>">
                          <input type="hidden" name="funcID" value="<?=$funcID;?>">
                          <input type="hidden" name="alunoCatracaReentrada" value="<?=$alunoCatracaReentrada;?>">
                          <input type="hidden" name="alunoCatracaMinutos" value="<?=$alunoCatracaMinutos;?>">
                          <input type="hidden" name="alunoCatracaSegundos" value="<?=$alunoCatracaSegundos;?>">
                          <input type="hidden" name="alunoCatracaSemana" value="<?=$alunoCatracaSemana;?>">
                          <input type="hidden" name="alunoCatracaVezesSemana" value="<?=$alunoCatracaVezesSemana;?>">
                          <input type="hidden" name="alunoCatracaDia" value="<?=$alunoCatracaDia;?>">
                          <input type="hidden" name="alunoCatracaVezesDia" value="<?=$alunoCatracaVezesDia;?>">
                          <input type="hidden" name="alunoDigitosCelular" value="<?=$alunoDigitosCelular;?>">
                          <input type="hidden" name="RecorrenteForma" value="<?=$RecorrenteForma;?>">
                          <input type="hidden" name="RecorrenteToken" value="<?=$RecorrenteToken;?>">
                          <input type="hidden" name="RecorrenteTruncado" value="<?=$RecorrenteTruncado;?>">
                          <input type="hidden" name="RecorrenteValidade" value="<?=$RecorrenteValidade;?>">
                          <input type="hidden" name="recorrenteAtivo" value="<?=$recorrenteAtivo;?>">
                          <input type="hidden" name="RecorrenteSeguranca" value="<?=$RecorrenteSeguranca;?>">
                          <!--/ Inputs Invisíveis -->

                          <!-- Matrícula -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">receipt</i>
                              <input id="alunoMatricula" name="alunoMatricula" value="<?=$alunoMatricula;?>" type="text">
                              <label for="alunoMatricula" class="active">Matrícula</label>
                            </div>
                          </div>
                          <!--/ Matrícula -->

                          <!-- Nome -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">account_circle</i>
                              <input id="alunoNome" name="alunoNome" value="<?=$alunoNome;?>" type="text">
                              <label for="alunoNome" class="active">Nome Completo</label>
                            </div>
                          </div>
                          <!--/ Nome -->

                          <!-- Sexo -->
                          <div class="row">
                            <div class="input-field col s12">
                              <span for="alunoSexo" class="h3">Sexo</span>
                              <p>
                                <label>
                                  <input name="alunoSexo" type="radio" <?=$alunoSexo == 'm' ? 'checked' : '';?> />
                                  <span>Masculino</span>
                                </label>
                                <label>
                                  <input name="alunoSexo" type="radio" <?=$alunoSexo == 'f' ? 'checked' : '';?> />
                                  <span>Feminino</span>
                                </label>
                              </p>
                            </div>
                          </div>
                          <!--/ Sexo -->

                          <!-- Nascimento -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">calendar_today</i>
                              <input id="alunoDataNascimento" name="alunoDataNascimento" class="datepicker" value="<?=$alunoDataNascimento;?>" type="date">
                              <label for="alunoDataNascimento" class="active">Data de Nascimento</label>
                            </div>
                          </div>
                          <!--/ Nascimento -->

                          <!-- CPF -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">credit_card</i>
                              <input id="alunoCPF" name="alunoCPF" class="maskCpf" value="<?=$alunoCPF;?>" type="text">
                              <label for="alunoCPF" class="active">CPF</label>
                            </div>
                          </div>
                          <!--/ CPF -->

                          <!-- RG -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">recent_actors</i>
                              <input id="alunoIdentidade" name="alunoIdentidade" class="maskRg" value="<?=$alunoIdentidade;?>" type="text">
                              <label for="alunoIdentidade" class="active">RG</label>
                            </div>
                          </div>
                          <!--/ RG -->

                          <!-- Orgão expedidor da identidade -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">recent_actors</i>
                              <input id="alunoUFIdentidade" name="alunoUFIdentidade" value="<?=$alunoUFIdentidade;?>" placeholder="Ex.: SSP" type="text">
                              <label for="alunoUFIdentidade" class="active">Orgão expedidor da identidade</label>
                            </div>
                          </div>
                          <!--/ Orgão expedidor da identidade -->

                          <!-- Estado Civil -->
                          <div class="row">
                            <div class="input-field col s12">
                              <span for="alunoEstadoCivil" class="h3">Estado Civil</span>
                              <p>
                                <label>
                                  <input name="alunoEstadoCivil" type="radio" <?=$alunoEstadoCivil == 'c' ? 'checked' : '';?> />
                                  <span>Casado</span>
                                </label>
                                <label>
                                  <input name="alunoEstadoCivil" type="radio" <?=$alunoEstadoCivil == 's' ? 'checked' : '';?> />
                                  <span>Solteiro</span>
                                </label>
                                <label>
                                  <input name="alunoEstadoCivil" type="radio" <?=$alunoEstadoCivil == 'a' ? 'checked' : '';?> />
                                  <span>Amasiado</span>
                                </label>
                              </p>
                            </div>
                          </div>
                          <!--/ Estado Civil -->

                          <!-- Profissao -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">work</i>
                              <input id="alunoProfissao" name="alunoProfissao" value="<?=$alunoProfissao;?>" type="text">
                              <label for="alunoProfissao" class="active">Profissao</label>
                            </div>
                          </div>
                          <!--/ Profissao -->

                          <!-- Empresa -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">work</i>
                              <input id="alunoEmpresa" name="alunoEmpresa" value="<?=$alunoEmpresa;?>" type="text">
                              <label for="alunoEmpresa" class="active">Empresa</label>
                            </div>
                          </div>
                          <!--/ Empresa -->

                          <!-- Telefone da empresa -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">work</i>
                              <input id="alunoTelefoneEmpresa" name="alunoTelefoneEmpresa" class="maskPhone" value="<?=$alunoTelefoneEmpresa;?>" type="text">
                              <label for="alunoTelefoneEmpresa" class="active">Telefone da empresa</label>
                            </div>
                          </div>
                          <!--/ Telefone da empresa -->

                          <!-- Observação sobre o aluno -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">chrome_reader_mode</i>
                              <textarea name="alunoObs" id="alunoObs" rows="10"><?=$alunoObs;?></textarea>
                              <label for="alunoObs" class="active label-textarea">Observação sobre o aluno</label>
                            </div>
                          </div>
                          <!--/ Observação sobre o aluno -->

                          <!-- Gravar -->
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                Gravar
                                <i class="material-icons left">save</i>
                              </button>
                            </div>
                          </div>
                          <!--/ Gravar -->

                        </form>
                      </div>
                    </li>
                    <!--/ Form "Informações Pessoais" -->

                    <!-- Form "Informações de Contato" -->
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">contact_phone</i> Informações de Contato
                      </div>
                      <div class="collapsible-body">
                        <form action="alunos_form.php" class="pr-5">

                          <!-- Telefone -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">phone</i>
                              <input id="alunoTelefone" name="alunoTelefone" class="maskPhone" value="<?=$alunoTelefone;?>" type="text">
                              <label for="alunoTelefone" class="active">Telefone</label>
                            </div>
                          </div>
                          <!--/ Telefone -->

                          <!-- Celular -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">stay_current_portrait</i>
                              <input id="alunoCelular" name="alunoCelular" class="maskCelular" value="<?=$alunoCelular;?>" type="text">
                              <label for="alunoCelular" class="active">Celular</label>
                            </div>
                          </div>
                          <!--/ Celular -->

                          <!-- E-Mail -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">email</i>
                              <input id="alunoEmail" name="alunoEmail" value="<?=$alunoEmail;?>" type="text">
                              <label for="alunoEmail" class="active">E-Mail</label>
                            </div>
                          </div>
                          <!--/ E-Mail -->

                          <!-- Gravar -->
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                Gravar
                                <i class="material-icons left">save</i>
                              </button>
                            </div>
                          </div>
                          <!--/ Gravar -->

                        </form>
                      </div>
                    </li>
                    <!--/ Form "Informações de Contato" -->

                    <!-- Form "Quiz" -->
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">stars</i> Quiz (opcional)
                      </div>
                      <div class="collapsible-body">
                        <form action="alunos_form.php" class="pr-5">

                          <!-- Objetivo do aluno -->
                          <div class="row">
                            <div class="input-field col s12">
                              <textarea name="alunoObjetivo" id="alunoObjetivo" rows="10"><?=$alunoObjetivo;?></textarea>
                              <label for="alunoObjetivo" class="active label-textarea">Objetivo do aluno</label>
                            </div>
                          </div>
                          <!--/ Objetivo do aluno -->

                          <!-- Como soube da academia? -->
                          <div class="row">
                            <div class="input-field col s12">
                              <textarea name="alunoSoubeAcademia" id="alunoSoubeAcademia" rows="10"><?=$alunoSoubeAcademia;?></textarea>
                              <label for="alunoSoubeAcademia" class="active label-textarea">Como soube da academia?</label>
                            </div>
                          </div>
                          <!--/ Como soube da academia? -->

                          <!-- Gravar -->
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                Gravar
                                <i class="material-icons left">save</i>
                              </button>
                            </div>
                          </div>
                          <!--/ Gravar -->

                        </form>
                      </div>
                    </li>
                    <!--/ Form "Quiz" -->


                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Forms Accordion -->

        <div class="col l4 s12">
          <div class="card-target card animate fadeLeft border-radius-6">
            <div class="card-content">
              <h3 class="card-title mb-0">Converter aluno temporário</h3>
              <p class="medium-small">Este aluno temporário pode ser convertido a aluno regular. Isso permitirá inclui-lo no sistema financeiro e vinculará a ele créditos de aulas.</p>
              <a href="alunos_form.php" class="waves-effect waves-light btn-large mt-5"><i class="material-icons left">sync_problem</i>CONVERTER</a>
            </div>
          </div>
        </div>

        <?php
          // Notifications Menu
          include "app-includes/menus/aside-right.php";
        ?>

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
    <script src="app-assets/vendors/formatter/jquery.formatter.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "app-includes/footer/theme.js.php";
      include "app-includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/alunos-form.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>