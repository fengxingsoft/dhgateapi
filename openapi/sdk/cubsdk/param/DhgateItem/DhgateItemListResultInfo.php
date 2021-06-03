<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use  com\alibaba\openapi\client\entity\SDKDomain;
use  com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemListResultInfo
{

    /*
     * accuratelyDescribe 	Integer 	必须 	是否如实描述:1是,0否 	示例值：1
     */
    private $accuratelyDescribe;
    public function GetAccuratelyDescribe(){
        return $this->accuratelyDescribe ;
    }
    /*
     * cateDispId 	String 	必须 	产品展示类目 	示例值：019011004001
     */
    private $cateDispId;
    public function GetCateDispId(){
        return $this->cateDispId ;
    }
    /*
     * catePubId 	String 	必须 	发布类目叶子类目编号 	示例值：019024004002
     */
    private $catePubId;
    public function GetCatePubId(){
        return $this->catePubId ;
    }
    /*
     * expireDate 	String 	必须 	产品有效期 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
     */
    private $expireDate;
    public function GetExpireDate(){
        return $this->expireDate ;
    }
    /*
     * imgUrl 	String 	必须 	产品首图地址 	http://image.dhgate.com/imageurl/1.0x0.jpg,变量imageurl替换为实际内容即可访问；示例值：images/no_photo.gifimgUrl 	String 	必须 	产品首图地址 	http://image.dhgate.com/imageurl/1.0x0.jpg,变量imageurl替换为实际内容即可访问；示例值：images/no_photo.gif
     */
    private $imgUrl;
    public function GetImgUrl(){
        return $this->imgUrl ;
    }
    /*
     * isFreeShip 	Integer 	必须 	产品是否免运费 	0:免运费,1:非免运费；示例值：1
     */
    private $isFreeShip;
    public function GetIsFreeShip(){
        return $this->isFreeShip ;
    }
    /*
     * itemCode 	Long 	必须 	产品编码 	示例值：202325055
     */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode ;
    }
    /*
     * itemGroupId 	String 	必须 	产品组id 	示例值：1000001（如果有叶子节点为叶子节点id）
     */
    private $itemGroupId;
    public function GetItemGroupId(){
        return $this->itemGroupId ;
    }
    /*
     * itemName 	String 	必须 	产品名称 	示例值：dengdeng
     */
    private $itemName;
    public function GetItemName(){
        return $this->itemName ;
    }
    /*
     * itemUrl 	String 	必须 	产品最终页URL 	通过该使用URL链接到买家看到的产品最终页；示例值：clob_180005461_00；
     */
    private $itemUrl;
    public function GetItemUrl(){
        return $this->itemUrl ;
    }
    /*
     * operateDate 	String 	必须 	产品最近修改时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
     */
    private $operateDate;
    public function GetOperateDate(){
        return $this->operateDate ;
    }
    /*
     * shippingModelId 	String 	必须 	运输物流模板Id 	示例值：1000001
     */
    private $shippingModelId;
    public function GetShippingModelId(){
        return $this->shippingModelId ;
    }
    /*
     * shortDes 	String 	必须 	产品简短描述 	示例值：denuyty
     */
    private $shortDes;
    public function GetShortDes(){
        return $this->shortDes ;
    }
    /*
     * state 	String 	必须 	产品状态 	100000=未定义;100100=上架产品;100200=待审核产品;100300=审核未通过产品;100400=下架产品;100500=品牌商投诉产品;100600=疑似侵权产品;示例值：100100
     */
    private $state;
    public function GetState(){
        return $this->state ;
    }
    /*
     * unpassCause 	String 	必须 	未审核通过原因 	未审核通过原因
     */
    private $unpassCause;
    public function GetUnpassCause(){
        return $this->unpassCause ;
    }
    /*
     * upDate 	String 	必须 	产品上架时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
     */
    private $upDate;
    public function GetUpDate(){
        return $this->upDate ;
    }
    /*
     * vaildDay 	Integer 	必须 	产品有效期 	单位为天；（当天时间+90天）;示例值：90
     */
    private $vaildDay;
    public function GetVaildDay(){
        return $this->vaildDay ;
    }
    /*
     * withDrawalType 	Integer 	必须 	下架操作类型 	1=自主下架操作 ,2=有效期下架自动程序 ,3=强制下架问题产品 , 5=备货售完下架
     */
    private $withDrawalType;
    public function GetWithDrawalType(){
        return $this->withDrawalType ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "accuratelyDescribe", $this->stdResult )) {
            $this->accuratelyDescribe = $this->stdResult->{"accuratelyDescribe"};
        }
        if (array_key_exists ( "cateDispId", $this->stdResult )) {
            $this->cateDispId = $this->stdResult->{"cateDispId"};
        }
        if (array_key_exists ( "catePubId", $this->stdResult )) {
            $this->catePubId = $this->stdResult->{"catePubId"};
        }
        if (array_key_exists ( "expireDate", $this->stdResult )) {
            $this->expireDate = $this->stdResult->{"expireDate"};
        }
        if (array_key_exists ( "imgUrl", $this->stdResult )) {
            $this->imgUrl = $this->stdResult->{"imgUrl"};
        }
        if (array_key_exists ( "isFreeShip", $this->stdResult )) {
            $this->isFreeShip = $this->stdResult->{"isFreeShip"};
        }
        if (array_key_exists ( "itemCode", $this->stdResult )) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
        if (array_key_exists ( "itemGroupId", $this->stdResult )) {
            $this->itemGroupId = $this->stdResult->{"itemGroupId"};
        }
        if (array_key_exists ( "itemName", $this->stdResult )) {
            $this->itemName = $this->stdResult->{"itemName"};
        }
        if (array_key_exists ( "itemUrl", $this->stdResult )) {
            $this->itemUrl = $this->stdResult->{"itemUrl"};
        }
        if (array_key_exists ( "operateDate", $this->stdResult )) {
            $this->operateDate = $this->stdResult->{"operateDate"};
        }
        if (array_key_exists ( "shippingModelId", $this->stdResult )) {
            $this->shippingModelId = $this->stdResult->{"shippingModelId"};
        }
        if (array_key_exists ( "shortDes", $this->stdResult )) {
            $this->shortDes = $this->stdResult->{"shortDes"};
        }
        if (array_key_exists ( "state", $this->stdResult )) {
            $this->state = $this->stdResult->{"state"};
        }
        if (array_key_exists ( "unpassCause", $this->stdResult )) {
            $this->unpassCause = $this->stdResult->{"unpassCause"};
        }
        if (array_key_exists ( "upDate", $this->stdResult )) {
            $this->upDate = $this->stdResult->{"upDate"};
        }
        if (array_key_exists ( "vaildDay", $this->stdResult )) {
            $this->vaildDay = $this->stdResult->{"vaildDay"};
        }
        if (array_key_exists ( "withDrawalType", $this->stdResult )) {
            $this->withDrawalType = $this->stdResult->{"withDrawalType"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "accuratelyDescribe", $this->arrayResult )) {
            $this->accuratelyDescribe = $arrayResult['accuratelyDescribe'];
        }
        if (array_key_exists ( "cateDispId", $this->arrayResult )) {
            $this->cateDispId = $arrayResult['cateDispId'];
        }
        if (array_key_exists ( "catePubId", $this->arrayResult )) {
            $this->catePubId = $arrayResult['catePubId'];
        }
        if (array_key_exists ( "expireDate", $this->arrayResult )) {
            $this->expireDate = $arrayResult['expireDate'];
        }
        if (array_key_exists ( "imgUrl", $this->arrayResult )) {
            $this->imgUrl = $arrayResult['imgUrl'];
        }
        if (array_key_exists ( "isFreeShip", $this->arrayResult )) {
            $this->isFreeShip = $arrayResult['isFreeShip'];
        }
        if (array_key_exists ( "itemCode", $this->arrayResult )) {
            $this->itemCode = $arrayResult['itemCode'];
        }
        if (array_key_exists ( "itemGroupId", $this->arrayResult )) {
            $this->itemGroupId = $arrayResult['itemGroupId'];
        }
        if (array_key_exists ( "itemName", $this->arrayResult )) {
            $this->itemName = $arrayResult['itemName'];
        }
        if (array_key_exists ( "itemUrl", $this->arrayResult )) {
            $this->itemUrl = $arrayResult['itemUrl'];
        }
        if (array_key_exists ( "operateDate", $this->arrayResult )) {
            $this->operateDate = $arrayResult['operateDate'];
        }
        if (array_key_exists ( "shippingModelId", $this->arrayResult )) {
            $this->shippingModelId = $arrayResult['shippingModelId'];
        }
        if (array_key_exists ( "shortDes", $this->arrayResult )) {
            $this->shortDes = $arrayResult['shortDes'];
        }
        if (array_key_exists ( "state", $this->arrayResult )) {
            $this->state = $arrayResult['state'];
        }
        if (array_key_exists ( "unpassCause", $this->arrayResult )) {
            $this->unpassCause = $arrayResult['unpassCause'];
        }
        if (array_key_exists ( "upDate", $this->arrayResult )) {
            $this->upDate = $arrayResult['upDate'];
        }
        if (array_key_exists ( "vaildDay", $this->arrayResult )) {
            $this->vaildDay = $arrayResult['vaildDay'];
        }
        if (array_key_exists ( "withDrawalType", $this->arrayResult )) {
            $this->withDrawalType = $arrayResult['withDrawalType'];
        }
    }
}