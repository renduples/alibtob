<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'adminfields' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Adminfield extends BaseBO
{
	private $fields;
	private $memberId;
	private $departId;
	private $firstName;
	private $lastName;
	private $level;
	private $lastLogin;
	private $lastIp;
	private $expired;
	private $permissions;
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
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['departId'])) $this->departId = $fields['departId'];
		if (isset($fields['firstName'])) $this->firstName = $fields['firstName'];
		if (isset($fields['lastName'])) $this->lastName = $fields['lastName'];
		if (isset($fields['level'])) $this->level = $fields['level'];
		if (isset($fields['lastLogin'])) $this->lastLogin = $fields['lastLogin'];
		if (isset($fields['lastIp'])) $this->lastIp = $fields['lastIp'];
		if (isset($fields['expired'])) $this->expired = $fields['expired'];
		if (isset($fields['permissions'])) $this->permissions = $fields['permissions'];
		if (isset($fields['created'])) $this->created = $fields['created'];
		if (isset($fields['modified'])) $this->modified = $fields['modified'];
	
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

	public function getDepartId() {
		return $this->departId;
	}
	public function setDepartId($departId) {
		$this->fields['departId'] = $departId;
		$this->departId = $departId;
	}

	public function getFirstName() {
		return $this->firstName;
	}
	public function setFirstName($firstName) {
		$this->fields['firstName'] = $firstName;
		$this->firstName = $firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}
	public function setLastName($lastName) {
		$this->fields['lastName'] = $lastName;
		$this->lastName = $lastName;
	}

	public function getLevel() {
		return $this->level;
	}
	public function setLevel($level) {
		$this->fields['level'] = $level;
		$this->level = $level;
	}

	public function getLastLogin() {
		return $this->lastLogin;
	}
	public function setLastLogin($lastLogin) {
		$this->fields['lastLogin'] = $lastLogin;
		$this->lastLogin = $lastLogin;
	}

	public function getLastIp() {
		return $this->lastIp;
	}
	public function setLastIp($lastIp) {
		$this->fields['lastIp'] = $lastIp;
		$this->lastIp = $lastIp;
	}

	public function getExpired() {
		return $this->expired;
	}
	public function setExpired($expired) {
		$this->fields['expired'] = $expired;
		$this->expired = $expired;
	}

	public function getPermissions() {
		return $this->permissions;
	}
	public function setPermissions($permissions) {
		$this->fields['permissions'] = $permissions;
		$this->permissions = $permissions;
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
		return ''.':'.$this->memberId.':'.$this->departId.':'.$this->firstName.':'.$this->lastName.':'.$this->level.':'.$this->lastLogin.':'.$this->lastIp.':'.$this->expired.':'.$this->permissions.':'.$this->created.':'.$this->modified;
	}
}
