<?php
namespace com\dhgate\openapi\client\policy;
 /*
 * 定义访问数据的规则
 */
class RequestPolicy {

    var $requestSendTimestamp;
    var $useHttps = false;
    var $requestProtocol =DataProtocol::param2;
    var $responseProtocol = DataProtocol::param2;
    var $responseCompress = true;
    var $requestCompressThreshold = - 1;
    var $timeout = 15;
    var $httpMethod = "POST";
    var $queryStringCharset = "GB18030";
    var $contentCharset = "UTF-8";
    var $needAuthorization = false;
    var $accessApiType = false;
    var $defaultApiVersion = 2;
    var $method;





}
?>