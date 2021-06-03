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

class DhgateItemGetResultInfoitemAttrGroupListDetail
{
/*
 * attrId 	Integer 	必须 	属性Id 	属性Id
 */
    private $attrId;
    public function GetAttrId(){
        return $this->attrId ;
    }
/*
 * attrName 	String 	必须 	兼容性属性英文名称 	兼容性属性英文名称
 */
    private $attrName;
    public function GetAttrName(){
        return $this->attrName ;
    }
/*
 * attrNameCn 	String 	必须 	兼容性属性中文名称 	兼容性属性中文名称
 */
    private $attrNameCn;
    public function GetAttrNameCn(){
        return $this->attrNameCn ;
    }
/*
 * attrValId 	Integer 	必须 	属性值id 	属性值id
 */
    private $attrValId;
    public function GetAttrValId(){
        return $this->attrValId ;
    }
/*
 * lineAttrvalName 	String 	必须 	兼容性属性值英文名称 	兼容性属性值英文名称
 */
    private $lineAttrvalName;
    public function GetLineAttrvalName(){
        return $this->lineAttrvalName ;
    }
/*
 * lineAttrvalNameCn 	String 	必须 	兼容性属性值中文名称 	兼容性属性值中文名称
 */
    private $lineAttrvalNameCn;
    public function GetLineAttrvalNameCn(){
        return $this->lineAttrvalNameCn ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "attrId", $this->stdResult )) {
            $this->attrId = $this->stdResult->{"attrId"};
        }
        if (array_key_exists ( "attrName", $this->stdResult )) {
            $this->attrName = $this->stdResult->{"attrName"};
        }
        if (array_key_exists ( "attrNameCn", $this->stdResult )) {
            $this->attrNameCn = $this->stdResult->{"attrNameCn"};
        }
        if (array_key_exists ( "attrValId", $this->stdResult )) {
            $this->attrValId = $this->stdResult->{"attrValId"};
        }
        if (array_key_exists ( "lineAttrvalName", $this->stdResult )) {
            $this->lineAttrvalName = $this->stdResult->{"lineAttrvalName"};
        }
        if (array_key_exists ( "lineAttrvalNameCn", $this->stdResult )) {
            $this->lineAttrvalNameCn = $this->stdResult->{"lineAttrvalNameCn"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "attrId", $this->arrayResult )) {
            $this->attrId = $arrayResult['attrId'];
        }
        if (array_key_exists ( "attrName", $this->arrayResult )) {
            $this->attrName = $arrayResult['attrName'];
        }
        if (array_key_exists ( "attrNameCn", $this->arrayResult )) {
            $this->attrNameCn = $arrayResult['attrNameCn'];
        }
        if (array_key_exists ( "attrValId", $this->arrayResult )) {
            $this->attrValId = $arrayResult['attrValId'];
        }
        if (array_key_exists ( "lineAttrvalName", $this->arrayResult )) {
            $this->lineAttrvalName = $arrayResult['lineAttrvalName'];
        }
        if (array_key_exists ( "lineAttrvalNameCn", $this->arrayResult )) {
            $this->lineAttrvalNameCn = $arrayResult['lineAttrvalNameCn'];
        }
    }
}