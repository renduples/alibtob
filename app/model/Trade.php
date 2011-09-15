<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'trades' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Trade extends BaseBO
{
	private $fields;
	private $id;
	private $typeId;
	private $industryId;
	private $countryId;
	private $areaId;
	private $memberId;
	private $companyId;
	private $cacheUsername;
	private $cacheCompanyname;
	private $cacheContacts;
	private $title;
	private $adwords;
	private $content;
	private $price;
	private $measuringUnit;
	private $monetaryUnit;
	private $packing;
	private $quantity;
	private $displayOrder;
	private $displayExpiration;
	private $spec;
	private $sn;
	private $picture;
	private $pictureRemote;
	private $status;
	private $submitTime;
	private $expireTime;
	private $expireDays;
	private $ifCommend;
	private $ifUrgent;
	private $ifLocked;
	private $requirePoint;
	private $requireMembertype;
	private $requireFreedate;
	private $ipAddr;
	private $clicked;
	private $tagIds;
	private $formattributeIds;
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
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['industryId'])) $this->industryId = $fields['industryId'];
		if (isset($fields['countryId'])) $this->countryId = $fields['countryId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['companyId'])) $this->companyId = $fields['companyId'];
		if (isset($fields['cacheUsername'])) $this->cacheUsername = $fields['cacheUsername'];
		if (isset($fields['cacheCompanyname'])) $this->cacheCompanyname = $fields['cacheCompanyname'];
		if (isset($fields['cacheContacts'])) $this->cacheContacts = $fields['cacheContacts'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['adwords'])) $this->adwords = $fields['adwords'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['price'])) $this->price = $fields['price'];
		if (isset($fields['measuringUnit'])) $this->measuringUnit = $fields['measuringUnit'];
		if (isset($fields['monetaryUnit'])) $this->monetaryUnit = $fields['monetaryUnit'];
		if (isset($fields['packing'])) $this->packing = $fields['packing'];
		if (isset($fields['quantity'])) $this->quantity = $fields['quantity'];
		if (isset($fields['displayOrder'])) $this->displayOrder = $fields['displayOrder'];
		if (isset($fields['displayExpiration'])) $this->displayExpiration = $fields['displayExpiration'];
		if (isset($fields['spec'])) $this->spec = $fields['spec'];
		if (isset($fields['sn'])) $this->sn = $fields['sn'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['pictureRemote'])) $this->pictureRemote = $fields['pictureRemote'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['submitTime'])) $this->submitTime = $fields['submitTime'];
		if (isset($fields['expireTime'])) $this->expireTime = $fields['expireTime'];
		if (isset($fields['expireDays'])) $this->expireDays = $fields['expireDays'];
		if (isset($fields['ifCommend'])) $this->ifCommend = $fields['ifCommend'];
		if (isset($fields['ifUrgent'])) $this->ifUrgent = $fields['ifUrgent'];
		if (isset($fields['ifLocked'])) $this->ifLocked = $fields['ifLocked'];
		if (isset($fields['requirePoint'])) $this->requirePoint = $fields['requirePoint'];
		if (isset($fields['requireMembertype'])) $this->requireMembertype = $fields['requireMembertype'];
		if (isset($fields['requireFreedate'])) $this->requireFreedate = $fields['requireFreedate'];
		if (isset($fields['ipAddr'])) $this->ipAddr = $fields['ipAddr'];
		if (isset($fields['clicked'])) $this->clicked = $fields['clicked'];
		if (isset($fields['tagIds'])) $this->tagIds = $fields['tagIds'];
		if (isset($fields['formattributeIds'])) $this->formattributeIds = $fields['formattributeIds'];
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

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
	}

	public function getIndustryId() {
		return $this->industryId;
	}
	public function setIndustryId($industryId) {
		$this->fields['industryId'] = $industryId;
		$this->industryId = $industryId;
	}

	public function getCountryId() {
		return $this->countryId;
	}
	public function setCountryId($countryId) {
		$this->fields['countryId'] = $countryId;
		$this->countryId = $countryId;
	}

	public function getAreaId() {
		return $this->areaId;
	}
	public function setAreaId($areaId) {
		$this->fields['areaId'] = $areaId;
		$this->areaId = $areaId;
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

	public function getCacheUsername() {
		return $this->cacheUsername;
	}
	public function setCacheUsername($cacheUsername) {
		$this->fields['cacheUsername'] = $cacheUsername;
		$this->cacheUsername = $cacheUsername;
	}

	public function getCacheCompanyname() {
		return $this->cacheCompanyname;
	}
	public function setCacheCompanyname($cacheCompanyname) {
		$this->fields['cacheCompanyname'] = $cacheCompanyname;
		$this->cacheCompanyname = $cacheCompanyname;
	}

	public function getCacheContacts() {
		return $this->cacheContacts;
	}
	public function setCacheContacts($cacheContacts) {
		$this->fields['cacheContacts'] = $cacheContacts;
		$this->cacheContacts = $cacheContacts;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getAdwords() {
		return $this->adwords;
	}
	public function setAdwords($adwords) {
		$this->fields['adwords'] = $adwords;
		$this->adwords = $adwords;
	}

	public function getContent() {
		return $this->content;
	}
	public function setContent($content) {
		$this->fields['content'] = $content;
		$this->content = $content;
	}

	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->fields['price'] = $price;
		$this->price = $price;
	}

	public function getMeasuringUnit() {
		return $this->measuringUnit;
	}
	public function setMeasuringUnit($measuringUnit) {
		$this->fields['measuringUnit'] = $measuringUnit;
		$this->measuringUnit = $measuringUnit;
	}

	public function getMonetaryUnit() {
		return $this->monetaryUnit;
	}
	public function setMonetaryUnit($monetaryUnit) {
		$this->fields['monetaryUnit'] = $monetaryUnit;
		$this->monetaryUnit = $monetaryUnit;
	}

	public function getPacking() {
		return $this->packing;
	}
	public function setPacking($packing) {
		$this->fields['packing'] = $packing;
		$this->packing = $packing;
	}

	public function getQuantity() {
		return $this->quantity;
	}
	public function setQuantity($quantity) {
		$this->fields['quantity'] = $quantity;
		$this->quantity = $quantity;
	}

	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	public function setDisplayOrder($displayOrder) {
		$this->fields['displayOrder'] = $displayOrder;
		$this->displayOrder = $displayOrder;
	}

	public function getDisplayExpiration() {
		return $this->displayExpiration;
	}
	public function setDisplayExpiration($displayExpiration) {
		$this->fields['displayExpiration'] = $displayExpiration;
		$this->displayExpiration = $displayExpiration;
	}

	public function getSpec() {
		return $this->spec;
	}
	public function setSpec($spec) {
		$this->fields['spec'] = $spec;
		$this->spec = $spec;
	}

	public function getSn() {
		return $this->sn;
	}
	public function setSn($sn) {
		$this->fields['sn'] = $sn;
		$this->sn = $sn;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getPictureRemote() {
		return $this->pictureRemote;
	}
	public function setPictureRemote($pictureRemote) {
		$this->fields['pictureRemote'] = $pictureRemote;
		$this->pictureRemote = $pictureRemote;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getSubmitTime() {
		return $this->submitTime;
	}
	public function setSubmitTime($submitTime) {
		$this->fields['submitTime'] = $submitTime;
		$this->submitTime = $submitTime;
	}

	public function getExpireTime() {
		return $this->expireTime;
	}
	public function setExpireTime($expireTime) {
		$this->fields['expireTime'] = $expireTime;
		$this->expireTime = $expireTime;
	}

	public function getExpireDays() {
		return $this->expireDays;
	}
	public function setExpireDays($expireDays) {
		$this->fields['expireDays'] = $expireDays;
		$this->expireDays = $expireDays;
	}

	public function getIfCommend() {
		return $this->ifCommend;
	}
	public function setIfCommend($ifCommend) {
		$this->fields['ifCommend'] = $ifCommend;
		$this->ifCommend = $ifCommend;
	}

	public function getIfUrgent() {
		return $this->ifUrgent;
	}
	public function setIfUrgent($ifUrgent) {
		$this->fields['ifUrgent'] = $ifUrgent;
		$this->ifUrgent = $ifUrgent;
	}

	public function getIfLocked() {
		return $this->ifLocked;
	}
	public function setIfLocked($ifLocked) {
		$this->fields['ifLocked'] = $ifLocked;
		$this->ifLocked = $ifLocked;
	}

	public function getRequirePoint() {
		return $this->requirePoint;
	}
	public function setRequirePoint($requirePoint) {
		$this->fields['requirePoint'] = $requirePoint;
		$this->requirePoint = $requirePoint;
	}

	public function getRequireMembertype() {
		return $this->requireMembertype;
	}
	public function setRequireMembertype($requireMembertype) {
		$this->fields['requireMembertype'] = $requireMembertype;
		$this->requireMembertype = $requireMembertype;
	}

	public function getRequireFreedate() {
		return $this->requireFreedate;
	}
	public function setRequireFreedate($requireFreedate) {
		$this->fields['requireFreedate'] = $requireFreedate;
		$this->requireFreedate = $requireFreedate;
	}

	public function getIpAddr() {
		return $this->ipAddr;
	}
	public function setIpAddr($ipAddr) {
		$this->fields['ipAddr'] = $ipAddr;
		$this->ipAddr = $ipAddr;
	}

	public function getClicked() {
		return $this->clicked;
	}
	public function setClicked($clicked) {
		$this->fields['clicked'] = $clicked;
		$this->clicked = $clicked;
	}

	public function getTagIds() {
		return $this->tagIds;
	}
	public function setTagIds($tagIds) {
		$this->fields['tagIds'] = $tagIds;
		$this->tagIds = $tagIds;
	}

	public function getFormattributeIds() {
		return $this->formattributeIds;
	}
	public function setFormattributeIds($formattributeIds) {
		$this->fields['formattributeIds'] = $formattributeIds;
		$this->formattributeIds = $formattributeIds;
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
		return ''.':'.$this->id.':'.$this->typeId.':'.$this->industryId.':'.$this->countryId.':'.$this->areaId.':'.$this->memberId.':'.$this->companyId.':'.$this->cacheUsername.':'.$this->cacheCompanyname.':'.$this->cacheContacts.':'.$this->title.':'.$this->adwords.':'.$this->content.':'.$this->price.':'.$this->measuringUnit.':'.$this->monetaryUnit.':'.$this->packing.':'.$this->quantity.':'.$this->displayOrder.':'.$this->displayExpiration.':'.$this->spec.':'.$this->sn.':'.$this->picture.':'.$this->pictureRemote.':'.$this->status.':'.$this->submitTime.':'.$this->expireTime.':'.$this->expireDays.':'.$this->ifCommend.':'.$this->ifUrgent.':'.$this->ifLocked.':'.$this->requirePoint.':'.$this->requireMembertype.':'.$this->requireFreedate.':'.$this->ipAddr.':'.$this->clicked.':'.$this->tagIds.':'.$this->formattributeIds.':'.$this->highlight.':'.$this->created.':'.$this->modified;
	}
}
