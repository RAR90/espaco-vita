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

});

