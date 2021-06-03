<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 18:48
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOnlineLabelGetResultInfo
{

/*
 * billIds 	String[] 	必须 	发货流水号 	发货流水号
 */
    private $billIds;
    public function GetBillIds(){
        return $this->billIds;
    }
/*
 * tracknos 	String[] 	必须 	运单号 	运单号
 */
    private $tracknos;
    public function GetTracknos(){
        return $this->tracknos;
    }
/*
 * urls 	String[] 	必须 	标签URL 	标签URL
 */
    private $urls;
    public function GetUrls(){
        return $this->urls;
    }



    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "billIds", $this->stdResult )) {
            $this->billIds = $this->stdResult->{"billIds"};
        }
        if (array_key_exists ( "tracknos", $this->stdResult )) {
             $this->tracknos = $this->stdResult->{"tracknos"};
         }
         if (array_key_exists ( "urls", $this->stdResult )) {
              $this->urls = $this->stdResult->{"urls"};
          }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "billIds", $this->arrayResult )) {
            $this->billIds = $arrayResult['billIds'];
        }
        if (array_key_exists ( "tracknos", $this->arrayResult )) {
            $this->tracknos = $arrayResult['tracknos'];
        }
        if (array_key_exists ( "urls", $this->arrayResult )) {
            $this->urls = $arrayResult['urls'];
        }

    }
}