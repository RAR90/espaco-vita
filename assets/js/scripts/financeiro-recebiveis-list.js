/*
 * DataTables - Tables
 */


$(function () {

  // Page Length Option Table



  $('#page-length-option').DataTable({
    "responsive": true,
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "Todos"]
    ]
  });

  $('#page-length-option-alt').DataTable({
    "responsive": true,
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "Todos"]
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

