<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'formattributes' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Formattribute extends BaseBO
{
	private $fields;
	private $id;
	private $typeId;
	private $formId;
	private $formitemId;
	private $primaryId;
	private $attribute;


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
		if (isset($fields['formId'])) $this->formId = $fields['formId'];
		if (isset($fields['formitemId'])) $this->formitemId = $fields['formitemId'];
		if (isset($fields['primaryId'])) $this->primaryId = $fields['primaryId'];
		if (isset($fields['attribute'])) $this->attribute = $fields['attribute'];
	
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

	public function getFormId() {
		return $this->formId;
	}
	public function setFormId($formId) {
		$this->fields['formId'] = $formId;
		$this->formId = $formId;
	}

	public function getFormitemId() {
		return $this->formitemId;
	}
	public function setFormitemId($formitemId) {
		$this->fields['formitemId'] = $formitemId;
		$this->formitemId = $formitemId;
	}

	public function getPrimaryId() {
		return $this->primaryId;
	}
	public function setPrimaryId($primaryId) {
		$this->fields['primaryId'] = $primaryId;
		$this->primaryId = $primaryId;
	}

	public function getAttribute() {
		return $this->attribute;
	}
	public function setAttribute($attribute) {
		$this->fields['attribute'] = $attribute;
		$this->attribute = $attribute;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->typeId.':'.$this->formId.':'.$this->formitemId.':'.$this->primaryId.':'.$this->attribute;
	}
}
