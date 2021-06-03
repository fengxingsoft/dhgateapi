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
class DhgateItemPeroidListResult{
    private $periodList;
    public function GetPeriodList(){
        return $this->periodList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "periodList", $this->stdResult )) {
            $this->periodList = $this->stdResult->{"periodList"};
        }
        if (array_key_exists ( "periodList", $this->stdResult )) {
            $periodListResult=$this->stdResult->{"periodList"};
            $object = json_decode ( json_encode ( $periodListResult), true );
            $this->periodList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemPeroidListResultInfo=new DhgateItemPeroidListResultInfo();
                $DhgateItemPeroidListResultInfo->setArrayResult($arrayobject );
                $this->periodList[$i] = $DhgateItemPeroidListResultInfo;
            }
        }
        if (array_key_exists ( "sumPage", $this->stdResult )) {
            $this->sumPage = $this->stdResult->{"sumPage"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "count", $this->arrayResult )) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists ( "orderDisputeOpenInfos", $this->arrayResult )) {
            $this->orderDisputeOpenInfos = $arrayResult['orderDisputeOpenInfos'];
        }
        if (array_key_exists ( "pages", $this->arrayResult )) {
            $this->pages = $arrayResult['pages'];
        }
    }
}