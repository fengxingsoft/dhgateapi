<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/12
 * Time: 19:02
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateAlbumImageListGetResultInfo{
    /*
     * imgId 	String 	必须 	圖片ID 	圖片的id值；示例值：ff8080812cbf8102012cbf81a18a0003
     */
     private $imgId;
     public function getImgId(){
         return $this->imgId;
     }
     /*
      * imgMd5 	String 	必须 	图片MD5信息 	示例值：b6ed58bc0a25dceda47636ec336e0402
      */
     private $imgMd5;
     public function getImgMd5(){
         return $this->imgMd5;
     }
     /*
      * imgName 	String 	必须 	圖片名称 	示例值：beauty
      */
     private $imgName;
     public function getImgName(){
         return $this->imgName;
     }
     /*
      * imgSize 	Long 	必须 	图片字节大小 	示例值：65421
      */
     private $imgSize;
     public function getImgSize(){
         return $this->imgSize;
     }
     /*
      * imgUrl
      * String
      * 必须
      * 图片url地址
      * 若返回图片url地址类似f2/albu/g1/M00/01/02/rBVaIVPxjnCIBEuBAAB1EDXekqMAAAYbgGJ1EkAAHUo678.jpg,
      * 其获取方式为原图:http://image.dhgate.com/100x100/f2/albu/g1/M00/01/02/rBVaIVPxjnCIBEuBAAB1EDXekqMAAAYbgGJ1EkAAHUo678.jpg
      * 若其返回图片url类似albu_841432510_00,
      * 则该图片获取路径为原图:http://image.dhgate.com/albu_841432510_00/1.0x0.jpg
      */
     private $imgUrl;
     public function getImgUrl(){
         return $this->imgUrl;
     }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "imgId", $this->stdResult )) {
            $this->imgId = $this->stdResult->{"imgId"};
        }
        if (array_key_exists ( "imgMd5", $this->stdResult )) {
            $this->imgMd5 = $this->stdResult->{"imgMd5"};
        }
        if (array_key_exists ( "imgName", $this->stdResult )) {
            $this->imgName = $this->stdResult->{"imgName"};
        }
        if (array_key_exists ( "imgSize", $this->stdResult )) {
            $this->imgSize = $this->stdResult->{"imgSize"};
        }
        if (array_key_exists ( "imgUrl", $this->stdResult )) {
            $this->imgUrl = $this->stdResult->{"imgUrl"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "imgId", $this->arrayResult )) {
            $this->imgId = $arrayResult['imgId'];
        }
        if (array_key_exists ( "imgMd5", $this->arrayResult )) {
            $this->imgMd5 = $arrayResult['imgMd5'];
        }
        if (array_key_exists ( "imgName", $this->arrayResult )) {
            $this->imgName = $arrayResult['imgName'];
        }
        if (array_key_exists ( "imgSize", $this->arrayResult )) {
            $this->imgSize = $arrayResult['imgSize'];
        }
        if (array_key_exists ( "imgUrl", $this->arrayResult )) {
            $this->imgUrl = $arrayResult['imgUrl'];
        }
    }
}




