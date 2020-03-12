# Espaço Vita UX kit

## Usage
#### 1. Clone repository
``` bash
$ git clone https://github.com/RAR90/espaco-vita
```
#### 2. Colors
[Follow these steps to coloring layout.](https://teclabs.com.br/html/materialize.teclabs/css-color.html)

#### 3. Grid
[Materialize Teclabs use your own grid system, reference is here.](https://teclabs.com.br/html/materialize.teclabs/css-grid.html)

#### 4. Forms
[Form inputs usage examples.](https://teclabs.com.br/html/materialize.teclabs/form-layouts.html)

#### 5. More, much more!
[See more than 80 UX tools.](https://teclabs.com.br/html/materialize.teclabs)

## Structure
#### 1. Project level custom styles and scripts

To write custom codes and styles in project level, use this files
```
assets/css/custom/custom.css
assets/js/custom/custom-script.js
```

#### 2. Page level scripts

Each page have plugin dependencies (JavaScript and Css) and your own CSS and JavaScript file, new pages must follow this pattern.

Ex.: home.php
```
assets/js/scripts/home.js
assets/css/pages/home.css
```

#### 3. Navigation

All menus and navegation components must be placed in `/menus` directory
```
includes/menus/aside-right.php
includes/menus/aside.php
includes/menus/header.php
```

#### 4. TABs Navigation

If you need open an page with a especific tab, you can passes tab name in url like that:
```php
financeiro_recebiveis_form.php#tab-eventos
```

## Async Functions
#### 1. Ajax Modal `ajaxModal()`

This function send you parameters to php file and open an modal with a html fragment with result of php processing.

```js
ajaxModal(
  'yourModalId',
  'urlOfPHPFile',
  {jsonObjectWithParams}
)
```
### Usage
#### HTML e JS
To open an modal ajax throught a table line or button, you can use  function like that:

```html
<button
  onclick="ajaxModal(
    '#detalhes-conta',
    'ajax/detalhes_conta.php',
    {
      'id':'01',
      'id_usuario':'02'
    }
  )"
>Abrir Modal</button>
```

For convention, the name of php file that contain the modal content have a same name of modal id.

#### PHP `ajax/detalhes_conta.php`
In your php file, you can use simple `$_REQUEST` function to get your params. The response is a html fragment outside php tag:

```html
<?php
  $id = $_REQUEST['id'];
  $id_usuario = $_REQUEST['id_usuario'];
?>

<h5><?=$id;?></h5>
<h6><?=$id_usuario;?></h6>
```

This fragment will be placed inside modal after bloking ui.

