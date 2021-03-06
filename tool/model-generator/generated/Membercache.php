<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'membercaches' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Membercache extends BaseBO
{
	private $fields;
	private $memberId;
	private $data1;
	private $data2;
	private $expiration;


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
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['data1'])) $this->data1 = $fields['data1'];
		if (isset($fields['data2'])) $this->data2 = $fields['data2'];
		if (isset($fields['expiration'])) $this->expiration = $fields['expiration'];
	
	}

	public function getFields() {
		return $this->fields;
	}

	
	public function getMemberId() {
		return $this->memberId;
	}
	public function setMemberId($memberId) {
		$this->fields['memberId'] = $memberId;
		$this->memberId = $memberId;
	}

	public function getData1() {
		return $this->data1;
	}
	public function setData1($data1) {
		$this->fields['data1'] = $data1;
		$this->data1 = $data1;
	}

	public function getData2() {
		return $this->data2;
	}
	public function setData2($data2) {
		$this->fields['data2'] = $data2;
		$this->data2 = $data2;
	}

	public function getExpiration() {
		return $this->expiration;
	}
	public function setExpiration($expiration) {
		$this->fields['expiration'] = $expiration;
		$this->expiration = $expiration;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->memberId.':'.$this->data1.':'.$this->data2.':'.$this->expiration;
	}
}
