<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 15:18
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateBase;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateBaseExchangeRateGetParam{
    /*
     *fromCurrency
     * @param String 	必须
     * 币种来源 	查询的货币币种；示例值：USD
     */
    public function setFromCurrency( $fromCurrency) {
        $this->sdkStdResult["fromCurrency"] = $fromCurrency;
    }
    /*
     * toCurrency
     * @param String 	必须
     * 币种去向 	转化后的货币币种；示例值：CNY
     */
    public function setToCurrency( $toCurrency) {
        $this->sdkStdResult["toCurrency"] = $toCurrency;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}

