<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/12
 * Time: 17:11
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum\DhgateAlbumImageUploadResultInfo;
use ArrayObject;
class DhgateAlbumImageUploadResult{
    /*
     * 2.1版本中获取
     * imgMd5
     * @return String 	必须
     * 图片MD5信息 	示例值：b6ed58bc0a25dceda47636ec336e0402
     */
    private $imgMd5;
    public function GetImgMd5(){
        return $this->imgMd5;
    }
    /*
     * 2.1版本中获取
     * imgName
     * @return String 	必须
     * 上传图片的图片名称
     * 该出参参数可用于保存 图片到相册接口（dh.album.img.post）的入参参数；示例值：monkey
     */
    private $imgName;
    public function GetImgName(){
        return $this->imgName;
    }
    /*
     * 2.1版本中获取
     * imgSize
     * @return String 	必须
     * 图片字节大小
     * 	示例值：65421
     */
    private $imgSize;
    public function GetImgSize(){
        return $this->imgSize;
    }
    /*
     * 2.1版本中获取
     * imgUrl
     * @return String 	必须
     * 图片url地址
     * 若返回图片url地址类似f2/albu/g1/M00/01/02/rBVaIVPxjnCIBEuBAAB1EDXekqMAAAYbgGJ1EkAAHUo678.jpg,其获取方式为原图:http://image.dhgate.com/100x100/f2/albu/g1/M00/01/02/rBVaIVPxjnCIBEuBAAB1EDXekqMAAAYbgGJ1EkAAHUo678.jpg;
     * 若其返回图片url类似albu_841432510_00,则该图片获取路径为原图:http://image.dhgate.com/albu_841432510_00/1.0x0.jpg
     */
    private $imgUrl;
    public function GetImgUrl(){
        return $this->imgUrl;
    }
    /*
     * 2.1版本中获取
     * result
     * @return String 	必须
     * 上传图片结果: 0失败, 1成功, 2重复上传 	示例值：1
     */
    private $result;
    public function GetResult(){
        return $this->result;
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
        if (array_key_exists ( "result", $this->stdResult )) {
            $this->result = $this->stdResult->{"result"};

        }

//        if (array_key_exists ( "productImg", $this->stdResult )) {
//            $this->productImg = $this->stdResult->{"productImg"};
//
//        }
//        if (array_key_exists ( "productImg", $this->stdResult )) {
//            $productImg=$this->stdResult->{"productImg"};
//            $object = json_decode ( json_encode ( $productImg ), true );
//            $this->productImg = array ();
//                $arrayobject = new ArrayObject ( $object );
//                $DhgateAlbumListInfoResult=new DhgateAlbumImageUploadResultInfo();
//                $DhgateAlbumListInfoResult->setArrayResult($arrayobject );
//                $this->productImg= $DhgateAlbumListInfoResult;
//            }
        }
 //   private $arrayResult;
//    public function setArrayResult($arrayResult) {
//        $this->arrayResult = $arrayResult;
//        if (array_key_exists ( "productImg", $this->arrayResult )) {
//            $productImgResult=$arrayResult['productImg'];
//            $this->productImg = new DhgateAlbumImageUploadResultInfo();
//            $this->productImg->setStdResult ( $productImgResult);
//        }
//    }

}












