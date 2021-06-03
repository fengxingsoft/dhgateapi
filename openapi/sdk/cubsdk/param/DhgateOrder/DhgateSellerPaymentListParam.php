<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/23
 * Time: 20:54
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateSellerPaymentListParam extends SDKDomain
{
    /*
     * endDate 	String 	必须 	查询结束时间 	查询结束时间
     */
    private $endDate;

    public function getEndDate() {
        return $this->endDate;
    }


    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }
/*
 * moneyMode 	String 	必须 	付款金额类型 	付款金额类型
 */
    private $moneyMode;

    public function getMoneyMode() {
        return $this->moneyMode;
    }

    public function setMoneyMode($moneyMode) {
        $this->moneyMode = $moneyMode;
    }
/*
 * pagenum 	int 	必须 	分页页数 	分页页数
 */

    private $pagenum;

    public function getPagenum() {
        return $this->pagenum;
    }

    public function setPagenum($pagenum) {
        $this->pagenum = $pagenum;
    }

/*
 * pagesize 	int 	必须 	每页数据大小 	每页数据大小

 */
    private $pagesize;
    public function getPagesize() {
        return $this->pagesize;
    }

    public function setPagesize($pagesize) {
        $this->pagesize = $pagesize;
    }


    /*
     * startDate 	String 	必须 	查询开始时间 	查询开始时间

     */
    private $startDate;
    public function getStartDate() {
        return $this->startDate;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }
    /*
     * supplierId 	String 	必须 	用户ID 	用户ID
     */
    private $supplierId;

    public function getSupplierId() {
        return $this->supplierId;
    }

    public function setSupplierId($supplierId) {
        $this->supplierId = $supplierId;
    }


}
