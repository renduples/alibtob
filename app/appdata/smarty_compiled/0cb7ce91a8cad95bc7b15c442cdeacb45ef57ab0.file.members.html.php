<?php /* Smarty version Smarty-3.0.7, created on 2011-08-28 14:06:10
         compiled from "app/view/en_default/members.html" */ ?>
<?php /*%%SmartyHeaderCode:6022274944e5aadc29ef9e2-23687727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cb7ce91a8cad95bc7b15c442cdeacb45ef57ab0' => 
    array (
      0 => 'app/view/en_default/members.html',
      1 => 1314564948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6022274944e5aadc29ef9e2-23687727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/var/www/virtualbox/lib/smarty/plugins/function.cycle.php';
?><h3><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h3>
<?php if (!empty($_smarty_tpl->getVariable('members',null,true,false)->value)){?>
<table>
	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Joined</th>
		<th>Action</th>
	</tr>
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('members')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>"rowA,rowB"),$_smarty_tpl);?>
">
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value['created'];?>
</td>
		<td><a href="/members/remove/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Remove</a></td>
	</tr>
<?php }} ?>
</table>
<?php }?>
<p><a href="/members/add">Add a Test User</a> (random data) - or <a href="/register">Register</a></p>
<p>Total <?php echo $_smarty_tpl->getVariable('totalMembers')->value;?>
 members(s)</p>