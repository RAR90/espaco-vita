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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/alunos.css">
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
                <h5 class="breadcrumbs-title mt-0 mb-0">Alunos</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard-modern.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Alunos</a>
                  </li>
                  <li class="breadcrumb-item active">Lista de Alunos
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
                        <div class="col s12">
                          <table id="page-length-option" class="display">
                            <thead>
                              <tr>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Idade</th>
                                <th>Entrou em</th>
                                <th class="text-center">Ativo</th>
                                <th class="text-center">Editar</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td class="text-center">
                                  <div class="switch">
                                    <label>
                                      <input type="checkbox">
                                      <span class="lever"></span>
                                    </label>
                                  </div>
                                </td>
                                <td class="text-center">
                                  <a href="aluno.php" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">
                                    <i class="material-icons">content_copy</i>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Idade</th>
                                <th>Entrou em</th>
                                <th>Ativo</th>
                                <th>Editar</th>
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

            <?php
              include "app-includes/menus/aside-right.php";
            ?>

            <!-- FAB -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
              <a href="aluno.php" class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
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
    <script src="app-assets/js/scripts/alunos.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

  </body>
</html>