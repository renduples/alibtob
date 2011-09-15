<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'plugins' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Plugin extends BaseBO
{
	private $fields;
	private $id;
	private $name;
	private $title;
	private $description;
	private $copyright;
	private $version;
	private $pluginvar;
	private $available;
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
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['copyright'])) $this->copyright = $fields['copyright'];
		if (isset($fields['version'])) $this->version = $fields['version'];
		if (isset($fields['pluginvar'])) $this->pluginvar = $fields['pluginvar'];
		if (isset($fields['available'])) $this->available = $fields['available'];
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

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
	}

	public function getCopyright() {
		return $this->copyright;
	}
	public function setCopyright($copyright) {
		$this->fields['copyright'] = $copyright;
		$this->copyright = $copyright;
	}

	public function getVersion() {
		return $this->version;
	}
	public function setVersion($version) {
		$this->fields['version'] = $version;
		$this->version = $version;
	}

	public function getPluginvar() {
		return $this->pluginvar;
	}
	public function setPluginvar($pluginvar) {
		$this->fields['pluginvar'] = $pluginvar;
		$this->pluginvar = $pluginvar;
	}

	public function getAvailable() {
		return $this->available;
	}
	public function setAvailable($available) {
		$this->fields['available'] = $available;
		$this->available = $available;
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
		return ''.':'.$this->id.':'.$this->name.':'.$this->title.':'.$this->description.':'.$this->copyright.':'.$this->version.':'.$this->pluginvar.':'.$this->available.':'.$this->created.':'.$this->modified;
	}
}
