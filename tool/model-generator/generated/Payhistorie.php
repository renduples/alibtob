<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'payhistories' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Payhistorie extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $tradeNo;
	private $amount;
	private $remain;
	private $ipAddress;
	private $created;
	private $modified;


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
		if (isset($fields['id'])) $this->id = $fields['id'];
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['tradeNo'])) $this->tradeNo = $fields['tradeNo'];
		if (isset($fields['amount'])) $this->amount = $fields['amount'];
		if (isset($fields['remain'])) $this->remain = $fields['remain'];
		if (isset($fields['ipAddress'])) $this->ipAddress = $fields['ipAddress'];
		if (isset($fields['created'])) $this->created = $fields['created'];
		if (isset($fields['modified'])) $this->modified = $fields['modified'];
	
	}

	public function getFields() {
		return $this->fields;
	}

	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->fields['id'] = $id;
		$this->id = $id;
	}

	public function getMemberId() {
		return $this->memberId;
	}
	public function setMemberId($memberId) {
		$this->fields['memberId'] = $memberId;
		$this->memberId = $memberId;
	}

	public function getTradeNo() {
		return $this->tradeNo;
	}
	public function setTradeNo($tradeNo) {
		$this->fields['tradeNo'] = $tradeNo;
		$this->tradeNo = $tradeNo;
	}

	public function getAmount() {
		return $this->amount;
	}
	public function setAmount($amount) {
		$this->fields['amount'] = $amount;
		$this->amount = $amount;
	}

	public function getRemain() {
		return $this->remain;
	}
	public function setRemain($remain) {
		$this->fields['remain'] = $remain;
		$this->remain = $remain;
	}

	public function getIpAddress() {
		return $this->ipAddress;
	}
	public function setIpAddress($ipAddress) {
		$this->fields['ipAddress'] = $ipAddress;
		$this->ipAddress = $ipAddress;
	}

	public function getCreated() {
		return $this->created;
	}
	public function setCreated($created) {
		$this->fields['created'] = $created;
		$this->created = $created;
	}

	public function getModified() {
		return $this->modified;
	}
	public function setModified($modified) {
		$this->fields['modified'] = $modified;
		$this->modified = $modified;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->tradeNo.':'.$this->amount.':'.$this->remain.':'.$this->ipAddress.':'.$this->created.':'.$this->modified;
	}
}
