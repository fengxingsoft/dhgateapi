<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateRelmodelPageGetResultInfoRelModelProdList
{

/*
 * itemcode 	Long 	必须 	产品编码 	示例值：212325066
 */
    private $itemcode;
    public function GetItemcode(){
        return $this->itemcode ;
    }
/*
 * relModelId 	Long 	必须 	关联产品模板ID 	示例值：2123250665896
 */
    private $relModelId;
    public function GetRelModelId(){
        return $this->relModelId ;
    }
/*
 * sortNo 	Integer 	必须 	关联产品模板呢产品展示时的排序号 	示例值：1
 */
    private $sortNo;
    public function GetSortNo(){
        return $this->sortNo ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "itemcode", $this->stdResult )) {
            $this->itemcode = $this->stdResult->{"itemcode"};
        }
        if (array_key_exists ( "relModelId", $this->stdResult )) {
            $this->relModelId = $this->stdResult->{"relModelId"};
        }
        if (array_key_exists ( "sortNo", $this->stdResult )) {
            $this->sortNo = $this->stdResult->{"sortNo"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "itemcode", $this->arrayResult )) {
            $this->itemcode = $arrayResult['itemcode'];
        }
        if (array_key_exists ( "relModelId", $this->arrayResult )) {
            $this->relModelId = $arrayResult['relModelId'];
        }
        if (array_key_exists ( "sortNo", $this->arrayResult )) {
            $this->sortNo = $arrayResult['sortNo'];
        }
    }
}