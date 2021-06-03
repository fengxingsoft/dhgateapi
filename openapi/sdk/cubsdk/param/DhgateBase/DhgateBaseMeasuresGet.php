<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/12
 * Time: 17:11
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateBase;

use ArrayObject;

class DhgateBaseMeasuresGet
{
    private $meauserList;

    public function GetMeauserList()
    {
        return $this->meauserList;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("meauserList", $this->stdResult)) {
            $this->meauserList = $this->stdResult->{"meauserList"};

        }
        if (array_key_exists("meauserList", $this->stdResult)) {
            $countryList = $this->stdResult->{"meauserList"};
            $object = json_decode(json_encode($countryList), true);
            $this->meauserList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateBaseMeasuresGetInfo = new DhgateBaseMeasuresGetInfo();
                $DhgateBaseMeasuresGetInfo->setArrayResult($arrayobject);
                $this->meauserList[$i] = $DhgateBaseMeasuresGetInfo;
            }
        }
    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("meauserList", $this->arrayResult)) {
            $meauserListResult = $arrayResult['meauserList'];
            $this->meauserList = new DhgateBaseMeasuresGetInfo();
            $this->meauserList->setStdResult($meauserListResult);
        }
    }

}








