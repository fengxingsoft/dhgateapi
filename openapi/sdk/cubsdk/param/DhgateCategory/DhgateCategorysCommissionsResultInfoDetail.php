<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 9:26
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategorysCommissionsResultInfoDetail{
    /*
     * commissionRate 	String 	必须 	佣金率 	佣金率
     */
    private $commissionRate;
    public function GetCommissionRate(){
        return $this->commissionRate;
    }
    /*
     * leftBound 	String 	必须 	价格左边界 	价格左边界
     */
    private $leftBound;
    public function GetLeftBound(){
        return $this->leftBound;
    }
    /*
     * leftBoundClose 	boolean 	必须 	价格左边界是否是开区间 	价格左边界是否是开区间
     */
    private $leftBoundClose;
    public function GetLeftBoundClose(){
        return $this->leftBoundClose;
    }
    /*
     * rightBound 	String 	必须 	价格右边界 	价格右边界
     */
    private $rightBound;
    public function GetRightBound(){
        return $this->rightBound;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "commissionRate", $this->stdResult )) {
            $this->commissionRate = $this->stdResult->{"commissionRate"};
        }
        if (array_key_exists ( "leftBound", $this->stdResult )) {
            $this->leftBound = $this->stdResult->{"leftBound"};
        }
        if (array_key_exists ( "leftBoundClose", $this->stdResult )) {
            $this->leftBoundClose = $this->stdResult->{"leftBoundClose"};
        }
        if (array_key_exists ( "rightBound", $this->stdResult )) {
            $this->rightBound = $this->stdResult->{"rightBound"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "commissionRate", $this->arrayResult )) {
            $this->commissionRate = $arrayResult['commissionRate'];
        }
        if (array_key_exists ( "leftBound", $this->arrayResult )) {
            $this->leftBound = $arrayResult['leftBound'];
        }
        if (array_key_exists ( "leftBoundClose", $this->arrayResult )) {
            $this->leftBoundClose = $arrayResult['leftBoundClose'];
        }
        if (array_key_exists ( "rightBound", $this->arrayResult )) {
            $this->rightBound = $arrayResult['rightBound'];
        }
    }
}