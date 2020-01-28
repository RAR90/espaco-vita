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

                    <!-- Form "Informações Básicas" -->
                    <li class="active">
                      <div class="collapsible-header">
                        <i class="material-icons">assignment</i> Informações Básicas
                      </div>
                      <div class="collapsible-body">
                        <form action="alunos_form.php" class="pr-5">

                          <!-- TODO: Criar formulário com os campos abaixo e máscaras para os campos de telefone, celular, cpf e rg -->
                          <!-- TODO: replicar para a página "alunos_temporarios_form.php" -->

                          <!-- Informações Pessoais -->
                          <!--
                            alunoID
                            alunoMatricula
                            alunoNome
                            alunoSexo
                            alunoDataNascimento
                            alunoCPF
                            alunoIdentidade
                            alunoUFIdentidade
                            alunoProfissao
                            alunoEstadoCivil
                            alunoEmpresa
                            alunoTelefoneEmpresa
                            alunoObs
                          -->

                          <!-- Informações de Contato -->
                          <!--
                            alunoTelefone
                            alunoCelular
                            alunoEmail
                          -->

                          <!-- Endereço -->
                          <!--
                            alunoEndereco
                            alunoBairro
                            alunoCidade
                            alunoCEP
                            alunoEstado
                          -->

                          <!-- Outras informações -->
                          <!--
                            alunoDataExame
                            alunoDataAvaliacao
                            alunoExcluido
                            alunoDtCadastro
                            alunoHorario
                            alunoSenha
                          -->

                          <!-- Quiz -->
                          <!--
                            alunoObjetivo
                            alunoSoubeAcademia
                          -->

                          <!-- Informações dos responsáveis -->
                          <!--
                            alunoResponsavel
                            alunoTelefoneResponsavel
                            alunoPai
                            alunoMae
                            alunoMaeCPF
                            alunoPaiCPF
                            alunoResponsavelCPF
                            alunoTelefoneMae
                            alunoTelefonePai
                          -->

                          <!-- Inputs Invisíveis -->
                          <!--
                            alunoTemCartao
                            alunoCartao
                            funcID
                            alunoCatracaReentrada
                            alunoCatracaMinutos
                            alunoCatracaSegundos
                            alunoCatracaSemana
                            alunoCatracaVezesSemana
                            alunoCatracaDia
                            alunoCatracaVezesDia
                            alunoDigitosCelular
                            RecorrenteForma
                            RecorrenteToken
                            RecorrenteTruncado
                            RecorrenteValidade
                            recorrenteAtivo
                            RecorrenteSeguranca
                          -->

                          <!-- Nome -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">account_circle</i>
                              <input id="nome" type="text">
                              <label for="nome" class="active">Nome</label>
                            </div>
                          </div>
                          <!--/ Nome -->

                          <!-- Email -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">email</i>
                              <input id="email3" type="email">
                              <label for="email3" class="active">Email</label>
                            </div>
                          </div>
                          <!--/ Email -->

                          <!-- Telefone -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">phone</i>
                              <input id="telefone" type="text">
                              <label for="telefone" class="active">Telefone</label>
                            </div>
                          </div>
                          <!--/ Telefone -->

                          <!-- Logradouro -->
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">location_on</i>
                              <input id="logradouro" type="text">
                              <label for="logradouro" class="active">Logradouro</label>
                            </div>
                          </div>
                          <!--/ Logradouro -->

                          <!-- Estado -->
                          <div class="row">
                            <div class="pl-4">
                              <div class="input-field col s12">
                                <select>
                                  <option value="" disabled selected>Selecione seu estado</option>
                                </select>
                                <label>Estado</label>
                              </div>
                            </div>
                          </div>
                          <!--/ Estado -->

                          <!-- Cidade -->
                          <div class="row">
                            <div class="pl-4">
                              <div class="input-field col s12">
                                <select>
                                  <option value="" disabled selected>Selecione sua cidade</option>
                                </select>
                                <label>Cidade</label>
                              </div>
                            </div>
                          </div>
                          <!--/ Cidade -->

                          <!-- Botão Gravar -->
                          <div class="row">
                            <div class="col l12 text-center">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  <i class="material-icons left">save</i>
                                  GRAVAR
                                </button>
                              </div>
                            </div>
                          </div>
                          <!--/ Botão Gravar -->

                        </form>
                      </div>
                    </li>
                    <!--/ Form "Informações Básicas" -->

                    <!-- Form "Segurança" -->
                    <li>
                      <div class="collapsible-header"><i class="material-icons">security</i> Alterar Senha</div>
                      <div class="collapsible-body">
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
                    </li>
                    <!--/ Form "Segurança" -->

                    <!-- Form "Anamnese" -->
                    <li>
                      <div class="collapsible-header"><i class="material-icons">fitness_center
                      </i> Anamnese</div>
                      <div class="collapsible-body">
                        <div class="row">
                          <div class="col s12">
                            <form action="alunos_form.php" class="pr-5">

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">account_circle</i>
                                  <input id="" type="text">
                                  <label for="" class="active">Idade</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">account_circle</i>
                                  <input id="" type="text">
                                  <label for="" class="active">Peso</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <span for="" class="h3">Sexo</span>
                                  <p>
                                    <label>
                                      <input name="group1" type="radio" checked/>
                                      <span>Masculino</span>
                                    </label>
                                    <label>
                                      <input name="group1" type="radio" />
                                      <span>Feminino</span>
                                    </label>
                                  </p>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <span for="" class="h3">Sedentário</span>
                                  <p>
                                    <label>
                                      <input name="group1" type="radio" checked/>
                                      <span>Sim</span>
                                    </label>
                                    <label>
                                      <input name="group1" type="radio" />
                                      <span>Não</span>
                                    </label>
                                  </p>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <span for="" class="h3">Fumante</span>
                                  <p>
                                    <label>
                                      <input name="group1" type="radio" checked/>
                                      <span>Sim</span>
                                    </label>
                                    <label>
                                      <input name="group1" type="radio" />
                                      <span>Não</span>
                                    </label>
                                  </p>
                                </div>
                              </div>

                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">account_circle</i>
                                  <input id="" type="text">
                                  <label for="" class="active">Pratica algum esporte? Qual?</label>
                                </div>
                              </div>

                            </form>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- Form "Anamnese" -->

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
              <form action="#">
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
                  <form action="index.php" class="pr-5 pb-5">
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