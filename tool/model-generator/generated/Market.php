<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'markets' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Market extends BaseBO
{
	private $fields;
	private $id;
	private $name;
	private $mainBusiness;
	private $content;
	private $markettypeId;
	private $areaId;
	private $industryId;
	private $picture;
	private $ipAddress;
	private $status;
	private $clicked;
	private $ifCommend;
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
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['mainBusiness'])) $this->mainBusiness = $fields['mainBusiness'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['markettypeId'])) $this->markettypeId = $fields['markettypeId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['industryId'])) $this->industryId = $fields['industryId'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['ipAddress'])) $this->ipAddress = $fields['ipAddress'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['clicked'])) $this->clicked = $fields['clicked'];
		if (isset($fields['ifCommend'])) $this->ifCommend = $fields['ifCommend'];
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

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getMainBusiness() {
		return $this->mainBusiness;
	}
	public function setMainBusiness($mainBusiness) {
		$this->fields['mainBusiness'] = $mainBusiness;
		$this->mainBusiness = $mainBusiness;
	}

	public function getContent() {
		return $this->content;
	}
	public function setContent($content) {
		$this->fields['content'] = $content;
		$this->content = $content;
	}

	public function getMarkettypeId() {
		return $this->markettypeId;
	}
	public function setMarkettypeId($markettypeId) {
		$this->fields['markettypeId'] = $markettypeId;
		$this->markettypeId = $markettypeId;
	}

	public function getAreaId() {
		return $this->areaId;
	}
	public function setAreaId($areaId) {
		$this->fields['areaId'] = $areaId;
		$this->areaId = $areaId;
	}

	public function getIndustryId() {
		return $this->industryId;
	}
	public function setIndustryId($industryId) {
		$this->fields['industryId'] = $industryId;
		$this->industryId = $industryId;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getIpAddress() {
		return $this->ipAddress;
	}
	public function setIpAddress($ipAddress) {
		$this->fields['ipAddress'] = $ipAddress;
		$this->ipAddress = $ipAddress;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getClicked() {
		return $this->clicked;
	}
	public function setClicked($clicked) {
		$this->fields['clicked'] = $clicked;
		$this->clicked = $clicked;
	}

	public function getIfCommend() {
		return $this->ifCommend;
	}
	public function setIfCommend($ifCommend) {
		$this->fields['ifCommend'] = $ifCommend;
		$this->ifCommend = $ifCommend;
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
		return ''.':'.$this->id.':'.$this->name.':'.$this->mainBusiness.':'.$this->content.':'.$this->markettypeId.':'.$this->areaId.':'.$this->industryId.':'.$this->picture.':'.$this->ipAddress.':'.$this->status.':'.$this->clicked.':'.$this->ifCommend.':'.$this->created.':'.$this->modified;
	}
}
