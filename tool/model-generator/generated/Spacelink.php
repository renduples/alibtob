<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'spacelinks' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Spacelink extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $companyId;
	private $displayOrder;
	private $title;
	private $url;
	private $isOutlink;
	private $description;
	private $logo;
	private $highlight;
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
		if (isset($fields['companyId'])) $this->companyId = $fields['companyId'];
		if (isset($fields['displayOrder'])) $this->displayOrder = $fields['displayOrder'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['url'])) $this->url = $fields['url'];
		if (isset($fields['isOutlink'])) $this->isOutlink = $fields['isOutlink'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['logo'])) $this->logo = $fields['logo'];
		if (isset($fields['highlight'])) $this->highlight = $fields['highlight'];
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

	public function getCompanyId() {
		return $this->companyId;
	}
	public function setCompanyId($companyId) {
		$this->fields['companyId'] = $companyId;
		$this->companyId = $companyId;
	}

	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	public function setDisplayOrder($displayOrder) {
		$this->fields['displayOrder'] = $displayOrder;
		$this->displayOrder = $displayOrder;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getUrl() {
		return $this->url;
	}
	public function setUrl($url) {
		$this->fields['url'] = $url;
		$this->url = $url;
	}

	public function getIsOutlink() {
		return $this->isOutlink;
	}
	public function setIsOutlink($isOutlink) {
		$this->fields['isOutlink'] = $isOutlink;
		$this->isOutlink = $isOutlink;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}

	public function getLogo() {
		return $this->logo;
	}
	public function setLogo($logo) {
		$this->fields['logo'] = $logo;
		$this->logo = $logo;
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



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->companyId.':'.$this->displayOrder.':'.$this->title.':'.$this->url.':'.$this->isOutlink.':'.$this->description.':'.$this->logo.':'.$this->highlight.':'.$this->created;
	}
}
