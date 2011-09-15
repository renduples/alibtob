<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
require("../libraries/common.inc.php");
require("room.share.php");
uses("attachment", "typeoption", "area");
$attachment = new Attachment('photo');
$member = new Members();
$area = new Areas();
$member_controller = new Member();
$typeoption = new Typeoption();
$conditions = null;
if (isset($_POST['save'])) {
	pb_submit_check('member');
	$vals['office_redirect'] = $_POST['member']['office_redirect'];
	$vals['email'] =  $_POST['member']['email'];
	if (empty($_POST['member']['email'])) {
		unset($vals['email']);
	}
	if (!empty($_FILES['photo']['name'])) {
		$attachment->insert_new = false;
		$attachment->if_orignal = false;
		$attachment->if_watermark = false;
		$attachment->rename_file = "photo-".$the_memberid;
		$attachment->upload_process();
		$vals['photo'] = $attachment->file_full_url;
	}
    $_POST['memberfield']['area_id'] = PbController::getMultiId($_POST['area']['id']);
	$result = $member->save($vals, "update", $the_memberid);
	$memberfield->primaryKey = "member_id";
	$result = $memberfield->save($_POST['memberfield'], "update", $the_memberid);
	$member->clearCache($the_memberid);
	$member->updateMemberCaches($the_memberid);
	if(isset($_POST['personal']['resume_status']))
	$result = $pdb->Execute("REPLACE INTO {$tb_prefix}personals (member_id,resume_status,max_education) VALUE (".$the_memberid.",'".$_POST['personal']['resume_status']."','".$_POST['personal']['max_education']."')");
	if(!$result){
		flash('action_failed');
	}else{
		flash('success');
	}
}
setvar("Genders", $typeoption->get_cache_type('gender', null, array(-1)));
setvar("Educations", $typeoption->get_cache_type('education'));
setvar("OfficeRedirects", explode(",", L("office_redirects", "tpl")));
$personal =  $pdb->GetRow("SELECT * FROM {$tb_prefix}personals WHERE member_id=".$the_memberid);
setvar("resume_status",$personal['resume_status']);
setvar("max_education",$personal['max_education']);
if (!empty($memberinfo['photo'])) {
	$memberinfo['image'] = pb_get_attachmenturl($memberinfo['photo'], "../", "small");
}
$r2 = $area->disSubOptions($memberinfo['area_id'], "area_");
$memberinfo = am($memberinfo, $r2);
setvar("item",$memberinfo);
template("personal");
?>