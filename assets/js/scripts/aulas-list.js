/*
 * DataTables - Tables
 */


$(function () {

  var date = new Date();
  var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

  $(document).ready(function(){
    $('.datepicker').datepicker({
      autoclose: true,
      format: "dd/mm/yyyy",
      startDate: today,
      clear: false
   });
  });

  // Page Length Option Table

  $('#page-length-option').DataTable({
    "responsive": true,
    "lengthMenu": [
      [16, 32, -1],
      [16, 32, "Todos"]
    ]
  });

  $('.modal').modal();

});

function openModal(modalId) {
  $(modalId).modal('open');
}

function closeModal(modalId) {
  $(modalId).modal('close');
}

