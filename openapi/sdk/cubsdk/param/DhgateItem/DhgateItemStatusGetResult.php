<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemStatusGetResult
{

/*
 * itemCode 	Long 	必须 	产品编码 	示例值：202325055
 */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode ;
    }
/*
 * itemId 	String 	必须 	产品ID 	示例值：ff8080814790e72601479ecd91fb0036
 */
    private $itemId;
    public function GetItemId(){
        return $this->itemId ;
    }
/*
 * itemName 	String 	必须 	产品名称 	示例值：deng
 */
    private $itemName;
    public function GetItemName(){
        return $this->itemName ;
    }
/*
 * state 	String 	必须 	产品状态 	100000=未定义;100100=上架产品;100200=待审核产品;100300=审核未通过产品;100400=下架产品;100500=品牌商投诉产品;100600=疑似侵权产品;示例值：100100
 */
    private $state;
    public function GetState(){
        return $this->state ;
    }
/*
 * withDrawalType 	Integer 	必须 	自主下架操作状态;1=自主下架操作 ,2=有效期下架自动程序 ,3=强制下架问题产品 ,5=备货售完下架 	示例值：1
 */
    private $withDrawalType;
    public function GetWithDrawalType(){
        return $this->withDrawalType ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "itemCode", $this->stdResult )) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
        if (array_key_exists ( "itemId", $this->stdResult )) {
            $this->itemId = $this->stdResult->{"itemId"};
        }
        if (array_key_exists ( "itemName", $this->stdResult )) {
            $this->itemName = $this->stdResult->{"itemName"};
        }
        if (array_key_exists ( "state", $this->stdResult )) {
            $this->state = $this->stdResult->{"state"};
        }
        if (array_key_exists ( "withDrawalType", $this->stdResult )) {
            $this->withDrawalType = $this->stdResult->{"withDrawalType"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "itemCode", $this->arrayResult )) {
            $this->itemCode = $arrayResult['itemCode'];
        }
        if (array_key_exists ( "itemId", $this->arrayResult )) {
            $this->itemId = $arrayResult['itemId'];
        }
        if (array_key_exists ( "itemName", $this->arrayResult )) {
            $this->itemName = $arrayResult['itemName'];
        }
        if (array_key_exists ( "state", $this->arrayResult )) {
            $this->state = $arrayResult['state'];
        }
        if (array_key_exists ( "withDrawalType", $this->arrayResult )) {
            $this->withDrawalType = $arrayResult['withDrawalType'];
        }
    }
}