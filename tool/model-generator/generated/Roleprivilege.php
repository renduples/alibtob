<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'roleprivileges' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Roleprivilege extends BaseBO
{
	private $fields;
	private $id;
	private $adminroleId;
	private $adminprivilegeId;


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
		if (isset($fields['adminroleId'])) $this->adminroleId = $fields['adminroleId'];
		if (isset($fields['adminprivilegeId'])) $this->adminprivilegeId = $fields['adminprivilegeId'];
	
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

	public function getAdminroleId() {
		return $this->adminroleId;
	}
	public function setAdminroleId($adminroleId) {
		$this->fields['adminroleId'] = $adminroleId;
		$this->adminroleId = $adminroleId;
	}

	public function getAdminprivilegeId() {
		return $this->adminprivilegeId;
	}
	public function setAdminprivilegeId($adminprivilegeId) {
		$this->fields['adminprivilegeId'] = $adminprivilegeId;
		$this->adminprivilegeId = $adminprivilegeId;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->adminroleId.':'.$this->adminprivilegeId;
	}
}
