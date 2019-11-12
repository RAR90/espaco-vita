<header class="page-topbar" id="header">
  <div class="navbar navbar-fixed">
    <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-light-blue no-shadow">
      <div class="nav-wrapper">
        <div class="header-search-wrapper hide-on-med-and-down">

          <div class="horizontal-menu">
            <ul>
              <li class="horizontal-menu-link <?=(strpos($self, 'dashboard_modern')>0?'active':'')?>">
                <a href="dashboard_modern.php"><span>Dashboard</span></a>
              </li>
              <li class="horizontal-menu-link <?=(strpos($self, 'alunos')>0?'active':'')?>">
                <a href="alunos_list.php"><span>Alunos</span></a>
              </li>
              <li class="horizontal-menu-link <?=(strpos($self, 'professores')>0?'active':'')?>">
                <a href="professores_list.php"><span>Professores</span></a>
              </li>
              <li class="horizontal-menu-link <?=(strpos($self, 'aulas')>0?'active':'')?>">
                <a href="aulas_list.php"><span>Aulas</span></a>
              </li>
              <li class="horizontal-menu-link <?=(strpos($self, 'financeiro')>0?'active':'')?>">
                <a href="financeiro_contas_list.php"><span>Financeiro</span></a>
              </li>
              <li class="horizontal-menu-link <?=(strpos($self, 'sistema')>0?'active':'')?>">
                <a href="sistema_usuarios_list.php"><span>Sistema</span></a>
              </li>
              <li class="horizontal-menu-link <?=(strpos($self, 'eventos')>0?'active':'')?>">
                <a href="eventos.php"><span>Eventos</span></a>
              </li>
              <li class="horizontal-menu-link <?=(strpos($self, 'relatorios.php')>0?'active':'')?>">
                <a href="relatorios.php"><span>Relatórios</span></a>
              </li>
            </ul>
          </div>
        </div>

        <ul class="navbar-list right">
          <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
          <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
          <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="javascript:void(0);" data-target="slide-out-right"><i class="material-icons">notifications_none<small class="notification-badge">3</small></i></a></li>
        </ul>

        <!-- profile-dropdown-->
        <ul class="dropdown-content" id="profile-dropdown">
          <li><a class="grey-text text-darken-1" href="sistema_usuarios_form.php"><i class="material-icons">lock_outline</i> Meus Dados</a></li>
          <li><a class="grey-text text-darken-1" href="index.php"><i class="material-icons">keyboard_tab</i> Logout</a></li>
        </ul>
      </div>

    </nav>
  </div>
</header>