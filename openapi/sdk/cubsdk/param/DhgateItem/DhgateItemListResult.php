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
class DhgateItemListResult{

/*
 * itemList 	ItemList[] 	必须 	产品信息列表,只返回产品基本信息 	返回产品基本信息
 */
    private $itemList;
    public function GetItemList(){
        return $this->itemList;
    }
/*
 * pageTotal 	String 	必须 	查询返回总页数 	示例值：222
 */
    private $pageTotal;
    public function GetPageTotal(){
        return $this->pageTotal;
    }
/*
 * total 	String 	必须 	查询返总记录数 	示例值：2050
 */
    private $total;
    public function GetTotal(){
        return $this->total;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

//        if (array_key_exists ( "itemList", $this->stdResult )) {
//            $this->itemList = $this->stdResult->{"itemList"};
//
//        }
        if (array_key_exists ( "itemList", $this->stdResult )) {
            $itemListResult=$this->stdResult->{"itemList"};
            $object = json_decode ( json_encode ( $itemListResult), true );
            $this->itemList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemListResultInfo=new DhgateItemListResultInfo();
                $DhgateItemListResultInfo->setArrayResult($arrayobject );
                $this->itemList  [$i] = $DhgateItemListResultInfo;
            }
        }
        if (array_key_exists ( "pageTotal", $this->stdResult )) {
            $this->pageTotal = $this->stdResult->{"pageTotal"};
        }
        if (array_key_exists ( "total", $this->stdResult )) {
            $this->total = $this->stdResult->{"total"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {

        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "itemList", $this->arrayResult )) {
            $itemListResult= $arrayResult['itemList'];
            for($i=0;$i<count($itemListResult);$i++){
                $DhgateItemListResultInfo=new DhgateItemListResultInfo();
               $DhgateItemListResultInfo->setStdResult($itemListResult[$i] );
               $this->itemList  [$i] = $DhgateItemListResultInfo;
            }
        }
        if (array_key_exists ( "pageTotal", $this->arrayResult )) {
            $this->pageTotal = $arrayResult['pageTotal'];
        }
        if (array_key_exists ( "total", $this->arrayResult )) {
            $this->total = $arrayResult['total'];
        }
    }
}