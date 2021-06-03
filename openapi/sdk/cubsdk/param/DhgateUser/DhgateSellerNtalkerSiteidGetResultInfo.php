<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateUser;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateSellerNtalkerSiteidGetResultInfo
{

    /*
     * siteId 	String 	必须 	卖家的企业id 	卖家的企业id
     */
    private $siteId;
    public function GetSiteId(){
        return $this->siteId ;
    }
    /*
     * statusCode 	String 	必须 	状态码 	状态码
     */
    private $statusCode;
    public function GetStatusCode(){
        return $this->statusCode ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "siteId", $this->stdResult )) {
            $this->siteId = $this->stdResult->{"siteId"};
        }
        if (array_key_exists ( "statusCode", $this->stdResult )) {
            $this->statusCode = $this->stdResult->{"statusCode"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "siteId", $this->arrayResult )) {
            $this->siteId = $arrayResult['siteId'];
        }
        if (array_key_exists ( "statusCode", $this->arrayResult )) {
            $this->statusCode = $arrayResult['statusCode'];
        }
    }
}