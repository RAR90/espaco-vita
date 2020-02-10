
<!-- Menu Left -->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo darken-1" href="">
        <img class="image-logo-aside" src="app-assets/images/logo/logo-icon.png" alt="materialize logo">
        <span class="logo-text hide-on-med-and-down">
          <div class="text-logo-aside">
            Espaço Vita
          </div>
        </span>
      </a>
      <a class="navbar-toggler" href="#">
        <i class="material-icons">radio_button_checked</i>
      </a>
    </h1>
  </div>
  <ul
    class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow"
    id="slide-out"
    data-menu="menu-navigation"
    data-collapsible="menu-accordion"
  >
    <li class="bold <?=(strpos($self, 'financeiro_caixa_list')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_caixa_list.php">
        <i class="material-icons">meeting_room</i><span class="menu-title" data-i18n="">CAIXA</span>
      </a>
    </li>
    <li class="navigation-header">
      <a class="navigation-header-text">Inclusões</a>
    </li>
    <li class="bold <?=(strpos($self, 'planos_de_contas_list')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="planos_de_contas_list.php">
        <i class="material-icons">menu_book</i><span class="menu-title" data-i18n="">Planos de Contas</span>
      </a>
    </li>
    <li class="bold <?=(strpos($self, 'planos_de_contas_list')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="planos_de_contas_list.php">
        <i class="material-icons">credit_card</i><span class="menu-title" data-i18n="">Contas Bancárias</span>
      </a>
    </li>
    <li class="bold <?=(strpos($self, 'financeiro_contas_form')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_contas_form.php">
        <i class="material-icons">confirmation_number</i><span class="menu-title" data-i18n="">Lançar Conta</span>
      </a>
    </li>
    <li class="bold <?=(strpos($self, 'financeiro_contas_form')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_contas_form.php">
        <i class="material-icons">local_atm</i><span class="menu-title" data-i18n="">Lançar Recebível</span>
      </a>
    </li>
    <li class="navigation-header">
      <a class="navigation-header-text">Contas a Pagar</a>
    </li>
    <li class="bold <?=(strpos($self, 'financeiro_contas_infra_list')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_contas_infra_list.php">
        <i class="material-icons">store</i><span class="menu-title" data-i18n="">Infraestrutura</span>
      </a>
    </li>
    <li class="bold <?=(strpos($self, 'financeiro_contas_funcionarios_list')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_contas_funcionarios_list.php">
        <i class="material-icons">supervisor_account</i><span class="menu-title" data-i18n="">Funcionários</span>
      </a>
    </li>
    <li class="bold <?=(strpos($self, 'financeiro_contas_profs')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_contas_profs_list.php">
        <i class="material-icons">school</i><span class="menu-title" data-i18n="">Professores</span>
      </a>
    </li>
    <li class="bold <?=(strpos($self, 'financeiro_contas_terceiros_list')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_contas_terceiros_list.php">
        <i class="material-icons">accessibility</i><span class="menu-title" data-i18n="">Terceirizados</span>
      </a>
    </li>
    <li class="bold <?=(strpos($self, 'financeiro_contas_avulsos_list')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_contas_avulsos_list.php">
        <i class="material-icons">gesture</i><span class="menu-title" data-i18n="">Avulsos</span>
      </a>
    </li>

    <li class="navigation-header">
      <a class="navigation-header-text">Recebíveis</a>
    </li>

    <li class="bold <?=(strpos($self, 'financeiro_recebiveis_aluns_list')>0?'active':'')?>">
      <a class="waves-effect waves-cyan " href="financeiro_recebiveis_aluns_list.php">
        <i class="material-icons">account_circle</i><span class="menu-title" data-i18n="">Alunos</span>
      </a>
    </li>

    <li class="bold <?=(strpos($self, 'financeiro_recebiveis_events_list')>0?'active':'')?>"><a class="waves-effect waves-cyan " href="financeiro_recebiveis_events_list.php">
      <i class="material-icons">event</i><span class="menu-title" data-i18n="">Eventos</span></a>
    </li>

    <li class="bold <?=(strpos($self, 'financeiro_recebiveis_outros_list')>0?'active':'')?>"><a class="waves-effect waves-cyan " href="financeiro_recebiveis_outros_list.php">
      <i class="material-icons">developer_board</i><span class="menu-title" data-i18n="">Outras Fontes</span></a>
    </li>

  </ul>
  <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!--/ Menu Left -->