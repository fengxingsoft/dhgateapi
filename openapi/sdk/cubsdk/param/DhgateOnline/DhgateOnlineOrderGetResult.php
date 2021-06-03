<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 19:15
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOnlineOrderGetResult
{
    /*
      * data 	DetailResData[] 	必须 	状态变更的运单信息
      */
    private $data;
    public function GetData(){
        return $this->data;
    }
    /*
     * time 	String 	必须 	时间
     */
    private $time;
    public function GetTime(){
        return $this->time;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "data", $this->stdResult )) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode ( json_encode ( $dataResult), true );
            $this->data = array ();
            $arrayobject = new ArrayObject ( $object);
            $DhgateOnlineOrderGetResultInfo=new DhgateOnlineOrderGetResultInfo();
            $DhgateOnlineOrderGetResultInfo->setArrayResult($arrayobject );
            $this->data = $DhgateOnlineOrderGetResultInfo;
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "data", $this->arrayResult )) {
            $this->data = $arrayResult['data'];
        }
    }
}