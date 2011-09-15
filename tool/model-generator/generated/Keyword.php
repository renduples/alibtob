<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'keywords' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Keyword extends BaseBO
{
	private $fields;
	private $id;
	private $title;
	private $targetId;
	private $targetPosition;
	private $typeName;
	private $hits;
	private $status;


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
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['targetId'])) $this->targetId = $fields['targetId'];
		if (isset($fields['targetPosition'])) $this->targetPosition = $fields['targetPosition'];
		if (isset($fields['typeName'])) $this->typeName = $fields['typeName'];
		if (isset($fields['hits'])) $this->hits = $fields['hits'];
		if (isset($fields['status'])) $this->status = $fields['status'];
	
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

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getTargetId() {
		return $this->targetId;
	}
	public function setTargetId($targetId) {
		$this->fields['targetId'] = $targetId;
		$this->targetId = $targetId;
	}

	public function getTargetPosition() {
		return $this->targetPosition;
	}
	public function setTargetPosition($targetPosition) {
		$this->fields['targetPosition'] = $targetPosition;
		$this->targetPosition = $targetPosition;
	}

	public function getTypeName() {
		return $this->typeName;
	}
	public function setTypeName($typeName) {
		$this->fields['typeName'] = $typeName;
		$this->typeName = $typeName;
	}

	public function getHits() {
		return $this->hits;
	}
	public function setHits($hits) {
		$this->fields['hits'] = $hits;
		$this->hits = $hits;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->title.':'.$this->targetId.':'.$this->targetPosition.':'.$this->typeName.':'.$this->hits.':'.$this->status;
	}
}
