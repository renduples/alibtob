<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'attachments' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Attachment extends BaseBO
{
	private $fields;
	private $id;
	private $attachmenttypeId;
	private $memberId;
	private $fileName;
	private $attachment;
	private $title;
	private $description;
	private $fileType;
	private $fileSize;
	private $thumb;
	private $remote;
	private $isImage;
	private $status;
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
		if (isset($fields['attachmenttypeId'])) $this->attachmenttypeId = $fields['attachmenttypeId'];
		if (isset($fields['memberId'])) $this->memberId = $fields['memberId'];
		if (isset($fields['fileName'])) $this->fileName = $fields['fileName'];
		if (isset($fields['attachment'])) $this->attachment = $fields['attachment'];
		if (isset($fields['title'])) $this->title = $fields['title'];
		if (isset($fields['description'])) $this->description = $fields['description'];
		if (isset($fields['fileType'])) $this->fileType = $fields['fileType'];
		if (isset($fields['fileSize'])) $this->fileSize = $fields['fileSize'];
		if (isset($fields['thumb'])) $this->thumb = $fields['thumb'];
		if (isset($fields['remote'])) $this->remote = $fields['remote'];
		if (isset($fields['isImage'])) $this->isImage = $fields['isImage'];
		if (isset($fields['status'])) $this->status = $fields['status'];
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

	public function getAttachmenttypeId() {
		return $this->attachmenttypeId;
	}
	public function setAttachmenttypeId($attachmenttypeId) {
		$this->fields['attachmenttypeId'] = $attachmenttypeId;
		$this->attachmenttypeId = $attachmenttypeId;
	}

	public function getMemberId() {
		return $this->memberId;
	}
	public function setMemberId($memberId) {
		$this->fields['memberId'] = $memberId;
		$this->memberId = $memberId;
	}

	public function getFileName() {
		return $this->fileName;
	}
	public function setFileName($fileName) {
		$this->fields['fileName'] = $fileName;
		$this->fileName = $fileName;
	}

	public function getAttachment() {
		return $this->attachment;
	}
	public function setAttachment($attachment) {
		$this->fields['attachment'] = $attachment;
		$this->attachment = $attachment;
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

	public function getFileType() {
		return $this->fileType;
	}
	public function setFileType($fileType) {
		$this->fields['fileType'] = $fileType;
		$this->fileType = $fileType;
	}

	public function getFileSize() {
		return $this->fileSize;
	}
	public function setFileSize($fileSize) {
		$this->fields['fileSize'] = $fileSize;
		$this->fileSize = $fileSize;
	}

	public function getThumb() {
		return $this->thumb;
	}
	public function setThumb($thumb) {
		$this->fields['thumb'] = $thumb;
		$this->thumb = $thumb;
	}

	public function getRemote() {
		return $this->remote;
	}
	public function setRemote($remote) {
		$this->fields['remote'] = $remote;
		$this->remote = $remote;
	}

	public function getIsImage() {
		return $this->isImage;
	}
	public function setIsImage($isImage) {
		$this->fields['isImage'] = $isImage;
		$this->isImage = $isImage;
	}

	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->fields['status'] = $status;
		$this->status = $status;
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
		return ''.':'.$this->id.':'.$this->attachmenttypeId.':'.$this->memberId.':'.$this->fileName.':'.$this->attachment.':'.$this->title.':'.$this->description.':'.$this->fileType.':'.$this->fileSize.':'.$this->thumb.':'.$this->remote.':'.$this->isImage.':'.$this->status.':'.$this->created.':'.$this->modified;
	}
}
