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
class DhgateItemAferSaleListResult{

    /*
     * afterSaleList 	AfterSaleTemplate[] 	必须 	售后模板列表信息 	售后模板列表信息
     */
    private $afterSaleList;
    public function GetAfterSaleList(){
        return $this->afterSaleList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "afterSaleList", $this->stdResult )) {
            $afterSaleListResult=$this->stdResult->{"afterSaleList"};
            $object = json_decode ( json_encode ( $afterSaleListResult ), true );
            $this->afterSaleList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemAferSaleListResultInfo=new DhgateItemAferSaleListResultInfo();
                $DhgateItemAferSaleListResultInfo->setArrayResult($arrayobject );
                $this->afterSaleList[$i] = $DhgateItemAferSaleListResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "afterSaleList", $this->arrayResult )) {
            $afterSaleListResult = $arrayResult['afterSaleList'];
            for($i = 0; $i < count ( $afterSaleListResult ); $i ++) {
                $DhgateItemAferSaleListResultInfo=new DhgateItemAferSaleListResultInfo();
                $DhgateItemAferSaleListResultInfo->setStdResult($afterSaleListResult[$i] );
                $this->afterSaleList[$i] = $DhgateItemAferSaleListResultInfo;
            }
        }
    }
}