<?php
  $id = $_REQUEST['id'];
?>

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
  <a onclick="closeModal('#inscricao-evento')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">FECHAR</a>
</div>