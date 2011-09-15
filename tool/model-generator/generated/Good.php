<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'goods' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Good extends BaseBO
{
	private $fields;
	private $id;
	private $typeId;
	private $name;
	private $description;
	private $price;
	private $closed;
	private $picture;
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
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['price'])) $this->price = $fields['price'];
		if (isset($fields['closed'])) $this->closed = $fields['closed'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
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

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
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

	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->fields['price'] = $price;
		$this->price = $price;
	}

	public function getClosed() {
		return $this->closed;
	}
	public function setClosed($closed) {
		$this->fields['closed'] = $closed;
		$this->closed = $closed;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
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
		return ''.':'.$this->id.':'.$this->typeId.':'.$this->name.':'.$this->description.':'.$this->price.':'.$this->closed.':'.$this->picture.':'.$this->ifCommend.':'.$this->created.':'.$this->modified;
	}
}
