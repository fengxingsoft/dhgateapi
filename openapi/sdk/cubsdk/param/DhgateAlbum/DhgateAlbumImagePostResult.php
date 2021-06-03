<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 8:10
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateAlbumImagePostResult
{
    /*
     * isSuccess
     * Boolean 	必须
     * 是否批量上傳成功 	true=成功；false=失败；
     */
    private $isSuccess;

    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("isSuccess", $this->stdResult)) {
            $this->isSuccess = $this->stdResult->{"isSuccess"};
        }

    }
}