$('.maskCpf').formatter({
  'pattern': '{{999}}.{{999}}.{{999}}-{{99}}',
  'persistent': false
});

$('.maskCep').formatter({
  'pattern': '{{99999}}-{{999}}',
  'persistent': false
});

$('.maskRg').formatter({
  'pattern': '{{99}}.{{999}}.{{999}}-{{99}}',
  'persistent': false
});

$('.maskCelular').formatter({
  'pattern': '({{99}}) {{99999}}-{{9999}}',
  'persistent': false
});

$('.maskNumber').formatter({
  'pattern': '{{9999999999999999999}}',
  'persistent': false
});

$('.maskPercent').formatter({
  'patterns': [
    { '^.{1}$': '{{9}}%' },
    { '^.{2}$': '{{99}}%' },
    { '*': '{{999}}%' }
  ],
  'persistent': false
});

$('.maskPhone').formatter({
  'patterns': [
    { '^.{10}$': '({{99}}) {{9999}}-{{9999}}' },
    { '*': '({{99}}) {{99999}}-{{9999}}' }
  ],
  'persistent': false
});

$('.maskMoney').keypress(function () {
  var that = this;
  return(moeda(that,'.',',',event))
});

$('.datepicker').datepicker({
  format: 'yyyy-mm-dd'
});

$('.timepicker').timepicker();

setTabs();

function submit(formId) {
  var form = document.getElementById(formId);
  if (form) {
    document.getElementById(formId).submit();
  }
}

function moeda(a, e, r, t) {
  let n = ""
    , h = j = 0
    , u = tamanho2 = 0
    , l = ajd2 = ""
    , o = window.Event ? t.which : t.keyCode;
  if (13 == o || 8 == o)
      return !0;
  if (n = String.fromCharCode(o),
  -1 == "0123456789".indexOf(n))
      return !1;
  for (u = a.value.length,
  h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
      ;
  for (l = ""; h < u; h++)
      -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
  if (l += n,
  0 == (u = l.length) && (a.value = ""),
  1 == u && (a.value = "0" + r + "0" + l),
  2 == u && (a.value = "0" + r + l),
  u > 2) {
    for (ajd2 = "",
    j = 0,
    h = u - 3; h >= 0; h--)
        3 == j && (ajd2 += e,
        j = 0),
        ajd2 += l.charAt(h),
        j++;
    for (a.value = "",
    tamanho2 = ajd2.length,
    h = tamanho2 - 1; h >= 0; h--)
        a.value += ajd2.charAt(h);
    a.value += r + l.substr(u - 2, u)
  }
  return !1
}

function editModal() {
  openModal("#plano-de-conta")
}

function ajaxModal(modal, url, params) {
  var modalContent = $(modal+' .modal-content');
  var jsonData = JSON.parse(JSON.stringify(params));
  block();
  $.ajax({
    method: "POST",
    url: url,
    data: jsonData
  })
  .done(function( msg ) {
    setTimeout(() => {
      $(modal).modal('open');
      modalContent.html(msg);
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
      });
      $("select").formSelect();
      unblock();
    }, 300);
  });
}

function block() {
  var body = $('body');
  var w = body.css("width");
  var h = body.css("height");
  var trb = $('#throbber');
  var position = body.offset(); // top and left coord, related to document
  trb.css({
      width: w,
      height: h,
      opacity: 0.7,
      position: 'fixed',
      top:        position.top,
      left:       position.left
  });
  trb.show();
}

function unblock() {
  var trb = $('#throbber');
  trb.hide();
}

function setTabs() {

   //Init tabs
   var instance = $(".tabs").tabs();

}