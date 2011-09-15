<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'trustlogs' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Trustlog extends BaseBO
{
	private $fields;
	private $memberId;
	private $trusttypeId;


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
		if (isset($fields['trusttypeId'])) $this->trusttypeId = $fields['trusttypeId'];
	
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

	public function getTrusttypeId() {
		return $this->trusttypeId;
	}
	public function setTrusttypeId($trusttypeId) {
		$this->fields['trusttypeId'] = $trusttypeId;
		$this->trusttypeId = $trusttypeId;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->memberId.':'.$this->trusttypeId;
	}
}
