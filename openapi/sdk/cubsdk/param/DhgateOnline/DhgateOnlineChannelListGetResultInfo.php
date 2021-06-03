<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 16:44
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateOnlineChannelListGetResultInfo{
/*
 * channelId 	String 	必须 	渠道ID 	渠道ID
 */
    private $channelId;
    public function GetChannelId(){
        return $this->channelId;
    }
/*
 * collectType 	String 	必须 	交运方式 	01:只支持自送 10:只支持上门揽收 11:支持自送、上门揽收
 */
    private $collectType;
    public function GetCollectType(){
        return $this->collectType;
    }
/*
 * description 	String 	可选 	渠道描述 	渠道描述
 */
    private $description;
    public function GetDescription(){
        return $this->description;
    }
/*
 * gateCode 	String 	必须 	DHGate平台物流 	DHGate平台物流
 */
    private $gateCode;
    public function GetGateCode(){
        return $this->gateCode;
    }
/*
 * name 	String 	必须 	渠道名称 	渠道名称
 */
    private $name;
    public function GetName(){
        return $this->name;
    }
/*
 * state 	String 	必须 	状态 	1:正常 2:已关闭
 */
    private $state;
    public function GetState(){
        return $this->state;
    }
/*
 * warehouses 	WarehouseData[][] 	可选 	仓库信息 	仓库信息
 */
    private $warehouses;
    public function GetWarehouses(){
        return $this->warehouses;
    }

    private $stdResult;
    public function setStdResult($stdResult) {

        $this->stdResult = $stdResult;
        if (array_key_exists ( "channelId", $this->stdResult )) {
            $this->channelId = $this->stdResult->{"channelId"};
        }
        if (array_key_exists ( "collectType", $this->stdResult )) {
            $this->collectType = $this->stdResult->{"collectType"};
        }
        if (array_key_exists ( "description", $this->stdResult )) {
            $this->description = $this->stdResult->{"description"};
        }
        if (array_key_exists ( "gateCode", $this->stdResult )) {
            $this->gateCode = $this->stdResult->{"gateCode"};
        }
        if (array_key_exists ( "name", $this->stdResult )) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists ( "state", $this->stdResult )) {
            $this->state = $this->stdResult->{"state"};
        }
        if (array_key_exists ( "warehouses", $this->stdResult )) {
            $this->warehouses = $this->stdResult->{"warehouses"};
        }
        if (array_key_exists ( "warehouses", $this->stdResult )) {
            $warehousesResult=$this->stdResult->{"warehouses"};
            $object = json_decode ( json_encode ( $warehousesResult), true );
            $this->warehouses = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateOnlineChannelListGetResultInfo=new DhgateOnlineChannelListGetResultInfoDetail();
                $DhgateOnlineChannelListGetResultInfo->setArrayResult($arrayobject );
                $this->warehouses[$i] = $DhgateOnlineChannelListGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "channelId", $this->arrayResult )) {
            $this->channelId = $arrayResult['channelId'];
        }
        if (array_key_exists ( "collectType", $this->arrayResult )) {
            $this->collectType = $arrayResult['collectType'];
        }
        if (array_key_exists ( "description", $this->arrayResult )) {
            $this->description = $arrayResult['description'];
        }
        if (array_key_exists ( "gateCode", $this->arrayResult )) {
            $this->gateCode = $arrayResult['gateCode'];
        }
        if (array_key_exists ( "name", $this->arrayResult )) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists ( "state", $this->arrayResult )) {
            $this->state = $arrayResult['state'];
        }
        if (array_key_exists ( "warehouses", $this->arrayResult )) {
            $this->warehouses = $arrayResult['warehouses'];
        }
    }
}