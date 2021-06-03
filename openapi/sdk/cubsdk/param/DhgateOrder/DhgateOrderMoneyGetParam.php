<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class DhgateOrderMoneyGetParam
{
    /*
     * apply 	Apply 	必须 	seller 虚拟账户输出 	Apply的JSON字符串
     */
    public function setApply( $apply) {
        $this->sdkStdResult["apply"] = $apply;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}