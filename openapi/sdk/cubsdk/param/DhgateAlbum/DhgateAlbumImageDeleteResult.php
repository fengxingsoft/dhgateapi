<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/12
 * Time: 18:14
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
Class DhgateAlbumImageDeleteResult{
    private $isSuccess;
    public function GetIsSuccess(){
        return $this->isSuccess;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "isSuccess", $this->stdResult )) {
            $this->isSuccess = $this->stdResult->{"isSuccess"};
        }
    }
    public function getStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("isSuccess", $this->stdResult)) {
            $this->isSuccess = $this->stdResult->{"isSuccess"};
        }

    }
}