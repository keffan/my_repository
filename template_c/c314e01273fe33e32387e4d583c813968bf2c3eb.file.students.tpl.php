<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 19:13:12
         compiled from "C:\web\server2go\htdocs\template\students.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7433553533a8af80c7-25529260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c314e01273fe33e32387e4d583c813968bf2c3eb' => 
    array (
      0 => 'C:\\web\\server2go\\htdocs\\template\\students.tpl',
      1 => 1429549677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7433553533a8af80c7-25529260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'students' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553533a8b88725_88961514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553533a8b88725_88961514')) {function content_553533a8b88725_88961514($_smarty_tpl) {?><h1>Students</h1>
<ul>
  <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['student']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->tpl_vars['student']->value['age'];?>
</li>
  <?php } ?>
</ul><?php }} ?>
