<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
define('CURSCRIPT', 'ajax');
define('NOROBOT', TRUE);
require_once 'libraries/common.inc.php';
require("share.inc.php");
require_once 'libraries/json_config.php';
$return = array();
$result = array();
$post_actions = array("checkpasswd");
$get_actions = array("checkusername");
uses("member", "company");
$member = new Members();
$company = new Companies();
if (isset($_GET['action'])) {
	$action = trim($_GET['action']);
	switch ($action) {
		case "checkusername":
			if(isset($_GET['username'])) {
				$result = call_user_func_array($action, array($_GET['username']));		
				if($result == true){
					$return["isError"] = 1;
				}else{
					$return["isError"] = 0;
				}
			}
			ajax_exit($return);
			break;
		case "addtag":
			break;
		case "showLoginBar":
			if($pb_user){
				$output = '<em>'.L('hello','tpl').$pb_userinfo['pb_username'].'</em>
        <a href="redirect.php?url=/virtual-office">['.L('my_office_room','tpl').']</a>';
		        if($pb_userinfo['is_admin']) $output.'=<a  href="pb-admin/login.php" target="_blank">['.L('control_pannel','tpl').']</a>';
        $output.='<a href="logging.php?action=logout">['.L('login_out','tpl').']</a>';
        		die($output);
			}else{
				die('<em>'.L('hello_welcome_to', 'tpl').$_PB_CACHE['setting']['site_name'].'</em>
        <a href="logging.php">&nbsp;['.L('pls_login', 'tpl').']</a>
        <a href="member.php" title="register" ><strong>['.L('free','tpl').L('register','tpl').']</strong></a>');
			}
			break;
		case "checkemail":
			if(isset($_GET['email'])) {
				$result = call_user_func_array($action, array($_GET['email']));		
				if($result == true){
					$return["isError"] = 1;
				}else{
					$return["isError"] = 0;
				}
			}
			ajax_exit($return);
			break;
		default:
			break;
	}
}

function checkusername($input_username)
{
	global $member;
	return $member->checkUserExist($input_username, false);
}

function checkemail($email)
{
	global $member;
	return $member->checkUserExistsByEmail($email);
}

function checkcompanyname($company_name)
{
	global $company;
	return $company->checkNameExists($company_name);
}
?>