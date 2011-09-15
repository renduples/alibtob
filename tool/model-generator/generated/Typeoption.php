<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'typeoptions' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Typeoption extends BaseBO
{
	private $fields;
	private $id;
	private $typemodelId;
	private $optionValue;
	private $optionLabel;


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
		if (isset($fields['typemodelId'])) $this->typemodelId = $fields['typemodelId'];
		if (isset($fields['optionValue'])) $this->optionValue = $fields['optionValue'];
		if (isset($fields['optionLabel'])) $this->optionLabel = $fields['optionLabel'];
	
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

	public function getTypemodelId() {
		return $this->typemodelId;
	}
	public function setTypemodelId($typemodelId) {
		$this->fields['typemodelId'] = $typemodelId;
		$this->typemodelId = $typemodelId;
	}

	public function getOptionValue() {
		return $this->optionValue;
	}
	public function setOptionValue($optionValue) {
		$this->fields['optionValue'] = $optionValue;
		$this->optionValue = $optionValue;
	}

	public function getOptionLabel() {
		return $this->optionLabel;
	}
	public function setOptionLabel($optionLabel) {
		$this->fields['optionLabel'] = $optionLabel;
		$this->optionLabel = $optionLabel;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->typemodelId.':'.$this->optionValue.':'.$this->optionLabel;
	}
}
