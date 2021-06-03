<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 11:09
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;

class DhgateShippingTemplateGetResultInfoTwo
{
    /*
     * shippingModelTypeList 	ShippingModelTypeList[] 	必须 	运费模板类型详情 	运费模板类型详情
     */
    private $shippingModelTypeList;
    public function GetShippingModelTypeList(){
        return $this->shippingModelTypeList;
    }
    /*
     * shippingTypeId 	String 	必须 	运输方式Id 	运输方式Id,可通过物流运输方式接口获得物流方式信息
     */
    private $shippingTypeId;
    public function GetShippingTypeId(){
        return $this->shippingTypeId;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "shippingTypeId", $this->stdResult )) {
            $this->shippingTypeId = $this->stdResult->{"shippingTypeId"};
        }
        if (array_key_exists ( "shippingModelTypeList", $this->stdResult )) {
            $shippingModelTypeListResult=$this->stdResult->{"shippingModelTypeList"};
            $object = json_decode ( json_encode (  $shippingModelTypeListResult), true );
            $this->shippingModelTypeList = array ();
            for($i=0;$i<count($object);$i++){
                $arrayobject = new ArrayObject ( $object[$i]);
                $DhgateShippingTemplateGetResultInfoDetailTwo=new DhgateShippingTemplateGetResultInfoDetailTwo();
                $DhgateShippingTemplateGetResultInfoDetailTwo->setStdResult($arrayobject );
                $this->shippingModelTypeList[$i] = $DhgateShippingTemplateGetResultInfoDetailTwo;
            }

        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if(array_key_exists('shippingModelTypeList',$this->arrayResult)){
            $shippingModelTypeList=$arrayResult['shippingModelTypeList'];
            $object=json_decode(json_encode($shippingModelTypeList),true);
            $this->shippingModelTypeList=array();
            for($i=0;$i<count($object);$i++){
                $arrayobject=new ArrayObject($object[$i]);
                $DhgateShippingTemplateGetResultInfoDetailTwo=new DhgateShippingTemplateGetResultInfoDetailTwo();
                $DhgateShippingTemplateGetResultInfoDetailTwo->setArrayResult($arrayobject);
                $this->shippingModelTypeList[$i]=$DhgateShippingTemplateGetResultInfoDetailTwo;
            }

        }

        if (array_key_exists ( "shippingTypeId", $this->arrayResult )) {
            $this->shippingTypeId = $arrayResult['shippingTypeId'];
        }
    }
}