<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'services' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Service extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $title;
	private $content;
	private $nickName;
	private $email;
	private $userIp;
	private $typeId;
	private $status;
	private $created;
	private $modified;
	private $revertContent;
	private $revertDate;


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
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['nickName'])) $this->nickName = $fields['nickName'];
		if (isset($fields['email'])) $this->email = $fields['email'];
		if (isset($fields['userIp'])) $this->userIp = $fields['userIp'];
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['created'])) $this->created = $fields['created'];
		if (isset($fields['modified'])) $this->modified = $fields['modified'];
		if (isset($fields['revertContent'])) $this->revertContent = $fields['revertContent'];
		if (isset($fields['revertDate'])) $this->revertDate = $fields['revertDate'];
	
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

	public function getNickName() {
		return $this->nickName;
	}
	public function setNickName($nickName) {
		$this->fields['nickName'] = $nickName;
		$this->nickName = $nickName;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->fields['email'] = $email;
		$this->email = $email;
	}

	public function getUserIp() {
		return $this->userIp;
	}
	public function setUserIp($userIp) {
		$this->fields['userIp'] = $userIp;
		$this->userIp = $userIp;
	}

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
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

	public function getModified() {
		return $this->modified;
	}
	public function setModified($modified) {
		$this->fields['modified'] = $modified;
		$this->modified = $modified;
	}

	public function getRevertContent() {
		return $this->revertContent;
	}
	public function setRevertContent($revertContent) {
		$this->fields['revertContent'] = $revertContent;
		$this->revertContent = $revertContent;
	}

	public function getRevertDate() {
		return $this->revertDate;
	}
	public function setRevertDate($revertDate) {
		$this->fields['revertDate'] = $revertDate;
		$this->revertDate = $revertDate;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->title.':'.$this->content.':'.$this->nickName.':'.$this->email.':'.$this->userIp.':'.$this->typeId.':'.$this->status.':'.$this->created.':'.$this->modified.':'.$this->revertContent.':'.$this->revertDate;
	}
}
