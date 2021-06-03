<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOrderApplymoneyCheckResult
{
    /*
     *  canMoneyApply	boolean 	必须 	是否能请款 	true-可以请款，false-不能请款
     */
    private $canMoneyApply;
    public function GetCanMoneyApply(){
        return $this->canMoneyApply ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "canMoneyApply", $this->stdResult )) {
            $this->canMoneyApply = $this->stdResult->{"canMoneyApply"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "canMoneyApply", $this->arrayResult )) {
            $this->canMoneyApply = $arrayResult['canMoneyApply'];
        }

    }
}