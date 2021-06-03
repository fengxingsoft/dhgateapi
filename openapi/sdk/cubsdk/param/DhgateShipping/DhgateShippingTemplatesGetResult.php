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
class DhgateShippingTemplatesGetResult
{

   /*
    * shippingModelList 	SupplierShippingmodelVO[] 	必须 	运费模板列表
    */
    private $shippingModelList;
    public function GetShippingModelList(){
        return $this->shippingModelList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "shippingModelList", $this->stdResult )) {
            $this->shippingModelList = $this->stdResult->{"shippingModelList"};
        }
        if (array_key_exists ( "shippingModelList", $this->stdResult )) {
            $shippingModelListResult=$this->stdResult->{"shippingModelList"};
            $object = json_decode ( json_encode ( $shippingModelListResult ), true );
            $this->shippingModelList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateShippingTemplatesGetResultInfo=new DhgateShippingTemplatesGetResultInfo();
                $DhgateShippingTemplatesGetResultInfo->setArrayResult($arrayobject );
                $this->shippingModelList[$i] = $DhgateShippingTemplatesGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "shippingModelList", $this->arrayResult )) {
            $this->shippingModelList = $arrayResult['shippingModelList'];
        }
    }
}