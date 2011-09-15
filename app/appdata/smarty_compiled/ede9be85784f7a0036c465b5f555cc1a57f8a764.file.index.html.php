<?php /* Smarty version Smarty-3.0.7, created on 2011-08-28 14:06:04
         compiled from "app/view/en_default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:10459956784e5aadbca65594-85210202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede9be85784f7a0036c465b5f555cc1a57f8a764' => 
    array (
      0 => 'app/view/en_default/index.html',
      1 => 1314558133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10459956784e5aadbca65594-85210202',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_get_url')) include '/var/www/virtualbox/lib/smarty/plugins/function.get_url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
	<meta name="keywords" content="php,framework,thin,slim,small,light,fast,easy" />
	<meta name="description" content="ThinPHP is a lightweight, flexible PHP5 MVC framework. It is fast, simple and highly extensible framework." />
	<link rel="Shortcut Icon" href="data:image/gif;base64,R0lGODlhEAAQALMAAPwCNPz+/ACe/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAAAALAAAAAAQABAAAwQsMMhJqwQ4AM03v+AmipOHkWMZdqDlvvB1zvQZ37j9jd7umzKTTfdpkXDIWAQAOw==" type="image/gif" />
	
	<script src="/lib/thinphp_util/minify_js.php?list=minify_js_files&v=1010" type="text/javascript"></script>	
	<link href="/lib/thinphp_util/minify_css.php?list=minify_css_files&v=1010" rel="stylesheet" type="text/css" media="all" />
	<!-- if you don't want to use minify, compress & cache js,css... remove above code & use below:
			<script src="/web/js/jquery/jquery.min.js" type="text/javascript"></script>
			<script src="/web/js/jquery/jquery.cookie.min.js" type="text/javascript"></script>
			<script src="/web/js/thinphp/thinphp.js" type="text/javascript"></script>
			<link href="/web/css/style.css" rel="stylesheet" type="text/css" />
			<link href="/web/css/style_ext.css" rel="stylesheet" type="text/css" />-->
</head>
<body>

<div id="outer">
	<div id="header">
		<h1><a href="/home"><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</a></h1>
		<h2><?php echo $_smarty_tpl->getVariable('site_title')->value;?>
</h2>
	</div>
	<div id="menu">
		<ul>
			<li class="first"><a href="/search" accesskey="1" title=""><?php echo $_smarty_tpl->getVariable('menu_search')->value;?>
</a></li>
			<li><a href="/products/our-products" accesskey="1" title=""><?php echo $_smarty_tpl->getVariable('menu_products')->value;?>
</a></li>
			<li><a href="/members" accesskey="1" title=""><?php echo $_smarty_tpl->getVariable('menu_database')->value;?>
</a></li>
			<li><a href="/blog" accesskey="2" title=""><?php echo $_smarty_tpl->getVariable('menu_blog')->value;?>
</a></li>
			<li><a href="/editable-page" accesskey="2" title=""><?php echo $_smarty_tpl->getVariable('menu_edit')->value;?>
</a></li>
			<li><a href="/wiki-test" accesskey="2" title=""><?php echo $_smarty_tpl->getVariable('menu_wiki')->value;?>
</a></li>
			<li><a href="/contact-us" accesskey="5" title=""><?php echo $_smarty_tpl->getVariable('menu_contact')->value;?>
</a></li>
		</ul>
	</div>
	<div id="content">
		<div id="primaryContentContainer">
			<div id="primaryContent">				
				<?php echo $_smarty_tpl->getVariable('content')->value;?>

				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('inc_content')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			</div>
		</div>
		<div id="secondaryContent">
			<p>
		<a href="#" onclick="$.cookie('cke_view', '', { path: '/', expires: 7 }); location.reload(true)"><?php echo $_smarty_tpl->getVariable('lang')->value['english_n'];?>
</a> -
		<a href="#" onclick="$.cookie('cke_view', 'ja_jp', { path: '/', expires: 7 }); location.reload(true)"><?php echo $_smarty_tpl->getVariable('lang')->value['japanese_n'];?>
</a> - <a href="#" onclick="$.cookie('cke_view', 'zh-cn', { path: '/', expires: 7 }); location.reload(true)"><?php echo $_smarty_tpl->getVariable('lang')->value['chinese_n'];?>
</a>	
			<p/>
			<h3>Sign in</h3>
			<p>
				<?php if (empty($_smarty_tpl->getVariable('hide_signin',null,true,false)->value)){?>
					<?php echo smarty_function_get_url(array('url'=>"/sign-in"),$_smarty_tpl);?>

				<?php }?>
			</p>
			<p>
				New User? <a href="/register">Register</a> (Demo)
			</p>
			<p>
				<?php echo smarty_function_get_url(array('url'=>"/twitter",'param'=>"thinphp"),$_smarty_tpl);?>

			</p>
			<h3>Ipsum Dolorem</h3>
			<ul>
				<li><a href="#">Sagittis Bibendum Erat</a></li>
				<li><a href="#">Malesuada Turpis</a></li>
				<li><a href="#">Quis Gravida Massa</a></li>
				<li><a href="#">Inerat Viverra Ornare</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer">
		<p>Powered by <a href="http://www.thinphp.com">Thin PHP Framework</a><br/><a href="/terms">Terms and Conditions</a></p>
	</div>
</div>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('inc_tracking_code')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>
