<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 19:16
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOnlineOrderPlaceResultInfo
{
/*
 * billId 	String 	必须 	发货流水号 	发货流水号
 */
    private $billId;
    public function GetBillId(){
        return $this->billId;
    }

/*
 * cuuState 	String 	必须 	发货单当前状态 	A:转单中 ,B:待发货,C:已收货,D:已支付,E:已发货
 */
    private $cuuState;
    public function GetCuuState(){
        return $this->cuuState;
    }

/*
 * refnumb 	String 	必须 	客户订单号 	客户订单号
 */
    private $refnumb;
    public function GetRefnumb(){
        return $this->refnumb;
    }

/*
 * trackno 	String 	必须 	国际运单号 	国际运单号
 */
    private $trackno;
    public function GetTrackno(){
        return $this->trackno;
    }

/*
 * vTrackno 	String 	可选 	转单号 	转单号
 */
    private $vTrackno;
    public function GetVTrackno(){
        return $this->vTrackno;
    }



    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "billId", $this->stdResult )) {
            $this->billId = $this->stdResult->{"billId"};
        }
        if (array_key_exists ( "cuuState", $this->stdResult )) {
            $this->cuuState = $this->stdResult->{"cuuState"};
        }
        if (array_key_exists ( "refnumb", $this->stdResult )) {
            $this->refnumb = $this->stdResult->{"refnumb"};
        }
        if (array_key_exists ( "trackno", $this->stdResult )) {
            $this->trackno = $this->stdResult->{"trackno"};
        }
        if (array_key_exists ( "vTrackno", $this->stdResult )) {
            $this->vTrackno = $this->stdResult->{"vTrackno"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "billId", $this->arrayResult )) {
            $this->billId = $arrayResult['billId'];
        }
        if (array_key_exists ( "cuuState", $this->arrayResult )) {
            $this->cuuState = $arrayResult['cuuState'];
        }
        if (array_key_exists ( "refnumb", $this->arrayResult )) {
            $this->refnumb = $arrayResult['refnumb'];
        }
        if (array_key_exists ( "trackno", $this->arrayResult )) {
            $this->trackno = $arrayResult['trackno'];
        }
        if (array_key_exists ( "vTrackno", $this->arrayResult )) {
            $this->vTrackno = $arrayResult['vTrackno'];
        }

    }
}