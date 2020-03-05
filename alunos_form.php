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

        <!-- Title & Breadcrumbs -->
        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Aluno</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item">
                    <a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="alunos_list.php">Lista de Alunos</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Aluno
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--/ Title & Breadcrumbs -->

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

                    <!-- Form "Endereço" -->
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">explore</i> Endereço
                      </div>
                      <div class="collapsible-body">
                        <form action="alunos_form.php" class="pr-5">

                          <!-- Logradouro -->
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="alunoEndereco" name="alunoEndereco" value="<?=$alunoEndereco;?>" placeholder="Ex.: Av. Paulista, 1400" type="text">
                              <label for="alunoEndereco" class="active">Logradouro</label>
                            </div>
                          </div>
                          <!--/ Logradouro -->

                          <!-- CEP -->
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="alunoCEP" name="alunoCEP" value="<?=$alunoCEP;?>" placeholder="Ex.: Av. Paulista, 1400" type="text">
                              <label for="alunoCEP" class="active">CEP</label>
                            </div>
                          </div>
                          <!--/ CEP -->

                          <!-- Bairro -->
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="alunoBairro" name="alunoBairro" value="<?=$alunoBairro;?>" type="text">
                              <label for="alunoBairro" class="active">Bairro</label>
                            </div>
                          </div>
                          <!--/ Bairro -->

                          <!-- Estado -->
                          <div class="row">
                            <div class="mt-2">
                              <div class="input-field col s12">
                                <select name="alunoEstado">
                                  <option value="" disabled selected>Selecione seu estado</option>
                                </select>
                                <label>Estado</label>
                              </div>
                            </div>
                          </div>
                          <!--/ Estado -->

                          <!-- Cidade -->
                          <div class="row">
                            <div class="mt-2">
                              <div class="input-field col s12">
                                <select name="alunoCidade">
                                  <option value="" disabled selected>Selecione sua cidade</option>
                                </select>
                                <label>Cidade</label>
                              </div>
                            </div>
                          </div>
                          <!--/ Cidade -->

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
                    <!--/ Form "Endereço" -->

                    <!-- Form "Outras informações" -->
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">assignment_turned_in</i> Outras informações
                      </div>
                      <div class="collapsible-body">
                        <form action="alunos_form.php" class="pr-5">

                          <!-- Data do Exame -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">date_range</i>
                              <input id="alunoDataExame" name="alunoEndereco" class="datepicker" value="<?=$alunoDataExame;?>" type="date">
                              <label for="alunoDataExame" class="active">Data do Exame</label>
                            </div>
                          </div>
                          <!--/ Data do Exame -->

                          <!-- Data da Avaliação -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">date_range</i>
                              <input id="alunoDataAvaliacao" name="alunoDataAvaliacao" class="datepicker" value="<?=$alunoDataAvaliacao;?>" type="date">
                              <label for="alunoDataAvaliacao" class="active">Data da Avaliação</label>
                            </div>
                          </div>
                          <!--/ Data da Avaliação -->

                          <!-- Horário Preferido -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">watch_later</i>
                              <input id="alunoHorario" name="alunoHorario" class="timepicker" value="<?=$alunoHorario;?>" type="text">
                              <label for="alunoHorario" class="active">Horário Preferido (opcional)</label>
                            </div>
                          </div>
                          <!--/ Horário Preferido -->

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
                    <!--/ Form "Outras informações" -->

                    <!-- Form "Segurança" -->
                    <li>
                      <div class="collapsible-header"><i class="material-icons">security</i> Alterar Senha</div>
                      <div class="collapsible-body">
                        <div class="row">
                          <div class="col s12">
                            <form action="alunos_form.php" class="pr-5">

                              <!-- Senha -->
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">lock_outline</i>
                                  <input id="alunoSenha" name="alunoSenha" value="<?=$alunoSenha;?>" type="password">
                                  <label for="alunoSenha" class="active">Senha</label>
                                </div>
                              </div>
                              <!--/ Senha -->

                              <!-- Repita a senha -->
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">lock_outline</i>
                                  <input id="alunoSenhaRetype" name="alunoSenhaRetype" value="<?=$alunoSenhaRetype;?>" type="password">
                                  <label for="alunoSenhaRetype" class="active">Repita a senha</label>
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
                    </li>
                    <!--/ Form "Segurança" -->

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

                    <!-- Form "Informações dos responsáveis" -->
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">assignment_ind</i> Informações dos responsáveis (opcional)
                      </div>
                      <div class="collapsible-body">
                        <form action="alunos_form.php" class="pr-5">

                          <!-- Nome do Responsável -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">account_circle</i>
                              <input id="alunoResponsavel" name="alunoResponsavel" value="<?=$alunoResponsavel;?>" type="text">
                              <label for="alunoResponsavel" class="active">Nome do Responsável</label>
                            </div>
                          </div>
                          <!--/ Nome do Responsável -->

                          <!-- CPF do Responsável -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">credit_card</i>
                              <input id="alunoResponsavelCPF" name="alunoResponsavelCPF" class="maskCpf" value="<?=$alunoResponsavelCPF;?>" type="text">
                              <label for="alunoResponsavelCPF" class="active">CPF do Responsável</label>
                            </div>
                          </div>
                          <!--/ CPF -->

                          <!-- Telefone do Responsável -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">phone</i>
                              <input id="alunoTelefoneResponsavel" name="alunoTelefoneResponsavel" class="maskPhone" value="<?=$alunoTelefoneResponsavel;?>" type="text">
                              <label for="alunoTelefoneResponsavel" class="active">Telefone do Responsável</label>
                            </div>
                          </div>
                          <!--/ Telefone do Responsável -->

                          <!-- Nome do Pai -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">account_circle</i>
                              <input id="alunoPai" name="alunoPai" value="<?=$alunoPai;?>" type="text">
                              <label for="alunoPai" class="active">Nome completo do pai</label>
                            </div>
                          </div>
                          <!--/ Nome do Pai -->

                          <!-- CPF do Pai -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">credit_card</i>
                              <input id="alunoPaiCPF" name="alunoPaiCPF" class="maskCpf" value="<?=$alunoPaiCPF;?>" type="text">
                              <label for="alunoPaiCPF" class="active">CPF do Pai</label>
                            </div>
                          </div>
                          <!--/ CPF do Pai -->

                          <!-- Telefone do Pai -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">phone</i>
                              <input id="alunoTelefonePai" name="alunoTelefonePai" class="maskPhone" value="<?=$alunoTelefonePai;?>" type="text">
                              <label for="alunoTelefonePai" class="active">Telefone do Pai</label>
                            </div>
                          </div>
                          <!--/ Telefone do Pai -->

                          <!-- Nome da Mãe -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">account_circle</i>
                              <input id="alunoMae" name="alunoMae" value="<?=$alunoMae;?>" type="text">
                              <label for="alunoMae" class="active">Nome da Mãe</label>
                            </div>
                          </div>
                          <!--/ Nome da Mãe -->

                          <!-- CPF da Mãe -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">credit_card</i>
                              <input id="alunoMaeCPF" name="alunoMaeCPF" class="maskCpf" value="<?=$alunoMaeCPF;?>" type="text">
                              <label for="alunoMaeCPF" class="active">CPF da Mãe</label>
                            </div>
                          </div>
                          <!--/ CPF da Mãe -->

                          <!-- Telefone da Mãe -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">phone</i>
                              <input id="alunoTelefoneMae" name="alunoTelefoneMae" class="maskPhone" value="<?=$alunoTelefoneMae;?>" type="text">
                              <label for="alunoTelefoneMae" class="active">Telefone da Mãe</label>
                            </div>
                          </div>
                          <!--/ Telefone da Mãe -->

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
                    <!--/ Form "Informações dos responsáveis" -->

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Forms Accordion -->

        <div class="col l4 s12">

          <!-- Credits -->
          <div class="card-target card animate fadeLeft border-radius-6">
            <div class="card-content">
              <h4 class="card-title mb-0">Créditos de Aulas</h4>
              <p class="medium-small">O crédito de aula equivale a uma aula de 30 minutos nas modalidades contratadas pelo aluno.</p>
              <div class="current-balance-container text-center pt-4">
                <h5 class="center-align col l6">
                  <i class="material-icons" style="font-size:70px">event_note</i>
                  <br>
                  <span class="f16">Aulas Longas</span>
                  <br>
                  58
                </h5>
                <h5 class="center-align col l6">
                  <i class="material-icons" style="font-size:70px">event</i>
                  <br>
                  <span class="f16">Aulas Curtas</span>
                  <br>
                  34
                </h5>
              </div>
              <a href="aulas_form.php" class="float-right pb-5 mt-4">
                Agendar Aula
                <i class="material-icons">link</i>
              </a>
            </div>
          </div>
          <!--/ Credits -->

          <!-- Contract -->
          <div class="card-target card animate fadeLeft border-radius-6">
            <div class="card-content">
              <h4 class="card-title mb-0">Contrato</h4>
              <p class="medium-small">Inclua aqui o contrato do aluno para fins de arquivamento.</p>
              <form action="alunos_form.php">
                <div class="file-field input-field">
                  <div class="btn">
                    <span>ESCOLHER</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              </form>
              <a href="contrato.pdf" class="mt-4">
                <i class="material-icons">link</i> Baixar contrato do aluno - 22/09/2019
              </a>
            </div>
          </div>
          <!--/ Contract -->

          <!-- Enviar Mensagem -->
          <div class="card border-radius-6">
            <div class="card-title pl-3 pt-2">
              <h6><i class="material-icons">phone_iphone</i> Enviar Mensagem</h6>
            </div>
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <form action="alunos_form.php" class="pr-5 pb-5">
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">question_answer</i>
                        <textarea id="message3" class="materialize-textarea"></textarea>
                        <label for="message3">Mensagem...</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                    </div>
                  </form>

                  <h6>Mensagens Enviadas</h6>
                  <ul class="collection">
                    <li class="collection-item">04/11/2019 13:30 - Olá, como foi seu treino ontem? De seu Feedback no app!</li>
                    <li class="collection-item">04/11/2019 13:30 - Você esqueceu seu guarda chuvas!</li>
                    <li class="collection-item">04/11/2019 13:30 - Bom dia! Hoje o treino foi cancelado devido as fortes chuvas!</li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
          <!--/ Enviar Mensagem -->

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