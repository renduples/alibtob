<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'tradetypes' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Tradetype extends BaseBO
{
	private $fields;
	private $id;
	private $parentId;
	private $name;
	private $level;
	private $displayOrder;


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
		if (isset($fields['parentId'])) $this->parentId = $fields['parentId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['level'])) $this->level = $fields['level'];
		if (isset($fields['displayOrder'])) $this->displayOrder = $fields['displayOrder'];
	
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

	public function getParentId() {
		return $this->parentId;
	}
	public function setParentId($parentId) {
		$this->fields['parentId'] = $parentId;
		$this->parentId = $parentId;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getLevel() {
		return $this->level;
	}
	public function setLevel($level) {
		$this->fields['level'] = $level;
		$this->level = $level;
	}

	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	public function setDisplayOrder($displayOrder) {
		$this->fields['displayOrder'] = $displayOrder;
		$this->displayOrder = $displayOrder;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->parentId.':'.$this->name.':'.$this->level.':'.$this->displayOrder;
	}
}
