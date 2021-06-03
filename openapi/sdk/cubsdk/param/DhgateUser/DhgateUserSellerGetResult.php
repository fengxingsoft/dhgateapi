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
class DhgateUserSellerGetResult{
    /*
     * supplier 	SupplierVO 	必须 	卖家信息
     */
    private $supplier;
    public function GetSupplier(){
        return $this->supplier;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "supplier", $this->stdResult )) {
            $this->supplier = $this->stdResult->{"supplier"};

        }
        if (array_key_exists ( "supplier", $this->stdResult )) {
            $supplierResult=$this->stdResult->{"supplier"};
            $object = json_decode ( json_encode ( $supplierResult ), true );
            $this->supplier = array ();
                $arrayobject = new ArrayObject ( $object);
                $DhgateUserSellerGetResultInfo=new DhgateUserSellerGetResultInfo();
                $DhgateUserSellerGetResultInfo->setArrayResult($arrayobject );
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        $supplierResult=$arrayResult['supplier'];
        $this->supplier = new DhgateUserSellerGetResultInfo();
        $this->supplier->setStdResult ( $supplierResult);
    }
}