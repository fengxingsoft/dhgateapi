<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/23
 * Time: 20:54
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateItemBase extends SDKDomain
{
/*
 * htmlContent 	String 	必须 	产品详情内容描述 	详细描述一般包含产品功能属性、产品细节图片等内容；最多80000字符；详细描述中可包含文字、图片；图片可通过上传图片接口(dh.album.img.upload)获得图片imageUrl，然后根据图片地址模板获得完整图片路径；示例值：http://image.dhgate.com/albu_834770213_00/1.0*0.jpg;
 */
    private $htmlContent;

    public function getHtmlContent() {
        return $this->htmlContent;
    }


    public function setHtmlContent($htmlContent) {
        $this->htmlContent = $htmlContent;
    }
/*
 * itemName 	String 	必须 	产品名称 	最多140个字符，示例值：FashionHat
 */
    private $itemName;

    public function getItemName() {
        return $this->itemName;
    }


    public function setItemName($itemName) {
        $this->itemName = $itemName;
    }
/*
 * keyWord1 	String 	必须 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
 */
    private $keyWord1;

    public function getKeyWord1() {
        return $this->keyWord1;
    }


    public function setKeyWord1($keyWord1) {
        $this->keyWord1 = $keyWord1;
    }
/*
 * keyWord2 	String 	必须 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
 */
    private $keyWord2;

    public function getKeyWord2() {
        return $this->keyWord2;
    }


    public function setKeyWord2($keyWord2) {
        $this->keyWord2 = $keyWord2;
    }
/*
 * keyWord3 	String 	必须 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
 */
    private $keyWord3;

    public function getKeyWord3() {
        return $this->keyWord3;
    }


    public function setKeyWord3($keyWord3) {
        $this->keyWord3 = $keyWord3;
    }
/*
 * shortDesc 	String 	必须 	产品简短描述 	产品参数，如：颜色、尺寸、款式、配件、贸易方式等，最多500个字符；示例值：young people like it
 */
    private $shortDesc;

    public function getShortDesc() {
        return $this->shortDesc;
    }


    public function setShortDesc($shortDesc) {
        $this->shortDesc = $shortDesc;
    }
/*
 * videoUrl 	String 	必须 	产品视频地址 	只允许输入youtube的地址；示例值：http://www.youtube.com/xxxxx
 */
    private $videoUrl;

    public function getVideoUrl() {
        return $this->videoUrl;
    }


    public function setVideoUrl($videoUrl) {
        $this->videoUrl = $videoUrl;
    }



}
