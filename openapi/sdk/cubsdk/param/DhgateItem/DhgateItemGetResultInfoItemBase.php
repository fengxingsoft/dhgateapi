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

class DhgateItemGetResultInfoItemBase
{

/*
 * htmlContent 	String 	必须 	产品详情内容描述 	详细描述一般包含产品功能属性、产品细节图片等内容；最多80000字符；详细描述中可包含文字、图片；图片可通过上传图片接口(dh.album.img.upload)获得图片imageUrl，然后根据图片地址模板获得完整图片路径；示例值：http://image.dhgate.com/albu_834770213_00/1.0*0.jpg;
 */
    private $htmlContent;
    public function GetHtmlContent(){
        return $this->htmlContent ;
    }
/*
 * itemName 	String 	必须 	产品名称 	最多140个字符，示例值：FashionHat
 */
    private $itemName;
    public function GetItemName(){
        return $this->itemName ;
    }
/*
 * keyWord1 	String 	必须 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
 */
    private $keyWord1;
    public function GetKeyWord1(){
        return $this->keyWord1 ;
    }
/*
 * keyWord2 	String 	必须 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
 */
    private $keyWord2;
    public function GetKeyWord2(){
        return $this->keyWord2 ;
    }
/*
 * keyWord3 	String 	必须 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
 */
    private $keyWord3;
    public function GetKeyWord3(){
        return $this->keyWord3 ;
    }
/*
 * shortDesc 	String 	必须 	产品简短描述 	产品参数，如：颜色、尺寸、款式、配件、贸易方式等，最多500个字符；示例值：young people like it
 */
    private $shortDesc;
    public function GetShortDesc(){
        return $this->shortDesc ;
    }
/*
 * videoUrl 	String 	必须 	产品视频地址 	只允许输入youtube的地址；示例值：http://www.youtube.com/xxxxx
 */
    private $videoUrl;
    public function GetVideoUrl(){
        return $this->videoUrl ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "htmlContent", $this->stdResult )) {
            $this->htmlContent = $this->stdResult->{"htmlContent"};
        }
        if (array_key_exists ( "itemName", $this->stdResult )) {
            $this->itemName = $this->stdResult->{"itemName"};
        }
        if (array_key_exists ( "keyWord1", $this->stdResult )) {
            $this->keyWord1 = $this->stdResult->{"keyWord1"};
        }
        if (array_key_exists ( "keyWord2", $this->stdResult )) {
            $this->keyWord2 = $this->stdResult->{"keyWord2"};
        }
        if (array_key_exists ( "keyWord3", $this->stdResult )) {
            $this->keyWord3 = $this->stdResult->{"keyWord3"};
        }
        if (array_key_exists ( "shortDesc", $this->stdResult )) {
            $this->shortDesc = $this->stdResult->{"shortDesc"};
        }
        if (array_key_exists ( "videoUrl", $this->stdResult )) {
            $this->videoUrl = $this->stdResult->{"videoUrl"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "htmlContent", $this->arrayResult )) {
            $this->htmlContent = $arrayResult['htmlContent'];
        }
        if (array_key_exists ( "itemName", $this->arrayResult )) {
            $this->itemName = $arrayResult['itemName'];
        }
        if (array_key_exists ( "keyWord1", $this->arrayResult )) {
            $this->keyWord1 = $arrayResult['keyWord1'];
        }
        if (array_key_exists ( "keyWord2", $this->arrayResult )) {
            $this->keyWord2 = $arrayResult['keyWord2'];
        }
        if (array_key_exists ( "keyWord3", $this->arrayResult )) {
            $this->keyWord3 = $arrayResult['keyWord3'];
        }
        if (array_key_exists ( "shortDesc", $this->arrayResult )) {
            $this->shortDesc = $arrayResult['shortDesc'];
        }
        if (array_key_exists ( "videoUrl", $this->arrayResult )) {
            $this->videoUrl = $arrayResult['videoUrl'];
        }
    }
}