<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 9:44
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateShippingTemplateListResultInfo
{
    /*
     * createDate 	String 	必须 	创建时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
     */
    private $createDate;
    public function GetCreateDate(){
        return $this->createDate ;
    }
    /*
     * modelDesc 	String 	必须 	模版描述 	模版概要描述
     */
    private $modelDesc;
    public function GetModelDesc(){
        return $this->modelDesc ;
    }
    /*
     * modelName 	String 	必须 	模版名称 	卖家创建模板的时候，手动输入的名称；示例值：欧洲标准运费模板
     */
    private $modelName;
    public function GetModelName(){
        return $this->modelName ;
    }
    /*
     * modelType 	String 	必须 	模板类型 	10=新手运费模板 11=用户模板 00=历史快照模板
     */
    private $modelType;
    public function GetModelType(){
        return $this->modelType ;
    }
    /*
     * shippingTempId 	String 	必须 	模版ID 	32位无规则字符串；示例值：ff8080811b87a915011b890f3aa857d6
     */
    private $shippingTempId;
    public function GetShippingTempId(){
        return $this->shippingTempId ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "createDate", $this->stdResult )) {
            $this->createDate = $this->stdResult->{"createDate"};
        }
        if (array_key_exists ( "modelDesc", $this->stdResult )) {
            $this->modelDesc = $this->stdResult->{"modelDesc"};
        }
        if (array_key_exists ( "modelName", $this->stdResult )) {
            $this->modelName = $this->stdResult->{"modelName"};
        }
        if (array_key_exists ( "modelType", $this->stdResult )) {
            $this->modelType = $this->stdResult->{"modelType"};
        }
        if (array_key_exists ( "shippingTempId", $this->stdResult )) {
            $this->shippingTempId = $this->stdResult->{"shippingTempId"};
        }

    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "createDate", $this->arrayResult )) {
            $this->createDate = $arrayResult['createDate'];
        }
        if (array_key_exists ( "modelDesc", $this->arrayResult )) {
            $this->modelDesc = $arrayResult['modelDesc'];
        }
        if (array_key_exists ( "modelName", $this->arrayResult )) {
            $this->modelName = $arrayResult['modelName'];
        }
        if (array_key_exists ( "modelType", $this->arrayResult )) {
            $this->modelType = $arrayResult['modelType'];
        }
        if (array_key_exists ( "shippingTempId", $this->arrayResult )) {
            $this->shippingTempId = $arrayResult['shippingTempId'];
        }

    }
}
