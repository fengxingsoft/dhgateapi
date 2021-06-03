<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOrderGetResultInfoOrderDeliveryList
{
/*
 * complaintStatus 	String 	必须 	投诉状态 	0：投诉已取消，2：真实运单号，3：请更新运单号，4：调查后真实运单号，5：已处罚
 */
    private $complaintStatus;
    public function GetComplaintStatus(){
        return $this->complaintStatus ;
    }
/*
 * deliveryDate 	String 	必须 	发货时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $deliveryDate;
    public function GetDeliveryDate(){
        return $this->deliveryDate ;
    }
/*
 * deliveryNo 	String 	必须 	运单号 	示例值：1Z68A9X70467731838
 */
    private $deliveryNo;
    public function GetDeliveryNo(){
        return $this->deliveryNo ;
    }
/*
 * newDeliveryNo 	String 	必须 	修改后运单号 	没修改运单号此字段为空
 */
    private $newDeliveryNo;
    public function GetNewDeliveryNo(){
        return $this->newDeliveryNo ;
    }
/*
 * newRemark 	String 	必须 	修改后备注 	已发货，附赠小赠品等等
 */
    private $newRemark;
    public function GetNewRemark(){
        return $this->newRemark ;
    }
/*
 * newShippingType 	String 	必须 	修改后物流方式 	没有修改时为空
 */
    private $newShippingType;
    public function GetNewShippingType(){
        return $this->newShippingType ;
    }
/*
 * processingResults 	String 	必须 	处理结果 	如买家来信要求取消、真实运单号、重复投诉等
 */
    private $processingResults;
    public function GetProcessingResults(){
        return $this->processingResults ;
    }
/*
 * remark 	String 	必须 	备注 	已发货，附赠小赠品等等
 */
    private $remark;
    public function GetRemark(){
        return $this->remark ;
    }
/*
 * shippingType 	String 	必须 	物流方式(卖家填写的) 	示例值：UPS,D-LINK等
 */

    private $shippingType;
    public function GetShippingType(){
        return $this->shippingType ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "complaintStatus", $this->stdResult )) {
            $this->complaintStatus = $this->stdResult->{"complaintStatus"};
        }
        if (array_key_exists ( "deliveryDate", $this->stdResult )) {
            $this->deliveryDate = $this->stdResult->{"deliveryDate"};
        }
        if (array_key_exists ( "deliveryNo", $this->stdResult )) {
            $this->deliveryNo = $this->stdResult->{"deliveryNo"};
        }
        if (array_key_exists ( "newDeliveryNo", $this->stdResult )) {
            $this->newDeliveryNo = $this->stdResult->{"newDeliveryNo"};
        }
        if (array_key_exists ( "newRemark", $this->stdResult )) {
            $this->newRemark = $this->stdResult->{"newRemark"};
        }
        if (array_key_exists ( "newShippingType", $this->stdResult )) {
            $this->newShippingType = $this->stdResult->{"newShippingType"};
        }
        if (array_key_exists ( "processingResults", $this->stdResult )) {
            $this->processingResults = $this->stdResult->{"processingResults"};
        }
        if (array_key_exists ( "remark", $this->stdResult )) {
            $this->remark = $this->stdResult->{"remark"};
        }
        if (array_key_exists ( "shippingType", $this->stdResult )) {
            $this->shippingType = $this->stdResult->{"shippingType"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "complaintStatus", $this->arrayResult )) {
            $this->complaintStatus = $arrayResult['complaintStatus'];
        }
        if (array_key_exists ( "deliveryDate", $this->arrayResult )) {
            $this->deliveryDate = $arrayResult['deliveryDate'];
        }
        if (array_key_exists ( "deliveryNo", $this->arrayResult )) {
            $this->deliveryNo = $arrayResult['deliveryNo'];
        }
        if (array_key_exists ( "newDeliveryNo", $this->arrayResult )) {
            $this->newDeliveryNo = $arrayResult['newDeliveryNo'];
        }
        if (array_key_exists ( "newRemark", $this->arrayResult )) {
            $this->newRemark = $arrayResult['newRemark'];
        }
        if (array_key_exists ( "newShippingType", $this->arrayResult )) {
            $this->newShippingType = $arrayResult['newShippingType'];
        }
        if (array_key_exists ( "processingResults", $this->arrayResult )) {
            $this->processingResults = $arrayResult['processingResults'];
        }
        if (array_key_exists ( "remark", $this->arrayResult )) {
            $this->remark = $arrayResult['remark'];
        }
        if (array_key_exists ( "shippingType", $this->arrayResult )) {
            $this->shippingType = $arrayResult['shippingType'];
        }

    }
}