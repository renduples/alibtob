<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'productprices' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Productprice extends BaseBO
{
	private $fields;
	private $id;
	private $typeId;
	private $productId;
	private $brandId;
	private $memberId;
	private $companyId;
	private $areaId;
	private $priceTrends;
	private $categoryId;
	private $source;
	private $title;
	private $description;
	private $units;
	private $currency;
	private $price;
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
		if (isset($fields['productId'])) $this->productId = $fields['productId'];
		if (isset($fields['brandId'])) $this->brandId = $fields['brandId'];
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['companyId'])) $this->companyId = $fields['companyId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['priceTrends'])) $this->priceTrends = $fields['priceTrends'];
		if (isset($fields['categoryId'])) $this->categoryId = $fields['categoryId'];
		if (isset($fields['source'])) $this->source = $fields['source'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['units'])) $this->units = $fields['units'];
		if (isset($fields['currency'])) $this->currency = $fields['currency'];
		if (isset($fields['price'])) $this->price = $fields['price'];
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

	public function getProductId() {
		return $this->productId;
	}
	public function setProductId($productId) {
		$this->fields['productId'] = $productId;
		$this->productId = $productId;
	}

	public function getBrandId() {
		return $this->brandId;
	}
	public function setBrandId($brandId) {
		$this->fields['brandId'] = $brandId;
		$this->brandId = $brandId;
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

	public function getAreaId() {
		return $this->areaId;
	}
	public function setAreaId($areaId) {
		$this->fields['areaId'] = $areaId;
		$this->areaId = $areaId;
	}

	public function getPriceTrends() {
		return $this->priceTrends;
	}
	public function setPriceTrends($priceTrends) {
		$this->fields['priceTrends'] = $priceTrends;
		$this->priceTrends = $priceTrends;
	}

	public function getCategoryId() {
		return $this->categoryId;
	}
	public function setCategoryId($categoryId) {
		$this->fields['categoryId'] = $categoryId;
		$this->categoryId = $categoryId;
	}

	public function getSource() {
		return $this->source;
	}
	public function setSource($source) {
		$this->fields['source'] = $source;
		$this->source = $source;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}

	public function getUnits() {
		return $this->units;
	}
	public function setUnits($units) {
		$this->fields['units'] = $units;
		$this->units = $units;
	}

	public function getCurrency() {
		return $this->currency;
	}
	public function setCurrency($currency) {
		$this->fields['currency'] = $currency;
		$this->currency = $currency;
	}

	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->fields['price'] = $price;
		$this->price = $price;
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
		return ''.':'.$this->id.':'.$this->typeId.':'.$this->productId.':'.$this->brandId.':'.$this->memberId.':'.$this->companyId.':'.$this->areaId.':'.$this->priceTrends.':'.$this->categoryId.':'.$this->source.':'.$this->title.':'.$this->description.':'.$this->units.':'.$this->currency.':'.$this->price.':'.$this->created.':'.$this->modified;
	}
}
