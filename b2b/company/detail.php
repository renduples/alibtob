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
uses("company");
$tpl_file = "company/detail";
$viewhelper->setTitle(L("yellow_page", "tpl"));
$viewhelper->setPosition(L("yellow_page", "tpl"), "company/");
if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
	$result = $pdb->GetRow("SELECT * FROM {$tb_prefix}companies WHERE id='".$id."'");
	if (!empty($result)) {
		$viewhelper->setTitle($result['name']);
		$viewhelper->setPosition($result['name']);		
		setvar("item", $result);
	}
}
render($tpl_file);
?>