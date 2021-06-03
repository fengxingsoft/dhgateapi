<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/12
 * Time: 11:12
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateBase;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateBaseExchangeRateGetResult{
    /*
     * exchangeRate
     * @Return double 	必须
     * 汇率 	示例值：6.13
     */
    private $exchangeRate;
    public function getExchangeRate(){
        return $this->exchangeRate;
    }
    /*
     * fromCurrency
     * @Return String 	必须
     * 币种来源 	查询的货币币种；示例值：USD
   */
    private $fromCurrency;
    public function getFromCurrency(){
        return $this->fromCurrency;
    }
    /*
     * toCurrency
     * @return String 	必须
     * 币种去向 	转化后的货币币种；示例值：CNY
   */
    private $toCurrency;
    public function getToCurrency(){
        return $this->toCurrency;
    }
    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("exchangeRate", $this->stdResult)) {
            $this->exchangeRate = $this->stdResult->{"exchangeRate"};
        }
        if (array_key_exists('fromCurrency', $this->stdResult)) {
            $this->fromCurrency = $this->stdResult->{"fromCurrency"};
        }
        if (array_key_exists('toCurrency', $this->stdResult)) {
            $this->toCurrency = $this->stdResult->{"toCurrency"};
        }
    }

}

