<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'quotes' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Quote extends BaseBO
{
	private $fields;
	private $id;
	private $productId;
	private $marketId;
	private $typeId;
	private $title;
	private $content;
	private $areaId;
	private $areaId1;
	private $areaId2;
	private $areaId3;
	private $maxPrice;
	private $minPrice;
	private $units;
	private $currency;
	private $trendData;
	private $hits;
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
		if (isset($fields['productId'])) $this->productId = $fields['productId'];
		if (isset($fields['marketId'])) $this->marketId = $fields['marketId'];
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['areaId1'])) $this->areaId1 = $fields['areaId1'];
		if (isset($fields['areaId2'])) $this->areaId2 = $fields['areaId2'];
		if (isset($fields['areaId3'])) $this->areaId3 = $fields['areaId3'];
		if (isset($fields['maxPrice'])) $this->maxPrice = $fields['maxPrice'];
		if (isset($fields['minPrice'])) $this->minPrice = $fields['minPrice'];
		if (isset($fields['units'])) $this->units = $fields['units'];
		if (isset($fields['currency'])) $this->currency = $fields['currency'];
		if (isset($fields['trendData'])) $this->trendData = $fields['trendData'];
		if (isset($fields['hits'])) $this->hits = $fields['hits'];
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

	public function getProductId() {
		return $this->productId;
	}
	public function setProductId($productId) {
		$this->fields['productId'] = $productId;
		$this->productId = $productId;
	}

	public function getMarketId() {
		return $this->marketId;
	}
	public function setMarketId($marketId) {
		$this->fields['marketId'] = $marketId;
		$this->marketId = $marketId;
	}

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
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

	public function getAreaId() {
		return $this->areaId;
	}
	public function setAreaId($areaId) {
		$this->fields['areaId'] = $areaId;
		$this->areaId = $areaId;
	}

	public function getAreaId1() {
		return $this->areaId1;
	}
	public function setAreaId1($areaId1) {
		$this->fields['areaId1'] = $areaId1;
		$this->areaId1 = $areaId1;
	}

	public function getAreaId2() {
		return $this->areaId2;
	}
	public function setAreaId2($areaId2) {
		$this->fields['areaId2'] = $areaId2;
		$this->areaId2 = $areaId2;
	}

	public function getAreaId3() {
		return $this->areaId3;
	}
	public function setAreaId3($areaId3) {
		$this->fields['areaId3'] = $areaId3;
		$this->areaId3 = $areaId3;
	}

	public function getMaxPrice() {
		return $this->maxPrice;
	}
	public function setMaxPrice($maxPrice) {
		$this->fields['maxPrice'] = $maxPrice;
		$this->maxPrice = $maxPrice;
	}

	public function getMinPrice() {
		return $this->minPrice;
	}
	public function setMinPrice($minPrice) {
		$this->fields['minPrice'] = $minPrice;
		$this->minPrice = $minPrice;
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

	public function getTrendData() {
		return $this->trendData;
	}
	public function setTrendData($trendData) {
		$this->fields['trendData'] = $trendData;
		$this->trendData = $trendData;
	}

	public function getHits() {
		return $this->hits;
	}
	public function setHits($hits) {
		$this->fields['hits'] = $hits;
		$this->hits = $hits;
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
		return ''.':'.$this->id.':'.$this->productId.':'.$this->marketId.':'.$this->typeId.':'.$this->title.':'.$this->content.':'.$this->areaId.':'.$this->areaId1.':'.$this->areaId2.':'.$this->areaId3.':'.$this->maxPrice.':'.$this->minPrice.':'.$this->units.':'.$this->currency.':'.$this->trendData.':'.$this->hits.':'.$this->created.':'.$this->modified;
	}
}
