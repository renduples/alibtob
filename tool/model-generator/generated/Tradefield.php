<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'tradefields' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Tradefield extends BaseBO
{
	private $fields;
	private $tradeId;
	private $memberId;
	private $linkMan;
	private $address;
	private $companyName;
	private $email;
	private $primTel;
	private $primTelnumber;
	private $primIm;
	private $primImaccount;
	private $brandName;
	private $template;


	/**
	 * Default constructor
	 * @param value some value
	 */
	function __construct()
	{
		$args = func_get_args();
		if ( func_num_args() == 1 ) {
			$this->init( $args[0] );
		}
	}

	/**
	 * Initialize the business object with data read from the DB.
	 * @param row array containing one read record.
	 */
	private function init($fields)
	{
		$this->fields = $fields;
		if (isset($fields['tradeId'])) $this->tradeId = $fields['tradeId'];
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['linkMan'])) $this->linkMan = $fields['linkMan'];
		if (isset($fields['address'])) $this->address = $fields['address'];
		if (isset($fields['companyName'])) $this->companyName = $fields['companyName'];
		if (isset($fields['email'])) $this->email = $fields['email'];
		if (isset($fields['primTel'])) $this->primTel = $fields['primTel'];
		if (isset($fields['primTelnumber'])) $this->primTelnumber = $fields['primTelnumber'];
		if (isset($fields['primIm'])) $this->primIm = $fields['primIm'];
		if (isset($fields['primImaccount'])) $this->primImaccount = $fields['primImaccount'];
		if (isset($fields['brandName'])) $this->brandName = $fields['brandName'];
		if (isset($fields['template'])) $this->template = $fields['template'];
	
	}

	public function getFields() {
		return $this->fields;
	}

	
	public function getTradeId() {
		return $this->tradeId;
	}
	public function setTradeId($tradeId) {
		$this->fields['tradeId'] = $tradeId;
		$this->tradeId = $tradeId;
	}

	public function getMemberId() {
		return $this->memberId;
	}
	public function setMemberId($memberId) {
		$this->fields['memberId'] = $memberId;
		$this->memberId = $memberId;
	}

	public function getLinkMan() {
		return $this->linkMan;
	}
	public function setLinkMan($linkMan) {
		$this->fields['linkMan'] = $linkMan;
		$this->linkMan = $linkMan;
	}

	public function getAddress() {
		return $this->address;
	}
	public function setAddress($address) {
		$this->fields['address'] = $address;
		$this->address = $address;
	}

	public function getCompanyName() {
		return $this->companyName;
	}
	public function setCompanyName($companyName) {
		$this->fields['companyName'] = $companyName;
		$this->companyName = $companyName;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->fields['email'] = $email;
		$this->email = $email;
	}

	public function getPrimTel() {
		return $this->primTel;
	}
	public function setPrimTel($primTel) {
		$this->fields['primTel'] = $primTel;
		$this->primTel = $primTel;
	}

	public function getPrimTelnumber() {
		return $this->primTelnumber;
	}
	public function setPrimTelnumber($primTelnumber) {
		$this->fields['primTelnumber'] = $primTelnumber;
		$this->primTelnumber = $primTelnumber;
	}

	public function getPrimIm() {
		return $this->primIm;
	}
	public function setPrimIm($primIm) {
		$this->fields['primIm'] = $primIm;
		$this->primIm = $primIm;
	}

	public function getPrimImaccount() {
		return $this->primImaccount;
	}
	public function setPrimImaccount($primImaccount) {
		$this->fields['primImaccount'] = $primImaccount;
		$this->primImaccount = $primImaccount;
	}

	public function getBrandName() {
		return $this->brandName;
	}
	public function setBrandName($brandName) {
		$this->fields['brandName'] = $brandName;
		$this->brandName = $brandName;
	}

	public function getTemplate() {
		return $this->template;
	}
	public function setTemplate($template) {
		$this->fields['template'] = $template;
		$this->template = $template;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->tradeId.':'.$this->memberId.':'.$this->linkMan.':'.$this->address.':'.$this->companyName.':'.$this->email.':'.$this->primTel.':'.$this->primTelnumber.':'.$this->primIm.':'.$this->primImaccount.':'.$this->brandName.':'.$this->template;
	}
}
