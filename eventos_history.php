<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Eventos</title>

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/aulas-list.css">
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
      include "app-includes/menus/aside-eventos.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Eventos Passados</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Eventos</a>
                  </li>
                  <li class="breadcrumb-item active">Lista de Eventos Passados
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
                      <div class="row">
                        <div class="input-field col s12">
                          <h5>Selecione um data</h5>
                          <p>Selecione uma data para filtrar os eventos. Caso contrário será mostrado todos os eventos.</p>

                          <div class="input-field col s12">
                            <i class="material-icons prefix">today</i>
                            <input type="text" class="datepicker" placeholder="04/11/2019">
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Page Length Options -->
              <div class="row">
                <div class="col s12">
                  <div class="card border-radius-6">
                    <div class="card-content">
                      <div class="row">

                        <div class="col s12">
                          <table id="page-length-option" class="display">
                            <thead>
                              <tr>
                                <th style="width: 120px">Data</th>
                                <th style="width: 120px">Hora</th>
                                <th>Nome do Evento</th>
                                <th>Local</th>
                                <th>Participantes</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>

                              <tr>
                                <td class="text-center">22/12/2019</td>
                                <td class="text-center">08:00</td>
                                <td>Corrida de Exemplo</td>
                                <td>Praça da Biblia, Ribeirão Preto - SP</td>
                                <td>100</td>
                              </tr>


                            </tbody>
                            <tfoot>
                              <tr>
                                <th style="width: 120px">Data</th>
                                <th style="width: 120px">Hora</th>
                                <th>Nome do Evento</th>
                                <th>Local</th>
                                <th>Participantes</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- Modal Detalhes da Aula -->
            <div id="detalhes-aula" class="modal" style="width: 310px">
              <div class="modal-content">
                <div class="col s12">
                  <h5>Corrida de Exemplo</h5>
                  <h6>Inscrito Número 46</h6>
                </div>
                <div class="col s12">
                  <form action="alunos_form.php" class="pr-5">

                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name3" type="text">
                        <label for="name3" class="">Nome</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">credit_card</i>
                        <input id="name3" type="text">
                        <label for="name3" class="">CPF</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefone" type="text">
                        <label for="telefone" class="">Telefone</label>
                      </div>
                    </div>

                  </form>
                </div>
                <div class="col s12 pb-5 text-center">
                  <a href="eventos_list.php" class="btn mb-5 mt-5 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">CONCLUÍR</a>
                </div>
                <div class="col s12 pb-5 text-center">
                  <a onclick="closeModal('#detalhes-aula')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">FECHAR</a>
                </div>
              </div>
            </div>
            <!--/ Modal Detalhes da Aula -->

            <?php
              include "app-includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="eventos_form.php" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
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
    <script src="app-assets/vendors/data-tables/js/dataTables.select.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "app-includes/footer/theme.js.php";
      include "app-includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/aulas-list.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>