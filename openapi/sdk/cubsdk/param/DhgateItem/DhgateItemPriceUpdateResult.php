<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use  com\dhgate\openapi\client\entity\SDKDomain;
use  com\dhgate\openapi\client\entity\ByteArray;

class DhgateItemPriceUpdateResult
{

    /*
     * isSuccess 	Boolean 	必须 	是否更新成功 	true=成功；false=失败；
     */
    private $isSuccess;
    public function GetIsSuccess(){
        return $this->isSuccess ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "isSuccess", $this->stdResult )) {
            $this->isSuccess = $this->stdResult->{"isSuccess"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "isSuccess", $this->arrayResult )) {
            $this->isSuccess = $arrayResult['isSuccess'];
        }
    }
}