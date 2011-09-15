<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'topics' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Topic extends BaseBO
{
	private $fields;
	private $id;
	private $aliasName;
	private $templet;
	private $title;
	private $picture;
	private $description;
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
		if (isset($fields['aliasName'])) $this->aliasName = $fields['aliasName'];
		if (isset($fields['templet'])) $this->templet = $fields['templet'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['description'])) $this->description = $fields['description'];
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

	public function getAliasName() {
		return $this->aliasName;
	}
	public function setAliasName($aliasName) {
		$this->fields['aliasName'] = $aliasName;
		$this->aliasName = $aliasName;
	}

	public function getTemplet() {
		return $this->templet;
	}
	public function setTemplet($templet) {
		$this->fields['templet'] = $templet;
		$this->templet = $templet;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
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
		return ''.':'.$this->id.':'.$this->aliasName.':'.$this->templet.':'.$this->title.':'.$this->picture.':'.$this->description.':'.$this->created.':'.$this->modified;
	}
}
