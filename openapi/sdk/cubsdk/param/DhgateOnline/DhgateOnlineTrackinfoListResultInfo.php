<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:27
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOnlineTrackinfoListResultInfo
{
/*
 * billId 	String 	必须 	发货流水号 	发货流水号
 */
    private $billId;
    public function GetBillId(){
        return $this->billId;
    }
/*
 * data 	TrackinfoItem[] 	必须 	物流信息 	获取物流跟踪信息
 */
    private $data;
    public function GetData(){
        return $this->data;
    }
/*
 * trackno 	String 	必须 	运单号 	运单号
 */
    private $trackno;
    public function GetTrackno(){
        return $this->trackno;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "billId", $this->stdResult )) {
            $this->billId = $this->stdResult->{"billId"};
        }
        if (array_key_exists ( "trackno", $this->stdResult )) {
            $this->trackno = $this->stdResult->{"trackno"};
        }

        if (array_key_exists ( "data", $this->stdResult )) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode ( json_encode ( $dataResult), true );
            $this->data = array ();
            $arrayobject = new ArrayObject ( $object);
            $DhgateOnlineTrackinfoListResultInfoDetail=new DhgateOnlineTrackinfoListResultInfoDetail();
            $DhgateOnlineTrackinfoListResultInfoDetail->setArrayResult($arrayobject );
            $this->data = $DhgateOnlineTrackinfoListResultInfoDetail;
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "billId", $this->arrayResult )) {
            $this->billId = $arrayResult['billId'];
        }
        if (array_key_exists ( "trackno", $this->arrayResult )) {
            $this->trackno = $arrayResult['trackno'];
        }
        if (array_key_exists ( "data", $this->arrayResult )) {
            $this->data = $arrayResult['data'];
        }
    }
}