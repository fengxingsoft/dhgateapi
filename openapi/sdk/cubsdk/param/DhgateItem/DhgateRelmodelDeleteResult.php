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

class DhgateRelmodelDeleteResult
{

    /*
     * warehouseName 	String 	必须 	仓库名称(只有选择了敦煌网仓库发货才有该字段) 	仓库名称(只有选择了敦煌网仓库发货才有该字段)
     */
    private $success;
    public function GetSuccess(){
        return $this->success ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;


        if (array_key_exists ( "success", $this->stdResult )) {
            $this->success = $this->stdResult->{"success"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;


        if (array_key_exists ( "success", $this->arrayResult )) {
            $this->success = $arrayResult['success'];
        }
    }
}