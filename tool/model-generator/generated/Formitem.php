<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'formitems' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Formitem extends BaseBO
{
	private $fields;
	private $id;
	private $formId;
	private $title;
	private $description;
	private $identifier;
	private $type;
	private $rules;
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
		if (isset($fields['formId'])) $this->formId = $fields['formId'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['identifier'])) $this->identifier = $fields['identifier'];
		if (isset($fields['type'])) $this->type = $fields['type'];
		if (isset($fields['rules'])) $this->rules = $fields['rules'];
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

	public function getFormId() {
		return $this->formId;
	}
	public function setFormId($formId) {
		$this->fields['formId'] = $formId;
		$this->formId = $formId;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}

	public function getIdentifier() {
		return $this->identifier;
	}
	public function setIdentifier($identifier) {
		$this->fields['identifier'] = $identifier;
		$this->identifier = $identifier;
	}

	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->fields['type'] = $type;
		$this->type = $type;
	}

	public function getRules() {
		return $this->rules;
	}
	public function setRules($rules) {
		$this->fields['rules'] = $rules;
		$this->rules = $rules;
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
		return ''.':'.$this->id.':'.$this->formId.':'.$this->title.':'.$this->description.':'.$this->identifier.':'.$this->type.':'.$this->rules.':'.$this->displayOrder;
	}
}
