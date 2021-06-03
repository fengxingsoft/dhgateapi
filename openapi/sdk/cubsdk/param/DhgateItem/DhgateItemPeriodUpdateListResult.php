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
class DhgateItemPeriodUpdateListResult{

/*
 * isSuccess 	Boolean 	必须 	是否批量更新成功 	true=成功；false=失败；是否批量更新成功，如果为true即全部更新成功,则resultList为空数组。
 */
    private $isSuccess;
    public function GetIsSuccess(){
        return $this->isSuccess;
    }
/*
 * resultList 	Result[] 	必须 	产品更新有效期处理列表 	该列表包含的参数：itemCode=产品itemCode，isSuccess=是否操作成功，failReason=操作失败原因
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
                $DhgateItemPeriodUpdateListResultInfo=new DhgateItemPeriodUpdateListResultInfo();
                $DhgateItemPeriodUpdateListResultInfo->setArrayResult($arrayobject );
                $this->resultList[$i] = $DhgateItemPeriodUpdateListResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "isSuccess", $this->arrayResult )) {
            $this->isSuccess = $arrayResult['isSuccess'];
        }
        if (array_key_exists ( "resultList", $this->arrayResult )) {
            $this->resultList = $arrayResult['resultList'];
        }
    }
}