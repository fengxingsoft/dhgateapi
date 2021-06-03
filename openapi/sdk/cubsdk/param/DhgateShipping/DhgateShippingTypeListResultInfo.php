<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:53
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateShippingTypeListResultInfo
{
/*
 * description 	String 	必须 	运输方式描述 	运输方式描述
 */
    private $description;
    public function GetDescription(){
        return $this->description ;
    }

/*
 * name 	String 	必须 	运输方式名称 	运输方式名称
 */
    private $name;
    public function GetName(){
        return $this->name ;
    }

/*
 * shippingTypeId 	String 	必须 	运输方式主键ID 	运输方式主键ID
 */
    private $shippingTypeId;
    public function GetShippingTypeId(){
        return $this->shippingTypeId ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "description", $this->stdResult )) {
            $this->description = $this->stdResult->{"description"};
        }
        if (array_key_exists ( "name", $this->stdResult )) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists ( "shippingTypeId", $this->stdResult )) {
            $this->shippingTypeId = $this->stdResult->{"shippingTypeId"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "description", $this->arrayResult )) {
            $this->description = $arrayResult['description'];
        }
        if (array_key_exists ( "name", $this->arrayResult )) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists ( "shippingTypeId", $this->arrayResult )) {
            $this->shippingTypeId = $arrayResult['shippingTypeId'];
        }
    }
}
