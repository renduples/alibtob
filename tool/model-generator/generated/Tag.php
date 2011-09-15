<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'tags' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Tag extends BaseBO
{
	private $fields;
	private $id;
	private $memberId;
	private $name;
	private $numbers;
	private $closed;
	private $flag;
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
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['numbers'])) $this->numbers = $fields['numbers'];
		if (isset($fields['closed'])) $this->closed = $fields['closed'];
		if (isset($fields['flag'])) $this->flag = $fields['flag'];
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

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getNumbers() {
		return $this->numbers;
	}
	public function setNumbers($numbers) {
		$this->fields['numbers'] = $numbers;
		$this->numbers = $numbers;
	}

	public function getClosed() {
		return $this->closed;
	}
	public function setClosed($closed) {
		$this->fields['closed'] = $closed;
		$this->closed = $closed;
	}

	public function getFlag() {
		return $this->flag;
	}
	public function setFlag($flag) {
		$this->fields['flag'] = $flag;
		$this->flag = $flag;
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
		return ''.':'.$this->id.':'.$this->memberId.':'.$this->name.':'.$this->numbers.':'.$this->closed.':'.$this->flag.':'.$this->created.':'.$this->modified;
	}
}
