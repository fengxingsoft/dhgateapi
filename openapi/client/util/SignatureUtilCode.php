<?php
namespace com\dhgate\openapi\client\util;
class SignatureUtilCode {

    public static function signature($path, array $parameters, $secKey) {
        $paramsToSign = array ();
        foreach ( $parameters as $k => $v ) {
            $paramToSign = $k . $v;
            Array_push ( $paramsToSign, $paramToSign );
        }
        sort ( $paramsToSign );
        $implodeParams = implode ( $paramsToSign );
        $pathAndParams = $path . $implodeParams;
        $sign = hash_hmac ( "sha1", $pathAndParams, $secKey, true );
        $signHexWithLowcase = bin2hex ( $sign );
        $signHexUppercase = strtoupper ( $signHexWithLowcase );
        return $signHexUppercase;
    }
}
?>