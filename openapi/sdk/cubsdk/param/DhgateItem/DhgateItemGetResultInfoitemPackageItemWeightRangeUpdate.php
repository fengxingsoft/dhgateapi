<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemGetResultInfoitemPackageItemWeightRangeUpdate
{

    /*
     * baseQt 	Long 	可选 	基本数量 	示例值：2；2KG每件
     */
    private $baseQt;
    public function GetBaseQt(){
        return $this->baseQt ;
    }
    /*
     * stepQt 	Long 	可选 	阶梯数量 	示例值：2；每增加2件
     */
    private $stepQt;
    public function GetStepQt(){
        return $this->stepQt ;
    }
    /*
     * stepWeight 	Double 	可选 	阶梯重量 	示例值：3；增加3KG
     */
    private $stepWeight;
    public function GetStepWeight(){
        return $this->stepWeight ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "baseQt", $this->stdResult )) {
            $this->baseQt = $this->stdResult->{"baseQt"};
        }
        if (array_key_exists ( "stepQt", $this->stdResult )) {
            $this->stepQt = $this->stdResult->{"stepQt"};
        }
        if (array_key_exists ( "stepWeight", $this->stdResult )) {
            $this->stepWeight = $this->stdResult->{"stepWeight"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "baseQt", $this->arrayResult )) {
            $this->baseQt = $arrayResult['baseQt'];
        }
        if (array_key_exists ( "stepQt", $this->arrayResult )) {
            $this->stepQt = $arrayResult['stepQt'];
        }
        if (array_key_exists ( "stepWeight", $this->arrayResult )) {
            $this->stepWeight = $arrayResult['stepWeight'];
        }
    }
}