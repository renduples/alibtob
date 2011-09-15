<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'albums' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Album extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $attachmentId;
	private $typeId;


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
		if (isset($fields['attachmentId'])) $this->attachmentId = $fields['attachmentId'];
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
	
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

	public function getAttachmentId() {
		return $this->attachmentId;
	}
	public function setAttachmentId($attachmentId) {
		$this->fields['attachmentId'] = $attachmentId;
		$this->attachmentId = $attachmentId;
	}

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->attachmentId.':'.$this->typeId;
	}
}
