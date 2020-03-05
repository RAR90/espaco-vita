<?php

$funcNome = '';
$funcSexo = 'm'; // 'm' ou 'f'
$funcDataNascimento = '1990-03-26';
$funcCPF = '';
$funcIdentidade = '';
$FuncUFIdentidade = '';
$funcObs = '';
$funcTelefone = '';
$funcCelular = '';
$FuncEmail = '';
$funcEndereco = '';
$funcCEP = '';
$funcBairro = '';
$funcSenhaRetype = '';
$funcSenha = '';
$funcao = '';
$funcSalarioFixo = '';
$funcAdmissao = '1990-03-26';
$funcDemissao = '1990-03-26';
$funcProfessor = '';
$funcSituacao = '';
$funcCREF = '';

//Invisíveis
$funcID = '';
$funcTemCartao = '';
$funcPFrequencia = '';
$funcAcesso = '';
$funcCartao = '';
$funcExcluido = '';
$funcPCaixa = '';
$funcPContasR = '';
$funcPAlunos = '';
$funcPRelatorios = '';
$funcPMatriculas = '';
$funcPPesquisa = '';
$funcDigitosCelular = '';

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/professores-form.css">
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
      include "app-includes/menus/aside-professores.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Professor</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="professores_list.php">Lista de Professores</a>
                  </li>
                  <li class="breadcrumb-item active">Professor
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--/ Title & Breadcrumbs -->

        <!-- Forms Areas -->
        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">
              <div class="row">

                <!-- Forms Left -->
                <div class="col s12 l6">

                  <!-- Informações Básicas -->
                  <div class="card border-radius-6">
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">devices</i> Informações</h6>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="professores_form.php" class="pr-5">

                            <!-- Inputs Invisíveis -->
                            <input type="hidden" name="funcID" value="<?=$funcID;?>">
                            <input type="hidden" name="funcTemCartao" value="<?=$funcTemCartao;?>">
                            <input type="hidden" name="funcPFrequencia" value="<?=$funcPFrequencia;?>">
                            <input type="hidden" name="funcAcesso" value="<?=$funcAcesso;?>">
                            <input type="hidden" name="funcCartao" value="<?=$funcCartao;?>">
                            <input type="hidden" name="funcExcluido" value="<?=$funcExcluido;?>">
                            <input type="hidden" name="funcPCaixa" value="<?=$funcPCaixa;?>">
                            <input type="hidden" name="funcPContasR" value="<?=$funcPContasR;?>">
                            <input type="hidden" name="funcPAlunos" value="<?=$funcPAlunos;?>">
                            <input type="hidden" name="funcPRelatorios" value="<?=$funcPRelatorios;?>">
                            <input type="hidden" name="funcPMatriculas" value="<?=$funcPMatriculas;?>">
                            <input type="hidden" name="funcPPesquisa" value="<?=$funcPPesquisa;?>">
                            <input type="hidden" name="funcDigitosCelular" value="<?=$funcDigitosCelular;?>">
                            <!--/ Inputs Invisíveis -->

                            <!-- Nome -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="funcNome" name="funcNome" value="<?=$funcNome;?>" type="text">
                                <label for="funcNome" class="active">Nome Completo</label>
                              </div>
                            </div>
                            <!--/ Nome -->

                            <!-- Sexo -->
                            <div class="row">
                              <div class="input-field col s12">
                                <span for="funcSexo" class="h3">Sexo</span>
                                <p>
                                  <label>
                                    <input name="funcSexo" type="radio" <?=$funcSexo == 'm' ? 'checked' : '';?> />
                                    <span>Masculino</span>
                                  </label>
                                  <label>
                                    <input name="funcSexo" type="radio" <?=$funcSexo == 'f' ? 'checked' : '';?> />
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
                                <input id="funcDataNascimento" name="funcDataNascimento" class="datepicker" value="<?=$funcDataNascimento;?>" type="date">
                                <label for="funcDataNascimento" class="active">Data de Nascimento</label>
                              </div>
                            </div>
                            <!--/ Nascimento -->

                            <!-- CPF -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">credit_card</i>
                                <input id="funcCPF" name="funcCPF" class="maskCpf" value="<?=$funcCPF;?>" type="text">
                                <label for="funcCPF" class="active">CPF</label>
                              </div>
                            </div>
                            <!--/ CPF -->

                            <!-- RG -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">recent_actors</i>
                                <input id="funcIdentidade" name="funcIdentidade" class="maskRg" value="<?=$funcIdentidade;?>" type="text">
                                <label for="funcIdentidade" class="active">RG</label>
                              </div>
                            </div>
                            <!--/ RG -->

                            <!-- Orgão expedidor da identidade -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">recent_actors</i>
                                <input id="FuncUFIdentidade" name="FuncUFIdentidade" value="<?=$FuncUFIdentidade;?>" placeholder="Ex.: SSP" type="text">
                                <label for="FuncUFIdentidade" class="active">Orgão expedidor da identidade</label>
                              </div>
                            </div>
                            <!--/ Orgão expedidor da identidade -->

                            <!-- Telefone -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">phone</i>
                                <input id="funcTelefone" name="funcTelefone" class="maskPhone" value="<?=$funcTelefone;?>" type="text">
                                <label for="funcTelefone" class="active">Telefone</label>
                              </div>
                            </div>
                            <!--/ Telefone -->

                            <!-- Celular -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">stay_current_portrait</i>
                                <input id="funcCelular" name="funcCelular" class="maskCelular" value="<?=$funcCelular;?>" type="text">
                                <label for="funcCelular" class="active">Celular</label>
                              </div>
                            </div>
                            <!--/ Celular -->

                            <!-- E-Mail -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="FuncEmail" name="FuncEmail" value="<?=$FuncEmail;?>" type="text">
                                <label for="FuncEmail" class="active">E-Mail</label>
                              </div>
                            </div>
                            <!--/ E-Mail -->

                            <!-- Observação -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">chrome_reader_mode</i>
                                <textarea name="funcObs" id="funcObs" rows="10"><?=$funcObs;?></textarea>
                                <label for="funcObs" class="active label-textarea">Observação sobre o professor</label>
                              </div>
                            </div>
                            <!--/ Observação -->

                            <!-- Gravar -->
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  <i class="material-icons left">save</i>
                                  GRAVAR
                                </button>
                              </div>
                            </div>
                            <!--/ Gravar -->

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Informações Básicas -->

                  <!-- Endereço -->
                  <div class="card border-radius-6">
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">explore</i> Endereço</h6>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="professores_form.php" class="pr-5">

                            <!-- Logradouro -->
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="funcEndereco" name="funcEndereco" value="<?=$funcEndereco;?>" placeholder="Ex.: Av. Paulista, 1400" type="text">
                                <label for="funcEndereco" class="active">Logradouro</label>
                              </div>
                            </div>
                            <!--/ Logradouro -->

                            <!-- CEP -->
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="funcCEP" name="funcCEP" value="<?=$funcCEP;?>" placeholder="Ex.: Av. Paulista, 1400" type="text">
                                <label for="funcCEP" class="active">CEP</label>
                              </div>
                            </div>
                            <!--/ CEP -->

                            <!-- Bairro -->
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="funcBairro" name="funcBairro" value="<?=$funcBairro;?>" type="text">
                                <label for="funcBairro" class="active">Bairro</label>
                              </div>
                            </div>
                            <!--/ Bairro -->

                            <!-- Estado -->
                            <div class="row">
                              <div class="mt-2">
                                <div class="input-field col s12">
                                  <select name="funcEstado">
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
                                  <select name="funcCidade">
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
                      </div>
                    </div>
                  </div>
                  <!--/ Endereço -->

                  <!-- Especialidades -->
                  <div class="card border-radius-6">
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">devices</i> Especialidades</h6>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="professores_form.php" class="pr-5">

                            <div class="row">
                              <div class="pl-5 ml-3">
                                <div class="input-field col s12">
                                  <select>
                                    <option value="" disabled selected>Selecione uma Especialidade</option>
                                  </select>
                                  <label>Especialidade</label>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  <i class="material-icons">add</i>
                                </button>
                              </div>
                            </div>
                          </form>

                          <h6>Especialidades do Professor</h6>
                          <ul class="collection">
                            <li class="collection-item">Piplates</li>
                            <li class="collection-item">Funcional</li>
                          </ul>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Especialidades -->

                </div>
                <!--/ Forms Left -->

                <!-- Forms Right -->
                <div class="col s12 l6">

                  <!-- Empresa -->
                  <div class="card border-radius-6">
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">work</i> Empresa</h6>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="professores_form.php" class="pr-5">

                            <!-- Cargo -->
                            <div class="row">
                              <div class="mt-2">
                                <div class="input-field col s12">
                                  <select name="funcao">
                                    <option value="0" disabled selected>Selecione um cargo</option>
                                    <option value="1">SÓCIO(A) PROPRIETÁRIO(A)</option>
                                    <option value="2">PROFESSOR(A)</option>
                                    <option value="3">SECRETÁRIO(A)</option>
                                    <option value="4">ESTAGIÁRIO(A)</option>
                                  </select>
                                  <label>Cargo do colaborador</label>
                                </div>
                              </div>
                            </div>
                            <!--/ Cargo -->

                            <!-- Salário Fixo -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">monetization_on</i>
                                <input id="funcSalarioFixo" name="funcSalarioFixo" value="<?=$funcSalarioFixo;?>" type="text">
                                <label for="funcSalarioFixo" class="active">Salário Fixo</label>
                              </div>
                            </div>
                            <!--/ Salário Fixo -->

                            <!-- Data Contratação -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">calendar_today</i>
                                <input id="funcAdmissao" name="funcAdmissao" class="datepicker" value="<?=$funcAdmissao;?>" type="date">
                                <label for="funcAdmissao" class="active">Data de Contratação</label>
                              </div>
                            </div>
                            <!--/ Data Contratação -->

                            <!-- Data Demissão -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">calendar_today</i>
                                <input id="funcDemissao" name="funcDemissao" class="datepicker" value="<?=$funcDemissao;?>" type="date">
                                <label for="funcDemissao" class="active">Data de Demissão</label>
                              </div>
                            </div>
                            <!--/ Data Demissão -->

                            <!-- Professor -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">contact_support</i>
                                <input id="funcProfessor" name="funcProfessor" value="<?=$funcProfessor;?>" type="text">
                                <label for="funcProfessor" class="active">Professor</label>
                              </div>
                            </div>
                            <!--/ Professor -->

                            <!-- Situação do Professor -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">error</i>
                                <input id="funcSituacao" name="funcSituacao" value="<?=$funcSituacao;?>" type="text">
                                <label for="funcSituacao" class="active">Situação do Professor</label>
                              </div>
                            </div>
                            <!--/ Situação do Professor -->

                            <!-- CREF -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">credit_card</i>
                                <input id="funcCREF" name="funcCREF" value="<?=$funcCREF;?>" type="text">
                                <label for="funcCREF" class="active">CREF</label>
                              </div>
                            </div>
                            <!--/ CREF -->

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
                      </div>
                    </div>
                  </div>
                  <!--/ Empresa -->

                  <!-- Acesso App -->
                  <div class="card border-radius-6">
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">devices</i> Acesso</h6>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="professores_form.php" class="pr-5">

                            <!-- Senha -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="funcSenha" name="funcSenha" value="<?=$funcSenha;?>" type="password">
                                <label for="funcSenha" class="active">Senha</label>
                              </div>
                            </div>
                            <!--/ Senha -->

                            <!-- Repita a senha -->
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="funcSenhaRetype" name="funcSenhaRetype" value="<?=$funcSenhaRetype;?>" type="password">
                                <label for="funcSenhaRetype" class="active">Repita a senha</label>
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
                  </div>
                  <!--/ Acesso App -->

                   <!-- Enviar Mensagem -->
                  <div class="card border-radius-6">
                    <div class="card-title pl-3 pt-2">
                      <h6><i class="material-icons">phone_iphone</i> Enviar Mensagem</h6>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <form action="professores_form.php" class="pr-5">
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">question_answer</i>
                                <textarea id="message3" class="materialize-textarea"></textarea>
                                <label for="message3">Escreva uma mensagem para esse usuário...</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  Enviar
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
                <!--/ Forms Right -->

              </div>
            </div>
          </div>
        </div>
        <!--/ Forms Areas -->

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
    <script src="app-assets/js/scripts/professores-form.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>