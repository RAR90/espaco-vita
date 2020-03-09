<?php
  $id = $_REQUEST['id'];
  $parametro_exemplo = $_REQUEST['parametro_exemplo'];
  $retiradaObs = '';
  $valorRetirada = '';
?>

<form action="financeiro_caixa_list.php">
  <div class="col s12">

    <h5>Retirar dinheiro</h5>

    <!-- TODO: Exemplo de funcionamento dos requests em fragmentos de página, remover -->
    <pre>
      Parâmetro Exemplo: <?=$parametro_exemplo;?>
    </pre>

    <p>
      <i class="material-icons float-left">warning</i> A retirada de dinheiro do caixa é apenas para situações específicas.
      Opte por lançar uma conta avulsa ou da modalidade correta.
    </p>
    <hr><h5 class="pb-1">Saldo Disponível: R$ 7291,90</h5><hr>

    <!-- Valor da retirada -->
    <div class="row pt-2">
      <div class="input-field col s12">
        <i class="material-icons prefix">attach_money</i>
        <input id="valorRetirada" name="valorRetirada" class="maskMoney" value="<?=$valorRetirada;?>" type="text" required>
        <label for="valorRetirada" class="active">Valor da Retirada</label>
      </div>
    </div>
    <!--/ Valor da retirada -->

    <!-- Observação sobre a retirada -->
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">chrome_reader_mode</i>
        <textarea name="retiradaObs" id="retiradaObs" style="height:100px" required><?=$retiradaObs;?></textarea>
        <label for="retiradaObs" class="active label-textarea">Motivo da Retirada</label>
      </div>
    </div>
    <!--/ Observação sobre a retirada -->

    <!-- Ações -->
    <div class="col s12 text-center">
      <button type="submit" class="btn mb-5 btn-flat waves-effect waves-light pink accent-2 white-text">Retirar</button>
      <a onclick="closeModal('#retirar-dinheiro')" class="btn mb-5 btn-flat waves-effect waves-light grey lighten-3"><i class="material-icons left">cancel</i>Cancelar</a>
    </div>
    <!--/ Ações -->

    <!-- Tabela de histórico -->
    <div class="row">
      <h5>Histórico de retiradas</h5>
      <table>
        <thead>
          <tr>
            <th>Data e hora</th>
            <th>Usuário</th>
            <th>Valor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>25/12/2020 08:30</td>
            <td>Raquel Duarte</td>
            <td>R$ 50,00</td>
          </tr>
          <tr>
            <td>25/12/2020 08:30</td>
            <td>Raquel Duarte</td>
            <td>R$ 50,00</td>
          </tr>
          <tr>
            <td>25/12/2020 08:30</td>
            <td>Raquel Duarte</td>
            <td>R$ 50,00</td>
          </tr>
          <tr>
            <td>25/12/2020 08:30</td>
            <td>Raquel Duarte</td>
            <td>R$ 50,00</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--/ Tabela de histórico -->

  </div>
</form>