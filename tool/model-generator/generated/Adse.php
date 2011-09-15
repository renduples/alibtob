<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'adses' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Adse extends BaseBO
{
	private $fields;
	private $id;
	private $adzoneId;
	private $title;
	private $description;
	private $isImage;
	private $sourceName;
	private $sourceType;
	private $sourceUrl;
	private $targetUrl;
	private $width;
	private $height;
	private $altWords;
	private $startDate;
	private $endDate;
	private $priority;
	private $clicked;
	private $target;
	private $seq;
	private $state;
	private $status;
	private $pictureReplace;
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
		if (isset($fields['adzoneId'])) $this->adzoneId = $fields['adzoneId'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['isImage'])) $this->isImage = $fields['isImage'];
		if (isset($fields['sourceName'])) $this->sourceName = $fields['sourceName'];
		if (isset($fields['sourceType'])) $this->sourceType = $fields['sourceType'];
		if (isset($fields['sourceUrl'])) $this->sourceUrl = $fields['sourceUrl'];
		if (isset($fields['targetUrl'])) $this->targetUrl = $fields['targetUrl'];
		if (isset($fields['width'])) $this->width = $fields['width'];
		if (isset($fields['height'])) $this->height = $fields['height'];
		if (isset($fields['altWords'])) $this->altWords = $fields['altWords'];
		if (isset($fields['startDate'])) $this->startDate = $fields['startDate'];
		if (isset($fields['endDate'])) $this->endDate = $fields['endDate'];
		if (isset($fields['priority'])) $this->priority = $fields['priority'];
		if (isset($fields['clicked'])) $this->clicked = $fields['clicked'];
		if (isset($fields['target'])) $this->target = $fields['target'];
		if (isset($fields['seq'])) $this->seq = $fields['seq'];
		if (isset($fields['state'])) $this->state = $fields['state'];
		if (isset($fields['status'])) $this->status = $fields['status'];
		if (isset($fields['pictureReplace'])) $this->pictureReplace = $fields['pictureReplace'];
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

	public function getAdzoneId() {
		return $this->adzoneId;
	}
	public function setAdzoneId($adzoneId) {
		$this->fields['adzoneId'] = $adzoneId;
		$this->adzoneId = $adzoneId;
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

	public function getIsImage() {
		return $this->isImage;
	}
	public function setIsImage($isImage) {
		$this->fields['isImage'] = $isImage;
		$this->isImage = $isImage;
	}

	public function getSourceName() {
		return $this->sourceName;
	}
	public function setSourceName($sourceName) {
		$this->fields['sourceName'] = $sourceName;
		$this->sourceName = $sourceName;
	}

	public function getSourceType() {
		return $this->sourceType;
	}
	public function setSourceType($sourceType) {
		$this->fields['sourceType'] = $sourceType;
		$this->sourceType = $sourceType;
	}

	public function getSourceUrl() {
		return $this->sourceUrl;
	}
	public function setSourceUrl($sourceUrl) {
		$this->fields['sourceUrl'] = $sourceUrl;
		$this->sourceUrl = $sourceUrl;
	}

	public function getTargetUrl() {
		return $this->targetUrl;
	}
	public function setTargetUrl($targetUrl) {
		$this->fields['targetUrl'] = $targetUrl;
		$this->targetUrl = $targetUrl;
	}

	public function getWidth() {
		return $this->width;
	}
	public function setWidth($width) {
		$this->fields['width'] = $width;
		$this->width = $width;
	}

	public function getHeight() {
		return $this->height;
	}
	public function setHeight($height) {
		$this->fields['height'] = $height;
		$this->height = $height;
	}

	public function getAltWords() {
		return $this->altWords;
	}
	public function setAltWords($altWords) {
		$this->fields['altWords'] = $altWords;
		$this->altWords = $altWords;
	}

	public function getStartDate() {
		return $this->startDate;
	}
	public function setStartDate($startDate) {
		$this->fields['startDate'] = $startDate;
		$this->startDate = $startDate;
	}

	public function getEndDate() {
		return $this->endDate;
	}
	public function setEndDate($endDate) {
		$this->fields['endDate'] = $endDate;
		$this->endDate = $endDate;
	}

	public function getPriority() {
		return $this->priority;
	}
	public function setPriority($priority) {
		$this->fields['priority'] = $priority;
		$this->priority = $priority;
	}

	public function getClicked() {
		return $this->clicked;
	}
	public function setClicked($clicked) {
		$this->fields['clicked'] = $clicked;
		$this->clicked = $clicked;
	}

	public function getTarget() {
		return $this->target;
	}
	public function setTarget($target) {
		$this->fields['target'] = $target;
		$this->target = $target;
	}

	public function getSeq() {
		return $this->seq;
	}
	public function setSeq($seq) {
		$this->fields['seq'] = $seq;
		$this->seq = $seq;
	}

	public function getState() {
		return $this->state;
	}
	public function setState($state) {
		$this->fields['state'] = $state;
		$this->state = $state;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
	}

	public function getPictureReplace() {
		return $this->pictureReplace;
	}
	public function setPictureReplace($pictureReplace) {
		$this->fields['pictureReplace'] = $pictureReplace;
		$this->pictureReplace = $pictureReplace;
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
		return ''.':'.$this->id.':'.$this->adzoneId.':'.$this->title.':'.$this->description.':'.$this->isImage.':'.$this->sourceName.':'.$this->sourceType.':'.$this->sourceUrl.':'.$this->targetUrl.':'.$this->width.':'.$this->height.':'.$this->altWords.':'.$this->startDate.':'.$this->endDate.':'.$this->priority.':'.$this->clicked.':'.$this->target.':'.$this->seq.':'.$this->state.':'.$this->status.':'.$this->pictureReplace.':'.$this->created.':'.$this->modified;
	}
}
