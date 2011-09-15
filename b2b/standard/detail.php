<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2048 $
 */
define('CURSCRIPT', 'sitemap');
chdir("../");
require("libraries/common.inc.php");
require("share.inc.php");
require(CACHE_PATH. "cache_type.php");
uses("standard","standardtype");
$standard = new Standards();
$standardtype = new Standardtypes();
$tpl_file = "standard/list";
$viewhelper->setTitle(L("standards", "tpl"));
$viewhelper->setPosition(L("standards", "tpl"), "standard.php");
if (isset($_GET['title'])) {
	$title = rawurldecode(trim($_GET['title']));
	$res = $standard->findByTitle($title);
	$id = $res['id'];
}
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}
if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
}
if (!empty($id)) {
	$info = $standard->read("*",$id);
	if (empty($info) or !$info) {
		flash("data_not_exists", '', 0);
	}
	if($do == "downloadtxt") {
		$standard->downloadtxt($info);
	}
	$info['pubdate'] = df($info['created']);
	$info['typename'] = $_PB_CACHE['standardtype'][$info['type_id']];
	$viewhelper->setTitle($info['typename']);
	$viewhelper->setPosition($info['typename'], "standard.php?typeid=".$info['type_id']);
	$viewhelper->setTitle($info['title']);
	$viewhelper->setPosition($info['title']);
	if (!empty($info['attachment_id'])) {
		$info['attach_hashid'] = rawurlencode(authcode($info['attachment_id']));
	}
	$info['download_article'] = 1;
	setvar("item",$info);
	$tpl_file = "detail.default";
	$standard->clicked($id);
	render($tpl_file,true);
}
?>