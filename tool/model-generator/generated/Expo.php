<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'expos' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Expo extends BaseBO
{
	private $fields;
	private $id;
	private $expotypeId;
	private $name;
	private $description;
	private $beginTime;
	private $endTime;
	private $industryIds;
	private $industryId;
	private $areaId;
	private $address;
	private $stadiumName;
	private $refreshMethod;
	private $scope;
	private $hosts;
	private $organisers;
	private $coOrganisers;
	private $sponsors;
	private $contacts;
	private $importantNotice;
	private $picture;
	private $ifCommend;
	private $status;
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
		if (isset($fields['expotypeId'])) $this->expotypeId = $fields['expotypeId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['beginTime'])) $this->beginTime = $fields['beginTime'];
		if (isset($fields['endTime'])) $this->endTime = $fields['endTime'];
		if (isset($fields['industryIds'])) $this->industryIds = $fields['industryIds'];
		if (isset($fields['industryId'])) $this->industryId = $fields['industryId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['address'])) $this->address = $fields['address'];
		if (isset($fields['stadiumName'])) $this->stadiumName = $fields['stadiumName'];
		if (isset($fields['refreshMethod'])) $this->refreshMethod = $fields['refreshMethod'];
		if (isset($fields['scope'])) $this->scope = $fields['scope'];
		if (isset($fields['hosts'])) $this->hosts = $fields['hosts'];
		if (isset($fields['organisers'])) $this->organisers = $fields['organisers'];
		if (isset($fields['coOrganisers'])) $this->coOrganisers = $fields['coOrganisers'];
		if (isset($fields['sponsors'])) $this->sponsors = $fields['sponsors'];
		if (isset($fields['contacts'])) $this->contacts = $fields['contacts'];
		if (isset($fields['importantNotice'])) $this->importantNotice = $fields['importantNotice'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['ifCommend'])) $this->ifCommend = $fields['ifCommend'];
		if (isset($fields['status'])) $this->status = $fields['status'];
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

	public function getExpotypeId() {
		return $this->expotypeId;
	}
	public function setExpotypeId($expotypeId) {
		$this->fields['expotypeId'] = $expotypeId;
		$this->expotypeId = $expotypeId;
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

	public function getBeginTime() {
		return $this->beginTime;
	}
	public function setBeginTime($beginTime) {
		$this->fields['beginTime'] = $beginTime;
		$this->beginTime = $beginTime;
	}

	public function getEndTime() {
		return $this->endTime;
	}
	public function setEndTime($endTime) {
		$this->fields['endTime'] = $endTime;
		$this->endTime = $endTime;
	}

	public function getIndustryIds() {
		return $this->industryIds;
	}
	public function setIndustryIds($industryIds) {
		$this->fields['industryIds'] = $industryIds;
		$this->industryIds = $industryIds;
	}

	public function getIndustryId() {
		return $this->industryId;
	}
	public function setIndustryId($industryId) {
		$this->fields['industryId'] = $industryId;
		$this->industryId = $industryId;
	}

	public function getAreaId() {
		return $this->areaId;
	}
	public function setAreaId($areaId) {
		$this->fields['areaId'] = $areaId;
		$this->areaId = $areaId;
	}

	public function getAddress() {
		return $this->address;
	}
	public function setAddress($address) {
		$this->fields['address'] = $address;
		$this->address = $address;
	}

	public function getStadiumName() {
		return $this->stadiumName;
	}
	public function setStadiumName($stadiumName) {
		$this->fields['stadiumName'] = $stadiumName;
		$this->stadiumName = $stadiumName;
	}

	public function getRefreshMethod() {
		return $this->refreshMethod;
	}
	public function setRefreshMethod($refreshMethod) {
		$this->fields['refreshMethod'] = $refreshMethod;
		$this->refreshMethod = $refreshMethod;
	}

	public function getScope() {
		return $this->scope;
	}
	public function setScope($scope) {
		$this->fields['scope'] = $scope;
		$this->scope = $scope;
	}

	public function getHosts() {
		return $this->hosts;
	}
	public function setHosts($hosts) {
		$this->fields['hosts'] = $hosts;
		$this->hosts = $hosts;
	}

	public function getOrganisers() {
		return $this->organisers;
	}
	public function setOrganisers($organisers) {
		$this->fields['organisers'] = $organisers;
		$this->organisers = $organisers;
	}

	public function getCoOrganisers() {
		return $this->coOrganisers;
	}
	public function setCoOrganisers($coOrganisers) {
		$this->fields['coOrganisers'] = $coOrganisers;
		$this->coOrganisers = $coOrganisers;
	}

	public function getSponsors() {
		return $this->sponsors;
	}
	public function setSponsors($sponsors) {
		$this->fields['sponsors'] = $sponsors;
		$this->sponsors = $sponsors;
	}

	public function getContacts() {
		return $this->contacts;
	}
	public function setContacts($contacts) {
		$this->fields['contacts'] = $contacts;
		$this->contacts = $contacts;
	}

	public function getImportantNotice() {
		return $this->importantNotice;
	}
	public function setImportantNotice($importantNotice) {
		$this->fields['importantNotice'] = $importantNotice;
		$this->importantNotice = $importantNotice;
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

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
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
		return ''.':'.$this->id.':'.$this->expotypeId.':'.$this->name.':'.$this->description.':'.$this->beginTime.':'.$this->endTime.':'.$this->industryIds.':'.$this->industryId.':'.$this->areaId.':'.$this->address.':'.$this->stadiumName.':'.$this->refreshMethod.':'.$this->scope.':'.$this->hosts.':'.$this->organisers.':'.$this->coOrganisers.':'.$this->sponsors.':'.$this->contacts.':'.$this->importantNotice.':'.$this->picture.':'.$this->ifCommend.':'.$this->status.':'.$this->hits.':'.$this->created.':'.$this->modified;
	}
}
