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
use com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum\DhgateAlbumImageListGetResultInfo;
use ArrayObject;
class DhgateAlbumImageListGetResult{
    /*
     * count 	long 	必须 	总记录数
     */
    private $count;
    public function GetCount(){
        return $this->count;
    }
    /*
     * imageList 	ImageList[] 	必须 	圖片信息列表 	圖片信息列表
     */
    private $imageList;
    public function GetImageList(){
        return $this->imageList;
    }
    /*
     * sumPage 	int 	必须 	总页数
     *
     */
    private $sumPage;
    public function GetSumPage(){
        return $this->sumPage;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "count", $this->stdResult )) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists ( "imageList", $this->stdResult )) {
            $this->imageList = $this->stdResult->{"imageList"};

        }
        if (array_key_exists ( "imageList", $this->stdResult )) {
            $imageList=$this->stdResult->{"imageList"};
            $object = json_decode ( json_encode ( $imageList ), true );
            $this->imageList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateAlbumListInfoResult=new DhgateAlbumImageListGetResultInfo();
                $DhgateAlbumListInfoResult->setArrayResult($arrayobject );
                $this->imageList  [$i] = $DhgateAlbumListInfoResult;
            }
        }
        if (array_key_exists ( "sumPage", $this->stdResult )) {
            $this->sumPage = $this->stdResult->{"sumPage"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "imageList", $this->arrayResult )) {
            $imageListResult=$arrayResult['imageList'];
            $this->imageList = new DhgateAlbumImageListGetResultInfo();
            $this->imageList->setStdResult ( $sellerInfoListResult);
        }
        if (array_key_exists ( "count", $this->arrayResult )) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists ( "sumPage", $this->arrayResult )) {
            $this->sumPage = $arrayResult['sumPage'];
        }
    }

}








