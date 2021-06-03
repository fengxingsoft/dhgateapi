<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 9:34
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryListGetResultInfo{

  /*
   * catePubId 	String 	必须 	发布类目id 	物理父级类目id + 自身id 每段为3位，共6位；示例值：014024
   */
    private $catePubId;
    public function GetCatePubId(){
        return $this->catePubId;
    }
    /*
     * leaf 	String 	必须 	该类目是否为叶子类目 	1：是， 0：不是;示例值：1
     */
    private $leaf;
    public function GetLeaf(){
        return $this->leaf;
    }
    /*
     * pareCatePubId 	String 	必须 	该类目的父级发布类目 	物理父级类目;示例值：014
     */
    private $pareCatePubId;
    public function GetPareCatePubId(){
        return $this->pareCatePubId;
    }
    /*
     * pubName 	String 	必须 	英文名称 	示例值：Clothing Fabric
     */
    private $pubName;
    public function GetPubName(){
        return $this->pubName;
    }
    /*
     * pubNameCn 	String 	必须 	中文名称 	示例值：服装面料
     */
    private $pubNameCn;
    public function GetPubNameCn(){
        return $this->pubNameCn;
    }

    /*
     * remark 	String 	必须 	类目备注说明 	示例值：this cloth
     */
    private $remark;
    public function GetRemark(){
        return $this->remark;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "catePubId", $this->stdResult )) {
            $this->catePubId = $this->stdResult->{"catePubId"};
        }
        if (array_key_exists ( "leaf", $this->stdResult )) {
            $this->leaf = $this->stdResult->{"leaf"};
        }
        if (array_key_exists ( "pareCatePubId", $this->stdResult )) {
            $this->pareCatePubId = $this->stdResult->{"pareCatePubId"};
        }
        if (array_key_exists ( "pubName", $this->stdResult )) {
            $this->pubName = $this->stdResult->{"pubName"};
        }
        if (array_key_exists ( "pubNameCn", $this->stdResult )) {
            $this->pubNameCn = $this->stdResult->{"pubNameCn"};
        }
        if (array_key_exists ( "remark", $this->stdResult )) {
            $this->remark = $this->stdResult->{"remark"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "catePubId", $this->arrayResult )) {
            $this->catePubId = $arrayResult['catePubId'];
        }
        if (array_key_exists ( "leaf", $this->arrayResult )) {
            $this->leaf = $arrayResult['leaf'];
        }
        if (array_key_exists ( "pareCatePubId", $this->arrayResult )) {
            $this->pareCatePubId = $arrayResult['pareCatePubId'];
        }
        if (array_key_exists ( "pubName", $this->arrayResult )) {
            $this->pubName = $arrayResult['pubName'];
        }
        if (array_key_exists ( "pubNameCn", $this->arrayResult )) {
            $this->pubNameCn = $arrayResult['pubNameCn'];
        }
        if (array_key_exists ( "remark", $this->arrayResult )) {
            $this->remark = $arrayResult['remark'];
        }
    }
}