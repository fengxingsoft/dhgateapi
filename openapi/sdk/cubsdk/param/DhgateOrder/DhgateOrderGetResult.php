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
class DhgateOrderGetResult{

    /*
     * actualPrice 	Double 	必须 	实收金额 	示例值:100.00
     */
    private $actualPrice;
    public function GetActualPrice(){
        return $this->actualPrice;
    }
    /*
     * buyerRemark 	String 	必须 	买家下单备注 	买家下单备注
     */
    private $buyerRemark;
    public function GetBuyerRemark(){
        return $this->buyerRemark;
    }
    /*
     * commissionAmount 	Double 	必须 	佣金金额 	示例值:100.00
     */
    private $commissionAmount;
    public function GetCommissionAmount(){
        return $this->commissionAmount;
    }
/*
 * deliveryDate 	String 	必须 	发货时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $deliveryDate;
    public function GetDeliveryDate(){
        return $this->deliveryDate;
    }
/*
 * deliveryDeadline 	String 	必须 	发货截止时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $deliveryDeadline;
    public function GetDeliveryDeadline(){
        return $this->deliveryDeadline;
    }
/*
 * fillingMoney 	Double 	必须 	订单补款金额 	示例值:100.00
 */
    private $fillingMoney;
    public function GetFillingMoney(){
        return $this->fillingMoney;
    }
/*
 * gatewayFee 	Double 	必须 	网关手续费 	示例值:100.00
 */
    private $gatewayFee;
    public function GetGatewayFee(){
        return $this->gatewayFee;
    }
/*
 * itemTotalPrice 	Double 	必须 	产品总计 	示例值:100.00
 */
    private $itemTotalPrice;
    public function GetItemTotalPrice(){
        return $this->itemTotalPrice;
    }
/*
 * orderContact 	OrderContact 	必须 	收货人基本信息 	订单基本信息
 */
    private $orderContact;
    public function GetOrderContact(){
        return $this->orderContact;
    }
/*
 * orderDeliveryList 	OrderDeliveryInfo[] 	必须 	订单处理信息 	订单处理信息
 */
    private $orderDeliveryList;
    public function GetOrderDeliveryList(){
        return $this->orderDeliveryList;
    }
/*
 * orderNo 	String 	必须 	订单编号 	卖家后台登录能看到成交的订单号；示例值：1330312162
 */
    private $orderNo;
    public function GetOrderNo(){
        return $this->orderNo;
    }
/*
 * orderRemark 	String 	可选 	订单备注 	蓝色要10个，加急，圣诞前要用到等等备注信息
 */
    private $orderRemark;
    public function GetOrderRemark(){
        return $this->orderRemark;
    }
/*
 * orderStatus 	String 	必须 	订单状态
 * 111000,订单取消;
 * 101003,等待买家付款;
 * 102001,买家已付款，等待平台确认;
 * 103001,等待发货;
 * 105001,买家申请退款，等待协商结果;
 * 105002,退款协议已达成;
 * 105003,部分退款后，等待发货;
 * 105004,买家取消退款申请;
 * 103002,已部分发货;
 * 101009,等待买家确认收货;
 * 106001,退款/退货协商中，等待协议达成;
 * 106002,买家投诉到平台;
 * 106003,协议已达成，执行中;
 * 102006,人工确认收货;
 * 102007,超过预定期限，自动确认收货;
 * 102111,交易成功;
 * 111111,交易关闭
 */
    private $orderStatus;
    public function GetOrderStatus(){
        return $this->orderStatus;
    }
/*
 * orderTotalPrice 	Double 	必须 	订单总额 	示例值:100.00
 */
    private $orderTotalPrice;
    public function GetOrderTotalPrice(){
        return $this->orderTotalPrice;
    }
/*
 * payDate 	String 	必须 	付款时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $payDate;
    public function GetPayDate(){
        return $this->payDate;
    }
    /*
     * preferOrder 	String 	必须 	是否敦煌优选订单 	0:否, 1:是
     */
    private $preferOrder;
    public function GetPreferOrder(){
        return $this->preferOrder;
    }
/*
 * reducePrice 	Double 	必须 	订单降价金额 	示例值:100.00
 */
    private $reducePrice;
    public function GetReducePrice(){
        return $this->reducePrice;
    }
/*
 * refundMoney 	Double 	必须 	订单退款金额 	示例值:100.00
 */
    private $refundMoney;
    public function GetRefundMoney(){
        return $this->refundMoney;
    }
/*
 * risePrice 	Double 	必须 	订单涨价金额 	示例值:100.00
 */
    private $risePrice;
    public function GetRisePrice(){
        return $this->risePrice;
    }
/*
 * sellerCouponPrice 	Double 	必须 	seller优惠券 	示例值:100.00
 */
    private $sellerCouponPrice;
    public function GetSellerCouponPrice(){
        return $this->sellerCouponPrice;
    }
/*
 * shippingCost 	Double 	必须 	运费 	示例值:100.00
 */
    private $shippingCost;
    public function GetShippingCost(){
        return $this->shippingCost;
    }
/*
 * shippingType 	String 	必须 	买家选择物流方式 	示例值：UPS,D-LINK等
 */
    private $shippingType;
    public function GetShippingType(){
        return $this->shippingType;
    }
/*
 * startedDate 	String 	必须 	下单日期 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */

