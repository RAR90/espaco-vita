<?php
  $filtroData = date('Y-m-d');
  $fechamentoObs = '';
  $retiradaObs = '';
  $valorRetirada = '';
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
                <a class="waves-effect waves-light btn-large float-right mr-1 mb-1" onclick="openModal('#retirar-dinheiro')"><i class="material-icons right">local_atm</i>Retirar</a>
                <a class="waves-effect waves-light btn-large float-right mr-1 mb-1" href=""><i class="material-icons right">add_to_photos</i>Lançar</a>
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
                        <div class="input-field col s6">
                          <i class="material-icons prefix">calendar_today</i>
                          <input id="filtroData" name="filtroData" class="datepicker" value="<?=$filtroData;?>" type="date">
                          <label for="filtroData" class="active strong">Exibir registros:</label>
                        </div>
                        <!--/ Filtro de Data -->

                        <!-- Filtro de tipo -->
                        <div class="input-field col s6">
                          <i class="material-icons prefix">filter_list</i>
                          <label for="filtroTipo" class="active strong">Mostrar</label>
                          <select name="" id="filtroTipo">
                            <option value="" selected>Tudo</option>
                            <option value="">Recebíveis</option>
                            <option value="">Contas a pagar</option>
                            <option value="">Infraestrutura</option>
                            <option value="">Funcionários</option>
                            <option value="">Professores</option>
                            <option value="">Terceirizados</option>
                            <option value="">Avulsos</option>
                            <option value="">Alunos</option>
                            <option value="">Eventos</option>
                          </select>
                        </div>
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
                      <div class="row">
                        <div class="col s12">
                          <strong>Abertura do Caixa</strong> <br>
                          <i class="material-icons float-left">access_time</i>
                          <span class="float-left ml-1" style="margin-top:1px">25/12/2019 às 08:00</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col m6">
                          <table>
                            <tbody>
                              <tr>
                                <td><strong>Inicial:</strong></td>
                                <td>R$ 00,00</td>
                              </tr>
                              <tr>
                                <td><strong>Entrada:</strong></td>
                                <td>R$ 7291,90</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="col m6">
                          <table>
                            <tbody>
                              <tr>
                                <td><strong>Saída:</strong></td>
                                <td>R$ 00,00</td>
                              </tr>
                              <tr>
                                <td><strong>Saldo:</strong></td>
                                <td>R$ 7291,90</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
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
                              <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
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
                              <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
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
                              <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
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
                              <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
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
                              <button onclick="openModal('#detalhes-conta')" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
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
                <h5>Detalhes da Conta</h5>
                <h6>Status: <span class="text-red">Atrasado</span></h6>
                <table>
                  <tbody>
                    <tr>
                      <td><strong>Tipo:</strong></td>
                      <td>Recebível</td>
                    </tr>
                    <tr>
                      <td><strong>Origem:</strong></td>
                      <td>Pagamento Trimestral</td>
                    </tr>
                    <tr>
                      <td><strong>Aluno:</strong></td>
                      <td>Maria Antonieta Delas Neves</td>
                    </tr>
                    <tr>
                      <td><strong>Vencimento:</strong></td>
                      <td>22/12/2019</td>
                    </tr>
                    <tr>
                      <td><strong>Valor Total:</strong></td>
                      <td>R$ 1500,00</td>
                    </tr>
                  </tbody>
                </table>

                <div class="col s12 pt-5 pb-5 text-center">
                  <a onclick="closeModal('#detalhes-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">FECHAR</a>
                </div>
              </div>
            </div>
            <!--/ Modal Detalhes da Conta -->

            <!-- Modal Fechar Caixa -->
            <div id="fechar-caixa" class="modal pb-2" style="width: 600px">
              <div class="modal-content">
                <form action="financeiro_caixa_list.php">
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
                              <td>R$ 00,00</td>
                            </tr>
                            <tr>
                              <td><strong>Entrada:</strong></td>
                              <td>R$ 7291,90</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col m6">
                        <table>
                          <tbody>
                            <tr>
                              <td><strong>Saída:</strong></td>
                              <td>R$ 00,00</td>
                            </tr>
                            <tr>
                              <td><strong>Saldo:</strong></td>
                              <td>R$ 7291,90</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <!-- Observação sobre o fechamento -->
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">chrome_reader_mode</i>
                        <textarea name="fechamentoObs" id="fechamentoObs" style="height:125px"><?=$fechamentoObs;?></textarea>
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
                <form action="financeiro_caixa_list.php">
                  <div class="col s12">

                    <h5>Retirar dinheiro</h5>
                    <p>
                      <i class="material-icons float-left">warning</i> A retirada de dinheiro do caixa é apenas para situações específicas.
                      Opte por lançar uma conta avulsa ou da modalidade correta.
                    </p>
                    <hr><h5 class="pb-1">Saldo Disponível: R$ 7291,90</h5><hr>

                    <!-- Valor da retirada -->
                    <div class="row pt-2">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">attach_money</i>
                        <input id="valorRetirada" name="valorRetirada" value="<?=$valorRetirada;?>" type="text">
                        <label for="valorRetirada" class="active">Valor da Retirada</label>
                      </div>
                    </div>
                    <!--/ Valor da retirada -->

                    <!-- Observação sobre a retirada -->
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">chrome_reader_mode</i>
                        <textarea name="retiradaObs" id="retiradaObs" style="height:100px"><?=$retiradaObs;?></textarea>
                        <label for="retiradaObs" class="active label-textarea">Motivo da Retirada</label>
                      </div>
                    </div>
                    <!--/ Observação sobre a retirada -->

                    <!-- Ações -->
                    <div class="col s12 text-center">
                      <button type="submit" class="btn mb-5 btn-flat waves-effect waves-light pink accent-2 white-text">Retirar</button>
                      <a onclick="closeModal('#retirar-dinheiro')" class="btn mb-5 btn-flat waves-effect waves-light grey lighten-3"><i class="material-icons left">cancel</i>Cancelar</a>
                    </div>
                    <!--/ Ações -->

                    <!-- Tabela de histórico -->
                    <div class="row">
                      <h5>Histórico de retiradas</h5>
                      <table>
                        <thead>
                          <tr>
                            <th>Data e hora</th>
                            <th>Usuário</th>
                            <th>Valor</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>25/12/2020 08:30</td>
                            <td>Raquel Duarte</td>
                            <td>R$ 50,00</td>
                          </tr>
                          <tr>
                            <td>25/12/2020 08:30</td>
                            <td>Raquel Duarte</td>
                            <td>R$ 50,00</td>
                          </tr>
                          <tr>
                            <td>25/12/2020 08:30</td>
                            <td>Raquel Duarte</td>
                            <td>R$ 50,00</td>
                          </tr>
                          <tr>
                            <td>25/12/2020 08:30</td>
                            <td>Raquel Duarte</td>
                            <td>R$ 50,00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!--/ Tabela de histórico -->

                  </div>
                </form>
              </div>
            </div>
            <!--/ Modal Retirar dinheiro -->

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
    <!-- END PAGE VENDOR JS-->

    <?php
      include "app-includes/footer/theme.js.php";
      include "app-includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/financeiro-caixa-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>