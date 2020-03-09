<?php
  $filtroData = date('Y-m-d');
  $filtroTipo = '';
  $fechamentoObs = '';
  $caixaValorEntradas = 'R$ 7291,90';
  $caixaValorSaldo = 'R$ 7291,90';
  $caixaValorSaidas = 'R$ 00,00';
  $caixaValorInicial = 'R$ 00,00';
  $caixaAberturaDataHora = '25/12/2019 às 08:00';

  if (isset($_GET['action'])) {

    // Altera a data no campo após o submit do filtro por data
    if ($_GET['action'] == "filtrar_por_data") {
      $filtroData = $_GET['filtroData'];
    }

    // Altera o valor selecionado no campo após o submit do filtro por tipo
    if ($_GET['action'] == "filtrar_por_tipo") {
      $filtroTipo = $_GET['filtroTipo'];
    }

  }


?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "includes/head/meta.php";
      include "includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Financeiro Contas</title>

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
    <link rel="stylesheet" type="text/css" href="assets/css/pages/financeiro-contas-list.css">
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

        <!-- Título & Controles -->
        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">

              <!-- Título -->
              <div class="col s12 m3">
                <h5 class="breadcrumbs-title mt-0 mb-0 iconed"><i class="material-icons">meeting_room</i> Caixa</h5>
              </div>
              <!-- Título -->

              <!-- Controles -->
              <div class="col s12 m9">
                <button class="waves-effect waves-light btn-large float-right mr-1 mb-1" onclick="openModal('#fechar-caixa')"><i class="material-icons right">no_meeting_room</i>Fechar Caixa</button>
                <a class="waves-effect waves-light btn-large float-right mr-1 mb-1" onclick="ajaxModal('#retirar-dinheiro', 'ajax/retirar_dinheiro.php', {'id':'01','parametro_exemplo':'teste'})"><i class="material-icons right">local_atm</i>Retirar</a>
                <a class="waves-effect waves-light btn-large float-right mr-1 mb-1" href="financeiro_recebiveis_form.php"><i class="material-icons right">add_to_photos</i>Lançar</a>
              </div>
              <!--/ Controles -->

            </div>
          </div>
        </div>
        <!--/ Título & Controles -->

        <div class="col s12">
          <div class="container">

            <!-- Conteúdo -->
            <div class="section section-data-tables">

              <!-- Filtros e Saldo -->
              <div class="row">

                <!-- Filtros -->
                <div class="col s12 xl6">
                  <div class="card border-radius-6 overflow-visible">
                    <div class="card-content">
                      <div class="row mt-5 mb-4">

                        <!-- Filtro de Data -->
                        <form action="financeiro_caixa_list.php" method="get" id="date_filter_form">
                          <input type="hidden" name="action" value="filtrar_por_data">
                          <div class="input-field col s6">
                            <i class="material-icons prefix">calendar_today</i>
                            <input id="filtroData" name="filtroData" class="datepicker" value="<?=$filtroData;?>" type="date" onchange="submit('date_filter_form');">
                            <label for="filtroData" class="active strong">Exibir registros:</label>
                          </div>
                        </form>
                        <!--/ Filtro de Data -->

                        <!-- Filtro de tipo -->
                        <form action="financeiro_caixa_list.php" method="get" id="tipo_filter_form">
                          <input type="hidden" name="action" value="filtrar_por_tipo">
                          <div class="input-field col s6">
                            <i class="material-icons prefix">filter_list</i>
                            <label for="filtroTipo" class="active strong">Mostrar</label>
                            <select name="filtroTipo" id="filtroTipo" onchange="submit('tipo_filter_form');">
                              <option value="tudo" <?=$filtroTipo=='tudo'?'selected':''?>>Tudo</option>
                              <option value="recebiveis" <?=$filtroTipo=='recebiveis'?'selected':''?>>Recebíveis</option>
                              <option value="contas" <?=$filtroTipo=='contas'?'selected':''?>>Contas a pagar</option>
                              <option value="infraestrutura" <?=$filtroTipo=='infraestrutura'?'selected':''?>>Infraestrutura</option>
                              <option value="funcionarios" <?=$filtroTipo=='funcionarios'?'selected':''?>>Funcionários</option>
                              <option value="professores" <?=$filtroTipo=='professores'?'selected':''?>>Professores</option>
                              <option value="terceirizados" <?=$filtroTipo=='terceirizados'?'selected':''?>>Terceirizados</option>
                              <option value="avulsos" <?=$filtroTipo=='avulsos'?'selected':''?>>Avulsos</option>
                              <option value="alunos" <?=$filtroTipo=='alunos'?'selected':''?>>Alunos</option>
                              <option value="eventos" <?=$filtroTipo=='eventos'?'selected':''?>>Eventos</option>
                            </select>
                          </div>
                        </form>
                        <!-- Filtro de tipo -->

                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Filtros -->

                <!-- Saldo -->
                <div class="col s12 xl6">
                  <div class="card border-radius-6 mb-0 overflow-visible">
                    <div class="card-content">

                      <!-- Abertura do Caixa -->
                      <div class="row">
                        <div class="col s12">
                          <strong>Abertura do Caixa</strong> <br>
                          <i class="material-icons float-left">access_time</i>
                          <span class="float-left ml-1" style="margin-top:1px"><?=$caixaAberturaDataHora;?></span>
                        </div>
                      </div>
                      <!--/ Abertura do Caixa -->

                      <!-- Tabela Caixa -->
                      <div class="row">
                        <div class="col m6">
                          <table>
                            <tbody>
                              <tr>
                                <td><strong>Inicial:</strong></td>
                                <td><?=$caixaValorInicial;?></td>
                              </tr>
                              <tr>
                                <td><strong>Entradas:</strong></td>
                                <td><?=$caixaValorEntradas;?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="col m6">
                          <table>
                            <tbody>
                              <tr>
                                <td><strong>Saídas:</strong></td>
                                <td><?=$caixaValorSaidas;?></td>
                              </tr>
                              <tr>
                                <td><strong>Saldo:</strong></td>
                                <td><?=$caixaValorSaldo;?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--/ Tabela Caixa -->

                    </div>
                  </div>
                </div>
                <!-- Saldo -->

              </div>
              <!--/ Filtros e Saldo -->

              <!-- Tabela de dados -->
              <div class="row">
                <div class="col s12">
                  <div class="card border-radius-6">
                    <div class="card-content">

                      <table id="page-length-option" class="data-table">
                        <thead>
                          <tr>
                            <th class="th-status">Status</th>
                            <th class="th-vencimento">Vencimento</th>
                            <th class="th-valor">Valor</th>
                            <th class="th-origem">Origem</th>
                            <th class="th-tipo">Tipo</th>
                            <th class="th-detalhes text-center">Detalhes</th>
                            <th class="th-baixa text-center">Dar Baixa</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td class="text-center table-row-status">Normal</td>
                            <td class="text-center">22/12/2019</td>
                            <td class="text-center">R$ 1800,00</td>
                            <td>Infraestrutura - Conta de Luz - CPFL</td>
                            <td class="text-orange darken-3 text-center">Conta a Pagar</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#detalhes-conta', 'ajax/detalhes_recebivel.php', {'id':'01','id_usuario':'02'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                <i class="material-icons">search</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                <i class="material-icons">assignment_turned_in</i>
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center table-row-status text-red">Atrasado</td>
                            <td class="text-center">22/12/2019</td>
                            <td class="text-center">R$ 1800,00</td>
                            <td>Aluno - Edivaldo Antonio</td>
                            <td class="green-text text-center">Recebível</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#detalhes-conta', 'ajax/detalhes_recebivel.php', {'id':'01','id_usuario':'02'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                <i class="material-icons">search</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <a href="financeiro_baixa_recebivel.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                <i class="material-icons">assignment_turned_in</i>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center table-row-status text-red">Atrasado</td>
                            <td class="text-center">22/12/2019</td>
                            <td class="text-center">R$ 1800,00</td>
                            <td>Aluno - Maria Darlene da Silva</td>
                            <td class="green-text text-center">Recebível</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#detalhes-conta', 'ajax/detalhes_recebivel.php', {'id':'01','id_usuario':'02'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                <i class="material-icons">search</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <a href="financeiro_baixa_recebivel.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                <i class="material-icons">assignment_turned_in</i>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center table-row-status text-red">Atrasado</td>
                            <td class="text-center">22/12/2019</td>
                            <td class="text-center">R$ 1800,00</td>
                            <td>Aluno - Elias Amarildo Santos</td>
                            <td class="green-text text-center">Recebível</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#detalhes-conta', 'ajax/detalhes_recebivel.php', {'id':'01','id_usuario':'02'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                <i class="material-icons">search</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <a href="financeiro_baixa_recebivel.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                <i class="material-icons">assignment_turned_in</i>
                              </a>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center table-row-status text-red">Atrasado</td>
                            <td class="text-center">22/12/2019</td>
                            <td class="text-center">R$ 1800,00</td>
                            <td>Professor - Péricles Aparecido Fonseca</td>
                            <td class="text-orange darken-3 text-center">Conta a Pagar</td>
                            <td class="text-center">
                              <button onclick="ajaxModal('#detalhes-conta', 'ajax/detalhes_recebivel.php', {'id':'01','id_usuario':'02'})" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                <i class="material-icons">search</i>
                              </button>
                            </td>
                            <td class="text-center">
                              <button onclick="openModal('#baixar-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light green white-text">
                                <i class="material-icons">assignment_turned_in</i>
                              </button>
                            </td>
                          </tr>

                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Status</th>
                            <th>Vencimento</th>
                            <th>Valor</th>
                            <th>Origem</th>
                            <th>Tipo</th>
                            <th class="text-center">Detalhes</th>
                            <th class="text-center">Dar Baixa</th>
                          </tr>
                        </tfoot>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
              <!--/ Tabela de dados -->

            </div>
            <!--/ Conteúdo -->

            <!-- Modal Detalhes da Conta -->
            <div id="detalhes-conta" class="modal" style="width: 500px">
              <div class="modal-content">
                <div class="col s12 pt-5 pb-5 text-center">
                  <a onclick="closeModal('#detalhes-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">CANCELAR</a>
                </div>
              </div>
            </div>
            <!--/ Modal Detalhes da Conta -->

            <!-- Modal Fechar Caixa -->
            <div id="fechar-caixa" class="modal pb-2" style="width: 600px">
              <div class="modal-content">
                <form action="financeiro_caixa_list.php">

                  <input type="hidden" name="caixaValorInicial" value="<?=$caixaValorInicial;?>">
                  <input type="hidden" name="caixaValorEntradas" value="<?=$caixaValorEntradas;?>">
                  <input type="hidden" name="caixaValorSaidas" value="<?=$caixaValorSaidas;?>">
                  <input type="hidden" name="caixaValorSaldo" value="<?=$caixaValorSaldo;?>">

                  <div class="col s12">
                    <h5>Fechar Caixa</h5>
                    <p>
                      <i class="material-icons float-left">warning</i><strong> ATENÇÃO</strong>
                      - É recomendável fechar o caixa apenas no final do expediente, uma vez por dia, deseja continuar?
                    </p>

                    <h6>Resumo</h6>
                    <div class="row">
                      <div class="col m6">
                        <table>
                          <tbody>
                            <tr>
                              <td><strong>Inicial:</strong></td>
                              <td><?=$caixaValorInicial;?></td>
                            </tr>
                            <tr>
                              <td><strong>Entradas:</strong></td>
                              <td><?=$caixaValorEntradas;?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col m6">
                        <table>
                          <tbody>
                            <tr>
                              <td><strong>Saídas:</strong></td>
                              <td><?=$caixaValorSaidas;?></td>
                            </tr>
                            <tr>
                              <td><strong>Saldo:</strong></td>
                              <td><?=$caixaValorSaldo;?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <!-- Observação sobre o fechamento -->
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">chrome_reader_mode</i>
                        <textarea name="fechamentoObs" id="fechamentoObs" style="height:125px" required><?=$fechamentoObs;?></textarea>
                        <label for="fechamentoObs" class="active label-textarea">Observação sobre o fechamento</label>
                      </div>
                    </div>
                    <!--/ Observação sobre o aluno -->

                  </div>
                  <div class="col s12 text-center">
                    <button type="submit" class="btn mb-5 btn-flat waves-effect waves-light pink accent-2 white-text"><i class="material-icons left">no_meeting_room</i>Fechar Caixa</button>
                    <a onclick="closeModal('#fechar-caixa')" class="btn mb-5 btn-flat waves-effect waves-light grey lighten-3"><i class="material-icons left">cancel</i>Cancelar</a>
                  </div>
                </form>
              </div>
            </div>
            <!--/ Modal Fechar Caixa -->

            <!-- Modal Retirar dinheiro -->
            <div id="retirar-dinheiro" class="modal pb-2" style="width: 600px">
              <div class="modal-content">
                <div class="col s12 pt-5 pb-5 text-center">
                  <a onclick="closeModal('#retirar-dinheiro')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">CANCELAR</a>
                </div>
              </div>
            </div>
            <!--/ Modal Retirar dinheiro -->

            <?php
              include "includes/menus/aside-right.php";
            ?>

          </div>
        </div>
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
    <script src="assets/vendors/formatter/jquery.formatter.min.js" type="text/javascript"></script>
    <script src="assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "includes/footer/theme.js.php";
      include "includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/scripts/financeiro-caixa-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>