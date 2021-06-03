<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 22:16
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;

class DhgateShippingTemplateGetResultInfo extends SDKDomain
{
/*
 * createdate 	Date 	必须 	创建时间 	创建时间
 */
    private $createdate;
    public function GetCreatedate(){
        return $this->createdate;
    }
/*
 * isdefault 	String 	必须 	是否默认模版 1是,0不是 	是否默认模版 1是,0不是
 */
    private $isdefault;
    public function GetIsdefault(){
        return $this->isdefault;
    }
/*
 * isDHPort 	String 	必须 	是否是海外直发模版 	是否是海外直发模版
 */
    private $isDHPort;
    public function GetIsDHPort(){
        return $this->isDHPort;
    }
/*
 * modelitems 	String 	必须 	模版概要描述 	模版概要描述
 */
    private $modelitems;
    public function GetModelitems(){
        return $this->modelitems;
    }
/*
 * modelname 	String 	必须 	模版名称 	模版名称
 */
    private $modelname;
    public function GetModelname(){
        return $this->modelname;
    }
/*
 * modeltype 	String 	必须 	模板类型 00新手运费模板 01用户模板 	模板类型 00新手运费模板 01用户模板
 */
    private $modeltype;
    public function GetModeltype(){
        return $this->modeltype;
    }
/*
 * shippingmodelid 	String 	必须 	模版ID 	模版ID
 */
    private $shippingmodelid;
    public function GetShippingmodelid(){
        return $this->shippingmodelid;
    }
/*
 * shippingmodelTypeList 	SupplierShippingmodelTypeVO[] 	必须 	运费模板类型 	运费模板类型
 */
    private $shippingmodelTypeList;
    public function GetShippingmodelTypeList(){
        return $this->shippingmodelTypeList;
    }
/*
 * supplierid 	String 	必须 	卖家ID 	卖家ID
 */
    private $supplierid;
    public function GetSupplierid(){
        return $this->supplierid;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "createdate", $this->stdResult )) {
            $this->createdate = $this->stdResult->{"createdate"};
        }
        if (array_key_exists ( "isdefault", $this->stdResult )) {
            $this->isdefault = $this->stdResult->{"isdefault"};
        }
        if (array_key_exists ( "isDHPort", $this->stdResult )) {
            $this->isDHPort = $this->stdResult->{"isDHPort"};
        }
        if (array_key_exists ( "modelitems", $this->stdResult )) {
            $this->modelitems = $this->stdResult->{"modelitems"};
        }
        if (array_key_exists ( "modelname", $this->stdResult )) {
            $this->modelname = $this->stdResult->{"modelname"};
        }
        if (array_key_exists ( "modeltype", $this->stdResult )) {
            $this->modeltype = $this->stdResult->{"modeltype"};
        }
        if (array_key_exists ( "shippingmodelid", $this->stdResult )) {
            $this->shippingmodelid = $this->stdResult->{"shippingmodelid"};
        }

        if (array_key_exists ( "supplierid", $this->stdResult )) {
            $this->supplierid = $this->stdResult->{"supplierid"};
        }
//        if (array_key_exists ( "shippingmodelTypeList", $this->stdResult )) {
//            $shippingmodelTypeListResult = $this->stdResult->{"shippingmodelTypeList"};
//            $object = json_decode(json_encode($shippingmodelTypeListResult), true);
//            $this->shippingmodelTypeList = array();
//            for ($i = 0; $i < count($object); $i++) {
//                $arrayobject = new ArrayObject ($object[$i]);
//                $DhgateShippingTemplateGetResultInfoDetail = new DhgateShippingTemplateGetResultInfoDetail();
//                $DhgateShippingTemplateGetResultInfoDetail->setArrayResult($arrayobject);
//                $this->shippingmodelTypeList[$i] = $DhgateShippingTemplateGetResultInfoDetail;
//            }
//        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "createdate", $this->arrayResult )) {
            $this->createdate = $arrayResult['createdate'];
        }
        if (array_key_exists ( "isdefault", $this->arrayResult )) {
            $this->isdefault = $arrayResult['isdefault'];
        }
        if (array_key_exists ( "isDHPort", $this->arrayResult )) {
            $this->isDHPort = $arrayResult['isDHPort'];
        }
        if (array_key_exists ( "modelitems", $this->arrayResult )) {
            $this->modelitems = $arrayResult['modelitems'];
        }
        if (array_key_exists ( "modelname", $this->arrayResult )) {
            $this->modelname = $arrayResult['modelname'];
        }
        if (array_key_exists ( "modeltype", $this->arrayResult )) {
            $this->modeltype = $arrayResult['modeltype'];
        }
        if (array_key_exists ( "shippingmodelid", $this->arrayResult )) {
            $this->shippingmodelid = $arrayResult['shippingmodelid'];
        }
//        if (array_key_exists ( "shippingmodelTypeList", $this->arrayResult )) {
//            $this->shippingmodelTypeList= $arrayResult['shippingmodelTypeList'];
//        }
//
        if (array_key_exists ( "shippingmodelTypeList", $this->arrayResult )) {
            $shippingmodelTypeListResult = $arrayResult ['shippingmodelTypeList'];
            $this->shippingmodelTypeList=$shippingmodelTypeListResult;
             for ($i = 0; $i < count($shippingmodelTypeListResult); $i++) {
                $this->shippingmodelTypeList[$i] = new DhgateShippingTemplateGetResultInfoDetail ();
                 $this->shippingmodelTypeList[$i]->setStdResult($shippingmodelTypeListResult);
            }
       }

        if (array_key_exists ( "supplierid", $this->arrayResult )) {
            $this->supplierid = $arrayResult['supplierid'];
        }
    }
}