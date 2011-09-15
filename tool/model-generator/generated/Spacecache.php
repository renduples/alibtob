<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'spacecaches' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Spacecache extends BaseBO
{
	private $fields;
	private $cacheSpacename;
	private $companyId;
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
		if (isset($fields['cacheSpacename'])) $this->cacheSpacename = $fields['cacheSpacename'];
		if (isset($fields['companyId'])) $this->companyId = $fields['companyId'];
		if (isset($fields['data1'])) $this->data1 = $fields['data1'];
		if (isset($fields['data2'])) $this->data2 = $fields['data2'];
		if (isset($fields['expiration'])) $this->expiration = $fields['expiration'];
	
	}

	public function getFields() {
		return $this->fields;
	}

	
	public function getCacheSpacename() {
		return $this->cacheSpacename;
	}
	public function setCacheSpacename($cacheSpacename) {
		$this->fields['cacheSpacename'] = $cacheSpacename;
		$this->cacheSpacename = $cacheSpacename;
	}

	public function getCompanyId() {
		return $this->companyId;
	}
	public function setCompanyId($companyId) {
		$this->fields['companyId'] = $companyId;
		$this->companyId = $companyId;
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
		return ''.':'.$this->cacheSpacename.':'.$this->companyId.':'.$this->data1.':'.$this->data2.':'.$this->expiration;
	}
}
