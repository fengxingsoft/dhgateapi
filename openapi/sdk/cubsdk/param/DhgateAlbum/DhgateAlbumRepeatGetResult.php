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
use ArrayObject;
class DhgateAlbumRepeatGetResult{
    /*
     * imgUrl 	String 	必须 	图片地址
     */
    private $imgUrl;
    public function GetImgUrl(){
        return $this->imgUrl;
    }
    /*
     * result 	boolean 	必须 	是否存在
     */
    private $result;
    public function GetResult()
    {
        return $this->result;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("imgUrl", $this->stdResult)) {
            $this->imgUrl = $this->stdResult->{"imgUrl"};
        }
        if (array_key_exists("result", $this->stdResult)) {
            $this->result = $this->stdResult->{"result"};
        }
    }
}












