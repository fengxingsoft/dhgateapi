<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemBaseUpdateResult
{
    /*
     *  isSuccess 	boolean 	必须 	是否更新成功 	true=成功；false=失败；
     */
    private $success;
    public function GetSuccess(){
        return $this->success ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "success", $this->stdResult )) {
            $this->success = $this->stdResult->{"success"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "success", $this->arrayResult )) {
            $this->success = $arrayResult['success'];
        }

    }
}