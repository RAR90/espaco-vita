<?php
  $id = $_REQUEST['id'];
?>

<div class="col s12">
  <h5>Aula de Pilates</h5>
  <p>Detalhes sobre a aula de pilates</p>
</div>
<div class="col s12">
  <ul>
    <li><strong>Professor: </strong>Alexandre Exemplo</li>
    <li><strong>Aluno: </strong>Rafael Ribeiro</li>
  </ul>
  <ul>
    <li><strong>Data: </strong>22/12/2019</li>
    <li><strong>Horário: </strong>08:30</li>
  </ul>
</div>
<div class="col s12 pb-5 text-center">
  <a href="aulas_form.php" class="btn mb-5 mt-5 btn-small btn-flat waves-effect waves-light red accent-2 white-text">REAGENDAR</a>
</div>
<div class="col s12 pb-5 text-center">
  <a onclick="closeModal('#detalhes-aula')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">FECHAR</a>
</div>