<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'newstypes' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Newstype extends BaseBO
{
	private $fields;
	private $id;
	private $name;
	private $levelId;
	private $status;
	private $parentId;
	private $created;


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
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['levelId'])) $this->levelId = $fields['levelId'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['parentId'])) $this->parentId = $fields['parentId'];
		if (isset($fields['created'])) $this->created = $fields['created'];
	
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

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getLevelId() {
		return $this->levelId;
	}
	public function setLevelId($levelId) {
		$this->fields['levelId'] = $levelId;
		$this->levelId = $levelId;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getParentId() {
		return $this->parentId;
	}
	public function setParentId($parentId) {
		$this->fields['parentId'] = $parentId;
		$this->parentId = $parentId;
	}

	public function getCreated() {
		return $this->created;
	}
	public function setCreated($created) {
		$this->fields['created'] = $created;
		$this->created = $created;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->name.':'.$this->levelId.':'.$this->status.':'.$this->parentId.':'.$this->created;
	}
}
