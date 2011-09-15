<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'templets' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Templet extends BaseBO
{
	private $fields;
	private $id;
	private $name;
	private $title;
	private $directory;
	private $type;
	private $author;
	private $style;
	private $description;
	private $isDefault;
	private $requireMembertype;
	private $requireMembergroups;
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
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['directory'])) $this->directory = $fields['directory'];
		if (isset($fields['type'])) $this->type = $fields['type'];
		if (isset($fields['author'])) $this->author = $fields['author'];
		if (isset($fields['style'])) $this->style = $fields['style'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['isDefault'])) $this->isDefault = $fields['isDefault'];
		if (isset($fields['requireMembertype'])) $this->requireMembertype = $fields['requireMembertype'];
		if (isset($fields['requireMembergroups'])) $this->requireMembergroups = $fields['requireMembergroups'];
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

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getDirectory() {
		return $this->directory;
	}
	public function setDirectory($directory) {
		$this->fields['directory'] = $directory;
		$this->directory = $directory;
	}

	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->fields['type'] = $type;
		$this->type = $type;
	}

	public function getAuthor() {
		return $this->author;
	}
	public function setAuthor($author) {
		$this->fields['author'] = $author;
		$this->author = $author;
	}

	public function getStyle() {
		return $this->style;
	}
	public function setStyle($style) {
		$this->fields['style'] = $style;
		$this->style = $style;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}

	public function getIsDefault() {
		return $this->isDefault;
	}
	public function setIsDefault($isDefault) {
		$this->fields['isDefault'] = $isDefault;
		$this->isDefault = $isDefault;
	}

	public function getRequireMembertype() {
		return $this->requireMembertype;
	}
	public function setRequireMembertype($requireMembertype) {
		$this->fields['requireMembertype'] = $requireMembertype;
		$this->requireMembertype = $requireMembertype;
	}

	public function getRequireMembergroups() {
		return $this->requireMembergroups;
	}
	public function setRequireMembergroups($requireMembergroups) {
		$this->fields['requireMembergroups'] = $requireMembergroups;
		$this->requireMembergroups = $requireMembergroups;
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
		return ''.':'.$this->id.':'.$this->name.':'.$this->title.':'.$this->directory.':'.$this->type.':'.$this->author.':'.$this->style.':'.$this->description.':'.$this->isDefault.':'.$this->requireMembertype.':'.$this->requireMembergroups.':'.$this->status;
	}
}
