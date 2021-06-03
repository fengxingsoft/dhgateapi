<?php
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\Dhgate\openapi\client\entity\SDKDomain;
use com\Dhgate\openapi\client\entity\ByteArray;

class DhgateAlbumInfo extends SDKDomain {

/*
 * imgMd5 	String 	必须 	图片MD5值 	调用dh.album.img.upload获取该入参参数；示例：b6ed58bc0a25dceda47636ec336e0402;
 */
    private $imgMd5;

    public function getImgMd5() {
        return $this->imgMd5;
    }

    public function setImgMd5( $imgMd5) {
        $this->imgMd5 = $imgMd5;
    }
/*
 * imgName 	String 	必须 	图片显示名 	调用dh.album.img.upload接口获取该入参参数；示例值：beauty
 */
    private $imgName;

    public function getImgName() {
        return $this->imgName;
    }

    public function setImgName( $imgName) {
        $this->imgName = $imgName;
    }
/*
 * imgSize 	Long 	必须 	图片大小 	以字节为单位，调用dh.album.img.upload接口获取该入参参数；示例值：61791;
 */
    private $imgSize;

    public function getImgSize() {
        return $this->imgSize;
    }

    public function setImgSize( $imgSize) {
        $this->imgSize = $imgSize;
    }
/*
 * imgUrl 	String 	必须 	系统图片路径 	调用dh.album.img.upload接口获取该入参参数；示例值：albu_257823868_00;
 */
    private $imgUrl;

    public function getImgUrl() {
        return $this->imgUrl;
    }

    public function setImgUrl( $imgUrl) {
        $this->imgUrl = $imgUrl;
    }



    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

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
?>