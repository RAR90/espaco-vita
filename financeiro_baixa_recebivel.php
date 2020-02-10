<?php
  $valorPago = '';
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
        <div class="col l6 s12">
          <div class="container">
            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12">
                  <ul class="collapsible collapsible-accordion border-radius-6 white" style="overflow:hidden" data-collapsible="accordion">

                    <!-- Form "Informações Pessoais" -->
                    <li class="active">
                      <div class="collapsible-header">
                        <i class="material-icons">receipt</i> DAR BAIXA
                      </div>
                      <div class="collapsible-body">
                        <h5 class="blue-text">Informar Recebimento</h5>
                        <form action="alunos_form.php" class="pr-5">

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

                          <!-- Data do pagamento -->
                          <div class="row pt-4">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">calendar_today</i>
                              <input id="dataPago" name="dataPago" class="datepicker" value="<?=$dataPago;?>" type="date">
                              <label for="dataPago" class="active strong">Data do pagamento</label>
                            </div>
                          </div>
                          <!--/ Data do pagamento -->

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

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Forms Accordion -->

        <div class="col l6 s12">
          <div class="card-target card animate fadeLeft border-radius-6" style="overflow:visible">
            <div class="card-content">
              <h3 class="card-title mb-0">Informações sobre o pagamento</h3>

              <!-- Meio de Pagamento -->
              <div class="row">
                <div class="mt-2">
                  <div class="input-field col s12">
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
                    <input id="valorPago" name="valorPago" value="<?=$valorPago;?>" type="text">
                    <label for="valorPago" class="active">Valor Pago</label>
                  </div>
                </div>
                <!--/ Valor pago -->

              </div>
              <!--/ Dinheiro -->

              <!-- Cartão de débito ou crédito -->
              <div id="baixa-conta-cartao">
              </div>
              <!--/ Cartão de débito ou crédito -->

              <!-- Cheque -->
              <div id="baixa-conta-cheque">

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

              </div>
              <!--/ Cheque -->

              <!-- Depósito -->
              <div id="baixa-conta-deposito">
                <!-- TODO: incluir a poossibilidade de escolha dos bancos cadastrados como favorecidos -->
                <!-- TODO: incluir campos da conta de origem conforme print -->
              </div>
              <!--/ Depósito -->


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
    <script src="app-assets/js/scripts/financeiro-baixa-recebivel.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>