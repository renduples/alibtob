<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'inqueries' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Inquerie extends BaseBO
{
	private $fields;
	private $id;
	private $toMemberId;
	private $toCompanyId;
	private $title;
	private $content;
	private $sendAchive;
	private $knowMore;
	private $expQuantity;
	private $expPrice;
	private $contacts;
	private $userIp;
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
		if (isset($fields['toMemberId'])) $this->toMemberId = $fields['toMemberId'];
		if (isset($fields['toCompanyId'])) $this->toCompanyId = $fields['toCompanyId'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['sendAchive'])) $this->sendAchive = $fields['sendAchive'];
		if (isset($fields['knowMore'])) $this->knowMore = $fields['knowMore'];
		if (isset($fields['expQuantity'])) $this->expQuantity = $fields['expQuantity'];
		if (isset($fields['expPrice'])) $this->expPrice = $fields['expPrice'];
		if (isset($fields['contacts'])) $this->contacts = $fields['contacts'];
		if (isset($fields['userIp'])) $this->userIp = $fields['userIp'];
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

	public function getToMemberId() {
		return $this->toMemberId;
	}
	public function setToMemberId($toMemberId) {
		$this->fields['toMemberId'] = $toMemberId;
		$this->toMemberId = $toMemberId;
	}

	public function getToCompanyId() {
		return $this->toCompanyId;
	}
	public function setToCompanyId($toCompanyId) {
		$this->fields['toCompanyId'] = $toCompanyId;
		$this->toCompanyId = $toCompanyId;
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

	public function getSendAchive() {
		return $this->sendAchive;
	}
	public function setSendAchive($sendAchive) {
		$this->fields['sendAchive'] = $sendAchive;
		$this->sendAchive = $sendAchive;
	}

	public function getKnowMore() {
		return $this->knowMore;
	}
	public function setKnowMore($knowMore) {
		$this->fields['knowMore'] = $knowMore;
		$this->knowMore = $knowMore;
	}

	public function getExpQuantity() {
		return $this->expQuantity;
	}
	public function setExpQuantity($expQuantity) {
		$this->fields['expQuantity'] = $expQuantity;
		$this->expQuantity = $expQuantity;
	}

	public function getExpPrice() {
		return $this->expPrice;
	}
	public function setExpPrice($expPrice) {
		$this->fields['expPrice'] = $expPrice;
		$this->expPrice = $expPrice;
	}

	public function getContacts() {
		return $this->contacts;
	}
	public function setContacts($contacts) {
		$this->fields['contacts'] = $contacts;
		$this->contacts = $contacts;
	}

	public function getUserIp() {
		return $this->userIp;
	}
	public function setUserIp($userIp) {
		$this->fields['userIp'] = $userIp;
		$this->userIp = $userIp;
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
		return ''.':'.$this->id.':'.$this->toMemberId.':'.$this->toCompanyId.':'.$this->title.':'.$this->content.':'.$this->sendAchive.':'.$this->knowMore.':'.$this->expQuantity.':'.$this->expPrice.':'.$this->contacts.':'.$this->userIp.':'.$this->created;
	}
}
