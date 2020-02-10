/*
 * DataTables - Tables
 */


$(function () {

  // Page Length Option Table

  $('.data-table').DataTable({
    "responsive": true
  });

  $('#page-length-option-0').DataTable({
    "responsive": true
  });


  $('#page-length-option-1').DataTable({
    "responsive": true
  });

  $('#page-length-option-2').DataTable({
    "responsive": true
  });

  $('.modal').modal();

  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd'
  });

  $('#baixa-conta-dinheiro').hide();
  $('#baixa-conta-cartao').hide();
  $('#baixa-conta-cheque').hide();
  $('#baixa-conta-deposito').hide();

  $('#baixa-conta-meio-pagamento').change(function () {
    if($('#baixa-conta-meio-pagamento').val() == 'dinheiro') {
      $('#baixa-conta-dinheiro').show();
      $('#baixa-conta-cartao').hide();
      $('#baixa-conta-cheque').hide();
      $('#baixa-conta-deposito').hide();
    } else if ($('#baixa-conta-meio-pagamento').val() == 'cartao') {
      $('#baixa-conta-dinheiro').hide();
      $('#baixa-conta-cartao').show();
      $('#baixa-conta-cheque').hide();
      $('#baixa-conta-deposito').hide();
    } else if ($('#baixa-conta-meio-pagamento').val() == 'cheque') {
      $('#baixa-conta-dinheiro').hide();
      $('#baixa-conta-cartao').hide();
      $('#baixa-conta-cheque').show();
      $('#baixa-conta-deposito').hide();
    } else if ($('#baixa-conta-meio-pagamento').val() == 'deposito') {
      $('#baixa-conta-dinheiro').hide();
      $('#baixa-conta-cartao').hide();
      $('#baixa-conta-cheque').hide();
      $('#baixa-conta-deposito').show();
    } else {
      $('#baixa-conta-dinheiro').hide();
      $('#baixa-conta-cartao').hide();
      $('#baixa-conta-cheque').hide();
      $('#baixa-conta-deposito').hide();
    }
  });

});

function openModal(modalId) {
  $(modalId).modal('open');
}

function closeModal(modalId) {
  $(modalId).modal('close');
}

