<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemGetResultInfoItemAttrListItemAttrValList;
class DhgateItemGetResultInfoItemAttrList{

/*
 * attrId 	Long 	必须 	属性Id(自定义属性为11) 	自定义属性id默认为11；品牌属性id默认为99；其它类目属性id与对应的类目属性ID一致；自定义属性，属性值id为从1向上累加也可不填，最多可有10个自定义属性；
 */
    private $attrId;
    public function GetAttrId(){
        return $this->attrId;
    }
/*
 * attrName 	String 	必须 	属性英文名称 	自定义属性时必填；示例值：BRAND
 */
    private $attrName;
    public function GetAttrName(){
        return $this->attrName;
    }
/*
 * attrNameCn 	String 	必须 	属性中文名称 	自定义属性时必填，示例值：类型
 */
    private $attrNameCn;
    public function GetAttrNameCn(){
        return $this->attrNameCn;
    }
/*
 * isbrand 	Integer 	必须 	是否是品牌属性 	1:是,0:非；示例值：1
 */
    private $isbrand;
    public function GetIsbrand(){
        return $this->isbrand;
    }
/*
 * isPriceAttr 	Integer 	必须 	价格属性 	是否影响价格的属性，0否 1是
 */
    private $isPriceAttr;
    public function GetIsPriceAttr(){
        return $this->isPriceAttr;
    }
/*
 * itemAttrValList 	ItemAttrVal[] 	必须 	产品属性值列表 	产品属性值列表
 */

    private $itemAttrValList;
    public function GetItemAttrValList(){
        return $this->itemAttrValList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {

        if (array_key_exists ( "attrId", $this->stdResult )) {
            $this->attrId = $this->stdResult->{"attrId"};
        }
        if (array_key_exists ( "attrName", $this->stdResult )) {
            $this->attrName = $this->stdResult->{"attrName"};
        }
        if (array_key_exists ( "attrNameCn", $this->stdResult )) {
            $this->attrNameCn = $this->stdResult->{"attrNameCn"};
        }
        if (array_key_exists ( "isbrand", $this->stdResult )) {
            $this->isbrand = $this->stdResult->{"isbrand"};
        }
        if (array_key_exists ( "isPriceAttr", $this->stdResult )) {
            $this->isPriceAttr = $this->stdResult->{"isPriceAttr"};
        }
        if (array_key_exists ( "itemAttrValList", $this->stdResult )) {
            $itemAttrValListResult=$this->stdResult->{"itemAttrValList"};
            $object = json_decode ( json_encode ( $imageList ), true );
            $this->itemAttrValList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoItemAttrListItemAttrValList=new DhgateItemGetResultInfoItemAttrListItemAttrValList();
                $DhgateItemGetResultInfoItemAttrListItemAttrValList->setArrayResult($arrayobject );
                $this->itemAttrValList[$i] = $DhgateItemGetResultInfoItemAttrListItemAttrValList;
            }
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
        if (array_key_exists ( "isbrand", $this->arrayResult )) {
            $this->isbrand = $arrayResult['isbrand'];
        }
        if (array_key_exists ( "isPriceAttr", $this->arrayResult )) {
            $this->isPriceAttr = $arrayResult['isPriceAttr'];
        }
        if (array_key_exists ( "itemAttrValList", $this->arrayResult )) {
            $object = $arrayResult['itemAttrValList'];
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoItemAttrListItemAttrValList=new DhgateItemGetResultInfoItemAttrListItemAttrValList();
                $DhgateItemGetResultInfoItemAttrListItemAttrValList->setArrayResult($arrayobject );
                $this->itemAttrValList[$i] = $DhgateItemGetResultInfoItemAttrListItemAttrValList;
            }
        }
    }
}