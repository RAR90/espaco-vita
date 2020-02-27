<?php

// Inputs Invisíveis
$alunoID = '';
$alunoNome = '';
$alunoCreditosAula = 'Esse aluno possui 50 créditos de 1 hora e 34 créditos de 30 minutos.';
$alunoDataAula = '1990-03-26';
$alunoHorarioAula = '';
$alunoModalidadeAula = '';
$alunoAulaProfessor = '';

?>

<!DOCTYPE html>
<html class="loading" lang="pt-Br" data-textdirection="ltr">

  <!-- BEGIN: Head-->
  <head>

    <?php
      include "app-includes/head/meta.php";
      include "app-includes/head/icons.php";
    ?>

    <title>Sistema Espaço Vita - Aula</title>

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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/aulas-form.css">
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
      include "app-includes/menus/aside-aulas.php";
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Agendar Aula</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item">
                    <a href="dashboard_modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="aulas_list.php">Lista de Aulas</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Agendar Aula
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

                          <form action="aulas_list.php" class="pr-5">

                            <!-- Selecione um aluno -->
                            <div class="input-field col s12 mb-0">
                              <i class="material-icons prefix">account_circle</i>
                              <select name="alunoNome">
                                <option value="" disabled selected>Selecione um aluno</option>
                                <option value="0" >Rafael Ribeiro</option>
                                <option value="1" >Hugo Savoia</option>
                              </select>
                              <label>Selecione um aluno</label>
                            </div>
                            <!--/ Selecione um aluno -->

                            <!-- TODO: Ao selecionar o aluno, esse campo deve ser preenchido com os créditos do aluno -->
                            <!-- Créditos Aula -->
                            <div class="input-field col s12 mb-5 pb-5 pt-0">
                              <i class="material-icons prefix">local_activity</i>
                              <label class="black-text"><?=$alunoCreditosAula;?></label>
                            </div>
                            <!--/ Créditos Aula -->

                            <!-- Data da Aula -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">today</i>
                              <input id="alunoDataAula" name="alunoDataAula" class="datepicker" value="<?=$alunoDataAula;?>" type="date">
                              <label for="alunoDataAula" class="active">Data da Aula</label>
                            </div>
                            <!--/ Data da Aula -->

                            <!-- Horário da Aula -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">access_time</i>
                              <select name="alunoHorarioAula">
                                <option value="" disabled selected></option>
                                <option value="08:00" disabled selected>08:00</option>
                                <option value="08:30" disabled selected>08:30</option>
                              </select>
                              <label>Selecione um horário</label>
                            </div>
                            <!--/ Horário da Aula -->

                            <!-- Modalidade da Aula -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">fitness_center</i>
                              <select name="alunoModalidadeAula">
                                <option value="" disabled selected></option>
                                <option value="" disabled selected>Funcional</option>
                              </select>
                              <label>Selecione uma Modalidade</label>
                            </div>
                            <!--/ Modalidade da Aula -->

                            <!-- Professor da Aula -->
                            <div class="input-field col s12">
                              <i class="material-icons prefix">school</i>
                              <select name="alunoAulaProfessor">
                                <option value="" disabled selected></option>
                                <option value="" disabled selected>Alexandre Exemplo</option>
                              </select>
                              <label>Selecione um Professor</label>
                            </div>
                            <!--/ Professor da Aula -->

                            <!-- Botão Agendar -->
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                  <i class="material-icons left">today</i>
                                  Agendar
                                </button>
                              </div>
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
    <script src="app-assets/vendors/data-tables/js/dataTables.select.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

    <?php
      include "app-includes/footer/theme.js.php";
      include "app-includes/footer/scripts.js.php";
    ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/aulas-form.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>