<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'userpages' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Userpage extends BaseBO
{
	private $fields;
	private $id;
	private $templetName;
	private $name;
	private $title;
	private $digest;
	private $content;
	private $url;
	private $displayOrder;
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
		if (isset($fields['templetName'])) $this->templetName = $fields['templetName'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['digest'])) $this->digest = $fields['digest'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['url'])) $this->url = $fields['url'];
		if (isset($fields['displayOrder'])) $this->displayOrder = $fields['displayOrder'];
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

	public function getTempletName() {
		return $this->templetName;
	}
	public function setTempletName($templetName) {
		$this->fields['templetName'] = $templetName;
		$this->templetName = $templetName;
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

	public function getDigest() {
		return $this->digest;
	}
	public function setDigest($digest) {
		$this->fields['digest'] = $digest;
		$this->digest = $digest;
	}

	public function getContent() {
		return $this->content;
	}
	public function setContent($content) {
		$this->fields['content'] = $content;
		$this->content = $content;
	}

	public function getUrl() {
		return $this->url;
	}
	public function setUrl($url) {
		$this->fields['url'] = $url;
		$this->url = $url;
	}

	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	public function setDisplayOrder($displayOrder) {
		$this->fields['displayOrder'] = $displayOrder;
		$this->displayOrder = $displayOrder;
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
		return ''.':'.$this->id.':'.$this->templetName.':'.$this->name.':'.$this->title.':'.$this->digest.':'.$this->content.':'.$this->url.':'.$this->displayOrder.':'.$this->created.':'.$this->modified;
	}
}
