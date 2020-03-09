<?php
  $id = $_REQUEST['id'];
  $id_usuario = $_REQUEST['id_usuario'];
?>

<h5>Detalhes da Conta</h5>
<h6>Status: <span class="text-red">Atrasado</span></h6>
<table>
  <tbody>
    <tr>
      <td><strong>Tipo:</strong></td>
      <td>Recebível</td>
    </tr>
    <tr>
      <td><strong>Origem:</strong></td>
      <td>Pagamento Trimestral</td>
    </tr>
    <tr>
      <td><strong>Aluno:</strong></td>
      <td>Maria Antonieta Delas Neves</td>
    </tr>
    <tr>
      <td><strong>Vencimento:</strong></td>
      <td>22/12/2019</td>
    </tr>
    <tr>
      <td><strong>Valor Total:</strong></td>
      <td>R$ 1500,00</td>
    </tr>
  </tbody>
</table>
<div class="col s12 pt-5 pb-5 text-center">
  <a onclick="closeModal('#detalhes-conta')" class="btn mb-5 btn-small btn-flat waves-effect waves-light pink accent-2 white-text">FECHAR</a>
</div>