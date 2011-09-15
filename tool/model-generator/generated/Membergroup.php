<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'membergroups' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Membergroup extends BaseBO
{
	private $fields;
	private $id;
	private $membertypeId;
	private $name;
	private $description;
	private $type;
	private $system;
	private $picture;
	private $pointMax;
	private $pointMin;
	private $maxOffer;
	private $maxProduct;
	private $maxJob;
	private $maxCompanynews;
	private $maxProducttype;
	private $maxAlbum;
	private $maxAttachSize;
	private $maxSizePerday;
	private $maxFavorite;
	private $isDefault;
	private $allowOffer;
	private $allowMarket;
	private $allowCompany;
	private $allowProduct;
	private $allowJob;
	private $allowCompanynews;
	private $allowAlbum;
	private $allowSpace;
	private $defaultLiveTime;
	private $afterLiveTime;
	private $exempt;
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
		if (isset($fields['membertypeId'])) $this->membertypeId = $fields['membertypeId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['type'])) $this->type = $fields['type'];
		if (isset($fields['system'])) $this->system = $fields['system'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['pointMax'])) $this->pointMax = $fields['pointMax'];
		if (isset($fields['pointMin'])) $this->pointMin = $fields['pointMin'];
		if (isset($fields['maxOffer'])) $this->maxOffer = $fields['maxOffer'];
		if (isset($fields['maxProduct'])) $this->maxProduct = $fields['maxProduct'];
		if (isset($fields['maxJob'])) $this->maxJob = $fields['maxJob'];
		if (isset($fields['maxCompanynews'])) $this->maxCompanynews = $fields['maxCompanynews'];
		if (isset($fields['maxProducttype'])) $this->maxProducttype = $fields['maxProducttype'];
		if (isset($fields['maxAlbum'])) $this->maxAlbum = $fields['maxAlbum'];
		if (isset($fields['maxAttachSize'])) $this->maxAttachSize = $fields['maxAttachSize'];
		if (isset($fields['maxSizePerday'])) $this->maxSizePerday = $fields['maxSizePerday'];
		if (isset($fields['maxFavorite'])) $this->maxFavorite = $fields['maxFavorite'];
		if (isset($fields['isDefault'])) $this->isDefault = $fields['isDefault'];
		if (isset($fields['allowOffer'])) $this->allowOffer = $fields['allowOffer'];
		if (isset($fields['allowMarket'])) $this->allowMarket = $fields['allowMarket'];
		if (isset($fields['allowCompany'])) $this->allowCompany = $fields['allowCompany'];
		if (isset($fields['allowProduct'])) $this->allowProduct = $fields['allowProduct'];
		if (isset($fields['allowJob'])) $this->allowJob = $fields['allowJob'];
		if (isset($fields['allowCompanynews'])) $this->allowCompanynews = $fields['allowCompanynews'];
		if (isset($fields['allowAlbum'])) $this->allowAlbum = $fields['allowAlbum'];
		if (isset($fields['allowSpace'])) $this->allowSpace = $fields['allowSpace'];
		if (isset($fields['defaultLiveTime'])) $this->defaultLiveTime = $fields['defaultLiveTime'];
		if (isset($fields['afterLiveTime'])) $this->afterLiveTime = $fields['afterLiveTime'];
		if (isset($fields['exempt'])) $this->exempt = $fields['exempt'];
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

	public function getMembertypeId() {
		return $this->membertypeId;
	}
	public function setMembertypeId($membertypeId) {
		$this->fields['membertypeId'] = $membertypeId;
		$this->membertypeId = $membertypeId;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}

	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->fields['type'] = $type;
		$this->type = $type;
	}

	public function getSystem() {
		return $this->system;
	}
	public function setSystem($system) {
		$this->fields['system'] = $system;
		$this->system = $system;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getPointMax() {
		return $this->pointMax;
	}
	public function setPointMax($pointMax) {
		$this->fields['pointMax'] = $pointMax;
		$this->pointMax = $pointMax;
	}

	public function getPointMin() {
		return $this->pointMin;
	}
	public function setPointMin($pointMin) {
		$this->fields['pointMin'] = $pointMin;
		$this->pointMin = $pointMin;
	}

	public function getMaxOffer() {
		return $this->maxOffer;
	}
	public function setMaxOffer($maxOffer) {
		$this->fields['maxOffer'] = $maxOffer;
		$this->maxOffer = $maxOffer;
	}

	public function getMaxProduct() {
		return $this->maxProduct;
	}
	public function setMaxProduct($maxProduct) {
		$this->fields['maxProduct'] = $maxProduct;
		$this->maxProduct = $maxProduct;
	}

	public function getMaxJob() {
		return $this->maxJob;
	}
	public function setMaxJob($maxJob) {
		$this->fields['maxJob'] = $maxJob;
		$this->maxJob = $maxJob;
	}

	public function getMaxCompanynews() {
		return $this->maxCompanynews;
	}
	public function setMaxCompanynews($maxCompanynews) {
		$this->fields['maxCompanynews'] = $maxCompanynews;
		$this->maxCompanynews = $maxCompanynews;
	}

	public function getMaxProducttype() {
		return $this->maxProducttype;
	}
	public function setMaxProducttype($maxProducttype) {
		$this->fields['maxProducttype'] = $maxProducttype;
		$this->maxProducttype = $maxProducttype;
	}

	public function getMaxAlbum() {
		return $this->maxAlbum;
	}
	public function setMaxAlbum($maxAlbum) {
		$this->fields['maxAlbum'] = $maxAlbum;
		$this->maxAlbum = $maxAlbum;
	}

	public function getMaxAttachSize() {
		return $this->maxAttachSize;
	}
	public function setMaxAttachSize($maxAttachSize) {
		$this->fields['maxAttachSize'] = $maxAttachSize;
		$this->maxAttachSize = $maxAttachSize;
	}

	public function getMaxSizePerday() {
		return $this->maxSizePerday;
	}
	public function setMaxSizePerday($maxSizePerday) {
		$this->fields['maxSizePerday'] = $maxSizePerday;
		$this->maxSizePerday = $maxSizePerday;
	}

	public function getMaxFavorite() {
		return $this->maxFavorite;
	}
	public function setMaxFavorite($maxFavorite) {
		$this->fields['maxFavorite'] = $maxFavorite;
		$this->maxFavorite = $maxFavorite;
	}

	public function getIsDefault() {
		return $this->isDefault;
	}
	public function setIsDefault($isDefault) {
		$this->fields['isDefault'] = $isDefault;
		$this->isDefault = $isDefault;
	}

	public function getAllowOffer() {
		return $this->allowOffer;
	}
	public function setAllowOffer($allowOffer) {
		$this->fields['allowOffer'] = $allowOffer;
		$this->allowOffer = $allowOffer;
	}

	public function getAllowMarket() {
		return $this->allowMarket;
	}
	public function setAllowMarket($allowMarket) {
		$this->fields['allowMarket'] = $allowMarket;
		$this->allowMarket = $allowMarket;
	}

	public function getAllowCompany() {
		return $this->allowCompany;
	}
	public function setAllowCompany($allowCompany) {
		$this->fields['allowCompany'] = $allowCompany;
		$this->allowCompany = $allowCompany;
	}

	public function getAllowProduct() {
		return $this->allowProduct;
	}
	public function setAllowProduct($allowProduct) {
		$this->fields['allowProduct'] = $allowProduct;
		$this->allowProduct = $allowProduct;
	}

	public function getAllowJob() {
		return $this->allowJob;
	}
	public function setAllowJob($allowJob) {
		$this->fields['allowJob'] = $allowJob;
		$this->allowJob = $allowJob;
	}

	public function getAllowCompanynews() {
		return $this->allowCompanynews;
	}
	public function setAllowCompanynews($allowCompanynews) {
		$this->fields['allowCompanynews'] = $allowCompanynews;
		$this->allowCompanynews = $allowCompanynews;
	}

	public function getAllowAlbum() {
		return $this->allowAlbum;
	}
	public function setAllowAlbum($allowAlbum) {
		$this->fields['allowAlbum'] = $allowAlbum;
		$this->allowAlbum = $allowAlbum;
	}

	public function getAllowSpace() {
		return $this->allowSpace;
	}
	public function setAllowSpace($allowSpace) {
		$this->fields['allowSpace'] = $allowSpace;
		$this->allowSpace = $allowSpace;
	}

	public function getDefaultLiveTime() {
		return $this->defaultLiveTime;
	}
	public function setDefaultLiveTime($defaultLiveTime) {
		$this->fields['defaultLiveTime'] = $defaultLiveTime;
		$this->defaultLiveTime = $defaultLiveTime;
	}

	public function getAfterLiveTime() {
		return $this->afterLiveTime;
	}
	public function setAfterLiveTime($afterLiveTime) {
		$this->fields['afterLiveTime'] = $afterLiveTime;
		$this->afterLiveTime = $afterLiveTime;
	}

	public function getExempt() {
		return $this->exempt;
	}
	public function setExempt($exempt) {
		$this->fields['exempt'] = $exempt;
		$this->exempt = $exempt;
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
		return ''.':'.$this->id.':'.$this->membertypeId.':'.$this->name.':'.$this->description.':'.$this->type.':'.$this->system.':'.$this->picture.':'.$this->pointMax.':'.$this->pointMin.':'.$this->maxOffer.':'.$this->maxProduct.':'.$this->maxJob.':'.$this->maxCompanynews.':'.$this->maxProducttype.':'.$this->maxAlbum.':'.$this->maxAttachSize.':'.$this->maxSizePerday.':'.$this->maxFavorite.':'.$this->isDefault.':'.$this->allowOffer.':'.$this->allowMarket.':'.$this->allowCompany.':'.$this->allowProduct.':'.$this->allowJob.':'.$this->allowCompanynews.':'.$this->allowAlbum.':'.$this->allowSpace.':'.$this->defaultLiveTime.':'.$this->afterLiveTime.':'.$this->exempt.':'.$this->created.':'.$this->modified;
	}
}
