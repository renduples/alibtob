<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'standards' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Standard extends BaseBO
{
	private $fields;
	private $id;
	private $attachmentId;
	private $typeId;
	private $title;
	private $source;
	private $digest;
	private $content;
	private $publishTime;
	private $forceTime;
	private $clicked;
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
		if (isset($fields['attachmentId'])) $this->attachmentId = $fields['attachmentId'];
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['source'])) $this->source = $fields['source'];
		if (isset($fields['digest'])) $this->digest = $fields['digest'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['publishTime'])) $this->publishTime = $fields['publishTime'];
		if (isset($fields['forceTime'])) $this->forceTime = $fields['forceTime'];
		if (isset($fields['clicked'])) $this->clicked = $fields['clicked'];
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

	public function getAttachmentId() {
		return $this->attachmentId;
	}
	public function setAttachmentId($attachmentId) {
		$this->fields['attachmentId'] = $attachmentId;
		$this->attachmentId = $attachmentId;
	}

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getSource() {
		return $this->source;
	}
	public function setSource($source) {
		$this->fields['source'] = $source;
		$this->source = $source;
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

	public function getPublishTime() {
		return $this->publishTime;
	}
	public function setPublishTime($publishTime) {
		$this->fields['publishTime'] = $publishTime;
		$this->publishTime = $publishTime;
	}

	public function getForceTime() {
		return $this->forceTime;
	}
	public function setForceTime($forceTime) {
		$this->fields['forceTime'] = $forceTime;
		$this->forceTime = $forceTime;
	}

	public function getClicked() {
		return $this->clicked;
	}
	public function setClicked($clicked) {
		$this->fields['clicked'] = $clicked;
		$this->clicked = $clicked;
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
		return ''.':'.$this->id.':'.$this->attachmentId.':'.$this->typeId.':'.$this->title.':'.$this->source.':'.$this->digest.':'.$this->content.':'.$this->publishTime.':'.$this->forceTime.':'.$this->clicked.':'.$this->created.':'.$this->modified;
	}
}
