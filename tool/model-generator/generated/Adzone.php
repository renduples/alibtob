<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'adzones' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Adzone extends BaseBO
{
	private $fields;
	private $id;
	private $membergroupIds;
	private $what;
	private $style;
	private $name;
	private $description;
	private $additionalAdwords;
	private $price;
	private $fileName;
	private $width;
	private $height;
	private $wrap;
	private $maxAd;
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
		if (isset($fields['membergroupIds'])) $this->membergroupIds = $fields['membergroupIds'];
		if (isset($fields['what'])) $this->what = $fields['what'];
		if (isset($fields['style'])) $this->style = $fields['style'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['additionalAdwords'])) $this->additionalAdwords = $fields['additionalAdwords'];
		if (isset($fields['price'])) $this->price = $fields['price'];
		if (isset($fields['fileName'])) $this->fileName = $fields['fileName'];
		if (isset($fields['width'])) $this->width = $fields['width'];
		if (isset($fields['height'])) $this->height = $fields['height'];
		if (isset($fields['wrap'])) $this->wrap = $fields['wrap'];
		if (isset($fields['maxAd'])) $this->maxAd = $fields['maxAd'];
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

	public function getMembergroupIds() {
		return $this->membergroupIds;
	}
	public function setMembergroupIds($membergroupIds) {
		$this->fields['membergroupIds'] = $membergroupIds;
		$this->membergroupIds = $membergroupIds;
	}

	public function getWhat() {
		return $this->what;
	}
	public function setWhat($what) {
		$this->fields['what'] = $what;
		$this->what = $what;
	}

	public function getStyle() {
		return $this->style;
	}
	public function setStyle($style) {
		$this->fields['style'] = $style;
		$this->style = $style;
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

	public function getAdditionalAdwords() {
		return $this->additionalAdwords;
	}
	public function setAdditionalAdwords($additionalAdwords) {
		$this->fields['additionalAdwords'] = $additionalAdwords;
		$this->additionalAdwords = $additionalAdwords;
	}

	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->fields['price'] = $price;
		$this->price = $price;
	}

	public function getFileName() {
		return $this->fileName;
	}
	public function setFileName($fileName) {
		$this->fields['fileName'] = $fileName;
		$this->fileName = $fileName;
	}

	public function getWidth() {
		return $this->width;
	}
	public function setWidth($width) {
		$this->fields['width'] = $width;
		$this->width = $width;
	}

	public function getHeight() {
		return $this->height;
	}
	public function setHeight($height) {
		$this->fields['height'] = $height;
		$this->height = $height;
	}

	public function getWrap() {
		return $this->wrap;
	}
	public function setWrap($wrap) {
		$this->fields['wrap'] = $wrap;
		$this->wrap = $wrap;
	}

	public function getMaxAd() {
		return $this->maxAd;
	}
	public function setMaxAd($maxAd) {
		$this->fields['maxAd'] = $maxAd;
		$this->maxAd = $maxAd;
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
		return ''.':'.$this->id.':'.$this->membergroupIds.':'.$this->what.':'.$this->style.':'.$this->name.':'.$this->description.':'.$this->additionalAdwords.':'.$this->price.':'.$this->fileName.':'.$this->width.':'.$this->height.':'.$this->wrap.':'.$this->maxAd.':'.$this->created.':'.$this->modified;
	}
}
