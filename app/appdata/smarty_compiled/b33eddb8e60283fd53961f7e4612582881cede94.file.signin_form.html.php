<?php /* Smarty version Smarty-3.0.7, created on 2011-08-28 14:06:04
         compiled from "/var/www/virtualbox/app/ext/authentication/view/signin_form.html" */ ?>
<?php /*%%SmartyHeaderCode:1439372074e5aadbccfa874-86334861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b33eddb8e60283fd53961f7e4612582881cede94' => 
    array (
      0 => '/var/www/virtualbox/app/ext/authentication/view/signin_form.html',
      1 => 1306974382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1439372074e5aadbccfa874-86334861',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
function validateSignin() {	
	// make ajax call to validate() function in Signin Controller	
	$.ajax({
		type: 'post',
		url: '/sign-in/validate',
		dataType: 'json', data: $('#signinForm').serialize(),
		success: function (rets) {
			var countRets = TPF.countJSON(rets);
			TPF.setFormError('#signinForm', '', ''); // clear errors
			if (countRets > 0)
			{
				TPF.setFormError('#signinForm', rets[0]['field'], rets[0]['msg']);
				TPF.focusField('#signinForm', rets[0]['field']);	
			} else {
				TPF.delaySubmit('#signinForm', 300);	// delay submit() to avoid flooding
				return true;
			}
		}
	});
	return false;
}
</script>
<form id="signinForm" action="/sign-in" method="post" onsubmit="return validateSignin()">
	<input type="hidden" name="form" value="signinForm">
	<a href="http://demo.thinphp.com/app/ext/authentication/src/oauth_google.php?refresh" class="signin_google"><img border="0" src="/web/img/oauth/google_32.png" /></a>
	<a href="http://demo.thinphp.com/app/ext/authentication/src/oauth_facebook.php?refresh" class="signin_facebook"><img border="0" src="/web/img/oauth/facebook_32.png" /></a>
	<a href="http://demo.thinphp.com/app/ext/authentication/src/oauth_twitter.php?refresh" class="signin_twitter"><img border="0" src="/web/img/oauth/twitter_32.png" /></a>
	
	<span>Username</span>
	<input name="username" type="text"><span class="fmsg"></span>
	<span>Password</span>
	<input name="password" type="password">

	<input id="signinSubmit" name="signinSubmit" type="submit" value="Sign in">
</form>
