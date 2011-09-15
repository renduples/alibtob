<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'banned' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Banned extends BaseBO
{
	private $fields;
	private $id;
	private $ip1;
	private $ip2;
	private $ip3;
	private $ip4;
	private $expiration;
	private $created;


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
		if (isset($fields['ip1'])) $this->ip1 = $fields['ip1'];
		if (isset($fields['ip2'])) $this->ip2 = $fields['ip2'];
		if (isset($fields['ip3'])) $this->ip3 = $fields['ip3'];
		if (isset($fields['ip4'])) $this->ip4 = $fields['ip4'];
		if (isset($fields['expiration'])) $this->expiration = $fields['expiration'];
		if (isset($fields['created'])) $this->created = $fields['created'];
	
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

	public function getIp1() {
		return $this->ip1;
	}
	public function setIp1($ip1) {
		$this->fields['ip1'] = $ip1;
		$this->ip1 = $ip1;
	}

	public function getIp2() {
		return $this->ip2;
	}
	public function setIp2($ip2) {
		$this->fields['ip2'] = $ip2;
		$this->ip2 = $ip2;
	}

	public function getIp3() {
		return $this->ip3;
	}
	public function setIp3($ip3) {
		$this->fields['ip3'] = $ip3;
		$this->ip3 = $ip3;
	}

	public function getIp4() {
		return $this->ip4;
	}
	public function setIp4($ip4) {
		$this->fields['ip4'] = $ip4;
		$this->ip4 = $ip4;
	}

	public function getExpiration() {
		return $this->expiration;
	}
	public function setExpiration($expiration) {
		$this->fields['expiration'] = $expiration;
		$this->expiration = $expiration;
	}

	public function getCreated() {
		return $this->created;
	}
	public function setCreated($created) {
		$this->fields['created'] = $created;
		$this->created = $created;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->id.':'.$this->ip1.':'.$this->ip2.':'.$this->ip3.':'.$this->ip4.':'.$this->expiration.':'.$this->created;
	}
}
