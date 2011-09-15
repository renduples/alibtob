<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'logs' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Log extends BaseBO
{
	private $fields;
	private $id;
	private $handleType;
	private $sourceModule;
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
		if (isset($fields['handleType'])) $this->handleType = $fields['handleType'];
		if (isset($fields['sourceModule'])) $this->sourceModule = $fields['sourceModule'];
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

	public function getHandleType() {
		return $this->handleType;
	}
	public function setHandleType($handleType) {
		$this->fields['handleType'] = $handleType;
		$this->handleType = $handleType;
	}

	public function getSourceModule() {
		return $this->sourceModule;
	}
	public function setSourceModule($sourceModule) {
		$this->fields['sourceModule'] = $sourceModule;
		$this->sourceModule = $sourceModule;
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
		return ''.':'.$this->id.':'.$this->handleType.':'.$this->sourceModule.':'.$this->description.':'.$this->ipAddress.':'.$this->created.':'.$this->modified;
	}
}
