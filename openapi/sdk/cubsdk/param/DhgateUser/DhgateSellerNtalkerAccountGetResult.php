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
class DhgateSellerNtalkerAccountGetResult{
    private $dhtalSupplier;
    public function GetDhtalSupplier(){
        return $this->dhtalSupplier;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "dhtalSupplier", $this->stdResult )) {
            $this->dhtalSupplier = $this->stdResult->{"dhtalSupplier"};

        }
        if (array_key_exists ( "dhtalSupplier", $this->stdResult )) {
            $dhtalSupplierResult=$this->stdResult->{"dhtalSupplier"};
            $object = json_decode ( json_encode ( $dhtalSupplierResult ), true );
            $this->dhtalSupplier = array ();
                $arrayobject = new ArrayObject ( $object);
                $DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVO=new DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVO();
                $DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVO->setArrayResult($arrayobject );
                $this->dhtalSupplier= $DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVO;
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "dhtalSupplier", $this->arrayResult )) {
            $this->dhtalSupplier = $arrayResult['dhtalSupplier'];
        }
    }
}