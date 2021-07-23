<?php
namespace Imingxin\TaobaoTopClient\request;

/**
 * TOP API: taobao.baichuan.openaccount.registercode.check request
 *
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class BaichuanOpenaccountRegistercodeCheckRequest
{
	/**
	 * name
	 **/
	private $name;

	private $apiParas = array();

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getApiMethodName()
	{
		return "taobao.baichuan.openaccount.registercode.check";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
