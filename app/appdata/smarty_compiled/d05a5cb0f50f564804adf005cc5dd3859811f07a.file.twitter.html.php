<?php /* Smarty version Smarty-3.0.7, created on 2011-08-28 14:06:04
         compiled from "/var/www/virtualbox/app/ext/twitter/view/twitter.html" */ ?>
<?php /*%%SmartyHeaderCode:9930761854e5aadbcd9f978-37709725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd05a5cb0f50f564804adf005cc5dd3859811f07a' => 
    array (
      0 => '/var/www/virtualbox/app/ext/twitter/view/twitter.html',
      1 => 1307264638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9930761854e5aadbcd9f978-37709725',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
(function($) {
	$(document).ready(function() {	
		TPF.appendHead({
			css : ['/app/ext/twitter/css/jquery.twitter.css'],
			js  : ['/app/ext/twitter/js/jquery.twitter.js'],
			jsFilesLoaded : function() {
				$(document).ready(function() {
					$("#twitter").getTwitter({
						userName: "<?php echo $_smarty_tpl->getVariable('twitterUsername')->value;?>
",
						numTweets: 5,
						loaderText: "Loading tweets...",
						slideIn: false,
						showHeading: true,
						headingText: "Latest Tweets",
						showProfileLink: true
					});
				});
			}
		});
	});
})(jQuery);
//--><!]]>
</script>
<div id="twitter"></div>