<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'dicts' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Dict extends BaseBO
{
	private $fields;
	private $id;
	private $dicttypeId;
	private $extendDicttypeid;
	private $word;
	private $wordName;
	private $digest;
	private $content;
	private $picture;
	private $refer;
	private $hits;
	private $closed;
	private $ifCommend;
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
		if (isset($fields['dicttypeId'])) $this->dicttypeId = $fields['dicttypeId'];
		if (isset($fields['extendDicttypeid'])) $this->extendDicttypeid = $fields['extendDicttypeid'];
		if (isset($fields['word'])) $this->word = $fields['word'];
		if (isset($fields['wordName'])) $this->wordName = $fields['wordName'];
		if (isset($fields['digest'])) $this->digest = $fields['digest'];
		if (isset($fields['content'])) $this->content = $fields['content'];
		if (isset($fields['picture'])) $this->picture = $fields['picture'];
		if (isset($fields['refer'])) $this->refer = $fields['refer'];
		if (isset($fields['hits'])) $this->hits = $fields['hits'];
		if (isset($fields['closed'])) $this->closed = $fields['closed'];
		if (isset($fields['ifCommend'])) $this->ifCommend = $fields['ifCommend'];
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

	public function getDicttypeId() {
		return $this->dicttypeId;
	}
	public function setDicttypeId($dicttypeId) {
		$this->fields['dicttypeId'] = $dicttypeId;
		$this->dicttypeId = $dicttypeId;
	}

	public function getExtendDicttypeid() {
		return $this->extendDicttypeid;
	}
	public function setExtendDicttypeid($extendDicttypeid) {
		$this->fields['extendDicttypeid'] = $extendDicttypeid;
		$this->extendDicttypeid = $extendDicttypeid;
	}

	public function getWord() {
		return $this->word;
	}
	public function setWord($word) {
		$this->fields['word'] = $word;
		$this->word = $word;
	}

	public function getWordName() {
		return $this->wordName;
	}
	public function setWordName($wordName) {
		$this->fields['wordName'] = $wordName;
		$this->wordName = $wordName;
	}

	public function getDigest() {
		return $this->digest;
	}
	public function setDigest($digest) {
		$this->fields['digest'] = $digest;
		$this->digest = $digest;
	}

	public function getContent() {
		return $this->content;
	}
	public function setContent($content) {
		$this->fields['content'] = $content;
		$this->content = $content;
	}

	public function getPicture() {
		return $this->picture;
	}
	public function setPicture($picture) {
		$this->fields['picture'] = $picture;
		$this->picture = $picture;
	}

	public function getRefer() {
		return $this->refer;
	}
	public function setRefer($refer) {
		$this->fields['refer'] = $refer;
		$this->refer = $refer;
	}

	public function getHits() {
		return $this->hits;
	}
	public function setHits($hits) {
		$this->fields['hits'] = $hits;
		$this->hits = $hits;
	}

	public function getClosed() {
		return $this->closed;
	}
	public function setClosed($closed) {
		$this->fields['closed'] = $closed;
		$this->closed = $closed;
	}

	public function getIfCommend() {
		return $this->ifCommend;
	}
	public function setIfCommend($ifCommend) {
		$this->fields['ifCommend'] = $ifCommend;
		$this->ifCommend = $ifCommend;
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
		return ''.':'.$this->id.':'.$this->dicttypeId.':'.$this->extendDicttypeid.':'.$this->word.':'.$this->wordName.':'.$this->digest.':'.$this->content.':'.$this->picture.':'.$this->refer.':'.$this->hits.':'.$this->closed.':'.$this->ifCommend.':'.$this->created.':'.$this->modified;
	}
}
