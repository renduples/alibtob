<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'feeds' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Feed extends BaseBO
{
	private $fields;
	private $id;
	private $typeId;
	private $type;
	private $memberId;
	private $username;
	private $data;
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
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['type'])) $this->type = $fields['type'];
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['username'])) $this->username = $fields['username'];
		if (isset($fields['data'])) $this->data = $fields['data'];
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

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
	}

	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->fields['type'] = $type;
		$this->type = $type;
	}

	public function getMemberId() {
		return $this->memberId;
	}
	public function setMemberId($memberId) {
		$this->fields['memberId'] = $memberId;
		$this->memberId = $memberId;
	}

	public function getUsername() {
		return $this->username;
	}
	public function setUsername($username) {
		$this->fields['username'] = $username;
		$this->username = $username;
	}

	public function getData() {
		return $this->data;
	}
	public function setData($data) {
		$this->fields['data'] = $data;
		$this->data = $data;
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
		return ''.':'.$this->id.':'.$this->typeId.':'.$this->type.':'.$this->memberId.':'.$this->username.':'.$this->data.':'.$this->created.':'.$this->modified;
	}
}
