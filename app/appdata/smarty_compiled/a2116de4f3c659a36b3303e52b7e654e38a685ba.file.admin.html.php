<?php /* Smarty version Smarty-3.0.7, created on 2011-08-28 14:22:17
         compiled from "/var/www/virtualbox/app/ext/blog/view/admin.html" */ ?>
<?php /*%%SmartyHeaderCode:11896893624e5ab189a8e134-73071499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2116de4f3c659a36b3303e52b7e654e38a685ba' => 
    array (
      0 => '/var/www/virtualbox/app/ext/blog/view/admin.html',
      1 => 1304264192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11896893624e5ab189a8e134-73071499',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/var/www/virtualbox/lib/smarty/plugins/function.cycle.php';
?><h3>Blog - Admin</h3>
<?php echo $_smarty_tpl->getVariable('err')->value;?>

<?php if (!empty($_smarty_tpl->getVariable('posts',null,true,false)->value)){?>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Description</th>
		<th>Create Date</th>
		<th>Action</th>
	</tr>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>"rowA,rowB"),$_smarty_tpl);?>
">
		<td><?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
</td>
		<td><a href="/blog/show/<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['p']->value['description'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['p']->value['createTime'];?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['p']->value['postId']!=1){?>
				<a href="/blog/edit/<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
">Edit</a> | <a href="/blog/remove/<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
">Remove</a>
			<?php }?>
		</td>
	</tr>
<?php }} ?>
</table>
<?php }?>
<p><a href="/blog/add">Add a blog entry</a></p>
<p>Total <?php echo $_smarty_tpl->getVariable('totalPosts')->value;?>
 post(s)</p>
