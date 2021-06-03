<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:53
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateShippingTypesGetResultInfo
{
/*
 * countryCount 	int 	必须 	快递公司支持国家总数 	快递公司支持国家总数
 */
    private $countryCount;
    public function GetCountryCount(){
        return $this->countryCount ;
    }
/*
 * deliverytime 	String 	必须 	预计到达时间 	预计到达时间
 */
    private $deliverytime;
    public function GetDeliverytime(){
        return $this->deliverytime ;
    }
/*
 * description 	String 	必须 	名称 	名称
 */
    private $description;
    public function GetDescription(){
        return $this->description ;
    }
/*
 * detail 	String 	必须 	物流方式详情 	物流方式详情
 */
    private $detail;
    public function GetDetail(){
        return $this->detail ;
    }
/*
 * issupportdhgate 	String 	必须 	是否支持Dhgate合作物流运费设置 	是否支持Dhgate合作物流运费设置
 */
    private $issupportdhgate;
    public function GetIssupportdhgate(){
        return $this->issupportdhgate ;
    }
/*
 * issupportdhgatewarehouse 	String 	必须 	是否支持敦煌网仓库发货 	是否支持敦煌网仓库发货
 */
    private $issupportdhgatewarehouse;
    public function GetIssupportdhgatewarehouse(){
        return $this->issupportdhgatewarehouse ;
    }
/*
 * issupportfree 	String 	必须 	是否支持免运费设置 	是否支持免运费设置
 */
    private $issupportfree;
    public function GetIssupportfree(){
        return $this->issupportfree ;
    }
/*
 * issupportself 	String 	必须 	是否支持自定义运费设置 	是否支持自定义运费设置
 */
    private $issupportself;
    public function GetIssupportself(){
        return $this->issupportself ;
    }
/*
 * issupportstandard 	String 	必须 	是否支持标准运费设置 	是否支持标准运费设置
 */
    private $issupportstandard;
    public function GetIssupportstandard(){
        return $this->issupportstandard ;
    }
/*
 * name 	String 	必须 	名称 	名称
 */
    private $name;
    public function GetName(){
        return $this->name ;
    }
/*
 * optiontype 	String 	必须 	物流支持的运输设置模式 	物流支持的运输设置模式
 */
    private $optiontype;
    public function GetOptiontype(){
        return $this->optiontype ;
    }
/*
 * priceCardUrl 	String 	必须 	价卡下载地址 	价卡下载地址
 */
    private $priceCardUrl;
    public function GetPriceCardUrl(){
        return $this->priceCardUrl ;
    }
/*
 * scode 	String 	必须 	国际快递编码 	国际快递编码
 */
    private $scode;
    public function GetScode(){
        return $this->scode ;
    }
/*
 * shippingtypecode 	String 	必须 	物流方式简码 	物流方式简码
 */
    private $shippingtypecode;
    public function GetShippingtypecode(){
        return $this->shippingtypecode ;
    }
/*
 * shippingtypeid 	String 	必须 	主键ID 	主键ID
 */
    private $shippingtypeid;
    public function GetShippingtypeid(){
        return $this->shippingtypeid ;
    }
/*
 * vaild 	String 	必须 	是否合法 	是否合法
 */
    private $vaild;
    public function GetVaild(){
        return $this->vaild ;
    }
/*
 * webimage 	String 	必须 	运输方式的图片 	例如返回：ups.gif;运输方式图片拼出地址：http://image.dhgate.com/b/shippingcost/ups.gif
 */
    private $webimage;
    public function GetWebimage(){
        return $this->webimage ;
    }
/*
 * website 	String 	必须 	运输方式的网址 	运输方式的网址
 */
    private $website;
    public function GetWebsite(){
        return $this->website ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "countryCount", $this->stdResult )) {
            $this->countryCount = $this->stdResult->{"countryCount"};
        }
        if (array_key_exists ( "deliverytime", $this->stdResult )) {
            $this->deliverytime = $this->stdResult->{"deliverytime"};
        }
        if (array_key_exists ( "description", $this->stdResult )) {
            $this->description = $this->stdResult->{"description"};
        }
        if (array_key_exists ( "detail", $this->stdResult )) {
            $this->detail = $this->stdResult->{"detail"};
        }
        if (array_key_exists ( "issupportdhgate", $this->stdResult )) {
            $this->issupportdhgate = $this->stdResult->{"issupportdhgate"};
        }
        if (array_key_exists ( "issupportdhgatewarehouse", $this->stdResult )) {
            $this->issupportdhgatewarehouse = $this->stdResult->{"issupportdhgatewarehouse"};
        }
        if (array_key_exists ( "issupportfree", $this->stdResult )) {
            $this->issupportfree = $this->stdResult->{"issupportfree"};
        }
        if (array_key_exists ( "issupportself", $this->stdResult )) {
            $this->issupportself = $this->stdResult->{"issupportself"};
        }
        if (array_key_exists ( "issupportstandard", $this->stdResult )) {
            $this->issupportstandard = $this->stdResult->{"issupportstandard"};
        }
        if (array_key_exists ( "name", $this->stdResult )) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists ( "optiontype", $this->stdResult )) {
            $this->optiontype = $this->stdResult->{"optiontype"};
        }
        if (array_key_exists ( "priceCardUrl", $this->stdResult )) {
            $this->priceCardUrl = $this->stdResult->{"priceCardUrl"};
        }
        if (array_key_exists ( "scode", $this->stdResult )) {
            $this->scode = $this->stdResult->{"scode"};
        }
        if (array_key_exists ( "shippingtypecode", $this->stdResult )) {
            $this->shippingtypecode = $this->stdResult->{"shippingtypecode"};
        }
        if (array_key_exists ( "shippingtypeid", $this->stdResult )) {
            $this->shippingtypeid = $this->stdResult->{"shippingtypeid"};
        }
        if (array_key_exists ( "vaild", $this->stdResult )) {
            $this->vaild = $this->stdResult->{"vaild"};
        }
        if (array_key_exists ( "webimage", $this->stdResult )) {
            $this->webimage = $this->stdResult->{"webimage"};
        }
        if (array_key_exists ( "website", $this->stdResult )) {
            $this->website = $this->stdResult->{"website"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "countryCount", $this->arrayResult )) {
            $this->countryCount = $arrayResult['countryCount'];
        }
        if (array_key_exists ( "deliverytime", $this->arrayResult )) {
            $this->deliverytime = $arrayResult['deliverytime'];
        }
        if (array_key_exists ( "description", $this->arrayResult )) {
            $this->description = $arrayResult['description'];
        }
        if (array_key_exists ( "detail", $this->arrayResult )) {
            $this->detail = $arrayResult['detail'];
        }
        if (array_key_exists ( "issupportdhgate", $this->arrayResult )) {
            $this->issupportdhgate = $arrayResult['issupportdhgate'];
        }
        if (array_key_exists ( "issupportdhgatewarehouse", $this->arrayResult )) {
            $this->issupportdhgatewarehouse = $arrayResult['issupportdhgatewarehouse'];
        }
        if (array_key_exists ( "issupportfree", $this->arrayResult )) {
            $this->issupportfree = $arrayResult['issupportfree'];
        }
        if (array_key_exists ( "issupportself", $this->arrayResult )) {
            $this->issupportself = $arrayResult['issupportself'];
        }
        if (array_key_exists ( "issupportstandard", $this->arrayResult )) {
            $this->issupportstandard = $arrayResult['issupportstandard'];
        }
        if (array_key_exists ( "name", $this->arrayResult )) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists ( "optiontype", $this->arrayResult )) {
            $this->optiontype = $arrayResult['optiontype'];
        }
        if (array_key_exists ( "priceCardUrl", $this->arrayResult )) {
            $this->priceCardUrl = $arrayResult['priceCardUrl'];
        }
        if (array_key_exists ( "scode", $this->arrayResult )) {
            $this->scode = $arrayResult['scode'];
        }
        if (array_key_exists ( "shippingtypecode", $this->arrayResult )) {
            $this->shippingtypecode = $arrayResult['shippingtypecode'];
        }
        if (array_key_exists ( "shippingtypeid", $this->arrayResult )) {
            $this->shippingtypeid = $arrayResult['shippingtypeid'];
        }
        if (array_key_exists ( "vaild", $this->arrayResult )) {
            $this->vaild = $arrayResult['vaild'];
        }
        if (array_key_exists ( "webimage", $this->arrayResult )) {
            $this->webimage = $arrayResult['webimage'];
        }
        if (array_key_exists ( "website", $this->arrayResult )) {
            $this->website = $arrayResult['website'];
        }

    }
}
