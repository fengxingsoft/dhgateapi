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

class DhgateItemAferSaleListResultInfo
{

    /*
     * afterSaleTemplateId 	String 	必须 	售后模板ID 	示例值：82558025181257728
     */
    private $afterSaleTemplateId;
    public function GetAfterSaleTemplateId(){
        return $this->afterSaleTemplateId ;
    }
    /*
     * createDate 	String 	必须 	创建日期 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
     */
    private $createDate;
    public function GetCreateDate(){
        return $this->createDate ;
    }
    /*
     * freightBear 	int 	必须 	运费承担方 1：卖家 0:买家 	示例值：1
     */
    private $freightBear;
    public function GetFreightBear(){
        return $this->freightBear ;
    }
    /*
     * ifNoreasonBack 	int 	必须 	是否支持无理由退货 1:支持 0：不支持 	示例值：1
     */
    private $ifNoreasonBack;
    public function GetIfNoreasonBack(){
        return $this->ifNoreasonBack ;
    }
    /*
     * ifTemplateDefault 	int 	必须 	是否为默认售后模板 1：是 0 ：不是 	示例值：1
     */
    private $ifTemplateDefault;
    public function GetIfTemplateDefault(){
        return $this->ifTemplateDefault ;
    }
    /*
     * name 	String 	必须 	售后模板名称 	示例值：xinshoumuban
     */
    private $name;
    public function GetName(){
        return $this->name ;
    }
    /*
     * otherReturn 	String 	必须 	其他原因 	示例值：154002234
     */
    private $otherReturn;
    public function GetOtherReturn(){
        return $this->otherReturn ;
    }
    /*
     * protectionPeriod 	int 	必须 	货物描述不符和质量问题接受的保障期限 (天数) 	示例值：30
     */
    private $protectionPeriod;
    public function GetProtectionPeriod(){
        return $this->protectionPeriod ;
    }
    /*
     * returnDeadline 	int 	必须 	退货期限 3:3天退货 7:7天退货 15:15天退货 	示例值：3
     */
    private $returnDeadline;
    public function GetReturnDeadline(){
        return $this->returnDeadline ;
    }
    /*
     * returnRefund 	int 	必须 	退货退款 1:退款保留货 10：买家支付运费 20：卖家支付运费 	示例值：10
     */
    private $returnRefund;
    public function GetReturnRefund(){
        return $this->returnRefund ;
    }
    /*
     * status 	int 	必须 	是否已删除 0：已删除 1：未删除 	示例值：1
     */
    private $status;
    public function GetStatus(){
        return $this->status ;
    }
    /*
     * updateDate 	String 	必须 	修改日期 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
     */
    private $updateDate;
    public function GetUpdateDate(){
        return $this->updateDate ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "afterSaleTemplateId", $this->stdResult )) {
            $this->afterSaleTemplateId = $this->stdResult->{"afterSaleTemplateId"};
        }
        if (array_key_exists ( "createDate", $this->stdResult )) {
            $this->createDate = $this->stdResult->{"createDate"};
        }
        if (array_key_exists ( "freightBear", $this->stdResult )) {
            $this->freightBear = $this->stdResult->{"freightBear"};
        }
        if (array_key_exists ( "ifNoreasonBack", $this->stdResult )) {
            $this->ifNoreasonBack = $this->stdResult->{"ifNoreasonBack"};
        }
        if (array_key_exists ( "ifTemplateDefault", $this->stdResult )) {
            $this->ifTemplateDefault = $this->stdResult->{"ifTemplateDefault"};
        }
        if (array_key_exists ( "name", $this->stdResult )) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists ( "otherReturn", $this->stdResult )) {
            $this->otherReturn = $this->stdResult->{"otherReturn"};
        }
        if (array_key_exists ( "protectionPeriod", $this->stdResult )) {
            $this->protectionPeriod = $this->stdResult->{"protectionPeriod"};
        }
        if (array_key_exists ( "returnDeadline", $this->stdResult )) {
            $this->returnDeadline = $this->stdResult->{"returnDeadline"};
        }
        if (array_key_exists ( "returnRefund", $this->stdResult )) {
            $this->returnRefund = $this->stdResult->{"returnRefund"};
        }
        if (array_key_exists ( "status", $this->stdResult )) {
            $this->status = $this->stdResult->{"status"};
        }
        if (array_key_exists ( "updateDate", $this->stdResult )) {
            $this->updateDate = $this->stdResult->{"updateDate"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "afterSaleTemplateId", $this->arrayResult )) {
            $this->afterSaleTemplateId = $arrayResult['afterSaleTemplateId'];
        }
        if (array_key_exists ( "createDate", $this->arrayResult )) {
            $this->createDate = $arrayResult['createDate'];
        }
        if (array_key_exists ( "freightBear", $this->arrayResult )) {
            $this->freightBear = $arrayResult['freightBear'];
        }
        if (array_key_exists ( "ifNoreasonBack", $this->arrayResult )) {
            $this->ifNoreasonBack = $arrayResult['ifNoreasonBack'];
        }
        if (array_key_exists ( "ifTemplateDefault", $this->arrayResult )) {
            $this->ifTemplateDefault = $arrayResult['ifTemplateDefault'];
        }
        if (array_key_exists ( "name", $this->arrayResult )) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists ( "otherReturn", $this->arrayResult )) {
            $this->otherReturn = $arrayResult['otherReturn'];
        }
        if (array_key_exists ( "protectionPeriod", $this->arrayResult )) {
            $this->protectionPeriod = $arrayResult['protectionPeriod'];
        }
        if (array_key_exists ( "returnDeadline", $this->arrayResult )) {
            $this->returnDeadline = $arrayResult['returnDeadline'];
        }
        if (array_key_exists ( "returnRefund", $this->arrayResult )) {
            $this->returnRefund = $arrayResult['returnRefund'];
        }
        if (array_key_exists ( "status", $this->arrayResult )) {
            $this->status = $arrayResult['status'];
        }
        if (array_key_exists ( "updateDate", $this->arrayResult )) {
            $this->updateDate = $arrayResult['updateDate'];
        }
    }
}