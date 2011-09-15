<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'spreads' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Spread extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $keywordName;
	private $title;
	private $content;
	private $targetUrl;
	private $hits;
	private $status;
	private $expiration;
	private $displayOrder;
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
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['keywordName'])) $this->keywordName = $fields['keywordName'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['targetUrl'])) $this->targetUrl = $fields['targetUrl'];
		if (isset($fields['hits'])) $this->hits = $fields['hits'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['expiration'])) $this->expiration = $fields['expiration'];
		if (isset($fields['displayOrder'])) $this->displayOrder = $fields['displayOrder'];
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

	public function getMemberId() {
		return $this->memberId;
	}
	public function setMemberId($memberId) {
		$this->fields['memberId'] = $memberId;
		$this->memberId = $memberId;
	}

	public function getKeywordName() {
		return $this->keywordName;
	}
	public function setKeywordName($keywordName) {
		$this->fields['keywordName'] = $keywordName;
		$this->keywordName = $keywordName;
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

	public function getTargetUrl() {
		return $this->targetUrl;
	}
	public function setTargetUrl($targetUrl) {
		$this->fields['targetUrl'] = $targetUrl;
		$this->targetUrl = $targetUrl;
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

	public function getExpiration() {
		return $this->expiration;
	}
	public function setExpiration($expiration) {
		$this->fields['expiration'] = $expiration;
		$this->expiration = $expiration;
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



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->keywordName.':'.$this->title.':'.$this->content.':'.$this->targetUrl.':'.$this->hits.':'.$this->status.':'.$this->expiration.':'.$this->displayOrder.':'.$this->created;
	}
}
