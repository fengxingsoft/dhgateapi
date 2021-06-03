<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:25
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOnlineTrackinfoListResult
{

    /*
      * data 	OrderResData 	必须 	下单结果信息
      */
    private $data;
    public function GetData(){
        return $this->data;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "data", $this->stdResult )) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode ( json_encode ( $dataResult), true );
            $this->data = array ();
            $arrayobject = new ArrayObject ( $object);
            $DhgateOnlineTrackinfoListResultInfo=new DhgateOnlineTrackinfoListResultInfo();
            $DhgateOnlineTrackinfoListResultInfo->setArrayResult($arrayobject );
            $this->data = $DhgateOnlineTrackinfoListResultInfo;
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