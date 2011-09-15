<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'members' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Member extends BaseBO
{
	private $fields;
	private $id;
	private $spaceName;
	private $templetId;
	private $username;
	private $userpass;
	private $email;
	private $points;
	private $credits;
	private $balanceAmount;
	private $trusttypeIds;
	private $status;
	private $photo;
	private $membertypeId;
	private $membergroupId;
	private $lastLogin;
	private $lastIp;
	private $serviceStartDate;
	private $serviceEndDate;
	private $officeRedirect;
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
		if (isset($fields['spaceName'])) $this->spaceName = $fields['spaceName'];
		if (isset($fields['templetId'])) $this->templetId = $fields['templetId'];
		if (isset($fields['username'])) $this->username = $fields['username'];
		if (isset($fields['userpass'])) $this->userpass = $fields['userpass'];
		if (isset($fields['email'])) $this->email = $fields['email'];
		if (isset($fields['points'])) $this->points = $fields['points'];
		if (isset($fields['credits'])) $this->credits = $fields['credits'];
		if (isset($fields['balanceAmount'])) $this->balanceAmount = $fields['balanceAmount'];
		if (isset($fields['trusttypeIds'])) $this->trusttypeIds = $fields['trusttypeIds'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['photo'])) $this->photo = $fields['photo'];
		if (isset($fields['membertypeId'])) $this->membertypeId = $fields['membertypeId'];
		if (isset($fields['membergroupId'])) $this->membergroupId = $fields['membergroupId'];
		if (isset($fields['lastLogin'])) $this->lastLogin = $fields['lastLogin'];
		if (isset($fields['lastIp'])) $this->lastIp = $fields['lastIp'];
		if (isset($fields['serviceStartDate'])) $this->serviceStartDate = $fields['serviceStartDate'];
		if (isset($fields['serviceEndDate'])) $this->serviceEndDate = $fields['serviceEndDate'];
		if (isset($fields['officeRedirect'])) $this->officeRedirect = $fields['officeRedirect'];
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

	public function getSpaceName() {
		return $this->spaceName;
	}
	public function setSpaceName($spaceName) {
		$this->fields['spaceName'] = $spaceName;
		$this->spaceName = $spaceName;
	}

	public function getTempletId() {
		return $this->templetId;
	}
	public function setTempletId($templetId) {
		$this->fields['templetId'] = $templetId;
		$this->templetId = $templetId;
	}

	public function getUsername() {
		return $this->username;
	}
	public function setUsername($username) {
		$this->fields['username'] = $username;
		$this->username = $username;
	}

	public function getUserpass() {
		return $this->userpass;
	}
	public function setUserpass($userpass) {
		$this->fields['userpass'] = $userpass;
		$this->userpass = $userpass;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->fields['email'] = $email;
		$this->email = $email;
	}

	public function getPoints() {
		return $this->points;
	}
	public function setPoints($points) {
		$this->fields['points'] = $points;
		$this->points = $points;
	}

	public function getCredits() {
		return $this->credits;
	}
	public function setCredits($credits) {
		$this->fields['credits'] = $credits;
		$this->credits = $credits;
	}

	public function getBalanceAmount() {
		return $this->balanceAmount;
	}
	public function setBalanceAmount($balanceAmount) {
		$this->fields['balanceAmount'] = $balanceAmount;
		$this->balanceAmount = $balanceAmount;
	}

	public function getTrusttypeIds() {
		return $this->trusttypeIds;
	}
	public function setTrusttypeIds($trusttypeIds) {
		$this->fields['trusttypeIds'] = $trusttypeIds;
		$this->trusttypeIds = $trusttypeIds;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getPhoto() {
		return $this->photo;
	}
	public function setPhoto($photo) {
		$this->fields['photo'] = $photo;
		$this->photo = $photo;
	}

	public function getMembertypeId() {
		return $this->membertypeId;
	}
	public function setMembertypeId($membertypeId) {
		$this->fields['membertypeId'] = $membertypeId;
		$this->membertypeId = $membertypeId;
	}

	public function getMembergroupId() {
		return $this->membergroupId;
	}
	public function setMembergroupId($membergroupId) {
		$this->fields['membergroupId'] = $membergroupId;
		$this->membergroupId = $membergroupId;
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

	public function getServiceStartDate() {
		return $this->serviceStartDate;
	}
	public function setServiceStartDate($serviceStartDate) {
		$this->fields['serviceStartDate'] = $serviceStartDate;
		$this->serviceStartDate = $serviceStartDate;
	}

	public function getServiceEndDate() {
		return $this->serviceEndDate;
	}
	public function setServiceEndDate($serviceEndDate) {
		$this->fields['serviceEndDate'] = $serviceEndDate;
		$this->serviceEndDate = $serviceEndDate;
	}

	public function getOfficeRedirect() {
		return $this->officeRedirect;
	}
	public function setOfficeRedirect($officeRedirect) {
		$this->fields['officeRedirect'] = $officeRedirect;
		$this->officeRedirect = $officeRedirect;
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
		return ''.':'.$this->id.':'.$this->spaceName.':'.$this->templetId.':'.$this->username.':'.$this->userpass.':'.$this->email.':'.$this->points.':'.$this->credits.':'.$this->balanceAmount.':'.$this->trusttypeIds.':'.$this->status.':'.$this->photo.':'.$this->membertypeId.':'.$this->membergroupId.':'.$this->lastLogin.':'.$this->lastIp.':'.$this->serviceStartDate.':'.$this->serviceEndDate.':'.$this->officeRedirect.':'.$this->created.':'.$this->modified;
	}
}