    private $startedDate;
    public function GetStartedDate(){
        return $this->startedDate;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "actualPrice", $this->stdResult )) {
            $this->actualPrice = $this->stdResult->{"actualPrice"};
        }
        if (array_key_exists ( "buyerRemark", $this->stdResult )) {
            $this->buyerRemark = $this->stdResult->{"buyerRemark"};
        }
        if (array_key_exists ( "commissionAmount", $this->stdResult )) {
            $this->commissionAmount = $this->stdResult->{"commissionAmount"};
        }
        if (array_key_exists ( "deliveryDate", $this->stdResult )) {
            $this->deliveryDate = $this->stdResult->{"deliveryDate"};
        }
        if (array_key_exists ( "deliveryDeadline", $this->stdResult )) {
            $this->deliveryDeadline = $this->stdResult->{"deliveryDeadline"};
        }
        if (array_key_exists ( "fillingMoney", $this->stdResult )) {
            $this->fillingMoney = $this->stdResult->{"fillingMoney"};
        }
        if (array_key_exists ( "gatewayFee", $this->stdResult )) {
            $this->gatewayFee = $this->stdResult->{"gatewayFee"};
        }
        if (array_key_exists ( "itemTotalPrice", $this->stdResult )) {
            $this->itemTotalPrice = $this->stdResult->{"itemTotalPrice"};
        }
        if (array_key_exists ( "orderContact", $this->stdResult )) {
            $this->orderContact = $this->stdResult->{"orderContact"};
        }
        if (array_key_exists ( "orderDeliveryList", $this->stdResult )) {
            $this->orderDeliveryList = $this->stdResult->{"orderDeliveryList"};
        }
        if (array_key_exists ( "orderNo", $this->stdResult )) {
            $this->orderNo = $this->stdResult->{"orderNo"};
        }
        if (array_key_exists ( "orderRemark", $this->stdResult )) {
            $this->orderRemark = $this->stdResult->{"orderRemark"};
        }
        if (array_key_exists ( "orderStatus", $this->stdResult )) {
            $this->orderStatus = $this->stdResult->{"orderStatus"};
        }
        if (array_key_exists ( "orderTotalPrice", $this->stdResult )) {
            $this->orderTotalPrice = $this->stdResult->{"orderTotalPrice"};
        }
        if (array_key_exists ( "payDate", $this->stdResult )) {
            $this->payDate = $this->stdResult->{"payDate"};
        }
        if (array_key_exists ( "preferOrder", $this->stdResult )) {
            $this->preferOrder = $this->stdResult->{"preferOrder"};
        }
        if (array_key_exists ( "reducePrice", $this->stdResult )) {
            $this->reducePrice = $this->stdResult->{"reducePrice"};
        }
        if (array_key_exists ( "refundMoney", $this->stdResult )) {
            $this->refundMoney = $this->stdResult->{"refundMoney"};
        }
        if (array_key_exists ( "risePrice", $this->stdResult )) {
            $this->risePrice = $this->stdResult->{"risePrice"};
        }
        if (array_key_exists ( "sellerCouponPrice", $this->stdResult )) {
            $this->sellerCouponPrice = $this->stdResult->{"sellerCouponPrice"};
        }
        if (array_key_exists ( "shippingCost", $this->stdResult )) {
            $this->shippingCost = $this->stdResult->{"shippingCost"};
        }
        if (array_key_exists ( "shippingType", $this->stdResult )) {
            $this->shippingType = $this->stdResult->{"shippingType"};
        }
        if (array_key_exists ( "startedDate", $this->stdResult )) {
            $this->startedDate = $this->stdResult->{"startedDate"};
        }

        if (array_key_exists ( "orderDeliveryList", $this->stdResult )) {
            $this->orderDeliveryList=$this->stdResult->{"orderDeliveryList"};
        }
        if (array_key_exists ( "orderContact", $this->stdResult )) {
            $orderContactResult=$this->stdResult->{"orderContact"};
            $object = json_decode ( json_encode ( $orderContactResult ), true );
            $this->orderContact = array ();
            $arrayobject = new ArrayObject ( $object );
            $DhgateOrderGetResultInfoOrderContact=new DhgateOrderGetResultInfoOrderContact();
            $DhgateOrderGetResultInfoOrderContact->setArrayResult($arrayobject );
            $this->orderContact = $DhgateOrderGetResultInfoOrderContact;
        }
   }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

         if (array_key_exists ( "actualPrice", $this->arrayResult )) {
             $this->actualPrice = $arrayResult['actualPrice'];
         }
        if (array_key_exists ( "buyerRemark", $this->arrayResult )) {
            $this->buyerRemark = $arrayResult['buyerRemark'];
        }
        if (array_key_exists ( "commissionAmount", $this->arrayResult )) {
            $this->commissionAmount = $arrayResult['commissionAmount'];
        }
         if (array_key_exists ( "deliveryDate", $this->arrayResult )) {
             $this->deliveryDate = $arrayResult['deliveryDate'];
         }
        if (array_key_exists ( "deliveryDeadline", $this->arrayResult )) {
            $this->deliveryDeadline = $arrayResult['deliveryDeadline'];
        }
        if (array_key_exists ( "fillingMoney", $this->arrayResult )) {
            $this->fillingMoney = $arrayResult['fillingMoney'];
        }
         if (array_key_exists ( "gatewayFee", $this->arrayResult )) {
             $this->gatewayFee = $arrayResult['gatewayFee'];
         }
        if (array_key_exists ( "itemTotalPrice", $this->arrayResult )) {
            $this->itemTotalPrice = $arrayResult['itemTotalPrice'];
        }
         if (array_key_exists ( "orderContact", $this->arrayResult )) {
             $this->orderContact = $arrayResult['orderContact'];
         }
        if (array_key_exists ( "orderDeliveryList", $this->arrayResult )) {
            $orderDeliveryListResult = $arrayResult['orderDeliveryList'];
            for($i=0;$i<count($orderDeliveryListResult);$i++){
                $DhgateOrderGetResultInfoOrderDeliveryList=new DhgateOrderGetResultInfoOrderDeliveryList();
                $DhgateOrderGetResultInfoOrderDeliveryList->setArrayResult($orderDeliveryListResult );
                $this->orderDeliveryList  [$i] = $DhgateOrderGetResultInfoOrderDeliveryList;
            }
        }
        if (array_key_exists ( "orderNo", $this->arrayResult )) {
            $this->orderNo = $arrayResult['orderNo'];
        }
         if (array_key_exists ( "orderRemark", $this->arrayResult )) {
             $this->orderRemark = $arrayResult['orderRemark'];
         }
        if (array_key_exists ( "orderStatus", $this->arrayResult )) {
            $this->orderStatus = $arrayResult['orderStatus'];
        }
        if (array_key_exists ( "orderTotalPrice", $this->arrayResult )) {
            $this->orderTotalPrice = $arrayResult['orderTotalPrice'];
        }
        if (array_key_exists ( "payDate", $this->arrayResult )) {
            $this->payDate = $arrayResult['payDate'];
        }
        if (array_key_exists ( "preferOrder", $this->arrayResult )) {
            $this->preferOrder = $arrayResult['preferOrder'];
        }
        if (array_key_exists ( "reducePrice", $this->arrayResult )) {
            $this->reducePrice = $arrayResult['reducePrice'];
        }
        if (array_key_exists ( "refundMoney", $this->arrayResult )) {
            $this->refundMoney = $arrayResult['refundMoney'];
        }
        if (array_key_exists ( "risePrice", $this->arrayResult )) {
            $this->risePrice = $arrayResult['risePrice'];
        }
        if (array_key_exists ( "sellerCouponPrice", $this->arrayResult )) {
            $this->sellerCouponPrice = $arrayResult['sellerCouponPrice'];
        }
        if (array_key_exists ( "shippingCost", $this->arrayResult )) {
            $this->shippingCost = $arrayResult['shippingCost'];
        }
        if (array_key_exists ( "shippingType", $this->arrayResult )) {
            $this->shippingType = $arrayResult['shippingType'];
        }
        if (array_key_exists ( "startedDate", $this->arrayResult )) {
            $this->startedDate = $arrayResult['startedDate'];
        }
    }
}