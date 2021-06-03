<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 18:08
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateOnlineDeliveryModifyResult
{
    /*
     * data 	DeliveryModifyResData 	必须 	修改平台运单号结果
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
            $DhgateOnlineDeliveryModifyResultInfo=new DhgateOnlineDeliveryModifyResultInfo();
            $DhgateOnlineDeliveryModifyResultInfo->setArrayResult($arrayobject );
            $this->data = $DhgateOnlineDeliveryModifyResultInfo;
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