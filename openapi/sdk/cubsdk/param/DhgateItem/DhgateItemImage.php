<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateItemImage
{

/*
 * imgMd5 	String 	必须 	图片MD5值 	通过上传图片接口(dh.album.img.upload)获取；示例值：d9ec536b1792f2562c59e6ad4fd45f9f;
 */
    private $imgMd5;
    public function GetImgMd5(){
        return $this->imgMd5 ;
    }
    public function setImgMd5($imgMd5){
        $this->sdkStdResult["imgMd5"] = $imgMd5;
    }
/*
 * imgUrl 	String 	必须 	图片url地址 	通过上传图片接口(dh.album.img.upload)获取；上传第一张默认为首图;示例值：/f2/albu/g1/M00/01/02/rBVaIVPxjnCIBEuBAAB1EDXekqMAAAYbgGJ1EkAAHUo678.jpg;
 */
    private $imgUrl;
    public function GetImgUrl(){
        return $this->imgUrl ;
    }
    public function setImgUrl($imgUrl){
        $this->sdkStdResult["imgUrl"] = $imgUrl;
    }
/*
 * type 	Integer 	必须 	图片来源 	3=googalshopping推广图片,其他数值=其他来源；示例值：3;
 */
    private $type;
    public function GetType(){
        return $this->type ;
    }
    public function setType($type){
        $this->sdkStdResult["type"] = $type;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "imgMd5", $this->stdResult )) {
            $this->imgMd5 = $this->stdResult->{"imgMd5"};
        }
        if (array_key_exists ( "imgUrl", $this->stdResult )) {
            $this->imgUrl = $this->stdResult->{"imgUrl"};
        }
        if (array_key_exists ( "type", $this->stdResult )) {
            $this->type = $this->stdResult->{"type"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "imgMd5", $this->arrayResult )) {
            $this->imgMd5 = $arrayResult['imgMd5'];
        }
        if (array_key_exists ( "imgUrl", $this->arrayResult )) {
            $this->imgUrl = $arrayResult['imgUrl'];
        }
        if (array_key_exists ( "type", $this->arrayResult )) {
            $this->type = $arrayResult['type'];
        }
    }
}