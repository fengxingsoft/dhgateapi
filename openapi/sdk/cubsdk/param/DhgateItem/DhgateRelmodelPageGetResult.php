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
class DhgateRelmodelPageGetResult{
/*
 * pageNo 	String 	必须 	当前查询的页码 	示例值：20
 */
    private $pageNo;
    public function GetPageNo(){
        return $this->pageNo;
    }
/*
 * pageSize 	String 	必须 	查询的每页的记录数 	示例值：50
 */
    private $pageSize;
    public function GetPageSize(){
        return $this->pageSize;
    }
/*
 * pageTotal 	String 	必须 	查询返回总页数 	示例值：222
 */
    private $pageTotal;
    public function GetPageTotal(){
        return $this->pageTotal;
    }
/*
 * relModelList 	RelModelBizObj[] 	必须 	关联产品模板信息 	返回多个关联产品模板信息
 */
    private $relModelList;
    public function GetRelModelList(){
        return $this->relModelList;
    }
/*
 * total 	String 	必须 	查询总记录数 	示例值：2050
 */
    private $total;
    public function GetTotal(){
        return $this->total;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "pageNo", $this->stdResult )) {
            $this->pageNo = $this->stdResult->{"pageNo"};
        }
        if (array_key_exists ( "pageSize", $this->stdResult )) {
            $this->pageSize = $this->stdResult->{"pageSize"};
        }
        if (array_key_exists ( "pageTotal", $this->stdResult )) {
            $this->pageTotal = $this->stdResult->{"pageTotal"};
        }
        if (array_key_exists ( "relModelList", $this->stdResult )) {
            $this->relModelList = $this->stdResult->{"relModelList"};

        }
        if (array_key_exists ( "relModelList", $this->stdResult )) {
            $relModelListResult=$this->stdResult->{"relModelList"};
            $object = json_decode ( json_encode ( $relModelListResult ), true );
            $this->relModelList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateRelmodelPageGetResultInfo=new DhgateRelmodelPageGetResultInfo();
                $DhgateRelmodelPageGetResultInfo->setArrayResult($arrayobject );
                $this->relModelList[$i] = $DhgateRelmodelPageGetResultInfo;
            }
        }
        if (array_key_exists ( "total", $this->stdResult )) {
            $this->total = $this->stdResult->{"total"};
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