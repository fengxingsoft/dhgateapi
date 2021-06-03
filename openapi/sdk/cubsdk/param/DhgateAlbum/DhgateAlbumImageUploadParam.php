<?php

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateAlbumImageUploadParam {
    /*
     * funType
     * @param String
     * 必须
     * 仅支持albu类型;albu为商品相册图片,默认值albu.
     */
    public function setFunType( $funType) {
        $this->sdkStdResult["funType"] = $funType;
    }
    /*
     * imgBannerName
     * @param String
     * 可选
     *	水印名称, 如果不传imgBannerName表示不打水印。
     */
    public function setImgBannerName($imgBannerName){
        $this->sdkStdResult["imgBannerName"] = $imgBannerName;
    }
    /*
     * imgBase64
     * @param String
     * 必须
     * 	图片base64信息 	图片base64编码,图片最限制为2M
     */
    public function setImgBase64($imgBase64){
        $this->sdkStdResult["imgBase64"] = $imgBase64;
    }
    /*
     *imgName
     * @param String
     * 必须
     * 	图片名称 	图片需要保存的文件名
     */
    public function setImgName($imgName){
        $this->sdkStdResult["imgName"] = $imgName;
    }
    /*
     * markPosition
     * String 	可选
     * 水印位置
     * 	在需要打水印的情况下这个参数才起作用(该参数为空默认打右下角)。 1 ：左上 ， 2：右上 ， 3： 中间 ， 4：左下 ， 5 ， 右下
     */
    public function setMarkPosition($markPosition){
        $this->sdkStdResult["markPosition"] = $markPosition;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }

}




?>