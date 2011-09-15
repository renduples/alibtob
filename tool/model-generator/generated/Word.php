<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'words' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Word extends BaseBO
{
	private $fields;
	private $id;
	private $title;
	private $replaceTo;
	private $expiration;


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
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['replaceTo'])) $this->replaceTo = $fields['replaceTo'];
		if (isset($fields['expiration'])) $this->expiration = $fields['expiration'];
	
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

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getReplaceTo() {
		return $this->replaceTo;
	}
	public function setReplaceTo($replaceTo) {
		$this->fields['replaceTo'] = $replaceTo;
		$this->replaceTo = $replaceTo;
	}

	public function getExpiration() {
		return $this->expiration;
	}
	public function setExpiration($expiration) {
		$this->fields['expiration'] = $expiration;
		$this->expiration = $expiration;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->title.':'.$this->replaceTo.':'.$this->expiration;
	}
}
