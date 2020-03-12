<?php

$modalTitle = 'Nova conta bancária';

if ($_REQUEST['acao'] == 'editar') {
  $modalTitle = 'Editar conta bancária';
}

$contaTitular = '';
$contaTitularCPF = '';
$contaAgencia = '';
$contaNumero = '';
$contaObs = '';

?>

<form action="financeiro_contas_bancarias.php" id="form-contas-bancarias">
  <div class="col s12">
    <h5><?=$modalTitle;?></h5>
    <p>As contas cadastradas serão usadas para dar baixa em recebimentos quando este for efetuado através de depósito.</p>

    <!-- Títular da Conta -->
    <div class="row">
      <div class="input-field col s12">
        <input id="contaTitular" name="contaTitular" value="<?=$contaTitular;?>" type="text" required>
        <label for="contaTitular" class="active">Títular</label>
      </div>
    </div>
    <!--/ Títular da Conta -->

    <!-- CPF -->
    <div class="row">
      <div class="input-field col s12">
        <input id="contaTitularCPF" name="contaTitularCPF" class="maskCpf" value="<?=$contaTitularCPF;?>" type="text" required>
        <label for="contaTitularCPF" class="active">CPF do Títular</label>
      </div>
    </div>
    <!--/ CPF -->

    <!-- Agência -->
    <div class="row">
      <div class="input-field col s12">
        <input id="contaAgencia" name="contaAgencia" value="<?=$contaAgencia;?>" type="text" required>
        <label for="contaAgencia" class="active">Número da Agência</label>
      </div>
    </div>
    <!--/ Agência -->

    <!-- Conta -->
    <div class="row">
      <div class="input-field col s12">
        <input id="contaNumero" name="contaNumero" value="<?=$contaNumero;?>" type="text" required>
        <label for="contaNumero" class="active">Número da Conta</label>
      </div>
    </div>
    <!--/ Conta -->

    <!-- Observação -->
    <div class="row">
      <div class="input-field col s12">
        <textarea name="contaObs" id="contaObs" rows="10"><?=$contaObs;?></textarea>
        <label for="contaObs" class="active label-textarea">Observação</label>
      </div>
    </div>
    <!--/ Observação -->

  </div>
  <div class="col s12 pb-5 text-center">
    <button type="submit" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">CADASTRAR</button>
    <a onclick="closeModal('#conta-bancaria')" class="btn mb-5 btn-small btn-flat waves-effect waves-light grey light-2 white-text">CANCELAR</a>
  </div>
</form>