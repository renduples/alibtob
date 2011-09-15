<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'companyfields' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Companyfield extends BaseBO
{
	private $fields;
	private $companyId;
	private $mapLongitude;
	private $mapLatitude;


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
		if (isset($fields['companyId'])) $this->companyId = $fields['companyId'];
		if (isset($fields['mapLongitude'])) $this->mapLongitude = $fields['mapLongitude'];
		if (isset($fields['mapLatitude'])) $this->mapLatitude = $fields['mapLatitude'];
	
	}

	public function getFields() {
		return $this->fields;
	}

	
	public function getCompanyId() {
		return $this->companyId;
	}
	public function setCompanyId($companyId) {
		$this->fields['companyId'] = $companyId;
		$this->companyId = $companyId;
	}

	public function getMapLongitude() {
		return $this->mapLongitude;
	}
	public function setMapLongitude($mapLongitude) {
		$this->fields['mapLongitude'] = $mapLongitude;
		$this->mapLongitude = $mapLongitude;
	}

	public function getMapLatitude() {
		return $this->mapLatitude;
	}
	public function setMapLatitude($mapLatitude) {
		$this->fields['mapLatitude'] = $mapLatitude;
		$this->mapLatitude = $mapLatitude;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->companyId.':'.$this->mapLongitude.':'.$this->mapLatitude;
	}
}
