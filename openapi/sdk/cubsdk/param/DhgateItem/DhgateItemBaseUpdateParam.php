<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class DhgateItemBaseUpdateParam extends SDKDomain
{

    /*
     * htmlContent 	String 	可选 	产品详情内容描述 	详细描述一般包含产品功能属性、产品细节图片等内容；最多80000字符；详细描述中可包含文字、图片；图片可通过上传图片接口(dh.album.img.upload)获得图片imageUrl，然后根据图片地址模板获得完整图片路径；示例值：http://image.dhgate.com/albu_834770213_00/1.0*0.jpg;
     */
    public function setHtmlContent( $htmlContent) {
        $this->sdkStdResult["htmlContent"] = $htmlContent;
    }
    /*
     * itemCode 	String 	必须 	产品编码 	产品的唯一标识，示例值：111112323
     */
    public function setItemCode( $itemCode) {
        $this->sdkStdResult["itemCode"] = $itemCode;
    }
    /*
     * itemName 	String 	可选 	产品名称 	最多140个字符，示例值：FashionHat
     */
    public function setItemName( $itemName) {
        $this->sdkStdResult["itemName"] = $itemName;
    }
    /*
     * keyWord1 	String 	可选 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
     */
    public function setKeyWord1( $keyWord1) {
        $this->sdkStdResult["keyWord1"] = $keyWord1;
    }
    /*
     * keyWord2 	String 	可选 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
     */
    public function setKeyWord2( $keyWord2) {
        $this->sdkStdResult["keyWord2"] = $keyWord2;
    }
    /*
     * keyWord3 	String 	可选 	搜索关键字 	只允许字母、字符、下划线、数字，（比如某个产品是“New White Strapless Formal Prom Wedding Dress Ball Gown”，则关键词可以填写为Prom Wedding Dress，Formal Prom Wedding Dress等）；示例值：black
     */
    public function setKeyWord3( $keyWord3) {
        $this->sdkStdResult["keyWord3"] = $keyWord3;
    }
/*
 * shortDesc 	String 	可选 	产品简短描述 	产品参数，如：颜色、尺寸、款式、配件、贸易方式等，最多500个字符；示例值：young people like it
 */
    public function setShortDesc( $shortDesc) {
        $this->sdkStdResult["shortDesc"] = $shortDesc;
    }
/*
 * siteId 	String 	可选 	产品站点编号 	产品站点编号，EN=英文站点，RU=俄文站点，默认值:EN;示例值：EN
 */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }
/*
 * videoUrl 	String 	可选 	产品视频地址 	只允许输入youtube的地址；示例值：http://www.youtube.com/xxxxx
 */
    public function setVideoUrl( $videoUrl) {
        $this->sdkStdResult["videoUrl"] = $videoUrl;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}