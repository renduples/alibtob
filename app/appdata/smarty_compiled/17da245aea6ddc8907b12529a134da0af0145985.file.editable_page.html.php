<?php /* Smarty version Smarty-3.0.7, created on 2011-08-28 14:24:26
         compiled from "app/view/en_default/editable_page.html" */ ?>
<?php /*%%SmartyHeaderCode:1819272884e5ab20aca4075-48120903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17da245aea6ddc8907b12529a134da0af0145985' => 
    array (
      0 => 'app/view/en_default/editable_page.html',
      1 => 1304264076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819272884e5ab20aca4075-48120903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_get_url')) include '/var/www/virtualbox/lib/smarty/plugins/function.get_url.php';
?><h2>Editable Page</h2>
<p>Sign In with any username (password is 'demo') to edit this page</p><p>

<?php echo smarty_function_get_url(array('url'=>"/page-editor",'param'=>"editable_page.html"),$_smarty_tpl);?>
</p>