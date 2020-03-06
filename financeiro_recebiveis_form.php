<?php

// Alunos
$recebivelAluno = '';
$recebivelAlunoModalidade = '';
$valorRecebivel = '';
$recebivelDesconto = '';
$recebivelAlunosCreditos = '';
$recebivelInicioCreditos = '1990-03-26';
$recebivelFimCreditos = '1990-03-26';
$recebivelValorTotal = '';
$recebivelVencimento = '1990-03-26';

// Eventos
$recebivelEventoAluno = '';
$recebivelEvento = '';
$valorRecebivelEvento = '';
$recebivelEventoVencimento = '1990-03-26';

// Outros
$recebivelOutrosOrigem = '';
$valorRecebivelOutros = '';
$recebivelOutrosVencimento = '1990-03-26';

?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "includes/head/meta.php";
      include "includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Adicionar Conta</title>

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
    <link rel="stylesheet" type="text/css" href="assets/css/pages/aulas-form.css">
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
      include "includes/menus/aside-financeiro.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Lançar Recebível</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="aulas_list.php">Financeiro</a>
                  </li>
                  <li class="breadcrumb-item active">Lançar Recebível
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--/ Title & Breadcrumbs -->

        <!-- Conteúdo -->
        <div class="col s12">
          <div class="container">

            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12">
                  <div class="card border-radius-6">
                    <div class="card-content">
                      <div class="row">

                        <!-- Tabs Menu -->
                        <!-- TODO: Criar mecanismo para manipular a abertura e fechamento de abas de acordo com uma variável passada na url -->
                        <div class="col s12 mb-3">
                          <ul class="tabs">
                            <li class="tab col"><a class="active" href="#tab-alunos">Alunos</a></li>
                            <li class="tab col"><a href="#tab-eventos">Eventos</a></li>
                            <li class="tab col"><a href="#tab-outros">Outras Fontes</a></li>
                          </ul>
                        </div>
                        <!--/ Tabs Menu -->

                        <!-- Alunos Tab -->
                        <div id="tab-alunos" class="col s12">
                          <div class="row">
                            <div class="col s12">
                              <form action="financeiro_recebiveis_form.php" class="pr-5">

                                <!-- Aluno -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">account_circle</i>
                                  <select name="recebivelAluno" id="recebivelAluno">
                                    <option value="0" disabled selected>Selecione um Aluno</option>
                                    <option value="dinheiro">Hugo Savoia</option>
                                    <option value="dinheiro">Rafael Antonio</option>
                                  </select>
                                  <label>Selecione um Aluno</label>
                                </div>
                                <!--/ Aluno -->

                                <!-- Modalidade -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">content_paste</i>
                                  <select name="recebivelAlunoModalidade" id="recebivelAlunoModalidade">
                                    <option value="0" disabled selected>Selecione uma Modalidade</option>
                                    <option value="dinheiro">Pilates (Trimestral)</option>
                                    <option value="dinheiro">Funcional (Trimestral)</option>
                                    <option value="dinheiro">Funcional (Trimestral)</option>
                                  </select>
                                  <label>Selecione uma Modalidade</label>
                                </div>
                                <!--/ Modalidade -->

                                <!-- Valor -->
                                <div class="input-field col s4">
                                  <i class="material-icons prefix">attach_money</i>
                                  <input id="valorRecebivel" name="valorRecebivel" type="text" class="maskMoney" placeholder="50,00" value="<?=$valorRecebivel;?>" required>
                                  <label for="valorRecebivel" class="active">Valor</label>
                                </div>
                                <!--/ Valor -->

                                <!-- Desconto (%) -->
                                <div class="input-field col s4">
                                  <i class="material-icons prefix">local_atm</i>
                                  <input id="recebivelDesconto" name="recebivelDesconto" type="text" class="maskPercent" placeholder="50%" value="<?=$recebivelDesconto;?>">
                                  <label for="recebivelDesconto" class="active">Desconto (%)</label>
                                </div>
                                <!--/ Desconto (%) -->

                                <!-- Créditos -->
                                <div class="input-field col s4">
                                  <i class="material-icons prefix">confirmation_number</i>
                                  <input id="recebivelAlunosCreditos" name="recebivelAlunosCreditos" type="text" class="maskNumber" placeholder="500" value="<?=$recebivelAlunosCreditos;?>" required>
                                  <label for="recebivelAlunosCreditos" class="active">Créditos</label>
                                </div>
                                <!--/ Créditos -->

                                <!-- Início da validade dos créditos -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">today</i>
                                  <input id="recebivelInicioCreditos" name="recebivelInicioCreditos" type="date" class="datepicker" value="<?=$recebivelInicioCreditos;?>" required>
                                  <label for="recebivelInicioCreditos" class="active">Início da validade dos créditos</label>
                                </div>
                                <!--/ Início da validade dos créditos -->

                                <!-- Fim da validade dos créditos -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">today</i>
                                  <input id="recebivelFimCreditos" name="recebivelFimCreditos" type="date" class="datepicker" value="<?=$recebivelFimCreditos;?>" required>
                                  <label for="recebivelFimCreditos" class="active">Fim da validade dos créditos</label>
                                </div>
                                <!--/ Fim da validade dos créditos -->

                                <!-- Valor Total -->
                                <!-- TODO: Esse campo deve ser calculado automaticamente -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">attach_money</i>
                                  <input id="recebivelValorTotal" name="recebivelValorTotal" type="text" class="maskMoney" placeholder="50,00" value="<?=$recebivelValorTotal;?>" disabled>
                                  <label for="recebivelValorTotal" class="active">Valor Total</label>
                                </div>
                                <!--/ Valor Total -->

                                <!-- Vencimento -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">today</i>
                                  <input id="recebivelVencimento" name="recebivelVencimento" type="date" class="datepicker" value="<?=$recebivelVencimento;?>" required>
                                  <label for="recebivelVencimento" class="active">Data de vencimento</label>
                                </div>
                                <!--/ Vencimento -->

                                <!-- Botão Lançar -->
                                <div class="row">
                                  <div class="input-field col s12">
                                    <button type="submit" class="waves-effect waves-light btn-large float-right mr-1 mb-1">
                                      LANÇAR
                                    </button>
                                  </div>
                                </div>
                                <!-- Botão Lançar -->

                              </form>

                            </div>
                          </div>
                        </div>
                        <!-- Alunos Tab -->

                        <!-- Eventos Tab -->
                        <div id="tab-eventos" class="col s12">
                          <div class="row">
                            <div class="col s12">
                              <form action="financeiro_recebiveis_form.php" class="pr-5">

                                <!-- Aluno -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">account_circle</i>
                                  <select name="recebivelEventoAluno" id="recebivelEventoAluno">
                                    <option value="0" disabled selected>Selecione um Aluno</option>
                                    <option value="dinheiro">Hugo Savoia</option>
                                    <option value="dinheiro">Rafael Antonio</option>
                                  </select>
                                  <label>Selecione um Aluno</label>
                                </div>
                                <!--/ Aluno -->

                                <!-- Evento -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">today</i>
                                  <select name="recebivelEvento" id="recebivelEvento">
                                    <option value="0" disabled selected>Selecione um Evento</option>
                                    <option value="">Corrida de Exemplo</option>
                                    <option value="">Pedal de Exemplo</option>
                                  </select>
                                  <label>Selecione um Evento</label>
                                </div>
                                <!--/ Evento -->

                                <!-- Valor -->
                                <div class="input-field col s4">
                                  <i class="material-icons prefix">attach_money</i>
                                  <input id="valorRecebivelEvento" name="valorRecebivelEvento" type="text" class="maskMoney" placeholder="50,00" value="<?=$valorRecebivelEvento;?>" required>
                                  <label for="valorRecebivelEvento" class="active">Valor</label>
                                </div>
                                <!--/ Valor -->

                                <!-- Vencimento -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">today</i>
                                  <input id="recebivelEventoVencimento" name="recebivelEventoVencimento" type="date" class="datepicker" value="<?=$recebivelEventoVencimento;?>" required>
                                  <label for="recebivelEventoVencimento" class="active">Data de vencimento</label>
                                </div>
                                <!--/ Vencimento -->

                                <!-- Botão Lançar -->
                                <div class="row">
                                  <div class="input-field col s12">
                                    <button type="submit" class="waves-effect waves-light btn-large float-right mr-1 mb-1">
                                      LANÇAR
                                    </button>
                                  </div>
                                </div>
                                <!--/ Botão Lançar -->

                              </form>

                            </div>
                          </div>
                        </div>
                        <!--/ Eventos Tab -->

                        <!-- Outros Tab -->
                        <div id="tab-outros" class="col s12">
                          <div class="row">
                            <div class="col s12">
                              <form action="financeiro_recebiveis_form.php" class="pr-5">

                                <!-- Origem -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">input</i>
                                  <input id="recebivelOutrosOrigem" name="recebivelOutrosOrigem" type="text" placeholder="Descreva a origem do recebível" value="<?=$recebivelOutrosOrigem;?>" required>
                                  <label for="recebivelOutrosOrigem" class="active">Origem</label>
                                </div>
                                <!--/ Origem -->

                                <!-- Valor -->
                                <div class="input-field col s4">
                                  <i class="material-icons prefix">attach_money</i>
                                  <input id="valorRecebivelOutros" name="valorRecebivelOutros" class="maskMoney" type="text" placeholder="50,00" value="<?=$valorRecebivelOutros;?>" required>
                                  <label for="valorRecebivelOutros" class="active">Valor</label>
                                </div>
                                <!--/ Valor -->

                                <!-- Vencimento -->
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">today</i>
                                  <input id="recebivelOutrosVencimento" name="recebivelOutrosVencimento" type="date" class="datepicker" value="<?=$recebivelOutrosVencimento;?>" required>
                                  <label for="recebivelOutrosVencimento" class="active">Data de vencimento</label>
                                </div>
                                <!--/ Vencimento -->

                                <!-- Botão Lançar -->
                                <div class="row">
                                  <div class="input-field col s12">
                                    <button type="submit" class="waves-effect waves-light btn-large float-right mr-1 mb-1">
                                      LANÇAR
                                    </button>
                                  </div>
                                </div>
                                <!--/ Botão Lançar -->

                              </form>

                            </div>
                          </div>
                        </div>
                        <!--/ Outros Tab -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
              include "includes/menus/aside-right.php";
            ?>

          </div>
        </div>
        <!--/ Conteúdo -->

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
    <script src="assets/vendors/formatter/jquery.formatter.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "includes/footer/theme.js.php";
      include "includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/scripts/aulas-form.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>