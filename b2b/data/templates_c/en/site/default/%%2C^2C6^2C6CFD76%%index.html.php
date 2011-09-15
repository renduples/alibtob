<?php /* Smarty version 2.6.18, created on 2011-08-31 02:45:59
         compiled from default/company/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'company', 'default/company/index.html', 24, false),array('block', 'ads', 'default/company/index.html', 30, false),array('block', 'area', 'default/company/index.html', 41, false),array('function', 'get', 'default/company/index.html', 67, false),array('function', 'the_url', 'default/company/index.html', 70, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_yellow_page']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrapper">
<div class="content">
<div class="company_list_left fl">
<div class="co_store">
    <div class="title_bar_s1">
    <span class="title_top_s1"><span></span></span>
    <h3><?php echo $this->_tpl_vars['_yellow_page']; ?>
</h3>
    </div>
</div>
<div class="co_store_c">
	<?php echo $this->_tpl_vars['_find_marketing_company']; ?>

	<p><a href="<?php if ($this->_tpl_vars['reg_filename'] != ''): ?><?php echo $this->_tpl_vars['reg_filename']; ?>
<?php else: ?>register.php<?php endif; ?>?type=company" class="submit_w118"><?php echo $this->_tpl_vars['_add_company']; ?>
</a></p>
	<p class="hotline"><?php echo $this->_tpl_vars['_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
</p>
</div>
<div class="co_store co_good">
    <div class="title_bar_s1">
    <span class="title_top_s1"><span></span></span>
    <h3><?php echo $this->_tpl_vars['_new_recommended_company']; ?>
</h3>
    </div>
</div>
<div class="co_store_c">
	<ul>
    	<?php $this->_tag_stack[] = array('company', array('row' => 11,'name' => 'item')); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</ul>
</div>
<div class="blank6"></div>
<div class="fincco_ad"><?php $this->_tag_stack[] = array('ads', array('typeid' => 7,'name' => 'ads')); $_block_repeat=true;smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><span><?php echo $this->_tpl_vars['ads']['link']; ?>
</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
<div class="blank6"></div>
<div class="co_store">
    <div class="title_bar_s1">
    <span class="title_top_s1"><span></span></span>
    <h3><?php echo $this->_tpl_vars['_sub_area']; ?>
</h3>
    </div>
</div>
<div class="co_store_c area_subsite clearfix">
	<ul>
	<?php $this->assign('do', 'company'); ?>
    <?php $this->_tag_stack[] = array('area', array('level' => 1,'name' => 'area')); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<li><a href="<?php echo $this->_tpl_vars['area']['url']; ?>
"><?php echo $this->_tpl_vars['area']['title']; ?>
</a></li>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</ul>
</div>
<div class="co_store co_good">
    <div class="title_bar_s1">
    <span class="title_top_s1"><span></span></span>
    <h3><?php echo $this->_tpl_vars['_join_company']; ?>
</h3>
    </div>
</div>
<div class="co_store_c">
	<ul>
    	<?php $this->_tag_stack[] = array('company', array('row' => 10,'name' => 'item')); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<li><?php echo $this->_tpl_vars['item']['link']; ?>
</li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</ul>
</div>
</div>
<div class="company_list_right fr">
<div class="co_type fl">
    <div class="title_bar_s1" style="height:28px; overflow:hidden">
         <span class="title_top_s1"><span></span></span>
         <h4><span class="titlebg_l"></span><span class="titlebg_m title_mouse"><?php echo $this->_tpl_vars['_industry_sort']; ?>
</span><span class="titlebg_r"></span></h4>
    </div>
	<div class="co_type_c">
	<?php echo smarty_function_get(array('var' => 'IndustryList','from' => 'industry'), $this);?>

	    <?php $_from = $this->_tpl_vars['IndustryList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_0'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_0']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key0'] => $this->_tpl_vars['item0']):
        $this->_foreach['level_0']['iteration']++;
?>
		<div class="co_type_c_title clearfix">
		<span class="more"><a href="<?php echo smarty_function_the_url(array('module' => 'special','type' => 'industry','do' => 'company','id' => ($this->_tpl_vars['item0']['id'])), $this);?>
"><?php echo $this->_tpl_vars['_more']; ?>
</a></span>
		<h3><em><a href="<?php echo $this->_tpl_vars['item0']['url']; ?>
"><?php echo $this->_tpl_vars['item0']['name']; ?>
</a></em></h3>
		</div>
		<ul class="clearfix">
        <?php if ($this->_tpl_vars['item0']['sub']): ?>
        <?php $_from = $this->_tpl_vars['item0']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_1_industry'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_1_industry']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_level1'] => $this->_tpl_vars['level1']):
        $this->_foreach['level_1_industry']['iteration']++;
?>
		   <li>
			<a href="<?php echo $this->_tpl_vars['level1']['url']; ?>
" title="<?php echo $this->_tpl_vars['level1']['name']; ?>
" class="co_type_f"><?php echo $this->_tpl_vars['level1']['name']; ?>
</a>
            <br />
            <?php $_from = $this->_tpl_vars['level1']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['level_2_industry'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['level_2_industry']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_level2'] => $this->_tpl_vars['level2']):
        $this->_foreach['level_2_industry']['iteration']++;
?>
			<a href="<?php echo $this->_tpl_vars['level2']['url']; ?>
" title="<?php echo $this->_tpl_vars['level2']['name']; ?>
"><?php echo $this->_tpl_vars['level2']['name']; ?>
</a><em>|</em>
            <?php endforeach; endif; unset($_from); ?>
		</li>
		
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
		</ul>
        <?php endforeach; endif; unset($_from); ?>
		<div class="cb"></div>
	</div>
</div>
</div>
<div class="blank6"></div>
<script>
$("#SearchFrm").attr("action","<?php echo smarty_function_the_url(array('module' => 'search'), $this);?>
");
$("#hdDo").val("company");
$("#topMenuCompany").addClass("lcur");
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>