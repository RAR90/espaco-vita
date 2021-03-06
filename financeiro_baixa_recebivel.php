<?php
  $valorPago = '5.000,00';
  $dataPago = date('Y-m-d');

  // Cheque
  $numCheque = '';
  $numBanco = '';
  $numAgencia = '';
  $numConta = '';
  $bomPara = date('Y-m-d');
?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "includes/head/meta.php";
      include "includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Dashboard</title>

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
    <link rel="stylesheet" type="text/css" href="assets/css/pages/alunos-form.css">
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

        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">

              <!-- Title & Breadcrumbs -->
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Financeiro</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="financeiro_caixa_list.php">Caixa</a>
                  </li>
                  <li class="breadcrumb-item active">Baixa Recebível
                  </li>
                </ol>
              </div>
              <!--/ Title & Breadcrumbs -->

            </div>
          </div>
        </div>

        <!-- Resumo da conta -->
        <div class="col l12 s12">
          <div class="container">
            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12">
                  <ul class="collapsible collapsible-accordion border-radius-6 white" style="overflow:hidden" data-collapsible="accordion">
                    <li class="active">
                      <div class="collapsible-header">
                        <i class="material-icons">receipt</i> DAR BAIXA
                      </div>
                      <div class="collapsible-body">
                        <h5 class="blue-text">Informar Recebimento</h5>
                        <p>Ao dar baixa num recebível, você indica para o sistema que o débito foi quitado. Revise os dados da conta e efetue a baixa anexando o comprovante.</p>
                        <table>
                          <tbody>
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
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Resumo da conta -->

        <!-- Informações da baixa -->
        <div class="col l12 s12">
          <div class="card-target card animate fadeLeft border-radius-6" style="overflow:visible">
            <div class="card-content">

              <h3 class="card-title mb-0">Informações sobre o pagamento</h3>

              <form action="financeiro_baixa_recebivel.php" method="get">

                <!-- Data do pagamento -->
                <div class="row pt-4">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">calendar_today</i>
                    <input id="dataPago" name="dataPago" class="datepicker" value="<?=$dataPago;?>" type="date">
                    <label for="dataPago" class="active strong">Data do pagamento</label>
                  </div>
                </div>
                <!--/ Data do pagamento -->

                <!-- Meio de Pagamento -->
                <div class="row">
                  <div class="mt-2">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">view_day</i>
                      <select name="meioPagamento" id="baixa-conta-meio-pagamento">
                        <option value="0" disabled selected>Selecione o meio de pagamento</option>
                        <option value="dinheiro">Dinheiro</option>
                        <option value="cartao">Cartão</option>
                        <option value="cheque">Cheque</option>
                        <option value="deposito">Deposito</option>
                      </select>
                      <label>Meio de Pagamento</label>
                    </div>
                  </div>
                </div>
                <!--/ Meio de Pagamento -->

                <!-- Dinheiro -->
                <div id="baixa-conta-dinheiro">

                  <!-- Valor pago -->
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="valorPago" name="valorPago" value="<?=$valorPago;?>" type="text" class="maskMoney">
                      <label for="valorPago" class="active">Valor Pago</label>
                    </div>
                  </div>
                  <!--/ Valor pago -->

                </div>
                <!--/ Dinheiro -->

                <!-- Cartão de débito ou crédito -->
                <div id="baixa-conta-cartao">

                  <!-- Incluir parcela -->
                  <div class="row">
                    <div class="input-field col s12">
                      <a onclick="openModal('#cadastrar-pacela')" class="btn cyan waves-effect waves-light right">
                        <i class="material-icons left">add</i>
                        Parcela
                      </a>
                    </div>
                  </div>
                  <!--/ Incluir parcela -->

                  <!-- Parcelas Cartão -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Data</th>
                        <th>Valor</th>
                        <th>Pago</th>
                        <th>Comprovante</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>20/03/2020</td>
                        <td>R$ 300,00</td>
                        <td class="text-center"></td>
                        <td>
                          <input type="file">
                        </td>
                        <td class="text-center">
                          <a class="text-red">
                            <i class="material-icons">delete</i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>20/02/2020</td>
                        <td>R$ 300,00</td>
                        <td class="text-center">
                          <div class="switch">
                            <label>
                              <input type="checkbox" checked disabled>
                              <span></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <strong>comprovante_01.pdf</strong>
                        </td>
                        <td class="text-center">
                          <a class="text-red">
                            <i class="material-icons">delete</i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>20/01/2020</td>
                        <td>R$ 300,00</td>
                        <td class="text-center">
                          <div class="switch">
                            <label>
                              <input type="checkbox" checked disabled>
                              <span></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <strong>comprovante_02.pdf</strong>
                        </td>
                        <td class="text-center">
                          <a class="text-red">
                            <i class="material-icons">delete</i>
                          </a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <!--/ Parcelas Cartão -->

                </div>
                <!--/ Cartão de débito ou crédito -->

                <!-- Cheque -->
                <div id="baixa-conta-cheque">

                  <!-- Incluir Cheque -->
                  <div class="row">
                    <div class="input-field col s12">
                      <a onclick="openModal('#cadastrar-cheque')" class="btn cyan waves-effect waves-light right" name="action">
                        <i class="material-icons left">add</i>
                        Cheque
                      </a>
                    </div>
                  </div>
                  <!--/ Incluir Cheque -->

                  <!-- Cheques -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Bom Para</th>
                        <th>Valor</th>
                        <th>Compensado</th>
                        <th>Arquivo</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>26/03/2020</td>
                        <td>R$ 300,00</td>
                        <td class="text-center">
                          <div class="switch">
                            <label>
                              <input type="checkbox">
                              <span></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <input type="file">
                        </td>
                        <td class="text-center">
                          <a onclick="openModal('#cadastrar-cheque')" class="text-cyan">
                            <i class="material-icons">edit</i>
                          </a>
                        </td>
                        <td class="text-center">
                          <a class="text-red">
                            <i class="material-icons">delete</i>
                          </a>
                        </td>
                      </tr>

                      <tr>
                        <td>12/12/2019</td>
                        <td>R$ 300,00</td>
                        <td class="text-center">
                          <div class="switch">
                            <label>
                              <input type="checkbox" checked>
                              <span></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <input type="file">
                        </td>
                        <td class="text-center">
                          <a onclick="openModal('#cadastrar-cheque')" class="text-cyan">
                            <i class="material-icons">edit</i>
                          </a>
                        </td>
                        <td class="text-center">
                          <a class="text-red">
                            <i class="material-icons">delete</i>
                          </a>
                        </td>
                      </tr>

                      <tr>
                        <td>12/12/2019</td>
                        <td>R$ 300,00</td>
                        <td class="text-center">
                          <div class="switch">
                            <label>
                              <input type="checkbox" checked>
                              <span></span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <input type="file">
                        </td>
                        <td class="text-center">
                          <a onclick="openModal('#cadastrar-cheque')" class="text-cyan">
                            <i class="material-icons">edit</i>
                          </a>
                        </td>
                        <td class="text-center">
                          <a class="text-red">
                            <i class="material-icons">delete</i>
                          </a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <!--/ Cheques -->

                </div>
                <!--/ Cheque -->

                <!-- Depósito -->
                <div id="baixa-conta-deposito">

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

                  <!-- Data -->
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="bomPara" name="bomPara" class="datepicker" value="<?=$bomPara;?>" type="date">
                      <label for="bomPara" class="active strong">Data</label>
                    </div>
                  </div>
                  <!--/ Data -->

                  <!-- Valor -->
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="valorPago" name="valorPago" value="<?=$valorPago;?>" type="text" class="maskMoney">
                      <label for="valorPago" class="active">Valor</label>
                    </div>
                  </div>
                  <!--/ Valor -->

                  <!-- Favorecido -->
                  <div class="row">
                    <div class="input-field col s12">
                      <select name="meioPagamento" id="baixa-conta-meio-pagamento">
                        <option value="0" disabled selected>Selecione a conta favorecida</option>
                        <option value="">ITAÚ - CC.: 00000-1</option>
                        <option value="">BB - CC.: 00000-1</option>
                      </select>
                      <label>Meio de Pagamento</label>
                    </div>
                  </div>
                  <!--/ Favorecido -->

                  <!-- Comprovante -->
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Comprovante</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
                  <!--/ Comprovante -->

                </div>
                <!--/ Depósito -->

                <!-- Gravar -->
                <div class="row">
                  <div class="input-field col s12">
                    <!-- TODO: Criar recibo imprimível -->
                    <button class="btn waves-effect blue waves-light right" name="action">
                      Imprimir Recibo
                      <i class="material-icons left">print</i>
                    </button>
                    <button class="btn waves-effect waves-light right mr-1" type="submit" name="action">
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
        <!--/ Informações da baixa -->

        <!-- Cadastrar Parcela -->
        <!-- TODO: Criar estrutura simplificada de ajax para preencher o formulario quando for edição -->
        <!-- TODO: Criar mecanismo em js para abrir essa área através de uma variável na url, para ser usada para continuar aberto ao adicionar uma nova parcela -->
        <div id="cadastrar-pacela" class="modal" style="width: 500px">
          <div class="modal-content">
            <h5>Cadastrar Parcela 4 de 4</h5>

            <form action="financeiro_baixa_recebivel.php" method="get">

              <!-- Valor -->
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">attach_money</i>
                  <input id="valorPago" name="valorPago" value="<?=$valorPago;?>" type="text" class="maskMoney">
                  <label for="valorPago" class="active">Valor</label>
                </div>
              </div>
              <!--/ Valor -->

              <!-- Data -->
              <div class="row pt-4">
                <div class="input-field col s12">
                  <i class="material-icons prefix">calendar_today</i>
                  <input id="dataPago" name="dataPago" class="datepicker" value="<?=$dataPago;?>" type="date">
                  <label for="dataPago" class="active strong">Data do pagamento</label>
                </div>
              </div>
              <!--/ Data -->

              <!-- Gravar -->
              <div class="col s12 text-center">
                <button type="submit" class="btn mb-5 btn-flat waves-effect waves-light pink accent-2 white-text">
                  Adicionar
                </button>
                <a onclick="closeModal('#cadastrar-pacela')" class="btn mb-5 btn-flat waves-effect waves-light grey lighten-3">
                  Cancelar
                </a>
              </div>
              <!--/ Gravar -->

            </form>

          </div>
        </div>
        <!--/ Cadastrar Parcela -->

        <!-- Cadastrar Cheques -->
        <!-- TODO: Criar mecanismo em js para abrir essa área através de uma variável na url, para ser usada para continuar aberto ao adicionar uma nova parcela -->
        <div id="cadastrar-cheque" class="modal" style="width: 500px">
          <div class="modal-content">
            <h5>Cadastrar Cheque</h5>

            <form action="financeiro_baixa_recebivel.php" method="get">

              <!-- Número do Cheque -->
              <div class="row">
                <div class="input-field col s12">
                  <input id="numCheque" name="numCheque" value="<?=$numCheque;?>" type="text">
                  <label for="numCheque" class="active">Número do Cheque</label>
                </div>
              </div>
              <!--/ Número do Cheque -->

              <!-- Número do Banco -->
              <div class="row">
                <div class="input-field col s12">
                  <input id="numBanco" name="numBanco" value="<?=$numBanco;?>" type="text">
                  <label for="numBanco" class="active">Número do Banco</label>
                </div>
              </div>
              <!--/ Número do Banco -->

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

              <!-- Bom Para (Data) -->
              <div class="row">
                <div class="input-field col s12">
                  <input id="bomPara" name="bomPara" class="datepicker" value="<?=$bomPara;?>" type="date">
                  <label for="bomPara" class="active strong">Bom Para (Data)</label>
                </div>
              </div>
              <!--/ Bom Para (Data) -->

              <!-- Valor -->
              <div class="row">
                <div class="input-field col s12">
                  <input id="valorPago" name="valorPago" value="<?=$valorPago;?>" type="text" class="maskMoney">
                  <label for="valorPago" class="active">Valor</label>
                </div>
              </div>
              <!--/ Valor -->

              <!-- Gravar -->
              <div class="col s12 text-center">
                <button type="submit" class="btn mb-5 btn-flat waves-effect waves-light pink accent-2 white-text">
                  Adicionar
                </button>
                <a onclick="closeModal('#cadastrar-cheque')" class="btn mb-5 btn-flat waves-effect waves-light grey lighten-3">
                  Cancelar
                </a>
              </div>
              <!--/ Gravar -->

            </form>
          </div>
        </div>
        <!--/ Cadastrar Cheques -->

        <?php
          // Notifications Menu
          include "includes/menus/aside-right.php";
        ?>

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
    <script src="assets/js/scripts/financeiro-baixa-recebivel.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>