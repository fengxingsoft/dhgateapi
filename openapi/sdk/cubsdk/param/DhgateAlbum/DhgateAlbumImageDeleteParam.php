<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/12
 * Time: 18:07
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateAlbumImageDeleteParam{
    /*
     * imgId
     * @return String
     * 图片ID
     * 	圖片的id值；示例值：ff8080812cbf8102012cbf81a18a0003
     */
    public function setImgId($imgId){
        $this->sdkStdResult["imgId"] = $imgId;
    }
    /*
     * imgMd5
     * @return String
     * 图片MD5信息
     * 示例值：b6ed58bc0a25dceda47636ec336e0402
     */
    public function setImgMd5($imgMd5){
        $this->sdkStdResult["imgMd5"] = $imgMd5;
    }
    /*
     * imgUrl
     * @return String
     * 图片url地址
     * 	示例值：f2/albu/g1/M00/01/02/rBVaIVPxjnCIBEuBAAB1EDXekqMAAAYbgGJ1EkAAHUo678.jpg
     */
    public function setImgUrl($imgUrl){
        $this->sdkStdResult["imgUrl"] = $imgUrl;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}

