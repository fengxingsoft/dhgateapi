<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;

use com\alibaba\openapi\client\entity\SDKDomain;

class DhgateItemAddStatusInfo extends SDKDomain
{


    private $code;

    public function GetCode()
    {
        return $this->code;
    }

    private $message;

    public function GetMessage()
    {
        return $this->message;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;

        if (array_key_exists("code", $this->stdResult)) {
            $this->code = $this->stdResult->{"code"};
        }

        if (array_key_exists("message", $this->stdResult)) {
            $this->message = $this->stdResult->{"message"};
        }


    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;

        if (array_key_exists("code", $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists("message", $this->arrayResult)) {
            $this->message = $arrayResult['message'];
        }


    }
}