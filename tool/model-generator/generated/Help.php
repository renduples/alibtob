<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'helps' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Help extends BaseBO
{
	private $fields;
	private $id;
	private $helptypeId;
	private $title;
	private $content;
	private $highlight;
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
		if (isset($fields['helptypeId'])) $this->helptypeId = $fields['helptypeId'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['highlight'])) $this->highlight = $fields['highlight'];
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

	public function getHelptypeId() {
		return $this->helptypeId;
	}
	public function setHelptypeId($helptypeId) {
		$this->fields['helptypeId'] = $helptypeId;
		$this->helptypeId = $helptypeId;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getContent() {
		return $this->content;
	}
	public function setContent($content) {
		$this->fields['content'] = $content;
		$this->content = $content;
	}

	public function getHighlight() {
		return $this->highlight;
	}
	public function setHighlight($highlight) {
		$this->fields['highlight'] = $highlight;
		$this->highlight = $highlight;
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
		return ''.':'.$this->id.':'.$this->helptypeId.':'.$this->title.':'.$this->content.':'.$this->highlight.':'.$this->created.':'.$this->modified;
	}
}
