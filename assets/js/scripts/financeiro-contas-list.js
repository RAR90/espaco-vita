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

});

function openModal(modalId) {
  $(modalId).modal('open');
}

function closeModal(modalId) {
  $(modalId).modal('close');
}

