<?php /* Smarty version 2.6.18, created on 2011-08-31 02:52:51
         compiled from default/market/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ads', 'default/market/index.html', 29, false),array('block', 'area', 'default/market/index.html', 55, false),array('block', 'market', 'default/market/index.html', 68, false),array('function', 'the_url', 'default/market/index.html', 56, false),array('modifier', 'truncate_multi', 'default/market/index.html', 74, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/header.html", 'smarty_include_vars' => array('page_title' => ($this->_tpl_vars['_market']),'nav_id' => 7)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/effect.css);
</style>
<script src="scripts/jquery.tools.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
<!--
function setImg(img,width,height){ 
    var scale_w=img.width/width; 
    var scale_h=img.height/height; 
    var scale=scale_w>scale_h?scale_w:scale_h; 
     img.width=img.width/scale; 
    return false; 
}
-->
</script>
<style>
.pfsc {width:980px; margin:0 auto;}
.pf_right {width:776px; float:left; margin-left:8px;}
.pf_right ul li {width:255px; float:left; margin:0 2px 3px 0; height:207px;}
.pf_right .procon {width:254px; height:145px; border:1px solid #ccc; border-top-style:none; border-bottom-style:none; text-align: center;}
.pf_right .procon img {padding:2px 2px 0 2px; width: 230px; height: 145px;}
.pf_right .procon p {width:245px; margin:2px 2px 0 2px; height:46px; line-height:20px;padding:0 0 0 5px; color:#555;}
.pf_right .procon p a:link{color: #CC0000; text-decoration:none;font-size: 12px;font-weight: bold;}
</style>
'; ?>

<div class="adv mauto">
	<?php $this->_tag_stack[] = array('ads', array('typeid' => 1,'row' => '8','name' => 'ads')); $_block_repeat=true;smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><span><?php echo $this->_tpl_vars['ads']['link']; ?>
</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ads($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<div class="blank6"></div>
<div class="pfsc">
	<div class="main_left_w180" style="padding-left: 6px;">
		<div class="cornerbox">
			<div class="title_bar_s6">
				<span class="title_top_s6"><span></span></span>
				<h2><?php echo $this->_tpl_vars['_added_market']; ?>
</h2>
			</div>
			<div class="corner_content_s6">
			   <h3 style="text-align: center;"><a href="market/add.php"><?php echo $this->_tpl_vars['_i_would_join']; ?>
</a></h3>
			</div>
		   <div class="corner_bottom">
				<div class="corner_bottom_l"></div>
				<div class="corner_tottom_r"></div>
			</div>
		</div><!--end-->
		<div class="blank6"></div>
		<div class="cornerbox">
			<div class="title_bar_s6">
				<span class="title_top_s6"><span></span></span>
				<h2><?php echo $this->_tpl_vars['_area_category']; ?>
</h2>
			</div>
			<div class="corner_content_s6">
			   <ul>
				 <?php $this->_tag_stack[] = array('area', array('level' => 1,'name' => 'item')); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				  <li><a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'market','areaid' => ($this->_tpl_vars['item']['id']),'level' => 1), $this);?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></li>
				 <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			   </ul>
			</div>
		   <div class="corner_bottom">
				<div class="corner_bottom_l"></div>
				<div class="corner_tottom_r"></div>
			</div>
		</div><!--end-->
	</div>
	<div class="pf_right">
		<ul>
			<?php $this->_tag_stack[] = array('market', array('row' => 12,'type' => 'image')); $_block_repeat=true;smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<li><div style="height: 4px;"><img src="<?php echo $this->_tpl_vars['theme_style_path']; ?>
images/pfsc_top.gif"></div>
			<div class="procon"><span>
					<a title="<?php echo $this->_tpl_vars['market']['name']; ?>
" href="<?php echo $this->_tpl_vars['market']['url']; ?>
">
					<img src="<?php echo $this->_tpl_vars['market']['src']; ?>
"></a></span>
			<p><?php echo $this->_tpl_vars['_market_name_n']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<?php echo $this->_tpl_vars['market']['link']; ?>
<br>
			<?php echo $this->_tpl_vars['_mainly_products']; ?>
<span title="<?php echo $this->_tpl_vars['market']['main_business']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['market']['main_business'])) ? $this->_run_mod_handler('truncate_multi', true, $_tmp, 16) : smarty_modifier_truncate_multi($_tmp, 16)); ?>
</span></p>
			</div>
			<div style="height: 4px;"><img src="<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/pf_d.gif"></div>
			</li><!-- 1 -->
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_market($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				</ul>
	</div>
	<div class="clear"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>