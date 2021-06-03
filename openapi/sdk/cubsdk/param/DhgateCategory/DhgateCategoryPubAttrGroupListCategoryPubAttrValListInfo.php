<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 15:13
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryPubAttrGroupListCategoryPubAttrValListInfo{
/*
  * attrValId 	Long 	必须 	产品线属性值编号 	示例值：102336
  */
    private $attrValId;
    public function GetAttrValId(){
        return $this->attrValId;
    }
/*
 * catePubAttrId 	Long 	必须 	发布类目属性编号 	对应发布类目属性主键值；示例值：43758
 */
    private $catePubAttrId;
    public function GetCatePubAttrId(){
        return $this->catePubAttrId;
    }
/*
 * catePubAttrvalId 	Long 	必须 	属性值主键 	示例值：102435
 */
    private $catePubAttrvalId;
    public function GetCatePubAttrvalId(){
        return $this->catePubAttrvalId;
    }
/*
 * lineAttrvalName 	String 	必须 	属性值英文 	示例值：type
 */
    private $lineAttrvalName;
    public function GetLineAttrvalName(){
        return $this->lineAttrvalName;
    }
/*
 * lineAttrvalNameCn 	String 	必须 	属性值中文 	示例值：类型
 */
    private $lineAttrvalNameCn;
    public function GetLineAttrvalNameCn(){
        return $this->lineAttrvalNameCn;
    }
/*
 * picUrl 	String 	必须 	属性值图片链接 	当属性的style为2或3时，才有该值，否则为null。示例值：avim_321435868_00.jpg
 */
    private $picUrl;
    public function GetPicUrl(){
        return $this->picUrl;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "attrValId", $this->stdResult )) {
            $this->attrValId = $this->stdResult->{"attrValId"};
        }
        if (array_key_exists ( "catePubAttrId", $this->stdResult )) {
            $this->catePubAttrId = $this->stdResult->{"catePubAttrId"};
        }
        if (array_key_exists ( "catePubAttrvalId", $this->stdResult )) {
            $this->catePubAttrvalId = $this->stdResult->{"catePubAttrvalId"};
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
        if (array_key_exists ( "attrValId", $this->arrayResult )) {
            $this->attrValId = $arrayResult['attrValId'];
        }
        if (array_key_exists ( "catePubAttrId", $this->arrayResult )) {
            $this->catePubAttrId = $arrayResult['catePubAttrId'];
        }
        if (array_key_exists ( "catePubAttrvalId", $this->arrayResult )) {
            $this->catePubAttrvalId = $arrayResult['catePubAttrvalId'];
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
