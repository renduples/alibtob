<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'friendlinks' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Friendlink extends BaseBO
{
	private $fields;
	private $id;
	private $friendlinktypeId;
	private $industryId;
	private $areaId;
	private $title;
	private $logo;
	private $url;
	private $priority;
	private $status;
	private $description;
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
		if (isset($fields['friendlinktypeId'])) $this->friendlinktypeId = $fields['friendlinktypeId'];
		if (isset($fields['industryId'])) $this->industryId = $fields['industryId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['logo'])) $this->logo = $fields['logo'];
		if (isset($fields['url'])) $this->url = $fields['url'];
		if (isset($fields['priority'])) $this->priority = $fields['priority'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['description'])) $this->description = $fields['description'];
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

	public function getFriendlinktypeId() {
		return $this->friendlinktypeId;
	}
	public function setFriendlinktypeId($friendlinktypeId) {
		$this->fields['friendlinktypeId'] = $friendlinktypeId;
		$this->friendlinktypeId = $friendlinktypeId;
	}

	public function getIndustryId() {
		return $this->industryId;
	}
	public function setIndustryId($industryId) {
		$this->fields['industryId'] = $industryId;
		$this->industryId = $industryId;
	}

	public function getAreaId() {
		return $this->areaId;
	}
	public function setAreaId($areaId) {
		$this->fields['areaId'] = $areaId;
		$this->areaId = $areaId;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getLogo() {
		return $this->logo;
	}
	public function setLogo($logo) {
		$this->fields['logo'] = $logo;
		$this->logo = $logo;
	}

	public function getUrl() {
		return $this->url;
	}
	public function setUrl($url) {
		$this->fields['url'] = $url;
		$this->url = $url;
	}

	public function getPriority() {
		return $this->priority;
	}
	public function setPriority($priority) {
		$this->fields['priority'] = $priority;
		$this->priority = $priority;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
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
		return ''.':'.$this->id.':'.$this->friendlinktypeId.':'.$this->industryId.':'.$this->areaId.':'.$this->title.':'.$this->logo.':'.$this->url.':'.$this->priority.':'.$this->status.':'.$this->description.':'.$this->created.':'.$this->modified;
	}
}
