<?php

// Inputs Invisíveis
$eventoId = '';
$eventoNome = '';
$eventoData = '1990-03-26';
$eventoHora = '';
$eventoVagas = '';
$eventoValorInscricao = '';
$eventoLogradouro = '';
$eventoBairro = '';
$eventoCidade = '';
$eventoCEP = '';
$eventoEstado = '';

?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "includes/head/meta.php";
      include "includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Aula</title>

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
      include "includes/menus/aside-eventos.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Criar Evento</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="eventos_list.php">Lista de Eventos</a>
                  </li>
                  <li class="breadcrumb-item active">Criar Evento
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--/ Title & Breadcrumbs -->

        <div class="col s12">
          <div class="container">

            <!-- Conteúdo -->
            <div class="section section-data-tables">
              <div class="row">
                <div class="col s12 l6">

                  <!-- Formulários -->
                  <div class="card border-radius-6 pt-5">
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">

                          <form action="eventos_list.php" class="pr-5">

                            <!-- Data da Aula -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">today</i>
                              <input id="eventoData" name="eventoData" class="datepicker" value="<?=$eventoData;?>" type="date">
                              <label for="eventoData" class="active">Data do Evento</label>
                            </div>
                            <!--/ Data da Aula -->

                            <!-- Horário da Aula -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">access_time</i>
                              <select name="eventoHora">
                                <option value="" disabled selected></option>
                                <option value="08:00" disabled selected>08:00</option>
                                <option value="08:30" disabled selected>08:30</option>
                              </select>
                              <label>Selecione um horário</label>
                            </div>
                            <!--/ Horário da Aula -->

                            <!-- Nome do Evento -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">account_circle</i>
                              <input id="eventoNome" type="text" value="<?=$eventoNome;?>" required>
                              <label for="eventoNome" class="active">Nome do Evento</label>
                            </div>
                            <!--/ Nome do Evento -->

                            <!-- Quantidade de Vagas -->
                            <!-- TODO: Incluir mascara somente números -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">import_contacts</i>
                              <input id="eventoVagas" type="text" class="maskNumber" value="<?=$eventoVagas;?>" required>
                              <label for="eventoVagas" class="active">Quantidade de Vagas</label>
                            </div>
                            <!--/ Quantidade de Vagas -->

                            <!-- Valor da Inscrição -->
                            <!-- TODO: Incluir mascara de valor em R$ -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">local_atm</i>
                              <input id="eventoValorInscricao" type="text" class="maskMoney" value="<?=$eventoValorInscricao;?>" required>
                              <label for="eventoValorInscricao" class="active">Valor da Inscrição</label>
                            </div>
                            <!--/ Valor da Inscrição -->

                            <!-- Logradouro -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">location_on</i>
                              <input id="eventoLogradouro" type="text" value="<?=$eventoLogradouro;?>">
                              <label for="eventoLogradouro" class="active">Logradouro</label>
                            </div>
                            <!--/ Logradouro -->

                            <!-- CEP -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix" style="opacity:0">location_on</i>
                              <input id="eventoCEP" name="eventoCEP" class="maskCep" value="<?=$eventoCEP;?>" type="text">
                              <label for="eventoCEP" class="active">CEP</label>
                            </div>
                            <!--/ CEP -->

                            <!-- Bairro -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix" style="opacity:0">location_on</i>
                              <input id="eventoBairro" name="eventoBairro" value="<?=$eventoBairro;?>" type="text">
                              <label for="eventoBairro" class="active">Bairro</label>
                            </div>
                            <!--/ Bairro -->

                            <!-- Estado -->
                            <div class="mt-2">
                              <div class="input-field col s12">
                                <i class="material-icons prefix" style="opacity:0">location_on</i>
                                <select name="eventoEstado">
                                  <option value="" disabled selected>Selecione seu estado</option>
                                </select>
                                <label>Estado</label>
                              </div>
                            </div>
                            <!--/ Estado -->

                            <!-- Cidade -->
                            <div class="mt-2">
                              <div class="input-field col s12">
                                <i class="material-icons prefix" style="opacity:0">location_on</i>
                                <select name="eventoCidade">
                                  <option value="" disabled selected>Selecione sua cidade</option>
                                </select>
                                <label>Cidade</label>
                              </div>
                            </div>
                            <!--/ Cidade -->

                            <!-- Botão Agendar -->
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                <i class="material-icons left">today</i>
                                Agendar
                              </button>
                            </div>
                            <!--/ Botão Agendar -->

                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Formulários -->

                </div>

              </div>
            </div>
            <!--/ Conteúdo -->

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