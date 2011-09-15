<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'pointlogs' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Pointlog extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $actionName;
	private $points;
	private $description;
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
		if (isset($fields['actionName'])) $this->actionName = $fields['actionName'];
		if (isset($fields['points'])) $this->points = $fields['points'];
		if (isset($fields['description'])) $this->description = $fields['description'];
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

	public function getActionName() {
		return $this->actionName;
	}
	public function setActionName($actionName) {
		$this->fields['actionName'] = $actionName;
		$this->actionName = $actionName;
	}

	public function getPoints() {
		return $this->points;
	}
	public function setPoints($points) {
		$this->fields['points'] = $points;
		$this->points = $points;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
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
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->actionName.':'.$this->points.':'.$this->description.':'.$this->ipAddress.':'.$this->created.':'.$this->modified;
	}
}
