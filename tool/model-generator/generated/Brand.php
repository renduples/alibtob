<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'brands' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Brand extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $companyId;
	private $typeId;
	private $ifCommend;
	private $name;
	private $aliasName;
	private $picture;
	private $description;
	private $hits;
	private $ranks;
	private $letter;
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
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['ifCommend'])) $this->ifCommend = $fields['ifCommend'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['aliasName'])) $this->aliasName = $fields['aliasName'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['hits'])) $this->hits = $fields['hits'];
		if (isset($fields['ranks'])) $this->ranks = $fields['ranks'];
		if (isset($fields['letter'])) $this->letter = $fields['letter'];
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

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
	}

	public function getIfCommend() {
		return $this->ifCommend;
	}
	public function setIfCommend($ifCommend) {
		$this->fields['ifCommend'] = $ifCommend;
		$this->ifCommend = $ifCommend;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getAliasName() {
		return $this->aliasName;
	}
	public function setAliasName($aliasName) {
		$this->fields['aliasName'] = $aliasName;
		$this->aliasName = $aliasName;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}

	public function getHits() {
		return $this->hits;
	}
	public function setHits($hits) {
		$this->fields['hits'] = $hits;
		$this->hits = $hits;
	}

	public function getRanks() {
		return $this->ranks;
	}
	public function setRanks($ranks) {
		$this->fields['ranks'] = $ranks;
		$this->ranks = $ranks;
	}

	public function getLetter() {
		return $this->letter;
	}
	public function setLetter($letter) {
		$this->fields['letter'] = $letter;
		$this->letter = $letter;
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
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->companyId.':'.$this->typeId.':'.$this->ifCommend.':'.$this->name.':'.$this->aliasName.':'.$this->picture.':'.$this->description.':'.$this->hits.':'.$this->ranks.':'.$this->letter.':'.$this->created.':'.$this->modified;
	}
}
