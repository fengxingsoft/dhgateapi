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

class DhgateItemSkuListResultInfoItemSkuAttrval
{

/*
 * attrId 	Integer 	必须 	sku属性id 	类目规格对应的类目属性id,自定一个规格默认值为：9999
 */
    private $attrId;
    public function GetAttrId(){
        return $this->attrId ;
    }
/*
 * attrValId 	Integer 	必须 	sku属性值id 	类目规格值对应的类目属性值id,自定一个规格值为从1000向上累加，第一个值的id为1000
 */
    private $attrValId;
    public function GetAttrValId(){
        return $this->attrValId ;
    }
/*
 * sizeSpecType 	Integer 	必须 	规格类型 	1 产品规格,3自定义规格；示例值：3
 */
    private $sizeSpecType;
    public function GetSizeSpecType(){
        return $this->sizeSpecType ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "attrId", $this->stdResult )) {
            $this->attrId = $this->stdResult->{"attrId"};
        }
        if (array_key_exists ( "attrValId", $this->stdResult )) {
            $this->attrValId = $this->stdResult->{"attrValId"};
        }
        if (array_key_exists ( "sizeSpecType", $this->stdResult )) {
            $this->sizeSpecType = $this->stdResult->{"sizeSpecType"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "attrId", $this->arrayResult )) {
            $this->attrId = $arrayResult['attrId'];
        }
        if (array_key_exists ( "attrValId", $this->arrayResult )) {
            $this->attrValId = $arrayResult['attrValId'];
        }
        if (array_key_exists ( "sizeSpecType", $this->arrayResult )) {
            $this->sizeSpecType = $arrayResult['sizeSpecType'];
        }
    }
}