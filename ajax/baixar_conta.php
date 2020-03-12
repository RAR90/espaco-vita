<?php

$dataPago = date('Y-m-d');
$valorPago = '5.000,00';
$tipo = 'Conta a Pagar';
$valorTotal = 'R$ 1500,00';
$origem =	'Salário do professor Rafael Antônio';
$vencimento =	'22/12/2019';

?>

<form action="financeiro_contas_list.php" method="get">
  <div class="col s12">
    <h5>Dar Baixa na Conta</h5>
    <p>Para dar baixa na conta, preencha os dados e faça upload do comprovante.</p>

    <table class="mb-5">
      <tbody>
        <tr>
          <td><strong>Tipo:</strong></td>
          <td><?=$tipo;?></td>
        </tr>
        <tr>
          <td><strong>Origem:</strong></td>
          <td><?=$origem;?></td>
        </tr>
        <tr>
          <td><strong>Vencimento:</strong></td>
          <td><?=$vencimento;?></td>
        </tr>
        <tr>
          <td><strong>Valor Total:</strong></td>
          <td><?=$valorTotal;?></td>
        </tr>
      </tbody>
    </table>

    <div class="file-field input-field">
      <label class="active">Anexar Comprovante</label>
      <div class="btn mb-5 mt-1 btn-small btn-flat waves-effect waves-light blue accent-2 white-text">
        <span>Escolher Comprovante</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

    <!-- Meio de Pagamento -->
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">credit_card</i>
        <select name="meioPagamento" id="baixa-conta-meio-pagamento">
          <option value="0" disabled selected>Selecione o meio de pagamento</option>
          <option value="dinheiro">Dinheiro</option>
          <option value="cartao">Cartão</option>
          <option value="cheque">Cheque</option>
          <option value="deposito">Deposito</option>
        </select>
        <label>Meio de Pagamento</label>
      </div>
    </div>
    <!--/ Meio de Pagamento -->

    <!-- Sacado -->
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">card_membership</i>
        <select name="meioPagamento" id="baixa-conta-meio-pagamento">
          <option value="0" disabled selected>Selecione o sacado</option>
          <option value="">ITAÚ - CC.: 00000-1</option>
          <option value="">BB - CC.: 00000-1</option>
        </select>
        <label>Sacado</label>
      </div>
    </div>
    <!--/ Sacado -->

    <!-- Data do pagamento -->
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">calendar_today</i>
        <input id="dataPago" name="dataPago" class="datepicker" value="<?=$dataPago;?>" type="date" required>
        <label for="dataPago" class="active strong">Data do pagamento</label>
      </div>
    </div>
    <!--/ Data do pagamento -->

    <!-- Valor pago -->
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">attach_money</i>
        <input id="valorPago" name="valorPago" value="<?=$valorPago;?>" type="text" class="maskMoney" required>
        <label for="valorPago" class="active">Valor Pago</label>
      </div>
    </div>
    <!--/ Valor pago -->

  </div>

  <!-- Gravar -->
  <div class="col s12 pb-5 text-center">
    <button type="submit" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">DAR BAIXA</button>
    <a onclick="closeModal('#baixar-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light grey light-2 white-text">FECHAR</a>
  </div>
  <!--/ Gravar -->

</form>