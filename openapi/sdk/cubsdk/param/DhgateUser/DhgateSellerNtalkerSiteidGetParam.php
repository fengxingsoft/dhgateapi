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

class DhgateSellerNtalkerSiteidGetParam
{
    /*
     * nickname 	String 	必须 	卖家的登录名
     */
    public function setNickname( $nickname) {
        $this->sdkStdResult["nickname"] = $nickname;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}