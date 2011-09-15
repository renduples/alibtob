<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'messages' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Message extends BaseBO
{
	private $fields;
	private $id;
	private $type;
	private $fromMemberId;
	private $cacheFromUsername;
	private $toMemberId;
	private $cacheToUsername;
	private $title;
	private $content;
	private $status;
	private $created;


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
		if (isset($fields['type'])) $this->type = $fields['type'];
		if (isset($fields['fromMemberId'])) $this->fromMemberId = $fields['fromMemberId'];
		if (isset($fields['cacheFromUsername'])) $this->cacheFromUsername = $fields['cacheFromUsername'];
		if (isset($fields['toMemberId'])) $this->toMemberId = $fields['toMemberId'];
		if (isset($fields['cacheToUsername'])) $this->cacheToUsername = $fields['cacheToUsername'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['created'])) $this->created = $fields['created'];
	
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

	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->fields['type'] = $type;
		$this->type = $type;
	}

	public function getFromMemberId() {
		return $this->fromMemberId;
	}
	public function setFromMemberId($fromMemberId) {
		$this->fields['fromMemberId'] = $fromMemberId;
		$this->fromMemberId = $fromMemberId;
	}

	public function getCacheFromUsername() {
		return $this->cacheFromUsername;
	}
	public function setCacheFromUsername($cacheFromUsername) {
		$this->fields['cacheFromUsername'] = $cacheFromUsername;
		$this->cacheFromUsername = $cacheFromUsername;
	}

	public function getToMemberId() {
		return $this->toMemberId;
	}
	public function setToMemberId($toMemberId) {
		$this->fields['toMemberId'] = $toMemberId;
		$this->toMemberId = $toMemberId;
	}

	public function getCacheToUsername() {
		return $this->cacheToUsername;
	}
	public function setCacheToUsername($cacheToUsername) {
		$this->fields['cacheToUsername'] = $cacheToUsername;
		$this->cacheToUsername = $cacheToUsername;
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

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getCreated() {
		return $this->created;
	}
	public function setCreated($created) {
		$this->fields['created'] = $created;
		$this->created = $created;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->type.':'.$this->fromMemberId.':'.$this->cacheFromUsername.':'.$this->toMemberId.':'.$this->cacheToUsername.':'.$this->title.':'.$this->content.':'.$this->status.':'.$this->created;
	}
}
