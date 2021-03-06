<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'detail');
require("../libraries/common.inc.php");
require("../share.inc.php");
require(CACHE_PATH. 'cache_type.php');
require(CACHE_PATH. 'cache_area.php');
require(CACHE_PATH. 'cache_industry.php');
uses("expo");
$fair = new Expos();
if (isset($_GET['title'])) {
	$title = rawurldecode(trim($_GET['title']));
	$res = $fair->findByName($title);
	$id = $res['id'];
}
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
if (!$fair->checkExist($id, true)) {
	flash("data_not_exists");
}
$info = $fair->info;
if(!empty($info)){
	$info['typename'] = $_PB_CACHE['expotype'][$info['expotype_id']];
	$viewhelper->setTitle($info['typename']);
	$viewhelper->setPosition($info['typename'], 'fair/list.php?typeid='.$info['expotype_id']);
	$viewhelper->setTitle($info['name']);
	$viewhelper->setPosition($info['name']);
	$result = $pdb->GetArray("SELECT c.name,c.id,c.cache_spacename AS userid FROM {$tb_prefix}expomembers em LEFT JOIN {$tb_prefix}companies c ON c.id=em.company_id WHERE c.status=1");
	if (!empty($result)) {
		setvar("Items", $result);
	}
	setvar("item", $info);
}
render("fair/detail");
?>