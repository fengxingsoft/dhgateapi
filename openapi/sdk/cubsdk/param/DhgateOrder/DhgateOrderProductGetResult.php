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
class DhgateOrderProductGetResult{

    /*
     * orderProductList 	OrderProduct[] 	必须 	订单产品信息 	订单产品信息
     */
    private $orderProductList;
    public function GetOrderProductList(){
        return $this->orderProductList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "orderProductList", $this->stdResult )) {
            $orderProductListResult=$this->stdResult->{"orderProductList"};
            $object = json_decode ( json_encode ( $orderProductListResult ), true );
            $this->orderProductList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateOrderProductGetResultInfo=new DhgateOrderProductGetResultInfo();
                $DhgateOrderProductGetResultInfo->setArrayResult($arrayobject );
                $this->orderProductList  [$i] = $DhgateOrderProductGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "orderProductList", $this->stdResult )) {
            $orderProductListResult= $arrayResult['orderProductList'];
            for($i = 0; $i < count ( $orderProductListResult ); $i ++) {
                $arrayobject = new ArrayObject ( $orderProductListResult[$i] );
                $DhgateOrderProductGetResultInfo=new DhgateOrderProductGetResultInfo();
                $DhgateOrderProductGetResultInfo->setStdResult($arrayobject );
                $this->orderProductList  [$i] = $DhgateOrderProductGetResultInfo;
            }
        }
    }
}