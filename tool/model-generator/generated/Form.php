<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'forms' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Form extends BaseBO
{
	private $fields;
	private $id;
	private $typeId;
	private $name;
	private $items;


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
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['items'])) $this->items = $fields['items'];
	
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

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getItems() {
		return $this->items;
	}
	public function setItems($items) {
		$this->fields['items'] = $items;
		$this->items = $items;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->typeId.':'.$this->name.':'.$this->items;
	}
}
