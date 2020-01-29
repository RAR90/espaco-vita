$('.maskCpf').formatter({
  'pattern': '{{999}}.{{999}}.{{999}}-{{99}}',
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

$('.maskPhone').formatter({
  'patterns': [
    { '^.{10}$': '({{99}}) {{9999}}-{{9999}}' },
    { '*': '({{99}}) {{99999}}-{{9999}}' }
  ],
  'persistent': false
});

$('.datepicker').datepicker({
  format: 'yyyy-mm-dd'
});

$('.timepicker').timepicker();