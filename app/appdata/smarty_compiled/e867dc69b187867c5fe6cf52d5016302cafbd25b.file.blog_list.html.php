<?php /* Smarty version Smarty-3.0.7, created on 2011-08-28 14:22:09
         compiled from "/var/www/virtualbox/app/ext/blog/view/blog_list.html" */ ?>
<?php /*%%SmartyHeaderCode:4925671634e5ab181df2e69-55964295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e867dc69b187867c5fe6cf52d5016302cafbd25b' => 
    array (
      0 => '/var/www/virtualbox/app/ext/blog/view/blog_list.html',
      1 => 1304264236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4925671634e5ab181df2e69-55964295',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<b>Below are all demo blog entries. Feel free to try Add/Edit/Delete entries in</b>
<a href="/blog-admin" style="border: dotted 1px; padding: 5px;">Blog Admin</a><p/>

<?php if (!empty($_smarty_tpl->getVariable('posts',null,true,false)->value)){?>
	<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
?>
		<h3><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</h3><?php echo $_smarty_tpl->tpl_vars['p']->value['content'];?>
<p/>
		<span id="commentTime"><?php echo $_smarty_tpl->tpl_vars['p']->value['createTime'];?>
</span><br/>
		<a style="font-size: 0.9em" href="/blog/show/<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['seoTitle'];?>
">more...</a>
	<?php }} ?>
<?php }?>

<script type="text/javascript">	
(function($) {
	$(document).ready(function() {
		TPF.appendHead({
			css : ['/app/ext/blog/css/style.css'],
			js  : [''], jsFilesLoaded : function() { }
		});
	});
})(jQuery);
</script>