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
class DhgateShippingTrackinfoGetResult
{
    private $frtTrackInfoList;
    public function GetFrtTrackInfoList(){
        return $this->frtTrackInfoList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "frtTrackInfoList", $this->stdResult )) {
            $frtTrackInfoListResult=$this->stdResult->{"frtTrackInfoList"};
            $object = json_decode ( json_encode ( $frtTrackInfoListResult ), true );
            $this->frtTrackInfoList = array ();
            for($i=0;$i<count($object);$i++){
                $arrayobject = new ArrayObject ( $object[$i]);
                $DhgateShippingTrackinfoGetResultInfo=new DhgateShippingTrackinfoGetResultInfo();
                $DhgateShippingTrackinfoGetResultInfo->setArrayResult($arrayobject );
                $this->frtTrackInfoList[$i] = $DhgateShippingTrackinfoGetResultInfo;
            }

        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "frtTrackInfoList", $this->arrayResult )) {
            $this->frtTrackInfoList = $arrayResult['frtTrackInfoList'];
        }
    }
}