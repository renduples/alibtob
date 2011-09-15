<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
require("../libraries/common.inc.php");
require("room.share.php");
if (empty($company_id)) {
	flash("no_company_perm");
}
uses("expo");
$fair = new Expos();
if(isset($_POST['do']) && isset($_POST['id'])){
	pb_submit_check('do');
	if ($fair->checkExist($_POST['id'])) {
		$sql = "INSERT INTO {$tb_prefix}expomembers (expo_id,member_id,company_id,created,modified) VALUE (".$_POST['id'].",".$the_memberid.",".$company_id.",".$time_stamp.",".$time_stamp.")";
		$result = $pdb->Execute($sql);
	}
	if($result){
		echo "<script language='javascript'>window.close();</script>";
		exit;
	}else {
		flash("action_failed", '', 0);
	}
}
?>