
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
    <li class="bold <?=(strpos($self, 'alunos_list')>0?'active':'')?>"><a class="waves-effect waves-cyan " href="alunos_list.php">
      <i class="material-icons">library_books</i><span class="menu-title" data-i18n="">Lista de alunos</span></a>
    </li>
    <li class="bold <?=(strpos($self, 'alunos_form')>0?'active':'')?>"><a class="waves-effect waves-cyan " href="alunos_form.php">
      <i class="material-icons">person_add</i><span class="menu-title" data-i18n="">Novo Aluno</span></a>
    </li>
    <li class="bold<?=(strpos($self, 'alunos_temporarios')>0?'active':'')?>"><a class="waves-effect waves-cyan " href="alunos_temporarios.php">
      <i class="material-icons">av_timer</i><span class="menu-title" data-i18n="">Alunos Temporários</span></a>
    </li>
  </ul>
  <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!--/ Menu Left -->