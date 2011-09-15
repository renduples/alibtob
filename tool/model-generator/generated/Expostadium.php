<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'expostadiums' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Expostadium extends BaseBO
{
	private $fields;
	private $id;
	private $sa;
	private $countryId;
	private $provinceId;
	private $cityId;
	private $sb;
	private $sc;
	private $sd;
	private $se;
	private $sf;
	private $sg;
	private $sh;
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
		if (isset($fields['sa'])) $this->sa = $fields['sa'];
		if (isset($fields['countryId'])) $this->countryId = $fields['countryId'];
		if (isset($fields['provinceId'])) $this->provinceId = $fields['provinceId'];
		if (isset($fields['cityId'])) $this->cityId = $fields['cityId'];
		if (isset($fields['sb'])) $this->sb = $fields['sb'];
		if (isset($fields['sc'])) $this->sc = $fields['sc'];
		if (isset($fields['sd'])) $this->sd = $fields['sd'];
		if (isset($fields['se'])) $this->se = $fields['se'];
		if (isset($fields['sf'])) $this->sf = $fields['sf'];
		if (isset($fields['sg'])) $this->sg = $fields['sg'];
		if (isset($fields['sh'])) $this->sh = $fields['sh'];
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

	public function getSa() {
		return $this->sa;
	}
	public function setSa($sa) {
		$this->fields['sa'] = $sa;
		$this->sa = $sa;
	}

	public function getCountryId() {
		return $this->countryId;
	}
	public function setCountryId($countryId) {
		$this->fields['countryId'] = $countryId;
		$this->countryId = $countryId;
	}

	public function getProvinceId() {
		return $this->provinceId;
	}
	public function setProvinceId($provinceId) {
		$this->fields['provinceId'] = $provinceId;
		$this->provinceId = $provinceId;
	}

	public function getCityId() {
		return $this->cityId;
	}
	public function setCityId($cityId) {
		$this->fields['cityId'] = $cityId;
		$this->cityId = $cityId;
	}

	public function getSb() {
		return $this->sb;
	}
	public function setSb($sb) {
		$this->fields['sb'] = $sb;
		$this->sb = $sb;
	}

	public function getSc() {
		return $this->sc;
	}
	public function setSc($sc) {
		$this->fields['sc'] = $sc;
		$this->sc = $sc;
	}

	public function getSd() {
		return $this->sd;
	}
	public function setSd($sd) {
		$this->fields['sd'] = $sd;
		$this->sd = $sd;
	}

	public function getSe() {
		return $this->se;
	}
	public function setSe($se) {
		$this->fields['se'] = $se;
		$this->se = $se;
	}

	public function getSf() {
		return $this->sf;
	}
	public function setSf($sf) {
		$this->fields['sf'] = $sf;
		$this->sf = $sf;
	}

	public function getSg() {
		return $this->sg;
	}
	public function setSg($sg) {
		$this->fields['sg'] = $sg;
		$this->sg = $sg;
	}

	public function getSh() {
		return $this->sh;
	}
	public function setSh($sh) {
		$this->fields['sh'] = $sh;
		$this->sh = $sh;
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
		return ''.':'.$this->id.':'.$this->sa.':'.$this->countryId.':'.$this->provinceId.':'.$this->cityId.':'.$this->sb.':'.$this->sc.':'.$this->sd.':'.$this->se.':'.$this->sf.':'.$this->sg.':'.$this->sh.':'.$this->created.':'.$this->modified;
	}
}
