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
use ArrayObject;
class DhgateCategorysCommissionsResultInfo{
/*
 * unitList 	LadderCommissionRateUnit[] 	必须 	佣金率对象 	佣金率对象
 */

    private $unitList;
    public function GetUnitList(){
        return $this->unitList;
    }
/*
 * cateId 	String 	必须 	类别Id 	类别Id
 */
    private $cateId;
    public function GetCateId(){
        return $this->cateId;
    }

    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "cateId", $this->stdResult )) {
            $this->cateId = $this->stdResult->{"cateId"};

        }
        if (array_key_exists ( "unitList", $this->stdResult )) {
            $this->unitList = $this->stdResult->{"unitList"};

        }
        if (array_key_exists ( "unitList", $this->stdResult )) {
            $list=$this->stdResult->{"unitList"};
            $object = json_decode ( json_encode ( $list ), true );
            $this->unitList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategorysCommissionsResultInfoDetail=new DhgateCategorysCommissionsResultInfoDetail();
                $DhgateCategorysCommissionsResultInfoDetail->setArrayResult($arrayobject );
                $this->unitList[$i] = $DhgateCategorysCommissionsResultInfoDetail;
            }
        }

    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "unitList", $this->arrayResult )) {
            $unitListResult=$arrayResult['unitList'];
            $this->unitList = new DhgateCategorysCommissionsResultInfoDetail();
            $this->unitList->setStdResult ( $unitListResult);
        }
    }
}