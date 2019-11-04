/*
 * DataTables - Tables
 */


$(function () {


  $(document).ready(function(){
    $('.datepicker').datepicker({
      autoclose: true,
      format: "dd/mm/yyyy",
      language: 'pt-BR'
   });
  });

  // Page Length Option Table

  $('#page-length-option').DataTable({
    "responsive": true,
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "Todos"]
    ]
  });
});


