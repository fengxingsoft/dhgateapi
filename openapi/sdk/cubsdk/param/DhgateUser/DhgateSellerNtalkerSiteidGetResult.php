<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateUser;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateSellerNtalkerSiteidGetResult{

    /*
     * dhtalkSiteId 	DhtalkSiteIdVO 	必须 	卖家企业ID信息
     */
    private $dhtalkSiteId;
    public function GetDhtalkSiteId(){
        return $this->dhtalkSiteId;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "dhtalkSiteId", $this->stdResult )) {
            $this->dhtalkSiteId = $this->stdResult->{"dhtalkSiteId"};

        }
        if (array_key_exists ( "dhtalkSiteId", $this->stdResult )) {
            $dhtalkSiteIdResult=$this->stdResult->{"dhtalkSiteId"};
            $object = json_decode ( json_encode ( $dhtalkSiteIdResult ), true );
            $this->dhtalkSiteId = array ();
                $arrayobject = new ArrayObject ( $object );
                $DhgateSellerNtalkerSiteidGetResultInfo=new DhgateSellerNtalkerSiteidGetResultInfo();
                $DhgateSellerNtalkerSiteidGetResultInfo->setArrayResult($arrayobject );
                $this->dhtalkSiteId = $DhgateSellerNtalkerSiteidGetResultInfo;
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "dhtalkSiteId", $this->arrayResult )) {
            $this->dhtalkSiteId = $arrayResult['dhtalkSiteId'];
        }
    }
}