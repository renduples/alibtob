<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'jobs' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Job extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $companyId;
	private $cacheSpacename;
	private $industryId;
	private $areaId;
	private $name;
	private $workStation;
	private $content;
	private $requireGenderId;
	private $peoples;
	private $requireEducationId;
	private $requireAge;
	private $salaryId;
	private $worktypeId;
	private $status;
	private $clicked;
	private $expireTime;
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
		if (isset($fields['cacheSpacename'])) $this->cacheSpacename = $fields['cacheSpacename'];
		if (isset($fields['industryId'])) $this->industryId = $fields['industryId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['workStation'])) $this->workStation = $fields['workStation'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['requireGenderId'])) $this->requireGenderId = $fields['requireGenderId'];
		if (isset($fields['peoples'])) $this->peoples = $fields['peoples'];
		if (isset($fields['requireEducationId'])) $this->requireEducationId = $fields['requireEducationId'];
		if (isset($fields['requireAge'])) $this->requireAge = $fields['requireAge'];
		if (isset($fields['salaryId'])) $this->salaryId = $fields['salaryId'];
		if (isset($fields['worktypeId'])) $this->worktypeId = $fields['worktypeId'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['clicked'])) $this->clicked = $fields['clicked'];
		if (isset($fields['expireTime'])) $this->expireTime = $fields['expireTime'];
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

	public function getCacheSpacename() {
		return $this->cacheSpacename;
	}
	public function setCacheSpacename($cacheSpacename) {
		$this->fields['cacheSpacename'] = $cacheSpacename;
		$this->cacheSpacename = $cacheSpacename;
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

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getWorkStation() {
		return $this->workStation;
	}
	public function setWorkStation($workStation) {
		$this->fields['workStation'] = $workStation;
		$this->workStation = $workStation;
	}

	public function getContent() {
		return $this->content;
	}
	public function setContent($content) {
		$this->fields['content'] = $content;
		$this->content = $content;
	}

	public function getRequireGenderId() {
		return $this->requireGenderId;
	}
	public function setRequireGenderId($requireGenderId) {
		$this->fields['requireGenderId'] = $requireGenderId;
		$this->requireGenderId = $requireGenderId;
	}

	public function getPeoples() {
		return $this->peoples;
	}
	public function setPeoples($peoples) {
		$this->fields['peoples'] = $peoples;
		$this->peoples = $peoples;
	}

	public function getRequireEducationId() {
		return $this->requireEducationId;
	}
	public function setRequireEducationId($requireEducationId) {
		$this->fields['requireEducationId'] = $requireEducationId;
		$this->requireEducationId = $requireEducationId;
	}

	public function getRequireAge() {
		return $this->requireAge;
	}
	public function setRequireAge($requireAge) {
		$this->fields['requireAge'] = $requireAge;
		$this->requireAge = $requireAge;
	}

	public function getSalaryId() {
		return $this->salaryId;
	}
	public function setSalaryId($salaryId) {
		$this->fields['salaryId'] = $salaryId;
		$this->salaryId = $salaryId;
	}

	public function getWorktypeId() {
		return $this->worktypeId;
	}
	public function setWorktypeId($worktypeId) {
		$this->fields['worktypeId'] = $worktypeId;
		$this->worktypeId = $worktypeId;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getClicked() {
		return $this->clicked;
	}
	public function setClicked($clicked) {
		$this->fields['clicked'] = $clicked;
		$this->clicked = $clicked;
	}

	public function getExpireTime() {
		return $this->expireTime;
	}
	public function setExpireTime($expireTime) {
		$this->fields['expireTime'] = $expireTime;
		$this->expireTime = $expireTime;
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
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->companyId.':'.$this->cacheSpacename.':'.$this->industryId.':'.$this->areaId.':'.$this->name.':'.$this->workStation.':'.$this->content.':'.$this->requireGenderId.':'.$this->peoples.':'.$this->requireEducationId.':'.$this->requireAge.':'.$this->salaryId.':'.$this->worktypeId.':'.$this->status.':'.$this->clicked.':'.$this->expireTime.':'.$this->created.':'.$this->modified;
	}
}
