<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'companies' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Companie extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $cacheSpacename;
	private $cacheMembergroupid;
	private $cacheCredits;
	private $topleveldomain;
	private $industryId;
	private $areaId;
	private $typeId;
	private $name;
	private $description;
	private $englishName;
	private $adwords;
	private $keywords;
	private $bossName;
	private $manageType;
	private $yearAnnual;
	private $property;
	private $configs;
	private $bankFrom;
	private $bankAccount;
	private $mainProd;
	private $employeeAmount;
	private $foundDate;
	private $regFund;
	private $regAddress;
	private $address;
	private $zipcode;
	private $mainBrand;
	private $mainMarket;
	private $mainBizPlace;
	private $mainCustomer;
	private $linkMan;
	private $linkManGender;
	private $position;
	private $tel;
	private $fax;
	private $mobile;
	private $email;
	private $siteUrl;
	private $picture;
	private $status;
	private $firstLetter;
	private $ifCommend;
	private $clicked;
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
		if (isset($fields['cacheSpacename'])) $this->cacheSpacename = $fields['cacheSpacename'];
		if (isset($fields['cacheMembergroupid'])) $this->cacheMembergroupid = $fields['cacheMembergroupid'];
		if (isset($fields['cacheCredits'])) $this->cacheCredits = $fields['cacheCredits'];
		if (isset($fields['topleveldomain'])) $this->topleveldomain = $fields['topleveldomain'];
		if (isset($fields['industryId'])) $this->industryId = $fields['industryId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['englishName'])) $this->englishName = $fields['englishName'];
		if (isset($fields['adwords'])) $this->adwords = $fields['adwords'];
		if (isset($fields['keywords'])) $this->keywords = $fields['keywords'];
		if (isset($fields['bossName'])) $this->bossName = $fields['bossName'];
		if (isset($fields['manageType'])) $this->manageType = $fields['manageType'];
		if (isset($fields['yearAnnual'])) $this->yearAnnual = $fields['yearAnnual'];
		if (isset($fields['property'])) $this->property = $fields['property'];
		if (isset($fields['configs'])) $this->configs = $fields['configs'];
		if (isset($fields['bankFrom'])) $this->bankFrom = $fields['bankFrom'];
		if (isset($fields['bankAccount'])) $this->bankAccount = $fields['bankAccount'];
		if (isset($fields['mainProd'])) $this->mainProd = $fields['mainProd'];
		if (isset($fields['employeeAmount'])) $this->employeeAmount = $fields['employeeAmount'];
		if (isset($fields['foundDate'])) $this->foundDate = $fields['foundDate'];
		if (isset($fields['regFund'])) $this->regFund = $fields['regFund'];
		if (isset($fields['regAddress'])) $this->regAddress = $fields['regAddress'];
		if (isset($fields['address'])) $this->address = $fields['address'];
		if (isset($fields['zipcode'])) $this->zipcode = $fields['zipcode'];
		if (isset($fields['mainBrand'])) $this->mainBrand = $fields['mainBrand'];
		if (isset($fields['mainMarket'])) $this->mainMarket = $fields['mainMarket'];
		if (isset($fields['mainBizPlace'])) $this->mainBizPlace = $fields['mainBizPlace'];
		if (isset($fields['mainCustomer'])) $this->mainCustomer = $fields['mainCustomer'];
		if (isset($fields['linkMan'])) $this->linkMan = $fields['linkMan'];
		if (isset($fields['linkManGender'])) $this->linkManGender = $fields['linkManGender'];
		if (isset($fields['position'])) $this->position = $fields['position'];
		if (isset($fields['tel'])) $this->tel = $fields['tel'];
		if (isset($fields['fax'])) $this->fax = $fields['fax'];
		if (isset($fields['mobile'])) $this->mobile = $fields['mobile'];
		if (isset($fields['email'])) $this->email = $fields['email'];
		if (isset($fields['siteUrl'])) $this->siteUrl = $fields['siteUrl'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['firstLetter'])) $this->firstLetter = $fields['firstLetter'];
		if (isset($fields['ifCommend'])) $this->ifCommend = $fields['ifCommend'];
		if (isset($fields['clicked'])) $this->clicked = $fields['clicked'];
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

	public function getCacheSpacename() {
		return $this->cacheSpacename;
	}
	public function setCacheSpacename($cacheSpacename) {
		$this->fields['cacheSpacename'] = $cacheSpacename;
		$this->cacheSpacename = $cacheSpacename;
	}

	public function getCacheMembergroupid() {
		return $this->cacheMembergroupid;
	}
	public function setCacheMembergroupid($cacheMembergroupid) {
		$this->fields['cacheMembergroupid'] = $cacheMembergroupid;
		$this->cacheMembergroupid = $cacheMembergroupid;
	}

	public function getCacheCredits() {
		return $this->cacheCredits;
	}
	public function setCacheCredits($cacheCredits) {
		$this->fields['cacheCredits'] = $cacheCredits;
		$this->cacheCredits = $cacheCredits;
	}

	public function getTopleveldomain() {
		return $this->topleveldomain;
	}
	public function setTopleveldomain($topleveldomain) {
		$this->fields['topleveldomain'] = $topleveldomain;
		$this->topleveldomain = $topleveldomain;
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

	public function getEnglishName() {
		return $this->englishName;
	}
	public function setEnglishName($englishName) {
		$this->fields['englishName'] = $englishName;
		$this->englishName = $englishName;
	}

	public function getAdwords() {
		return $this->adwords;
	}
	public function setAdwords($adwords) {
		$this->fields['adwords'] = $adwords;
		$this->adwords = $adwords;
	}

	public function getKeywords() {
		return $this->keywords;
	}
	public function setKeywords($keywords) {
		$this->fields['keywords'] = $keywords;
		$this->keywords = $keywords;
	}

	public function getBossName() {
		return $this->bossName;
	}
	public function setBossName($bossName) {
		$this->fields['bossName'] = $bossName;
		$this->bossName = $bossName;
	}

	public function getManageType() {
		return $this->manageType;
	}
	public function setManageType($manageType) {
		$this->fields['manageType'] = $manageType;
		$this->manageType = $manageType;
	}

	public function getYearAnnual() {
		return $this->yearAnnual;
	}
	public function setYearAnnual($yearAnnual) {
		$this->fields['yearAnnual'] = $yearAnnual;
		$this->yearAnnual = $yearAnnual;
	}

	public function getProperty() {
		return $this->property;
	}
	public function setProperty($property) {
		$this->fields['property'] = $property;
		$this->property = $property;
	}

	public function getConfigs() {
		return $this->configs;
	}
	public function setConfigs($configs) {
		$this->fields['configs'] = $configs;
		$this->configs = $configs;
	}

	public function getBankFrom() {
		return $this->bankFrom;
	}
	public function setBankFrom($bankFrom) {
		$this->fields['bankFrom'] = $bankFrom;
		$this->bankFrom = $bankFrom;
	}

	public function getBankAccount() {
		return $this->bankAccount;
	}
	public function setBankAccount($bankAccount) {
		$this->fields['bankAccount'] = $bankAccount;
		$this->bankAccount = $bankAccount;
	}

	public function getMainProd() {
		return $this->mainProd;
	}
	public function setMainProd($mainProd) {
		$this->fields['mainProd'] = $mainProd;
		$this->mainProd = $mainProd;
	}

	public function getEmployeeAmount() {
		return $this->employeeAmount;
	}
	public function setEmployeeAmount($employeeAmount) {
		$this->fields['employeeAmount'] = $employeeAmount;
		$this->employeeAmount = $employeeAmount;
	}

	public function getFoundDate() {
		return $this->foundDate;
	}
	public function setFoundDate($foundDate) {
		$this->fields['foundDate'] = $foundDate;
		$this->foundDate = $foundDate;
	}

	public function getRegFund() {
		return $this->regFund;
	}
	public function setRegFund($regFund) {
		$this->fields['regFund'] = $regFund;
		$this->regFund = $regFund;
	}

	public function getRegAddress() {
		return $this->regAddress;
	}
	public function setRegAddress($regAddress) {
		$this->fields['regAddress'] = $regAddress;
		$this->regAddress = $regAddress;
	}

	public function getAddress() {
		return $this->address;
	}
	public function setAddress($address) {
		$this->fields['address'] = $address;
		$this->address = $address;
	}

	public function getZipcode() {
		return $this->zipcode;
	}
	public function setZipcode($zipcode) {
		$this->fields['zipcode'] = $zipcode;
		$this->zipcode = $zipcode;
	}

	public function getMainBrand() {
		return $this->mainBrand;
	}
	public function setMainBrand($mainBrand) {
		$this->fields['mainBrand'] = $mainBrand;
		$this->mainBrand = $mainBrand;
	}

	public function getMainMarket() {
		return $this->mainMarket;
	}
	public function setMainMarket($mainMarket) {
		$this->fields['mainMarket'] = $mainMarket;
		$this->mainMarket = $mainMarket;
	}

	public function getMainBizPlace() {
		return $this->mainBizPlace;
	}
	public function setMainBizPlace($mainBizPlace) {
		$this->fields['mainBizPlace'] = $mainBizPlace;
		$this->mainBizPlace = $mainBizPlace;
	}

	public function getMainCustomer() {
		return $this->mainCustomer;
	}
	public function setMainCustomer($mainCustomer) {
		$this->fields['mainCustomer'] = $mainCustomer;
		$this->mainCustomer = $mainCustomer;
	}

	public function getLinkMan() {
		return $this->linkMan;
	}
	public function setLinkMan($linkMan) {
		$this->fields['linkMan'] = $linkMan;
		$this->linkMan = $linkMan;
	}

	public function getLinkManGender() {
		return $this->linkManGender;
	}
	public function setLinkManGender($linkManGender) {
		$this->fields['linkManGender'] = $linkManGender;
		$this->linkManGender = $linkManGender;
	}

	public function getPosition() {
		return $this->position;
	}
	public function setPosition($position) {
		$this->fields['position'] = $position;
		$this->position = $position;
	}

	public function getTel() {
		return $this->tel;
	}
	public function setTel($tel) {
		$this->fields['tel'] = $tel;
		$this->tel = $tel;
	}

	public function getFax() {
		return $this->fax;
	}
	public function setFax($fax) {
		$this->fields['fax'] = $fax;
		$this->fax = $fax;
	}

	public function getMobile() {
		return $this->mobile;
	}
	public function setMobile($mobile) {
		$this->fields['mobile'] = $mobile;
		$this->mobile = $mobile;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->fields['email'] = $email;
		$this->email = $email;
	}

	public function getSiteUrl() {
		return $this->siteUrl;
	}
	public function setSiteUrl($siteUrl) {
		$this->fields['siteUrl'] = $siteUrl;
		$this->siteUrl = $siteUrl;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getFirstLetter() {
		return $this->firstLetter;
	}
	public function setFirstLetter($firstLetter) {
		$this->fields['firstLetter'] = $firstLetter;
		$this->firstLetter = $firstLetter;
	}

	public function getIfCommend() {
		return $this->ifCommend;
	}
	public function setIfCommend($ifCommend) {
		$this->fields['ifCommend'] = $ifCommend;
		$this->ifCommend = $ifCommend;
	}

	public function getClicked() {
		return $this->clicked;
	}
	public function setClicked($clicked) {
		$this->fields['clicked'] = $clicked;
		$this->clicked = $clicked;
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
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->cacheSpacename.':'.$this->cacheMembergroupid.':'.$this->cacheCredits.':'.$this->topleveldomain.':'.$this->industryId.':'.$this->areaId.':'.$this->typeId.':'.$this->name.':'.$this->description.':'.$this->englishName.':'.$this->adwords.':'.$this->keywords.':'.$this->bossName.':'.$this->manageType.':'.$this->yearAnnual.':'.$this->property.':'.$this->configs.':'.$this->bankFrom.':'.$this->bankAccount.':'.$this->mainProd.':'.$this->employeeAmount.':'.$this->foundDate.':'.$this->regFund.':'.$this->regAddress.':'.$this->address.':'.$this->zipcode.':'.$this->mainBrand.':'.$this->mainMarket.':'.$this->mainBizPlace.':'.$this->mainCustomer.':'.$this->linkMan.':'.$this->linkManGender.':'.$this->position.':'.$this->tel.':'.$this->fax.':'.$this->mobile.':'.$this->email.':'.$this->siteUrl.':'.$this->picture.':'.$this->status.':'.$this->firstLetter.':'.$this->ifCommend.':'.$this->clicked.':'.$this->created.':'.$this->modified;
	}
}
