<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'newses' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Newse extends BaseBO
{
	private $fields;
	private $id;
	private $typeId;
	private $type;
	private $industryId;
	private $areaId;
	private $title;
	private $content;
	private $source;
	private $picture;
	private $ifFocus;
	private $ifCommend;
	private $highlight;
	private $clicked;
	private $status;
	private $flag;
	private $requireMembertype;
	private $tagIds;
	private $created;
	private $createTime;
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
		if (isset($fields['typeId'])) $this->typeId = $fields['typeId'];
		if (isset($fields['type'])) $this->type = $fields['type'];
		if (isset($fields['industryId'])) $this->industryId = $fields['industryId'];
		if (isset($fields['areaId'])) $this->areaId = $fields['areaId'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['source'])) $this->source = $fields['source'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['ifFocus'])) $this->ifFocus = $fields['ifFocus'];
		if (isset($fields['ifCommend'])) $this->ifCommend = $fields['ifCommend'];
		if (isset($fields['highlight'])) $this->highlight = $fields['highlight'];
		if (isset($fields['clicked'])) $this->clicked = $fields['clicked'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['flag'])) $this->flag = $fields['flag'];
		if (isset($fields['requireMembertype'])) $this->requireMembertype = $fields['requireMembertype'];
		if (isset($fields['tagIds'])) $this->tagIds = $fields['tagIds'];
		if (isset($fields['created'])) $this->created = $fields['created'];
		if (isset($fields['createTime'])) $this->createTime = $fields['createTime'];
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

	public function getTypeId() {
		return $this->typeId;
	}
	public function setTypeId($typeId) {
		$this->fields['typeId'] = $typeId;
		$this->typeId = $typeId;
	}

	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->fields['type'] = $type;
		$this->type = $type;
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

	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->fields['title'] = $title;
		$this->title = $title;
	}

	public function getContent() {
		return $this->content;
	}
	public function setContent($content) {
		$this->fields['content'] = $content;
		$this->content = $content;
	}

	public function getSource() {
		return $this->source;
	}
	public function setSource($source) {
		$this->fields['source'] = $source;
		$this->source = $source;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getIfFocus() {
		return $this->ifFocus;
	}
	public function setIfFocus($ifFocus) {
		$this->fields['ifFocus'] = $ifFocus;
		$this->ifFocus = $ifFocus;
	}

	public function getIfCommend() {
		return $this->ifCommend;
	}
	public function setIfCommend($ifCommend) {
		$this->fields['ifCommend'] = $ifCommend;
		$this->ifCommend = $ifCommend;
	}

	public function getHighlight() {
		return $this->highlight;
	}
	public function setHighlight($highlight) {
		$this->fields['highlight'] = $highlight;
		$this->highlight = $highlight;
	}

	public function getClicked() {
		return $this->clicked;
	}
	public function setClicked($clicked) {
		$this->fields['clicked'] = $clicked;
		$this->clicked = $clicked;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getFlag() {
		return $this->flag;
	}
	public function setFlag($flag) {
		$this->fields['flag'] = $flag;
		$this->flag = $flag;
	}

	public function getRequireMembertype() {
		return $this->requireMembertype;
	}
	public function setRequireMembertype($requireMembertype) {
		$this->fields['requireMembertype'] = $requireMembertype;
		$this->requireMembertype = $requireMembertype;
	}

	public function getTagIds() {
		return $this->tagIds;
	}
	public function setTagIds($tagIds) {
		$this->fields['tagIds'] = $tagIds;
		$this->tagIds = $tagIds;
	}

	public function getCreated() {
		return $this->created;
	}
	public function setCreated($created) {
		$this->fields['created'] = $created;
		$this->created = $created;
	}

	public function getCreateTime() {
		return $this->createTime;
	}
	public function setCreateTime($createTime) {
		$this->fields['createTime'] = $createTime;
		$this->createTime = $createTime;
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
		return ''.':'.$this->id.':'.$this->typeId.':'.$this->type.':'.$this->industryId.':'.$this->areaId.':'.$this->title.':'.$this->content.':'.$this->source.':'.$this->picture.':'.$this->ifFocus.':'.$this->ifCommend.':'.$this->highlight.':'.$this->clicked.':'.$this->status.':'.$this->flag.':'.$this->requireMembertype.':'.$this->tagIds.':'.$this->created.':'.$this->createTime.':'.$this->modified;
	}
}
