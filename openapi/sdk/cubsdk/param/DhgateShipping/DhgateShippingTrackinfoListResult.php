<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 10:06
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateShippingTrackinfoListResult
{
    private $TrackInfoList;
    public function GetTrackInfoList(){
        return $this->TrackInfoList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "TrackInfoList", $this->stdResult )) {
            $this->TrackInfoList = $this->stdResult->{"TrackInfoList"};
        }
        if (array_key_exists ( "TrackInfoList", $this->stdResult )) {
            $TrackInfoListResult=$this->stdResult->{"TrackInfoList"};
            $object = json_decode ( json_encode ( $TrackInfoListResult ), true );
            $this->TrackInfoList = array ();
            $arrayobject = new ArrayObject ( $object);
            $DhgateShippingTrackinfoListResultInfo=new DhgateShippingTrackinfoListResultInfo();
            $DhgateShippingTrackinfoListResultInfo->setArrayResult($arrayobject );
            $this->TrackInfoList = $DhgateShippingTrackinfoListResultInfo;
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "TrackInfoList", $this->arrayResult )) {
            $this->TrackInfoList = $arrayResult['TrackInfoList'];
        }
    }
}