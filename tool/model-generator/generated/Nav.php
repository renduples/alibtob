<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'navs' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Nav extends BaseBO
{
	private $fields;
	private $id;
	private $parentId;
	private $name;
	private $description;
	private $url;
	private $target;
	private $status;
	private $displayOrder;
	private $highlight;
	private $level;
	private $className;
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
		if (isset($fields['parentId'])) $this->parentId = $fields['parentId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['url'])) $this->url = $fields['url'];
		if (isset($fields['target'])) $this->target = $fields['target'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['displayOrder'])) $this->displayOrder = $fields['displayOrder'];
		if (isset($fields['highlight'])) $this->highlight = $fields['highlight'];
		if (isset($fields['level'])) $this->level = $fields['level'];
		if (isset($fields['className'])) $this->className = $fields['className'];
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

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}

	public function getUrl() {
		return $this->url;
	}
	public function setUrl($url) {
		$this->fields['url'] = $url;
		$this->url = $url;
	}

	public function getTarget() {
		return $this->target;
	}
	public function setTarget($target) {
		$this->fields['target'] = $target;
		$this->target = $target;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	public function setDisplayOrder($displayOrder) {
		$this->fields['displayOrder'] = $displayOrder;
		$this->displayOrder = $displayOrder;
	}

	public function getHighlight() {
		return $this->highlight;
	}
	public function setHighlight($highlight) {
		$this->fields['highlight'] = $highlight;
		$this->highlight = $highlight;
	}

	public function getLevel() {
		return $this->level;
	}
	public function setLevel($level) {
		$this->fields['level'] = $level;
		$this->level = $level;
	}

	public function getClassName() {
		return $this->className;
	}
	public function setClassName($className) {
		$this->fields['className'] = $className;
		$this->className = $className;
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
		return ''.':'.$this->id.':'.$this->parentId.':'.$this->name.':'.$this->description.':'.$this->url.':'.$this->target.':'.$this->status.':'.$this->displayOrder.':'.$this->highlight.':'.$this->level.':'.$this->className.':'.$this->created.':'.$this->modified;
	}
}
