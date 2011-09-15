<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'areas' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Area extends BaseBO
{
	private $fields;
	private $id;
	private $attachmentId;
	private $areatypeId;
	private $childIds;
	private $topParentid;
	private $level;
	private $name;
	private $url;
	private $aliasName;
	private $highlight;
	private $parentId;
	private $displayOrder;
	private $description;
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
		if (isset($fields['attachmentId'])) $this->attachmentId = $fields['attachmentId'];
		if (isset($fields['areatypeId'])) $this->areatypeId = $fields['areatypeId'];
		if (isset($fields['childIds'])) $this->childIds = $fields['childIds'];
		if (isset($fields['topParentid'])) $this->topParentid = $fields['topParentid'];
		if (isset($fields['level'])) $this->level = $fields['level'];
		if (isset($fields['name'])) $this->name = $fields['name'];
		if (isset($fields['url'])) $this->url = $fields['url'];
		if (isset($fields['aliasName'])) $this->aliasName = $fields['aliasName'];
		if (isset($fields['highlight'])) $this->highlight = $fields['highlight'];
		if (isset($fields['parentId'])) $this->parentId = $fields['parentId'];
		if (isset($fields['displayOrder'])) $this->displayOrder = $fields['displayOrder'];
		if (isset($fields['description'])) $this->description = $fields['description'];
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

	public function getAttachmentId() {
		return $this->attachmentId;
	}
	public function setAttachmentId($attachmentId) {
		$this->fields['attachmentId'] = $attachmentId;
		$this->attachmentId = $attachmentId;
	}

	public function getAreatypeId() {
		return $this->areatypeId;
	}
	public function setAreatypeId($areatypeId) {
		$this->fields['areatypeId'] = $areatypeId;
		$this->areatypeId = $areatypeId;
	}

	public function getChildIds() {
		return $this->childIds;
	}
	public function setChildIds($childIds) {
		$this->fields['childIds'] = $childIds;
		$this->childIds = $childIds;
	}

	public function getTopParentid() {
		return $this->topParentid;
	}
	public function setTopParentid($topParentid) {
		$this->fields['topParentid'] = $topParentid;
		$this->topParentid = $topParentid;
	}

	public function getLevel() {
		return $this->level;
	}
	public function setLevel($level) {
		$this->fields['level'] = $level;
		$this->level = $level;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->fields['name'] = $name;
		$this->name = $name;
	}

	public function getUrl() {
		return $this->url;
	}
	public function setUrl($url) {
		$this->fields['url'] = $url;
		$this->url = $url;
	}

	public function getAliasName() {
		return $this->aliasName;
	}
	public function setAliasName($aliasName) {
		$this->fields['aliasName'] = $aliasName;
		$this->aliasName = $aliasName;
	}

	public function getHighlight() {
		return $this->highlight;
	}
	public function setHighlight($highlight) {
		$this->fields['highlight'] = $highlight;
		$this->highlight = $highlight;
	}

	public function getParentId() {
		return $this->parentId;
	}
	public function setParentId($parentId) {
		$this->fields['parentId'] = $parentId;
		$this->parentId = $parentId;
	}

	public function getDisplayOrder() {
		return $this->displayOrder;
	}
	public function setDisplayOrder($displayOrder) {
		$this->fields['displayOrder'] = $displayOrder;
		$this->displayOrder = $displayOrder;
	}

	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->fields['description'] = $description;
		$this->description = $description;
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
		return ''.':'.$this->id.':'.$this->attachmentId.':'.$this->areatypeId.':'.$this->childIds.':'.$this->topParentid.':'.$this->level.':'.$this->name.':'.$this->url.':'.$this->aliasName.':'.$this->highlight.':'.$this->parentId.':'.$this->displayOrder.':'.$this->description.':'.$this->available.':'.$this->created.':'.$this->modified;
	}
}
