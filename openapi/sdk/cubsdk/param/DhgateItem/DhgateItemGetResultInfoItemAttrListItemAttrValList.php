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

class DhgateItemGetResultInfoItemAttrListItemAttrValList
{

/*
 * attrId 	Long 	必须 	属性Id 	自定义属性id默认为11；品牌属性id默认为99；其它类目属性id与对应的类目属性ID一致；自定义属性，属性值id为从1向上累加也可不填，最多可有10个自定义属性；
 */
    private $attrId;
    public function GetAttrId(){
        return $this->attrId ;
    }
/*
 * attrName 	String 	必须 	产品属性英文名称 	自定义属性时必填；示例值：BRAND
 */
    private $attrName;
    public function GetAttrName(){
        return $this->attrName ;
    }
/*
 * attrValId 	Long 	必须 	产品属性值id 	自定义属性，属性值id为从1向上累加也可不填;品牌属性值默认为99;与对应的类目属性值ID一致；
 */
    private $attrValId;
    public function GetAttrValId(){
        return $this->attrValId ;
    }
/*
 * brandId 	String 	必须 	产品品牌id 	产品品牌id,从品牌列表中获得。所选品牌需要对卖和产品类目有效能用
 */
    private $brandId;
    public function GetBrandId(){
        return $this->brandId ;
    }
/*
 * lineAttrvalName 	String 	必须 	产品属性值英文名称 	自定义属性时必填；示例值：type
 */
    private $lineAttrvalName;
    public function GetLineAttrvalName(){
        return $this->lineAttrvalName ;
    }
/*
 * lineAttrvalNameCn 	String 	必须 	属性值中文名称 	自定义属性时必填，示例值：类型
 */
    private $lineAttrvalNameCn;
    public function GetLineAttrvalNameCn(){
        return $this->lineAttrvalNameCn ;
    }
/*
 * picUrl 	String 	必须 	产品属性图片路径 	自定义属性时必填，通过上传图片接口(dh.album.img.upload)获取；示例值：albu_841432510_00/1.0x0.jpg
 */
    private $picUrl;
    public function GetPicUrl(){
        return $this->picUrl ;
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
        if (array_key_exists ( "attrValId", $this->stdResult )) {
            $this->attrValId = $this->stdResult->{"attrValId"};
        }
        if (array_key_exists ( "brandId", $this->stdResult )) {
            $this->brandId = $this->stdResult->{"brandId"};
        }
        if (array_key_exists ( "lineAttrvalName", $this->stdResult )) {
            $this->lineAttrvalName = $this->stdResult->{"lineAttrvalName"};
        }
        if (array_key_exists ( "lineAttrvalNameCn", $this->stdResult )) {
            $this->lineAttrvalNameCn = $this->stdResult->{"lineAttrvalNameCn"};
        }
        if (array_key_exists ( "picUrl", $this->stdResult )) {
            $this->picUrl = $this->stdResult->{"picUrl"};
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
        if (array_key_exists ( "attrValId", $this->arrayResult )) {
            $this->attrValId = $arrayResult['attrValId'];
        }
        if (array_key_exists ( "brandId", $this->arrayResult )) {
            $this->brandId = $arrayResult['brandId'];
        }
        if (array_key_exists ( "lineAttrvalName", $this->arrayResult )) {
            $this->lineAttrvalName = $arrayResult['lineAttrvalName'];
        }
        if (array_key_exists ( "lineAttrvalNameCn", $this->arrayResult )) {
            $this->lineAttrvalNameCn = $arrayResult['lineAttrvalNameCn'];
        }
        if (array_key_exists ( "picUrl", $this->arrayResult )) {
            $this->picUrl = $arrayResult['picUrl'];
        }
    }
}