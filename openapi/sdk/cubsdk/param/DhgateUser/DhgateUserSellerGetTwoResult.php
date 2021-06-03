<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateUser;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateUserSellerGetTwoResult
{
/*
 * curLevel 	String 	必须 	seller当前等级标识 	TS=Top Seller,OS=Onramp Seller,NS=New Seller,BS=Baby Seller
 */
    private $curLevel;
    public function GetCurLevel(){
        return $this->curLevel ;
    }
/*
 * grade 	String 	必须 	金银铜牌标志位 	N=未设置, B=铜牌 ,S=银牌, G=金牌
 */
    private $grade;
    public function GetGrade(){
        return $this->grade ;
    }
/*
 * isPowerSeller 	String 	必须 	是否是POWER SELLER 	是否为子账号,0=不是,1=是
 */
    private $isPowerSeller;
    public function GetIsPowerSeller(){
        return $this->isPowerSeller ;
    }
/*
 * reviewScore 	Long 	必须 	卖家等级评分 	示例值：390
 */
    private $reviewScore;
    public function GetReviewScore(){
        return $this->reviewScore ;
    }
/*
 * sellerScore 	Double 	必须 	卖家积分 	示例值：5.9
 */
    private $sellerScore;
    public function GetSellerScore(){
        return $this->sellerScore ;
    }
/*
 * supplierId 	String 	必须 	卖家ID 	示例值：402880f100f59ccd0100f59cd37d0004
 */
    private $supplierId;
    public function GetSupplierId(){
        return $this->supplierId ;
    }
/*
 * supplierName 	String 	必须 	卖家名称 	示例值：fafa
 */
    private $supplierName;
    public function GetSupplierName(){
        return $this->supplierName ;
    }
/*
 * supplierNo 	String 	必须 	卖家编号 	示例值：26361
 */
    private $supplierNo;
    public function GetSupplierNo(){
        return $this->supplierNo ;
    }
/*
 * supplierStatusId 	String 	必须 	卖家状态 	示例值：0000000002
 */
    private $supplierStatusId;
    public function GetSupplierStatusId(){
        return $this->supplierStatusId ;
    }
/*
 * thirdAuthDate 	String 	必须 	第三方认证申请时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $thirdAuthDate;
    public function GetThirdAuthDate(){
        return $this->thirdAuthDate ;
    }
/*
 * thirdAuthPassDate 	String 	必须 	第三方认证通过时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $thirdAuthPassDate;
    public function GetThirdAuthPassDate(){
        return $this->thirdAuthPassDate ;
    }
/*
 * verify 	String 	必须 	卖家认证状态 	未认证=N、认证=Y、冻结=F、终止=T，第三方认证通过=S，老用户=U,老用户=M, 取消=C
 */
    private $verify;
    public function GetVerify(){
        return $this->verify ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "curLevel", $this->stdResult )) {
            $this->curLevel = $this->stdResult->{"curLevel"};
        }
        if (array_key_exists ( "grade", $this->stdResult )) {
            $this->grade = $this->stdResult->{"grade"};
        }
        if (array_key_exists ( "isPowerSeller", $this->stdResult )) {
            $this->isPowerSeller = $this->stdResult->{"isPowerSeller"};
        }
        if (array_key_exists ( "reviewScore", $this->stdResult )) {
            $this->reviewScore = $this->stdResult->{"reviewScore"};
        }
        if (array_key_exists ( "sellerScore", $this->stdResult )) {
            $this->sellerScore = $this->stdResult->{"sellerScore"};
        }
        if (array_key_exists ( "supplierId", $this->stdResult )) {
            $this->supplierId = $this->stdResult->{"supplierId"};
        }
        if (array_key_exists ( "supplierName", $this->stdResult )) {
            $this->supplierName = $this->stdResult->{"supplierName"};
        }
        if (array_key_exists ( "supplierNo", $this->stdResult )) {
            $this->supplierNo = $this->stdResult->{"supplierNo"};
        }
        if (array_key_exists ( "supplierStatusId", $this->stdResult )) {
            $this->supplierStatusId = $this->stdResult->{"supplierStatusId"};
        }
        if (array_key_exists ( "thirdAuthDate", $this->stdResult )) {
            $this->thirdAuthDate = $this->stdResult->{"thirdAuthDate"};
        }
        if (array_key_exists ( "thirdAuthPassDate", $this->stdResult )) {
            $this->thirdAuthPassDate = $this->stdResult->{"thirdAuthPassDate"};
        }
        if (array_key_exists ( "verify", $this->stdResult )) {
            $this->verify = $this->stdResult->{"verify"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "curLevel", $this->arrayResult )) {
            $this->curLevel = $arrayResult['curLevel'];
        }
        if (array_key_exists ( "grade", $this->arrayResult )) {
            $this->grade = $arrayResult['grade'];
        }
        if (array_key_exists ( "isPowerSeller", $this->arrayResult )) {
            $this->isPowerSeller = $arrayResult['isPowerSeller'];
        }
        if (array_key_exists ( "reviewScore", $this->arrayResult )) {
            $this->reviewScore = $arrayResult['reviewScore'];
        }
        if (array_key_exists ( "sellerScore", $this->arrayResult )) {
            $this->sellerScore = $arrayResult['sellerScore'];
        }
        if (array_key_exists ( "supplierId", $this->arrayResult )) {
            $this->supplierId = $arrayResult['supplierId'];
        }
        if (array_key_exists ( "supplierName", $this->arrayResult )) {
            $this->supplierName = $arrayResult['supplierName'];
        }
        if (array_key_exists ( "supplierNo", $this->arrayResult )) {
            $this->supplierNo = $arrayResult['supplierNo'];
        }
        if (array_key_exists ( "supplierStatusId", $this->arrayResult )) {
            $this->supplierStatusId = $arrayResult['supplierStatusId'];
        }
        if (array_key_exists ( "thirdAuthDate", $this->arrayResult )) {
            $this->thirdAuthDate = $arrayResult['thirdAuthDate'];
        }
        if (array_key_exists ( "thirdAuthPassDate", $this->arrayResult )) {
            $this->thirdAuthPassDate = $arrayResult['thirdAuthPassDate'];
        }
        if (array_key_exists ( "verify", $this->arrayResult )) {
            $this->verify = $arrayResult['verify'];
        }
    }
}