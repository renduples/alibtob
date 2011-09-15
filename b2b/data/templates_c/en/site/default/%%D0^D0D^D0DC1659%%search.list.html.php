<?php /* Smarty version 2.6.18, created on 2011-08-31 02:39:44
         compiled from default/search.list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'default/search.list.html', 30, false),array('modifier', 'urldecode', 'default/search.list.html', 51, false),array('modifier', 'truncate_multi', 'default/search.list.html', 102, false),array('modifier', 'truncate', 'default/search.list.html', 134, false),array('function', 'the_url', 'default/search.list.html', 46, false),array('function', 'pager', 'default/search.list.html', 160, false),array('function', 'mailto', 'default/search.list.html', 199, false),array('block', 'industry', 'default/search.list.html', 82, false),array('block', 'company', 'default/search.list.html', 100, false),array('block', 'adword', 'default/search.list.html', 117, false),array('block', 'userpage', 'default/search.list.html', 194, false),)), $this); ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
 - <?php echo $this->_tpl_vars['site_title']; ?>
</title>
<base href="<?php echo $this->_tpl_vars['SiteUrl']; ?>
">
<meta name ="keywords" content="<?php echo $this->_tpl_vars['metakeywords']; ?>
">
<meta name ="description" content="<?php echo $this->_tpl_vars['metadescription']; ?>
"> 
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/jquery.js"></script>
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/lang.js" charset="<?php echo $this->_tpl_vars['charset']; ?>
"></script>
<style type="text/css">
@import url(<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['theme_img_path']; ?>
css/search.css);
</style>
<script>
var input_keywords = "<?php echo $this->_tpl_vars['_input_keywords']; ?>
";
</script>
<?php echo '
<script>
$(document).ready(function(){
	$("#all_cats").click(function(){
		$("#sub_cats").slideToggle("fast",function(){ $("#all_cats").toggleClass("tbos2"); $("#all_cats").toggleClass("tbos");} );
	});
});
</script>
'; ?>

</head>
<body>
<!--top-->
<div id="ie6">
<p id="u_top"><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><?php echo $this->_tpl_vars['_back_portal']; ?>
</a>&nbsp;|&nbsp;<?php if (! $this->_tpl_vars['pb_username']): ?><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
logging.php" id="lb"><?php echo $this->_tpl_vars['_pls_login']; ?>
</a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['_hello'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['pb_username']) : sprintf($_tmp, $this->_tpl_vars['pb_username'])); ?>
&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
redirect.php?url=/virtual-office" target="_officeroom"><?php echo $this->_tpl_vars['_my_office_room']; ?>
</a><?php endif; ?></p>
<table height="70" cellspacing="0" cellpadding="0" border="0">
  <form name="search_frm" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>
">
  <tbody>
  <tr>
    <td nowrap="" valign="top" style="padding-left: 8px; width: 156px; padding-top: 20px; padding-right: 10px;"><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><img title="logo" src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['site_logo']; ?>
" border=0 alt="<?php echo $this->_tpl_vars['site_banner_word']; ?>
"></a></td>
    <td nowrap="" align="left">
      <table cellspacing="0" cellpadding="0" border="0" align="left">
        <tbody>
        <tr>
          <td valign="center" class="tab">
            <div class="Tit">
			<?php $_from = $this->_tpl_vars['top_modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['module'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['module']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['module']):
        $this->_foreach['module']['iteration']++;
?>
			<?php if ($this->_tpl_vars['key'] == $_GET['do']): ?>
			<strong><?php echo $this->_tpl_vars['module']; ?>
</strong>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php else: ?>
			<a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,".($this->_tpl_vars['key'])."|typeid|pos|total_count"), $this);?>
"><?php echo $this->_tpl_vars['module']; ?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			</div></td></tr>
        <tr>
          <td nowrap><input value="<?php echo ((is_array($_tmp=$_GET['q'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
" name="q" id="kw" size="42" maxlength="90"> <input type="hidden" name="do" value="<?php echo $_GET['do']; ?>
"> <span class="btn_wr"><input type="submit" onmouseout="this.className='btn'" onmousedown="this.className='btn btn_h'" class="btn" id="su" value="<?php echo $this->_tpl_vars['_search_now']; ?>
"></span></td></tr></tbody></table></td>
    <td nowrap="" align="right" width="100%" valign="center" class="log"><!-- A 468x60 banner --></td></tr></tbody></form></table><!--top-->
<!--info-->
<table cellspacing="0" cellpadding="0" class="reinfo">
  <tbody>
  <tr>
    <td nowrap width="125" class="sethome"><div id="gxszHead"><div><strong><a href="javascript:;" onclick="$('#tbd').toggle();"><?php echo $this->_tpl_vars['_hide_or_show_option']; ?>
</a></strong></div></div>
</td>
    <td nowrap="" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['_search_result_paging'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, ($this->_tpl_vars['highlight_str']), ($this->_tpl_vars['paging']['total']), ($this->_tpl_vars['paging']['from']), ($this->_tpl_vars['paging']['to']), ($this->_tpl_vars['TimeSpend'])) : sprintf($_tmp, ($this->_tpl_vars['highlight_str']), ($this->_tpl_vars['paging']['total']), ($this->_tpl_vars['paging']['from']), ($this->_tpl_vars['paging']['to']), ($this->_tpl_vars['TimeSpend']))); ?>
</td></tr></tbody></table>

<!--info-->
<!--left column-->
<div style="border-right: 1px solid rgb(178, 208, 234);" id="tbd" class="med">

<div class="tbt">
<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['module'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['module']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['module']):
        $this->_foreach['module']['iteration']++;
?>
<?php if ($this->_foreach['module']['iteration'] == 1): ?>
	<div class="tbos" id="all_cats"><a href="javascript:;" id="link_all_cats" class="q"><?php echo $this->_tpl_vars['_all_of']; ?>
<?php echo $this->_tpl_vars['module']; ?>
</a></div>
	<div id="sub_cats">
		<?php $_from = $this->_tpl_vars['cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['item1']):
?>
		<div class="tbou"><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "typeid,".($this->_tpl_vars['key1'])."|pos|total_count"), $this);?>
" class="q" style="<?php if ($_GET['typeid'] == $this->_tpl_vars['key1']): ?>font-weight:bold;<?php endif; ?>"><?php echo $this->_tpl_vars['item1']; ?>
</a></div>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<?php else: ?>
<div class="tbos2"><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,".($this->_tpl_vars['key'])."|typeid|pos|total_count"), $this);?>
" class="q"><?php echo $this->_tpl_vars['module']; ?>
</a></div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</div>

<!--similar industry-->
<div class="xgdh"><div class="xgdhtit"><?php echo $this->_tpl_vars['_sort_screening']; ?>
</div>
<?php $this->_tag_stack[] = array('industry', array('level' => 1)); $_block_repeat=true;smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<a title="<?php echo $this->_tpl_vars['industry']['title']; ?>
" href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,".($this->_tpl_vars['key'])."|industryid,".($this->_tpl_vars['industry']['id'])), $this);?>
"><?php echo $this->_tpl_vars['industry']['title']; ?>
</a>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<div class="xgdh"><div class="xgdhtit"><?php echo $this->_tpl_vars['_orderby_method']; ?>
</div>
<a title="" href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "do,".($_GET['do'])."|orderby,dateline"), $this);?>
"><?php echo $this->_tpl_vars['_sort_by_date']; ?>
</a>
</div>

</div>
<!--left column-->

<!--right adv-->
<div id="right_adv" style="width:255px;float:right;">
<table id="mbEnd">
  <tbody>
  <tr>
    <td class="std">
      <ol id="ad_r">
		<?php $this->_tag_stack[] = array('company', array('row' => 5)); $_block_repeat=true;smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<li style="height: auto; overflow: hidden;">
        <h3><a title="<?php echo $this->_tpl_vars['company']['name']; ?>
" target="_blank" href="<?php echo $this->_tpl_vars['company']['url']; ?>
" id="an1"><?php echo $this->_tpl_vars['company']['name']; ?>
</a></h3><?php echo $this->_tpl_vars['_main_business']; ?>
<?php echo $this->_tpl_vars['_colon']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['company']['main_prod'])) ? $this->_run_mod_handler('truncate_multi', true, $_tmp, 25) : smarty_modifier_truncate_multi($_tmp, 25)); ?>

        </li>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_company($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</ol>
    <div id="aj_sogou0"></div></td>
  </tr>
 <tr>
 	<td class="r_ads">
	</td>
 </tr>
  </tbody>
</table>
</div><!--right adv-->
<div id="tads" class="tads">
		<ol>
		<?php $this->_tag_stack[] = array('adword', array('row' => 3)); $_block_repeat=true;smarty_block_adword($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<li class="tas">
		<div class="vsta">
			<h3><a target="_blank" href="<?php echo $this->_tpl_vars['adword']['target_url']; ?>
" id="pa1"><?php echo $this->_tpl_vars['adword']['title']; ?>
</a></h3>
			<span class="ac"><?php echo $this->_tpl_vars['adword']['content']; ?>
</span>
			<span><cite><?php echo $this->_tpl_vars['adword']['url']; ?>
</cite></span>
			<table style="margin-top: 4px;" class="slk"><tbody><tr><td style="padding-left: 14px; vertical-align: top;"></td></tr></tbody></table>
		</div>
		</li>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_adword($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</ol>
	</div>
<div id="res" class="med">
	<div>
    <ol>
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['result'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['result']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['result']['iteration']++;
?>
  <li class="g">  
  <h3 class="r"><font color="#261cdc">[<?php echo $this->_tpl_vars['item']['typename']; ?>
]</font>&nbsp;<a title="<?php echo $this->_tpl_vars['item']['title']; ?>
" target="_blank" href="<?php echo $this->_tpl_vars['item']['url']; ?>
" class="l"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</a><?php if ($this->_tpl_vars['item']['gradeimg']): ?><a title="<?php echo $this->_tpl_vars['item']['gradename']; ?>
" href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['gradeimg']; ?>
" alt="<?php echo $this->_tpl_vars['item']['gradename']; ?>
"></a><?php endif; ?>
</h3>
  <div class="s">
  <!-- picture -->
  <div class="tbt2">
  <?php if ($this->_tpl_vars['item']['picture'] || $this->_tpl_vars['item']['image']): ?>
  <a target="_blank" href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><img height="70" width="79" src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['item']['thumb']; ?>
"></a>
  <?php endif; ?>
  </div><!-- picture END -->
  <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['digest'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br><cite><?php if ($this->_tpl_vars['item']['extra']): ?><?php echo $this->_tpl_vars['item']['extra']; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['url']; ?>
<?php endif; ?> - (<?php echo $this->_tpl_vars['item']['pubdate']; ?>
)</cite>
  
  </div>
  
  </li>
  <?php endforeach; else: ?>
	<div id="no_result" style="font-size: 14px; line-height: 200%; color: #000000; text-align: center; padding-top: 40px; width: 560px; word-wrap: break-word;">
	<img src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['theme_img_path']; ?>
images/no_result.png">&nbsp;&nbsp;<?php echo $this->_tpl_vars['no_result_tip']; ?>
</div>
  <?php endif; unset($_from); ?>
  </ol></div>
  
<!-- adv2 -->
<div style="width: 90%;" id="tadsb" class="c">
<ol style="padding: 0px;" id="ad_b">
</ol></div><!-- adv2 -->
<!-- PAGE -->
<br>  
<div class="p"><div class="jogger"><?php echo smarty_function_pager(array('rowcount' => ($this->_tpl_vars['paging']['total']),'limit' => 10,'txt_prev' => ($this->_tpl_vars['_prev_page']),'txt_next' => ($this->_tpl_vars['_next_page'])), $this);?>
</div></div><br>
<!-- PAGE END -->

<div class="kgd">
<div id="rs">
<table cellpadding="0">
<tbody>
<tr>
<th class="tt" rowspan="2"><?php echo $this->_tpl_vars['_similar_search']; ?>
</th>
<?php $_from = $this->_tpl_vars['similar_search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['similar'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['similar']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['similar']['iteration']++;
?>
<th><a href="<?php echo smarty_function_the_url(array('module' => 'list','extra' => "q,".($this->_tpl_vars['item']['title'])."|total_count|pos|typeid"), $this);?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
</th><td></td>
<?php if (!($this->_foreach['similar']['iteration'] % 5)): ?>
<th></th>
</tr><tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</tr>
</tbody>
</table>
</div>
</div>
<!-- similar search END-->
</div>

<!-- kw2 -->
<div style="line-height: 0pt; height: 1px;"></div>
<div style="margin-top: 1.4em; text-align: center;" class="clr">

<div style="clear: both; padding-left: 130px; background: none repeat scroll 0% 0% rgb(255, 255, 255); overflow: hidden; height: 50px; text-align: left;">
<form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>
"><span style="margin-bottom: 7px; height: 22px;"><input value="<?php echo ((is_array($_tmp=$_GET['q'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
" name="q" id="kw" rel="kw" size="42" maxlength="90"> <input type="hidden" name="do" value="<?php echo $_GET['do']; ?>
"> <span class="btn_wr"><input type="submit" onmouseout="this.className='btn'" onmousedown="this.className='btn btn_h'" class="btn" id="su" value="<?php echo $this->_tpl_vars['_search_now']; ?>
"></span></form></div>
</div>

<div id="ft"><p>
<?php $this->_tag_stack[] = array('userpage', array('row' => 15,'sep' => "<span>&nbsp;|&nbsp;</span>")); $_block_repeat=true;smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_tpl_vars['page']['link']; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userpage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</p>

<p id="b"><?php echo $this->_tpl_vars['_copyright']; ?>
&copy;&nbsp;<?php echo $this->_tpl_vars['_service_hotline']; ?>
<?php echo $this->_tpl_vars['service_tel']; ?>
&nbsp;<?php echo $this->_tpl_vars['_service_email']; ?>
:<?php echo smarty_function_mailto(array('text' => ($this->_tpl_vars['service_email']),'address' => ($this->_tpl_vars['service_email']),'encode' => 'javascript'), $this);?>
</p>
</div>
</div>
<script language="javascript" src="scripts/highlight.js"></script>
<?php if ($this->_tpl_vars['highlight_str']): ?>
<script>
$('#res div:not("#no_result,#rs")').highlight('<?php echo $this->_tpl_vars['highlight_str']; ?>
');
</script>
<?php endif; ?>
</body>
</html>