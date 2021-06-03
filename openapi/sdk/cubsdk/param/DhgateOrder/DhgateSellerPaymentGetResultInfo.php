<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateSellerPaymentGetResultInfo{
/*
 * bankAcc 	String 	必须 	帐号 	帐号
 */
    private $bankAcc;
    public function GetBankAcc(){
        return $this->bankAcc;
    }
/*
 * bankAdd 	String 	必须 	账户地址 	账户地址
 */
    private $bankAdd;
    public function GetBankAdd(){
        return $this->bankAdd;
    }
/*
 * bankCode 	String 	必须 	swiftCode 	swiftCode
 */
    private $bankCode;
    public function GetBankCode(){
        return $this->bankCode;
    }
/*
 * bankName 	String 	必须 	银行名称 	银行名称
 */
    private $bankName;
    public function GetBankName(){
        return $this->bankName;
    }
/*
 * fee 	Double 	必须 	手续费 	手续费
 */
    private $fee;
    public function GetFee(){
        return $this->fee;
    }
/*
 * mmode 	String 	必须 	转账币种 	转账币种
 */
    private $mmode;
    public function GetMmode(){
        return $this->mmode;
    }
/*
 * payee 	String 	必须 	账户名 	账户名
 */
    private $payee;
    public function GetPayee(){
        return $this->payee;
    }
/*
 * payoutMoney 	Double 	必须 	打款金额 	打款金额
 */
    private $payoutMoney;
    public function GetPayoutMoney(){
        return $this->payoutMoney;
    }
/*
 * payto 	String 	必须 	支付渠道 	支付渠道
 */
    private $payto;
    public function GetPayto(){
        return $this->payto;
    }
/*
 * rate 	Double 	必须 	汇率 	汇率
 */
    private $rate;
    public function GetRate(){
        return $this->rate;
    }
/*
 * supplierpaymentid 	String 	必须 	支付帐号ID 	支付帐号ID
 */
    private $supplierpaymentid;
    public function GetSupplierpaymentid(){
        return $this->supplierpaymentid;
    }
/*
 * tdate 	Date 	必须 	结算时间 	结算时间
 */
    private $tdate;
    public function GetTdate(){
        return $this->tdate;
    }
/*
 * tprice 	Double 	必须 	总支付费用 	总支付费用
 */
    private $tprice;
    public function GetTprice(){
        return $this->tprice;
    }
    /*
     * orderList 	SellerPaymentOrder[] 	必须 	支付相关订单 	支付相关订单
     */
    private $orderList;
    public function GetOrderList(){
        return $this->orderList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "bankAcc", $this->stdResult )) {
            $this->bankAcc = $this->stdResult->{"bankAcc"};
        }
        if (array_key_exists ( "bankAdd", $this->stdResult )) {
            $this->bankAdd = $this->stdResult->{"bankAdd"};
        }
        if (array_key_exists ( "bankCode", $this->stdResult )) {
            $this->bankCode = $this->stdResult->{"bankCode"};
        }
        if (array_key_exists ( "bankName", $this->stdResult )) {
            $this->bankName = $this->stdResult->{"bankName"};
        }
        if (array_key_exists ( "fee", $this->stdResult )) {
            $this->fee = $this->stdResult->{"fee"};
        }
        if (array_key_exists ( "mmode", $this->stdResult )) {
            $this->mmode = $this->stdResult->{"mmode"};
        }
        if (array_key_exists ( "payee", $this->stdResult )) {
            $this->payee = $this->stdResult->{"payee"};
        }
        if (array_key_exists ( "payoutMoney", $this->stdResult )) {
            $this->payoutMoney = $this->stdResult->{"payoutMoney"};
        }
        if (array_key_exists ( "payto", $this->stdResult )) {
            $this->payto = $this->stdResult->{"payto"};
        }
        if (array_key_exists ( "rate", $this->stdResult )) {
            $this->rate = $this->stdResult->{"rate"};
        }
        if (array_key_exists ( "supplierpaymentid", $this->stdResult )) {
            $this->supplierpaymentid = $this->stdResult->{"supplierpaymentid"};
        }
        if (array_key_exists ( "tdate", $this->stdResult )) {
            $this->tdate = $this->stdResult->{"tdate"};
        }
        if (array_key_exists ( "tprice", $this->stdResult )) {
            $this->tprice = $this->stdResult->{"tprice"};
        }

        if (array_key_exists ( "orderList", $this->stdResult )) {
            $this->orderList = $this->stdResult->{"orderList"};
        }
        if (array_key_exists ( "orderList", $this->stdResult )) {
            $orderListResult=$this->stdResult->{"orderList"};
            $object = json_decode ( json_encode ( $orderListResult ), true );
            $this->orderList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateSellerPaymentGetResultInfoOrderList=new DhgateSellerPaymentGetResultInfoOrderList();
                $DhgateSellerPaymentGetResultInfoOrderList->setArrayResult($arrayobject );
                $this->orderList[$i] = $DhgateSellerPaymentGetResultInfoOrderList;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "bankAcc", $this->arrayResult )) {
            $this->bankAcc = $arrayResult['bankAcc'];
        }
        if (array_key_exists ( "bankAdd", $this->arrayResult )) {
            $this->bankAdd = $arrayResult['bankAdd'];
        }
        if (array_key_exists ( "bankCode", $this->arrayResult )) {
            $this->bankCode = $arrayResult['bankCode'];
        }
        if (array_key_exists ( "bankName", $this->arrayResult )) {
            $this->bankName = $arrayResult['bankName'];
        }
        if (array_key_exists ( "fee", $this->arrayResult )) {
            $this->fee = $arrayResult['fee'];
        }
        if (array_key_exists ( "mmode", $this->arrayResult )) {
            $this->mmode = $arrayResult['mmode'];
        }
        if (array_key_exists ( "orderList", $this->arrayResult )) {
            $this->orderList = $arrayResult['orderList'];
        }
        if (array_key_exists ( "payee", $this->arrayResult )) {
            $this->payee = $arrayResult['payee'];
        }
        if (array_key_exists ( "payoutMoney", $this->arrayResult )) {
            $this->payoutMoney = $arrayResult['payoutMoney'];
        }
        if (array_key_exists ( "payto", $this->arrayResult )) {
            $this->payto = $arrayResult['payto'];
        }
        if (array_key_exists ( "rate", $this->arrayResult )) {
            $this->rate = $arrayResult['rate'];
        }
        if (array_key_exists ( "supplierpaymentid", $this->arrayResult )) {
            $this->supplierpaymentid = $arrayResult['supplierpaymentid'];
        }
        if (array_key_exists ( "tdate", $this->arrayResult )) {
            $this->tdate = $arrayResult['tdate'];
        }
        if (array_key_exists ( "tprice", $this->arrayResult )) {
            $this->tprice = $arrayResult['tprice'];
        }
    }
}