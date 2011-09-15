<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2083 $
 */
session_cache_limiter('nocache');
require("../libraries/common.inc.php");
require("session_cp.inc.php");
include(CACHE_PATH. "cache_type.php");
uses("friendlink", "industry", "typeoption");
require(PHPB2B_ROOT.'libraries/page.class.php');
$link = new Friendlinks();
$page = new Pages();
$industry = new Industries();
$typeoption = new Typeoption();
$conditions = null;
$tpl_file = "friendlink";
setvar("AskAction", $typeoption->get_cache_type("common_option"));
if (!empty($_PB_CACHE['friendlinktype'])) {
	setvar("FriendlinkTypes", $_PB_CACHE['friendlinktype']);
}
if (isset($_POST['save']) && !empty($_POST['data']['friendlink']['title'])) {
	$vals = array();
	$vals = $_POST['data']['friendlink'];
	if(isset($_POST['id'])){
		$id = intval($_POST['id']);
	}
	if (!preg_match("/^(http|ftp):/", $_POST['data']['friendlink']['url'])) {
		$vals['url'] = 'http://'.$_POST['data']['friendlink']['url'];
	}
    $vals['industry_id'] = PbController::getMultiId($_POST['industry']['id']);
    $vals['area_id'] = PbController::getMultiId($_POST['area']['id']);
	if (!empty($id)) {
		$vals['modified'] = $time_stamp;
		$updated = $link->save($vals, "update", $id);
	} else {
		$vals['created'] = $vals['modified'] = $time_stamp;
		$updated = $link->save($vals);
	}
	if (!$updated) {
		flash();
	}
}
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	if (!empty($_GET['id'])) {
		$id = intval($_GET['id']);
	}
	if ($do == "del" && !empty($id)) {
		$result = $link->del($id);
	}
	if ($do == "edit") {
		$tpl_file = "friendlink.edit";
		if(!empty($id)){
			$fields = "*";
			$link_info = $link->read($fields,$id);
			setvar("item",$link_info);
		}
		template($tpl_file);
		exit;
	}
}
if(isset($_POST['del']) && !empty($_POST['id'])){
	$result = $link->del($_POST['id']);
	if(!$result){
		flash();
	}
}
$amount = $link->findCount($conditions);
$page->setPagenav($amount);
$fields = "*";
setvar("Items",$link->findAll($fields, null, $conditions, "priority ASC,id DESC",$page->firstcount,$page->displaypg));
setvar("ByPages",$page->pagenav);
template($tpl_file);
?>