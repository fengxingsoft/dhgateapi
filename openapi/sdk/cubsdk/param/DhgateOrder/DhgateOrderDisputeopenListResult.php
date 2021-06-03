<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateOrderDisputeopenListResult{



    /*
     * count 	int 	必须 	总记录数 	1000,表示总记录数为1000
     */
    private $count;
    public function GetCount(){
        return $this->count;
    }
    /*
     * orderDisputeOpenInfos 	OrderDisputeOpenInfo[] 	必须 	纠纷开启订单列表 	纠纷开启订单列表
     */
    private $orderDisputeOpenInfos;
    public function GetOrderDisputeOpenInfos(){
        return $this->orderDisputeOpenInfos;
    }
    /*
     * pages 	int 	必须 	总页数 	20,表示总共20页
     */

    private $pages;
    public function GetPages(){
        return $this->pages;
    }
    private $stdResult;

    public function setStdResult($stdResult) {

        $this->stdResult = $stdResult;
        if (array_key_exists ( "count", $this->stdResult )) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists ( "orderDisputeOpenInfos", $this->stdResult )) {
            $this->orderDisputeOpenInfos = $this->stdResult->{"orderDisputeOpenInfos"};
        }

        if (array_key_exists ( "pages", $this->stdResult )) {
            $this->pages = $this->stdResult->{"pages"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "count", $this->arrayResult )) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists ( "orderDisputeOpenInfos", $this->arrayResult )) {
            $orderDisputeOpenInfosResult=$arrayResult['orderDisputeOpenInfos'];
            $object = json_decode ( json_encode ( $orderDisputeOpenInfosResult ), true );
            $this->orderDisputeOpenInfos = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateOrderDisputeopenListResultInfo=new DhgateOrderDisputeopenListResultInfo();
                $DhgateOrderDisputeopenListResultInfo->setArrayResult($arrayobject );
                $this->orderDisputeOpenInfos  [$i] = $DhgateOrderDisputeopenListResultInfo;
            }
        }
        if (array_key_exists ( "pages", $this->arrayResult )) {
            $this->pages = $arrayResult['pages'];
        }
    }
}