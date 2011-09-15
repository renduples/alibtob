<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
require("../libraries/common.inc.php");
require("room.share.php");
uses("adzone");
$tpl_file = "ads";
$adzone = new Adzones();
if (isset($_POST['do'])){
	pb_submit_check('do');
	uses("order");
	$order = new Orders();
	$result = $adzone->read("*", intval($_POST['id']));
	if (!empty($result)){
		$data['member_id'] = $the_memberid;
		$data['cache_username'] = $memberinfo['username'];
		$data['subject'] = $result['name'];
		$data['total_price'] = $result['price'];
		$new_trade_no = $order->Add($data);
		if (!empty($_POST['paynow'])){
			//header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
			pheader("Location:../purchase.php?do=pay&tradeno=".$new_trade_no);
			exit;
		}else{
			flash('success', 'order.php');
		}
	}
}
if (isset($_GET['do'])){
	$do = trim($_GET['do']);
	if ($do=="buy" && !empty($_GET['id'])){
		$result = $adzone->read("*", intval($_GET['id']));
		if (!empty($result)){
			setvar("item", $result);
			template("ads_edit");
			exit;
		}
	}
}
$result = $adzone->findAll("*",null, $conditions, " id desc");
setvar("datas",$result);
template($tpl_file);
?>