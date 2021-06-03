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

class DhgateItemGetResultInfoItemSpecSelfDefUpdate
{

/*
 * attrValId 	String 	必须 	自定义规格属性值id 	属性值从1000开始往上递增(包括1000)；示例值：1000,1001
 */
    private $attrValId;
    public function GetAttrValId(){
        return $this->attrValId ;
    }
/*
 * attrValName 	String 	必须 	自定义规格名称 	自定义规格名称不允许重复；示例值：size
 */
    private $attrValName;
    public function GetAttrValName(){
        return $this->attrValName ;
    }
/*
 * picUrl 	String 	可选 	自定义规格图片 	可通过上传图片接口(dh.album.img.upload)获取；示例值：albu_615065096_00;
 */
    private $picUrl;
    public function GetPicUrl(){
        return $this->picUrl ;
    }
/*
 * specAttrName 	String 	必须 	属性英文名称 	自定义规格属性,默认值Options
 */
    private $specAttrName;
    public function GetSpecAttrName(){
        return $this->specAttrName ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "attrValId", $this->stdResult )) {
            $this->attrValId = $this->stdResult->{"attrValId"};
        }
        if (array_key_exists ( "attrValName", $this->stdResult )) {
            $this->attrValName = $this->stdResult->{"attrValName"};
        }
        if (array_key_exists ( "picUrl", $this->stdResult )) {
            $this->picUrl = $this->stdResult->{"picUrl"};
        }
        if (array_key_exists ( "specAttrName", $this->stdResult )) {
            $this->specAttrName = $this->stdResult->{"specAttrName"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "attrValId", $this->arrayResult )) {
            $this->attrValId = $arrayResult['attrValId'];
        }
        if (array_key_exists ( "attrValName", $this->arrayResult )) {
            $this->attrValName = $arrayResult['attrValName'];
        }
        if (array_key_exists ( "picUrl", $this->arrayResult )) {
            $this->picUrl = $arrayResult['picUrl'];
        }
        if (array_key_exists ( "specAttrName", $this->arrayResult )) {
            $this->specAttrName = $arrayResult['specAttrName'];
        }
    }
}