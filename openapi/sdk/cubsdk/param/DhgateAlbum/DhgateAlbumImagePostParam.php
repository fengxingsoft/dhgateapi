<?php
/*
 * 该参数的内容是当用户上传了图片之后把图片推送到相册
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateAlbumImagePostParam {
    /*
     * albWindowId
     * String 	必须
     * 相册窗口ID
     * 该参数可通过调用dh.albums.get接口中返回值获得；示例：ff8080812cbf8102012cbf81a18a0003
     */
    public function setAlbWindowId( $albWindowId) {
        $this->sdkStdResult["albWindowId"] =$albWindowId;
    }
    /*
     * albInfoList
     * AlbumInfo[] 	必须
     * 相册图片列表
     *      */
    public function setAlbInfoList($albInfoList){
        $this->sdkStdResult["albInfoList"] = $albInfoList;
    }
    /*
     * imgMd5
     * @param String 	必须
     * 图片MD5值 	调用dh.album.img.upload获取该入参参数；示例：b6ed58bc0a25dceda47636ec336e0402;
     */
    public function setImgMd5($imgMd5){
        $this->sdkStdResult["imgMd5"] = $imgMd5;
    }
    /*
     * imgName
     * @param String 	必须
     * 图片显示名 	调用dh.album.img.upload接口获取该入参参数；示例值：beauty
     */
    public function setImgName($imgName){
        $this->sdkStdResult["imgName"] = $imgName;
    }
    /*
     * imgSize
     * @param Long 	必须
     * 图片大小 	以字节为单位，调用dh.album.img.upload接口获取该入参参数；示例值：61791;
     */
    public function setImgSize($imgSize){
        $this->sdkStdResult["imgSize"] = $imgSize;
    }
    /*
     * imgUrl
     * @param String 	必须
     * 系统图片路径 	调用dh.album.img.upload接口获取该入参参数；示例值：albu_257823868_00;
     */
    public function setImgUrl($imgUrl){
        $this->sdkStdResult["imgUrl"] = $imgUrl;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }

}

?>