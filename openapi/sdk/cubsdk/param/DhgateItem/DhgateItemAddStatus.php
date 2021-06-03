<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;

use ArrayObject;
use com\alibaba\openapi\client\entity\SDKDomain;

class DhgateItemAddStatus extends SDKDomain
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

    private $solution;

    public function GetSolution()
    {
        return $this->solution;
    }


    private $subErrors;

    public function GetSubErrors()
    {
        return $this->subErrors;
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

        if (array_key_exists("solution", $this->stdResult)) {
            $this->solution = $this->stdResult->{"solution"};
        }

        if (array_key_exists("subErrors", $this->stdResult)) {
            $subErrorsResult = $this->stdResult->{"subErrors"};
            $object = json_decode(json_encode($subErrorsResult), true);
            $this->subErrors = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateItemAddStatusInfo = new DhgateItemAddStatusInfo();
                $DhgateItemAddStatusInfo->setStdResult($arrayobject);
                $this->subErrors[$i] = $DhgateItemAddStatusInfo;
            }
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
        if (array_key_exists("solution", $this->arrayResult)) {
            $this->solution = $arrayResult['solution'];
        }
        if (array_key_exists("subErrors", $this->arrayResult)) {
            $this->subErrors = $arrayResult['subErrors'];
        }

        if (array_key_exists("subErrors", $this->arrayResult)) {
            $subErrorsResult = $arrayResult['subErrors'];
            for ($i = 0; $i < count($subErrorsResult); $i++) {
                $DhgateItemAddStatusInfo = new DhgateItemAddStatusInfo();
                $DhgateItemAddStatusInfo->setArrayResult($subErrorsResult[$i]);
                $this->subErrors[$i] = $DhgateItemAddStatusInfo;
            }
        }

    }
}