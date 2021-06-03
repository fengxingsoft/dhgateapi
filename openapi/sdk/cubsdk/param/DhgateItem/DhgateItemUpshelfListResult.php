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
class DhgateItemUpshelfListResult{

/*
 * isSuccess 	Boolean 	必须 	是否批量处理成功 	true=成功；false=失败；是否批量处理成功，如果为true即全部更新成功,则resultList为空数组。
 */
    private $isSuccess;
    public function GetIsSuccess(){
        return $this->isSuccess;
    }
/*
 * resultList 	Result[] 	必须 	产品批量处理结果列表 	该列表包含的参数：itemCode=产品itemCode，isSuccess=是否操作成功，failReason=操作失败原因
 */
    private $resultList;
    public function GetResultList(){
        return $this->resultList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "isSuccess", $this->stdResult )) {
            $this->isSuccess = $this->stdResult->{"isSuccess"};
        }
        if (array_key_exists ( "resultList", $this->stdResult )) {
            $this->resultList = $this->stdResult->{"resultList"};

        }
        if (array_key_exists ( "resultList", $this->stdResult )) {
            $resultListResult=$this->stdResult->{"resultList"};
            $object = json_decode ( json_encode ( $resultListResult ), true );
            $this->resultList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemUpshelfListResultInfo=new DhgateItemUpshelfListResultInfo();
                $DhgateItemUpshelfListResultInfo->setArrayResult($arrayobject );
                $this->resultList[$i] = $DhgateItemUpshelfListResultInfo;
            }
        }
        if (array_key_exists ( "sumPage", $this->stdResult )) {
            $this->sumPage = $this->stdResult->{"sumPage"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "isSuccess", $this->arrayResult )) {
            $this->isSuccess = $arrayResult['isSuccess'];
        }
        if (array_key_exists ( "orderDisputeOpenInfos", $this->arrayResult )) {
            $this->orderDisputeOpenInfos = $arrayResult['orderDisputeOpenInfos'];
        }
        if (array_key_exists ( "pages", $this->arrayResult )) {
            $this->pages = $arrayResult['pages'];
        }
    }
}