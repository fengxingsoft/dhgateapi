<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:25
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateShippingComputePackageResult
{

    /*
      * dshippingCostList
     * ShippingCost[] 	必须
     * 运费计算结果列表信息 	运费计算结果，包括物流方式，送达国家，运费设置，运费计算价格等列表信息
      */
    private $shippingCostList;
    public function GetShippingCostList(){
        return $this->shippingCostList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "shippingCostList", $this->stdResult )) {
            $shippingCostListResult = $this->stdResult->{"shippingCostList"};
            $object = json_decode ( json_encode ( $shippingCostListResult ), true );
            $this->shippingCostList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateShippingComputePackageResultInfo = new DhgateShippingComputePackageResultInfo ();
                $DhgateShippingComputePackageResultInfo->setArrayResult ( $arrayobject );
                $this->shippingCostList [$i] = $DhgateShippingComputePackageResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "shippingCostList", $this->arrayResult )) {
            for($i=0;$i<=count($arrayResult['categoryPublishList']);$i++){
                $shippingCostListResult=$arrayResult['categoryPublishList'];
                $this->shippingCostList = new DhgateShippingComputePackageResultInfo();
                $this->shippingCostList->setStdResult( $shippingCostListResult);
            }
        }
    }
}