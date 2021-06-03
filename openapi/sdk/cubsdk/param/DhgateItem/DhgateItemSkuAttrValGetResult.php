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
class DhgateItemSkuAttrValGetResult{
    /*
     * itemSkuAttrvalList 	itemSkuAttrval[] 	必须 	产品SKU属性值列表 	产品SKU属性值列表
     */
    private $itemSkuAttrvalList;
    public function GetItemSkuAttrvalList(){
        return $this->itemSkuAttrvalList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "itemSkuAttrvalList", $this->stdResult )) {
            $this->itemSkuAttrvalList = $this->stdResult->{"itemSkuAttrvalList"};

        }
        if (array_key_exists ( "itemSkuAttrvalList", $this->stdResult )) {
            $itemSkuAttrvalListResult=$this->stdResult->{"itemSkuAttrvalList"};
            $object = json_decode ( json_encode ( $itemSkuAttrvalListResult ), true );
            $this->itemSkuAttrvalList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemSkuAttrValGetResultInfo=new DhgateItemSkuAttrValGetResultInfo();
                $DhgateItemSkuAttrValGetResultInfo->setArrayResult($arrayobject );
                $this->itemSkuAttrvalList[$i] = $DhgateItemSkuAttrValGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "itemSkuAttrvalList", $this->arrayResult )) {
            $itemSkuAttrvalListResult= $arrayResult['itemSkuAttrvalList'];
            for($i = 0; $i < count ( $itemSkuAttrvalListResult ); $i ++) {
                $DhgateItemSkuAttrValGetResultInfo=new DhgateItemSkuAttrValGetResultInfo();
                $DhgateItemSkuAttrValGetResultInfo->setArrayResult($DhgateItemSkuAttrValGetResultInfo );
                $this->itemSkuAttrvalList= $DhgateItemSkuAttrValGetResultInfo;
            }
        }
    }
}