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
class DhgateShippingTemplateGetResultTwo
{

/*
 * createDate 	String 	必须 	创建时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $createDate;
    public function GetCreateDate(){
        return $this->createDate;
    }
/*
 * modelDesc 	String 	必须 	模版描述 	模版概要描述
 */
    private $modelDesc;
    public function GetModelDesc(){
        return $this->modelDesc;
    }
/*
 * modelName 	String 	必须 	模版名称 	卖家创建模板的时候，手动输入的名称；示例值：欧洲标准运费模板
 */
    private $modelName;
    public function GetModelName(){
        return $this->modelName;
    }
/*
 * modelType 	String 	必须 	模板类型 	00=新手运费模板, 01=用户模板
 */
    private $modelType;
    public function GetMmodelType(){
        return $this->modelType;
    }
/*
 * shippingModelType 	ShippingModelType[] 	必须 	运费模板类型 	运费模板类型
 */

    private $shippingModelType;
    public function GetShippingModelType(){
        return $this->shippingModelType;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "createDate", $this->stdResult )) {
            $this->createDate = $this->stdResult->{"createDate"};
        }
        if (array_key_exists ( "modelDesc", $this->stdResult )) {
            $this->modelDesc = $this->stdResult->{"modelDesc"};
        }
        if (array_key_exists ( "modelName", $this->stdResult )) {
            $this->modelName = $this->stdResult->{"modelName"};
        }
        if (array_key_exists ( "modelType", $this->stdResult )) {
            $this->modelType = $this->stdResult->{"modelType"};
        }
        if (array_key_exists ( "shippingModelType", $this->stdResult )) {
            $this->shippingModelType = $this->stdResult->{"shippingModelType"};
        }
        if (array_key_exists ( "shippingModelType", $this->stdResult )) {
            $shippingModelTypeResult=$this->stdResult->{"shippingModelType"};
            $object = json_decode ( json_encode ( $shippingModelTypeResult ), true );
            $this->shippingModelType = array ();
            for($i=0;$i<count($object);$i++){
                $arrayobject = new ArrayObject ( $object[$i]);
                $DhgateShippingTemplateGetResultInfoTwo=new DhgateShippingTemplateGetResultInfoTwo();
                $DhgateShippingTemplateGetResultInfoTwo->setArrayResult($arrayobject );
                $this->shippingModelType[$i] = $DhgateShippingTemplateGetResultInfoTwo;
            }

        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "createDate", $this->arrayResult )) {
            $this->createDate = $arrayResult['createDate'];
        }
        if (array_key_exists ( "modelDesc", $this->arrayResult )) {
            $this->modelDesc = $arrayResult['modelDesc'];
        }
        if (array_key_exists ( "modelName", $this->arrayResult )) {
            $this->modelName = $arrayResult['modelName'];
        }
        if (array_key_exists ( "modelType", $this->arrayResult )) {
            $this->modelType = $arrayResult['modelType'];
        }
        if (array_key_exists ( "shippingModelType", $this->arrayResult )) {
            $shippingModelTypeResult=$arrayResult['shippingModelType'];
            $this->shippingModelType = new DhgateShippingTemplateGetResultInfoTwo();
            $this->shippingModelType->setStdResult ( $shippingModelTypeResult);
        }
    }
}