<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'memberfields' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Memberfield extends BaseBO
{
	private $fields;
	private $memberId;
	private $todayLogins;
	private $totalLogins;
	private $areaId;
	private $firstName;
	private $lastName;
	private $gender;
	private $tel;
	private $fax;
	private $mobile;
	private $qq;
	private $msn;
	private $icq;
	private $yahoo;
	private $skype;
	private $address;
	private $zipcode;
	private $siteUrl;
	private $question;
	private $answer;
	private $regIp;


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
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['todayLogins'])) $this->todayLogins = $fields['todayLogins'];
		if (isset($fields['totalLogins'])) $this->totalLogins = $fields['totalLogins'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['firstName'])) $this->firstName = $fields['firstName'];
		if (isset($fields['lastName'])) $this->lastName = $fields['lastName'];
		if (isset($fields['gender'])) $this->gender = $fields['gender'];
		if (isset($fields['tel'])) $this->tel = $fields['tel'];
		if (isset($fields['fax'])) $this->fax = $fields['fax'];
		if (isset($fields['mobile'])) $this->mobile = $fields['mobile'];
		if (isset($fields['qq'])) $this->qq = $fields['qq'];
		if (isset($fields['msn'])) $this->msn = $fields['msn'];
		if (isset($fields['icq'])) $this->icq = $fields['icq'];
		if (isset($fields['yahoo'])) $this->yahoo = $fields['yahoo'];
		if (isset($fields['skype'])) $this->skype = $fields['skype'];
		if (isset($fields['address'])) $this->address = $fields['address'];
		if (isset($fields['zipcode'])) $this->zipcode = $fields['zipcode'];
		if (isset($fields['siteUrl'])) $this->siteUrl = $fields['siteUrl'];
		if (isset($fields['question'])) $this->question = $fields['question'];
		if (isset($fields['answer'])) $this->answer = $fields['answer'];
		if (isset($fields['regIp'])) $this->regIp = $fields['regIp'];
	
	}

	public function getFields() {
		return $this->fields;
	}

	
	public function getMemberId() {
		return $this->memberId;
	}
	public function setMemberId($memberId) {
		$this->fields['memberId'] = $memberId;
		$this->memberId = $memberId;
	}

	public function getTodayLogins() {
		return $this->todayLogins;
	}
	public function setTodayLogins($todayLogins) {
		$this->fields['todayLogins'] = $todayLogins;
		$this->todayLogins = $todayLogins;
	}

	public function getTotalLogins() {
		return $this->totalLogins;
	}
	public function setTotalLogins($totalLogins) {
		$this->fields['totalLogins'] = $totalLogins;
		$this->totalLogins = $totalLogins;
	}

	public function getAreaId() {
		return $this->areaId;
	}
	public function setAreaId($areaId) {
		$this->fields['areaId'] = $areaId;
		$this->areaId = $areaId;
	}

	public function getFirstName() {
		return $this->firstName;
	}
	public function setFirstName($firstName) {
		$this->fields['firstName'] = $firstName;
		$this->firstName = $firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}
	public function setLastName($lastName) {
		$this->fields['lastName'] = $lastName;
		$this->lastName = $lastName;
	}

	public function getGender() {
		return $this->gender;
	}
	public function setGender($gender) {
		$this->fields['gender'] = $gender;
		$this->gender = $gender;
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

	public function getQq() {
		return $this->qq;
	}
	public function setQq($qq) {
		$this->fields['qq'] = $qq;
		$this->qq = $qq;
	}

	public function getMsn() {
		return $this->msn;
	}
	public function setMsn($msn) {
		$this->fields['msn'] = $msn;
		$this->msn = $msn;
	}

	public function getIcq() {
		return $this->icq;
	}
	public function setIcq($icq) {
		$this->fields['icq'] = $icq;
		$this->icq = $icq;
	}

	public function getYahoo() {
		return $this->yahoo;
	}
	public function setYahoo($yahoo) {
		$this->fields['yahoo'] = $yahoo;
		$this->yahoo = $yahoo;
	}

	public function getSkype() {
		return $this->skype;
	}
	public function setSkype($skype) {
		$this->fields['skype'] = $skype;
		$this->skype = $skype;
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

	public function getSiteUrl() {
		return $this->siteUrl;
	}
	public function setSiteUrl($siteUrl) {
		$this->fields['siteUrl'] = $siteUrl;
		$this->siteUrl = $siteUrl;
	}

	public function getQuestion() {
		return $this->question;
	}
	public function setQuestion($question) {
		$this->fields['question'] = $question;
		$this->question = $question;
	}

	public function getAnswer() {
		return $this->answer;
	}
	public function setAnswer($answer) {
		$this->fields['answer'] = $answer;
		$this->answer = $answer;
	}

	public function getRegIp() {
		return $this->regIp;
	}
	public function setRegIp($regIp) {
		$this->fields['regIp'] = $regIp;
		$this->regIp = $regIp;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->memberId.':'.$this->todayLogins.':'.$this->totalLogins.':'.$this->areaId.':'.$this->firstName.':'.$this->lastName.':'.$this->gender.':'.$this->tel.':'.$this->fax.':'.$this->mobile.':'.$this->qq.':'.$this->msn.':'.$this->icq.':'.$this->yahoo.':'.$this->skype.':'.$this->address.':'.$this->zipcode.':'.$this->siteUrl.':'.$this->question.':'.$this->answer.':'.$this->regIp;
	}
}
