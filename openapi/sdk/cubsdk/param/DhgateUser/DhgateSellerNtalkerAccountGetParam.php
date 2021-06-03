<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateUser;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class DhgateSellerNtalkerAccountGetParam
{
/*
 * nickname 	String 	必须 	卖家昵称
 */
    public function setNickname( $nickname) {
        $this->sdkStdResult["nickname"] = $nickname;
    }
/*
 * supplierid 	String 	必须 	卖家的supplierid
 */
    public function setSupplierid( $supplierid) {
        $this->sdkStdResult["supplierid"] = $supplierid;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}