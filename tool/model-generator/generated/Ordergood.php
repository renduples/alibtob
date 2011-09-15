<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/base/BaseBO.php';

/**
 * Auto generated Model Class represents table 'ordergoods' 
 * @author: Thin PHP Framework
 * @date: 2011-08-28 20:13
 */
class Ordergood extends BaseBO
{
	private $fields;
	private $goodsId;
	private $orderId;
	private $tradeNo;
	private $amount;


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
		if (isset($fields['goodsId'])) $this->goodsId = $fields['goodsId'];
		if (isset($fields['orderId'])) $this->orderId = $fields['orderId'];
		if (isset($fields['tradeNo'])) $this->tradeNo = $fields['tradeNo'];
		if (isset($fields['amount'])) $this->amount = $fields['amount'];
	
	}

	public function getFields() {
		return $this->fields;
	}

	
	public function getGoodsId() {
		return $this->goodsId;
	}
	public function setGoodsId($goodsId) {
		$this->fields['goodsId'] = $goodsId;
		$this->goodsId = $goodsId;
	}

	public function getOrderId() {
		return $this->orderId;
	}
	public function setOrderId($orderId) {
		$this->fields['orderId'] = $orderId;
		$this->orderId = $orderId;
	}

	public function getTradeNo() {
		return $this->tradeNo;
	}
	public function setTradeNo($tradeNo) {
		$this->fields['tradeNo'] = $tradeNo;
		$this->tradeNo = $tradeNo;
	}

	public function getAmount() {
		return $this->amount;
	}
	public function setAmount($amount) {
		$this->fields['amount'] = $amount;
		$this->amount = $amount;
	}



	/**
	 * Return value of this object in a short string for debug.
	 */
	public function toStr()
	{
		return ''.':'.$this->goodsId.':'.$this->orderId.':'.$this->tradeNo.':'.$this->amount;
	}
}
