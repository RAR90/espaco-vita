<?php

$modalTitle = 'Nova modalidade';

if ($_REQUEST['acao'] == 'editar') {
  $modalTitle = 'Editar modalidade';
}

$modalidadeNome = '';
$modalidadeCredito = '';

?>

<div class="col s12">
  <h5><?=$modalTitle;?></h5>
  <p>As modalidades não podem ser removidas depois de cadastradas. Editando essa modalidade, tudo relacionada a ela é alterado.</p>
</div>

<div class="col s12">

  <form action="modalidades_list.php" class="pr-5">

    <!-- Nome da Modalidade -->
    <div class="input-field col s12">
      <i class="material-icons prefix">fitness_center</i>
      <input id="modalidadeNome" type="text" value="<?=$modalidadeNome;?>" required>
      <label for="modalidadeNome" class="active">Nome da Modalidade</label>
    </div>
    <!--/ Nome da Modalidade -->

    <!-- Tipo de Crédito -->
    <div class="input-field col s12 mb-0">
      <i class="material-icons prefix">access_time</i>
      <select name="modalidadeCredito">
        <option value="" disabled selected>Selecione o Tipo de Crédito</option>
        <option value="" disabled selected>Uma Hora</option>
        <option value="" disabled selected>Meia Hora</option>
      </select>
      <label>Tipo de Crédito</label>
    </div>
    <!--/ Tipo de Crédito -->

    <!-- Gravar -->
    <div class="row mb-5">
      <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
          <i class="material-icons left">today</i>
          GRAVAR
        </button>
      </div>
    </div>
    <!--/ Gravar -->

  </form>

</div>