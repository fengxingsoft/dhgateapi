<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateBase;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateBaseMeasuresGetInfo{
    /*
     * cname
     * @return String 	必须
     * 中文名
     */

    private $cname;
    public function GetCname(){
        return $this->cname;
    }
    /*
     * description
     * String 	必须
     * 描述
     */

    private $description;
    public function GetDescription(){
        return $this->description;
    }
    /*
     * measureid
     * String 	必须
     * 主键ID
     */
    private $measureid;
    public function GetMeasureid(){
        return $this->measureid;
    }

    /*
     * name
     * String 	必须
     * 名称
     */
    private $name;
    public function GetName(){
        return $this->name;
    }


    /*
     * plural
     * String 	必须
     * 名称(复数)
     */
    private $plural;
    public function GetPlural(){
        return $this->plural;
    }

    /*
     * shortname
     * String 	必须
     * 名称缩写
     */
    private $shortname;
    public function GetShortname(){
        return $this->shortname;
    }


    /*
     * valid 	String 	必须 	有效性 	有效性
     */
    private $valid;
    public function GetValid(){
        return $this->valid;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "cname", $this->stdResult )) {
            $this->cname = $this->stdResult->{"cname"};
        }
        if (array_key_exists ( "description", $this->stdResult )) {
            $this->description = $this->stdResult->{"description"};
        }
        if (array_key_exists ( "measureid", $this->stdResult )) {
            $this->measureid = $this->stdResult->{"measureid"};
        }
        if (array_key_exists ( "name", $this->stdResult )) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists ( "plural", $this->stdResult )) {
            $this->plural = $this->stdResult->{"plural"};
        }
        if (array_key_exists ( "shortname", $this->stdResult )) {
            $this->shortname = $this->stdResult->{"shortname"};
        }
        if (array_key_exists ( "valid", $this->stdResult )) {
            $this->valid = $this->stdResult->{"valid"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "cname", $this->arrayResult )) {
            $this->cname = $arrayResult['cname'];
        }
        if (array_key_exists ( "description", $this->arrayResult )) {
            $this->description = $arrayResult['description'];
        }
        if (array_key_exists ( "measureid", $this->arrayResult )) {
            $this->measureid = $arrayResult['measureid'];
        }
        if (array_key_exists ( "name", $this->arrayResult )) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists ( "plural", $this->arrayResult )) {
            $this->plural = $arrayResult['plural'];
        }
        if (array_key_exists ( "shortname", $this->arrayResult )) {
            $this->shortname = $arrayResult['shortname'];
        }
        if (array_key_exists ( "valid", $this->arrayResult )) {
            $this->valid = $arrayResult['valid'];
        }
    }
}










