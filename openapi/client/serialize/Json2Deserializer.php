<?php
namespace com\dhgate\openapi\client\serialize;
use com\dhgate\openapi\client\policy\DataProtocol;
use com\dhgate\openapi\client\exception\OceanException;
class Json2Deserializer implements DeSerializer {
    public function supportedContentType() {
        return DataProtocol::param2;
    }
    public function deSerialize($deSerializer, $resultDefinition, $charSet = null) {
        $stdResult = json_decode ( $deSerializer );
        $resultDefinition->setStdResult ( $stdResult );
        return $resultDefinition;
    }
    //错误处理
    public function buildException($deSerializer, $resultType, $charSet = null) {
        $exceptionStdResult = json_decode ( $deSerializer );
//		$errorCode="invalid_request";
//		$errorMessage="wrong authorizationCode:e9ebd76a-40e6-48d1-8b44-675ece3316c7";
        $errorCode = $exceptionStdResult->{"error"};
        $errorMessage = $exceptionStdResult->{"errorDescription"};

        $oceanException = new OceanException($errorMessage,$errorCode);
      $oceanException->setErrorCode ( $errorCode );
        return $oceanException;
    }
}
