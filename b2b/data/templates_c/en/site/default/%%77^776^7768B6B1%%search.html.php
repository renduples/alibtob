<?php /* Smarty version 2.6.18, created on 2011-08-31 02:44:32
         compiled from default/search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'sprintf', 'default/search.html', 83, false),array('function', 'the_url', 'default/search.html', 93, false),array('function', 'mailto', 'default/search.html', 147, false),array('block', 'industry', 'default/search.html', 127, false),array('block', 'area', 'default/search.html', 133, false),array('block', 'userpage', 'default/search.html', 142, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
var select_item = "<?php echo $_GET['do']; ?>
";
var site_name = "<?php echo $this->_tpl_vars['site_name']; ?>
";
var site_url = "<?php echo $this->_tpl_vars['SiteUrl']; ?>
";
</script>
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/jquery/jquery.validate.js"></script>
<script src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
scripts/validate.js"></script>
<?php echo '
<script> 
$(document).ready(function(){   
	if($("#item_"+select_item).length>0){
		$("#item_"+select_item).addClass("stab"); 
		$("#Do").val(select_item);
	}else{
		$("#nav_items").find(\'a:first\').addClass("stab"); 
	}
	//Set Homepage and add favorite link
	$("#sethomepage").click(function(){
	if (window.sidebar) { 
		window.sidebar.addPanel(site_name,site_url,""); 
		return false;
	} else if( document.all ) { 
		window.external.AddFavorite(site_url,site_name); 
		return false;
	} else if( window.opera && window.print ) { 
		return true; 
	}
	});
});
</script>
<style>
p,table{width:550px;border:0}
td,p,#u{font-size:12px}
#u{font-family:arial;padding-right:10px;line-height:19px;text-align:right;margin:0 0 13px}
#b,#u,#l td,a{font-family:arial}
#l{margin:18 0 3px 0px}
#l td{padding-left:142px;height:1.28em}
#lg{margin: 16px 57px 8px 0px}

#b{height:30px;padding-top:4px}
#b,#b a{color:#909090;text-decoration:none}
#sb {width: 6.0em; height: 2em}
.adw {
    color: #7777CC;
    font-size: 14px;
    letter-spacing: 1px;
    padding-left: 190px;
}
#lft td,#sb{font-size:14px}
#lft a,#lft b{margin-right:1.15em;}

#myurl {border:#018c3a 1px solid;left:280px;width:460px;position:absolute;background-color:#ffffff;margin:-153 0 0 0}
.toocle1 {display: none}
.fleft {float:left}.fright{float:right}.flo{}
.index_4{line-height:140%;border-bottom:#f2f2f2 1px solid}
a.an:link{font-size:13px;color:#0331bc;text-decoration:none}
a.an:visited{font-size:13px;color:#0331bc;text-decoration:none}
a.an:hover{font-size:13px;color:#0331bc;text-decoration:underline}
a.anmyb2b:link{font-size:13px;color:#ff0000;text-decoration:none}
a.anmyb2b:visited{font-size:13px;color:#ff0000;text-decoration:none}
a.anmyb2b:hover{font-size:13px;color:#ff0000;text-decoration:underline}
a.tab { cursor:pointer;text-decoration:underline}
a.stab { font-weight:bold; color:#000000; text-decoration:none; cursor:default}
</style>
'; ?>

</head>
<body>
<div id="u">
<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><?php echo $this->_tpl_vars['_back_portal']; ?>
</a>&nbsp;|&nbsp;<?php if (! $this->_tpl_vars['pb_username']): ?><a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
logging.php" id="lb"><?php echo $this->_tpl_vars['_pls_login']; ?>
</a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['_hello'])) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['pb_username']) : sprintf($_tmp, $this->_tpl_vars['pb_username'])); ?>
&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
redirect.php?url=/virtual-office" target="_officeroom"><?php echo $this->_tpl_vars['_my_office_room']; ?>
</a><?php endif; ?>
</div>
<center>
<a href="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
"><img id="lg" src="<?php echo $this->_tpl_vars['WebRootUrl']; ?>
<?php echo $this->_tpl_vars['site_logo']; ?>
"></a>

<table id="lft" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="padding-left: 30px; height: 32px;" nowrap="nowrap">
<div id="nav_items">
	  <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'product'), $this);?>
" id="item_product"><?php echo $this->_tpl_vars['_product']; ?>
</a>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'offer'), $this);?>
" id="item_offer"><?php echo $this->_tpl_vars['_offer']; ?>
</a>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'company'), $this);?>
" id="item_company"><?php echo $this->_tpl_vars['_yellow_page']; ?>
</a>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'market'), $this);?>
" id="item_market"><?php echo $this->_tpl_vars['_pro_market']; ?>
</a>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'news'), $this);?>
" id="item_news"><?php echo $this->_tpl_vars['_information']; ?>
</a>
	  <a href="<?php echo smarty_function_the_url(array('module' => 'search','do' => 'fair'), $this);?>
" id="item_fair"><?php echo $this->_tpl_vars['_fair']; ?>
</a>
</div>
</td>
</tr>
</tbody>
</table>

<table cellpadding="0" cellspacing="1" id="SearchBtn">
<tbody>
<form name="search_frm" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>
">
<input type="hidden" name="do" id="Do" value="product">
<tr valign="top"><td style="padding-left: 30px; height: 32px;" nowrap="nowrap">
<input value="" name="q" id="kw" rel="kw" size="42" maxlength="90"> <span class="btn_wr"><input type="submit" onmouseout="this.className='btn'" onmousedown="this.className='btn btn_h'" class="btn" id="su" value="<?php echo $this->_tpl_vars['_search']; ?>
"></span></td></tr>
</form>
</tbody>
</table>
	     
<table width="100%" cellpadding="0" cellspacing="3" id="SearchBannerWords">
<tbody><tr><td class="adw" style="padding-left: 115px; height: 32px;" nowrap="nowrap"><?php echo $this->_tpl_vars['site_banner_word']; ?>
</td></tr>
</tbody>
</table>
  
<span id="btn1" class="toocle2">&nbsp;<a href="javascript:;" title="<?php echo $this->_tpl_vars['site_name']; ?>
 <?php echo $this->_tpl_vars['_set_home_page']; ?>
" id="sethomepage"></a></span></p>
<table class="toocle2" id="myurldiv" style="margin: 3px 0pt 20px 28px; width: 550px;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="index_4" width="75" height="22">
<div id="myurl0"><a href="special/?type=industry" target="_blank" class="anmyb2b"><?php echo $this->_tpl_vars['_industry_category']; ?>
</a></div>
</td>
<?php $this->_tag_stack[] = array('industry', array('level' => 1,'row' => 5)); $_block_repeat=true;smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <td class="index_4" width="75"><div id="myurl1"><a href="special/?industryid=<?php echo $this->_tpl_vars['industry']['id']; ?>
" target="_blank" class="an"><?php echo $this->_tpl_vars['industry']['name']; ?>
</a></div></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_industry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <td class="index_4"><div id="myurl7"><a href="special/?type=industry" class="an"><?php echo $this->_tpl_vars['_more']; ?>
&raquo;</a></div></td>
</tr>
  <tr><td class="index_4" height="22"><div id="myurl6"><a href="special/?type=area" target="_blank" class="anmyb2b"><?php echo $this->_tpl_vars['_area_category']; ?>
</a></div></td>
<?php $this->_tag_stack[] = array('area', array('level' => 1,'row' => 5)); $_block_repeat=true;smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <td class="index_4"><div id="myurl7"><a href="special/?areaid=<?php echo $this->_tpl_vars['area']['id']; ?>
" class="an"><?php echo $this->_tpl_vars['area']['name']; ?>
</a></div></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_area($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <td class="index_4"><div id="myurl7"><a href="special/?type=area" class="an"><?php echo $this->_tpl_vars['_more']; ?>
&raquo;</a></div></td>
</tr>
</tbody>
</table>  

<p>
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
</center>
</body>
</html>