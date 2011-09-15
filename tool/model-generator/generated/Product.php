<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'products' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Product extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $companyId;
	private $cacheCompanyname;
	private $sortId;
	private $brandId;
	private $categoryId;
	private $industryId;
	private $countryId;
	private $areaId;
	private $name;
	private $price;
	private $sn;
	private $spec;
	private $produceArea;
	private $packingContent;
	private $picture;
	private $content;
	private $producttypeId;
	private $status;
	private $state;
	private $ifnew;
	private $ifcommend;
	private $priority;
	private $tagIds;
	private $clicked;
	private $formattributeIds;
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
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['companyId'])) $this->companyId = $fields['companyId'];
		if (isset($fields['cacheCompanyname'])) $this->cacheCompanyname = $fields['cacheCompanyname'];
		if (isset($fields['sortId'])) $this->sortId = $fields['sortId'];
		if (isset($fields['brandId'])) $this->brandId = $fields['brandId'];
		if (isset($fields['categoryId'])) $this->categoryId = $fields['categoryId'];
		if (isset($fields['industryId'])) $this->industryId = $fields['industryId'];
		if (isset($fields['countryId'])) $this->countryId = $fields['countryId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['price'])) $this->price = $fields['price'];
		if (isset($fields['sn'])) $this->sn = $fields['sn'];
		if (isset($fields['spec'])) $this->spec = $fields['spec'];
		if (isset($fields['produceArea'])) $this->produceArea = $fields['produceArea'];
		if (isset($fields['packingContent'])) $this->packingContent = $fields['packingContent'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['producttypeId'])) $this->producttypeId = $fields['producttypeId'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['state'])) $this->state = $fields['state'];
		if (isset($fields['ifnew'])) $this->ifnew = $fields['ifnew'];
		if (isset($fields['ifcommend'])) $this->ifcommend = $fields['ifcommend'];
		if (isset($fields['priority'])) $this->priority = $fields['priority'];
		if (isset($fields['tagIds'])) $this->tagIds = $fields['tagIds'];
		if (isset($fields['clicked'])) $this->clicked = $fields['clicked'];
		if (isset($fields['formattributeIds'])) $this->formattributeIds = $fields['formattributeIds'];
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

	public function getCacheCompanyname() {
		return $this->cacheCompanyname;
	}
	public function setCacheCompanyname($cacheCompanyname) {
		$this->fields['cacheCompanyname'] = $cacheCompanyname;
		$this->cacheCompanyname = $cacheCompanyname;
	}

	public function getSortId() {
		return $this->sortId;
	}
	public function setSortId($sortId) {
		$this->fields['sortId'] = $sortId;
		$this->sortId = $sortId;
	}

	public function getBrandId() {
		return $this->brandId;
	}
	public function setBrandId($brandId) {
		$this->fields['brandId'] = $brandId;
		$this->brandId = $brandId;
	}

	public function getCategoryId() {
		return $this->categoryId;
	}
	public function setCategoryId($categoryId) {
		$this->fields['categoryId'] = $categoryId;
		$this->categoryId = $categoryId;
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

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->fields['price'] = $price;
		$this->price = $price;
	}

	public function getSn() {
		return $this->sn;
	}
	public function setSn($sn) {
		$this->fields['sn'] = $sn;
		$this->sn = $sn;
	}

	public function getSpec() {
		return $this->spec;
	}
	public function setSpec($spec) {
		$this->fields['spec'] = $spec;
		$this->spec = $spec;
	}

	public function getProduceArea() {
		return $this->produceArea;
	}
	public function setProduceArea($produceArea) {
		$this->fields['produceArea'] = $produceArea;
		$this->produceArea = $produceArea;
	}

	public function getPackingContent() {
		return $this->packingContent;
	}
	public function setPackingContent($packingContent) {
		$this->fields['packingContent'] = $packingContent;
		$this->packingContent = $packingContent;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getContent() {
		return $this->content;
	}
	public function setContent($content) {
		$this->fields['content'] = $content;
		$this->content = $content;
	}

	public function getProducttypeId() {
		return $this->producttypeId;
	}
	public function setProducttypeId($producttypeId) {
		$this->fields['producttypeId'] = $producttypeId;
		$this->producttypeId = $producttypeId;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getState() {
		return $this->state;
	}
	public function setState($state) {
		$this->fields['state'] = $state;
		$this->state = $state;
	}

	public function getIfnew() {
		return $this->ifnew;
	}
	public function setIfnew($ifnew) {
		$this->fields['ifnew'] = $ifnew;
		$this->ifnew = $ifnew;
	}

	public function getIfcommend() {
		return $this->ifcommend;
	}
	public function setIfcommend($ifcommend) {
		$this->fields['ifcommend'] = $ifcommend;
		$this->ifcommend = $ifcommend;
	}

	public function getPriority() {
		return $this->priority;
	}
	public function setPriority($priority) {
		$this->fields['priority'] = $priority;
		$this->priority = $priority;
	}

	public function getTagIds() {
		return $this->tagIds;
	}
	public function setTagIds($tagIds) {
		$this->fields['tagIds'] = $tagIds;
		$this->tagIds = $tagIds;
	}

	public function getClicked() {
		return $this->clicked;
	}
	public function setClicked($clicked) {
		$this->fields['clicked'] = $clicked;
		$this->clicked = $clicked;
	}

	public function getFormattributeIds() {
		return $this->formattributeIds;
	}
	public function setFormattributeIds($formattributeIds) {
		$this->fields['formattributeIds'] = $formattributeIds;
		$this->formattributeIds = $formattributeIds;
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
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->companyId.':'.$this->cacheCompanyname.':'.$this->sortId.':'.$this->brandId.':'.$this->categoryId.':'.$this->industryId.':'.$this->countryId.':'.$this->areaId.':'.$this->name.':'.$this->price.':'.$this->sn.':'.$this->spec.':'.$this->produceArea.':'.$this->packingContent.':'.$this->picture.':'.$this->content.':'.$this->producttypeId.':'.$this->status.':'.$this->state.':'.$this->ifnew.':'.$this->ifcommend.':'.$this->priority.':'.$this->tagIds.':'.$this->clicked.':'.$this->formattributeIds.':'.$this->created.':'.$this->modified;
	}
}
