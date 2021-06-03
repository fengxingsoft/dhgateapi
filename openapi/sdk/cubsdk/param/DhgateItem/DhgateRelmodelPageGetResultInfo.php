<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateRelmodelPageGetResultInfo{

/*
 * modelName 	String 	必须 	关联产品模板产品名称 	示例值：服装类关联产品模板
 */
    private $modelName;
    public function GetModelName(){
        return $this->modelName;
    }
/*
 * relModelId 	Long 	必须 	关联产品模板ID 	示例值：2123250665896
 */
    private $relModelId;
    public function GetRelModelId(){
        return $this->relModelId;
    }
/*
 * relModelProdList 	RelModelProductBizObj[] 	必须 	关联产品模板产品列表 	关联产品模板中的所有商品，最多有6个
 */
    private $relModelProdList;
    public function GetRelModelProdList(){
        return $this->relModelProdList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "modelName", $this->stdResult )) {
            $this->modelName = $this->stdResult->{"modelName"};
        }
        if (array_key_exists ( "relModelId", $this->stdResult )) {
            $this->relModelId = $this->stdResult->{"relModelId"};
        }
        if (array_key_exists ( "relModelProdList", $this->stdResult )) {
            $this->relModelProdList = $this->stdResult->{"relModelProdList"};

        }
        if (array_key_exists ( "relModelProdList", $this->stdResult )) {
            $relModelProdListResult=$this->stdResult->{"relModelProdList"};
            $object = json_decode ( json_encode ( $relModelProdListResult), true );
            $this->relModelProdList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateRelmodelPageGetResultInfoRelModelProdList=new DhgateRelmodelPageGetResultInfoRelModelProdList();
                $DhgateRelmodelPageGetResultInfoRelModelProdList->setArrayResult($arrayobject );
                $this->relModelProdList[$i] = $DhgateRelmodelPageGetResultInfoRelModelProdList;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "modelName", $this->arrayResult )) {
            $this->modelName = $arrayResult['modelName'];
        }
        if (array_key_exists ( "relModelId", $this->arrayResult )) {
            $this->relModelId = $arrayResult['relModelId'];
        }
        if (array_key_exists ( "relModelProdList", $this->arrayResult )) {
            $this->relModelProdList = $arrayResult['relModelProdList'];
        }
    }
}