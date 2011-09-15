<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'settings' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Setting extends BaseBO
{
	private $fields;
	private $id;
	private $typeId;
	private $variable;
	private $valued;


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
		if (isset($fields['variable'])) $this->variable = $fields['variable'];
		if (isset($fields['valued'])) $this->valued = $fields['valued'];
	
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

	public function getVariable() {
		return $this->variable;
	}
	public function setVariable($variable) {
		$this->fields['variable'] = $variable;
		$this->variable = $variable;
	}

	public function getValued() {
		return $this->valued;
	}
	public function setValued($valued) {
		$this->fields['valued'] = $valued;
		$this->valued = $valued;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->typeId.':'.$this->variable.':'.$this->valued;
	}
}
