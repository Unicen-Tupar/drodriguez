<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 02:10:24
         compiled from ".\templates\productocompleto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29332560702c8549ec7-72748930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51d7177eaed694cacc8128f88b7e864d005369f6' => 
    array (
      0 => '.\\templates\\productocompleto.tpl',
      1 => 1443571818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29332560702c8549ec7-72748930',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560702c8586dc0_09542286',
  'variables' => 
  array (
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560702c8586dc0_09542286')) {function content_560702c8586dc0_09542286($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 contenedor">
          <ul class="list-group">

              <li class="list-group-item col-md-12">

                <div  class="col-md-4">

                    <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagenes'];?>
" alt="hola mundo" id="imagenes" />

                </div>

                <div class="col-md-8 texto">
                  <?php echo $_smarty_tpl->tpl_vars['producto']->value["nombre_prod"];?>
<br><br>

                </div>

              </li>

          </ul>

        </div>
    </div>
</div>
<?php }} ?>