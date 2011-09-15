<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'membertypes' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Membertype extends BaseBO
{
	private $fields;
	private $id;
	private $defaultMembergroupId;
	private $name;
	private $description;


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
		if (isset($fields['defaultMembergroupId'])) $this->defaultMembergroupId = $fields['defaultMembergroupId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['description'])) $this->description = $fields['description'];
	
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

	public function getDefaultMembergroupId() {
		return $this->defaultMembergroupId;
	}
	public function setDefaultMembergroupId($defaultMembergroupId) {
		$this->fields['defaultMembergroupId'] = $defaultMembergroupId;
		$this->defaultMembergroupId = $defaultMembergroupId;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->defaultMembergroupId.':'.$this->name.':'.$this->description;
	}
}
