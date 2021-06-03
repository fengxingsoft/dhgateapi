<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateSellerPaymentGetResult{

    /*
     * sellerOrderAccountList 	SellerOrderAccount[] 	必须 	seller 虚拟账户输出
     */
    private $sellerOrderAccountList;
    public function GetSellerOrderAccountList(){
        return $this->sellerOrderAccountList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "sellerOrderAccountList", $this->stdResult )) {
            $this->sellerOrderAccountList = $this->stdResult->{"sellerOrderAccountList"};

        }
//        if (array_key_exists ( "sellerOrderAccountList", $this->stdResult )) {
//            $sellerOrderAccountListResult=$this->stdResult->{"sellerOrderAccountList"};
//            $object = json_decode ( json_encode ( $sellerOrderAccountListResult ), true );
//            $this->sellerOrderAccountList = array ();
//            for($i = 0; $i < count ( $object ); $i ++) {
//                $arrayobject = new ArrayObject ( $object [$i] );
//                $DhgateSellerPaymentGetResultInfo=new DhgateSellerPaymentGetResultInfo();
//                $DhgateSellerPaymentGetResultInfo->setArrayResult($arrayobject );
//                $this->sellerOrderAccountList[$i] = $DhgateSellerPaymentGetResultInfo;
//            }
//        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "sellerOrderAccountList", $this->arrayResult )) {
            $sellerOrderAccountListResult= $arrayResult['sellerOrderAccountList'];
            for($i = 0; $i < count ( $object ); $i ++) {
                $DhgateSellerPaymentGetResultInfo=new DhgateSellerPaymentGetResultInfo();
                $DhgateSellerPaymentGetResultInfo->setArrayResult($sellerOrderAccountListResult );
                $this->sellerOrderAccountList[$i] = $DhgateSellerPaymentGetResultInfo;
            }
        }
    }
}