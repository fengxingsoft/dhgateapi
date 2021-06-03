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
class DhgateItemSkuListResult{
    /*
     * itemSkuList 	itemSku[] 	必须 	产品sku列表 	产品sku信息列表
     */
    private $itemSkuList;
    public function GetItemSkuList(){
        return $this->itemSkuList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "itemSkuList", $this->stdResult )) {
            $itemSkuListResult=$this->stdResult->{"itemSkuList"};
            $object = json_decode ( json_encode ( $itemSkuListResult ), true );
            $this->itemSkuList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemSkuListResultInfo=new DhgateItemSkuListResultInfo();
                $DhgateItemSkuListResultInfo->setArrayResult($arrayobject );
                $this->itemSkuList[$i] = $DhgateItemSkuListResultInfo;
            }

        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;

        if (array_key_exists("itemSkuList", $this->arrayResult)) {
            $itemSkuListResult= $arrayResult['itemSkuList'];
            for($i = 0; $i < count ( $itemSkuListResult ); $i ++) {
                $DhgateItemSkuListResultInfo=new DhgateItemSkuListResultInfo();
                $DhgateItemSkuListResultInfo->setArrayResult($itemSkuListResult[$i] );
                $this->itemSkuList[$i] = $DhgateItemSkuListResultInfo;
            }
        }
    }
}