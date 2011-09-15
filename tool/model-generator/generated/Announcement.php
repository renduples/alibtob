<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'announcements' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Announcement extends BaseBO
{
	private $fields;
	private $id;
	private $announcetypeId;
	private $subject;
	private $message;
	private $displayOrder;
	private $displayExpiration;
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
		if (isset($fields['announcetypeId'])) $this->announcetypeId = $fields['announcetypeId'];
		if (isset($fields['subject'])) $this->subject = $fields['subject'];
		if (isset($fields['message'])) $this->message = $fields['message'];
		if (isset($fields['displayOrder'])) $this->displayOrder = $fields['displayOrder'];
		if (isset($fields['displayExpiration'])) $this->displayExpiration = $fields['displayExpiration'];
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

	public function getAnnouncetypeId() {
		return $this->announcetypeId;
	}
	public function setAnnouncetypeId($announcetypeId) {
		$this->fields['announcetypeId'] = $announcetypeId;
		$this->announcetypeId = $announcetypeId;
	}

	public function getSubject() {
		return $this->subject;
	}
	public function setSubject($subject) {
		$this->fields['subject'] = $subject;
		$this->subject = $subject;
	}

	public function getMessage() {
		return $this->message;
	}
	public function setMessage($message) {
		$this->fields['message'] = $message;
		$this->message = $message;
	}

	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	public function setDisplayOrder($displayOrder) {
		$this->fields['displayOrder'] = $displayOrder;
		$this->displayOrder = $displayOrder;
	}

	public function getDisplayExpiration() {
		return $this->displayExpiration;
	}
	public function setDisplayExpiration($displayExpiration) {
		$this->fields['displayExpiration'] = $displayExpiration;
		$this->displayExpiration = $displayExpiration;
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
		return ''.':'.$this->id.':'.$this->announcetypeId.':'.$this->subject.':'.$this->message.':'.$this->displayOrder.':'.$this->displayExpiration.':'.$this->created.':'.$this->modified;
	}
}
