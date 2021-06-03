<?php

namespace com\dhgate\openapi\client;

use com\dhgate\openapi\client\policy\ClientPolicy;
use com\dhgate\openapi\client\policy\RequestPolicy;
use com\dhgate\openapi\client\serialize\SerializerProvider;

class SyncAPIClient
{
    var $clientPolicy;

    function __construct(ClientPolicy $clientPolicy)
    {
        $this->clientPolicy = $clientPolicy;
    }

    //组装访问的链接
    public function getMillisecond()
    {
        list($t1, $t2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($t1) + floatval($t2)) * 1000);
    }

    private function generateRequestPath(APIRequest $request, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy)
    {
        $urlResult = "";
        if ($requestPolicy->accessApiType) {
            $urlResult = "/router";
        } else {
            $urlResult = "/oauth2/access_token";
        }

        $defs = array(
            "/",
            "dop",
            $urlResult,

        );

        $urlResult = implode($defs);

        return $urlResult;
    }

    private function generateAPIPath(APIRequest $request, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy)
    {
        $urlResult = "";
        $defs = array(
            $urlResult,
            $requestPolicy->requestProtocol,
            "/",
            $request->apiId->version,
            "/",
            $request->apiId->namespace,
            "/",
            $clientPolicy->appKey
        );

        $urlResult = implode($defs);

        return $urlResult;
    }

    public function send(APIRequest $request, $resultDefinition, RequestPolicy $requestPolicy)
    {
        $urlRequest = $this->generateRequestPath($request, $requestPolicy, $this->clientPolicy);
        if ($requestPolicy->accessApiType) {
            if ($requestPolicy->useHttps) {
                if ($this->clientPolicy->httpsPort == 443) {
                    $urlRequest = "https://" . $this->clientPolicy->serverHost . $urlRequest;
                } else {
                    $urlRequest = "https://" . $this->clientPolicy->serverHost . ":" . $this->clientPolicy->httpsPort . $urlRequest;
                }
            } else {
                if ($this->clientPolicy->httpPort == 80) {
                    $urlRequest = "http://" . $this->clientPolicy->serverHost . $urlRequest;
                } else {
                    $urlRequest = "http://" . $this->clientPolicy->serverHost . ":" . $this->clientPolicy->httpPort . $urlRequest;
                }
            }
        } else {
            if ($requestPolicy->useHttps) {
                if ($this->clientPolicy->httpsPort == 443) {
                    $urlRequest = "https://" . $this->clientPolicy->accessHost . $urlRequest;
                } else {
                    $urlRequest = "https://" . $this->clientPolicy->accessHost . ":" . $this->clientPolicy->httpsPort . $urlRequest;
                }
            } else {
                if ($this->clientPolicy->httpPort == 80) {
                    $urlRequest = "http://" . $this->clientPolicy->accessHost . $urlRequest;
                } else {
                    $urlRequest = "http://" . $this->clientPolicy->accessHost . ":" . $this->clientPolicy->httpPort . $urlRequest;
                }
            }
        }

        $serializerTools = SerializerProvider::getSerializer($requestPolicy->requestProtocol);


        $requestData = array();
        if ($requestPolicy->needAuthorization) {
            $requestData ["access_token"] = $request->accessToken;
        }
        $requestData = array_merge($requestData, $request->addtionalParams);
        if ($requestPolicy->requestSendTimestamp) {
            $requestData ["timestamp"] = $this->getMillisecond();
        }
        //合并其他参数并序列化
        $requestData = $requestData + $serializerTools->serialize($request->requestEntity);
        $paramToSign = "";
        foreach ($requestData as $k => $v) {
            $paramToSign = $paramToSign . $k . "=" . urlencode($v) . "&";
        }
        $paramLength = strlen($paramToSign);
        if ($paramLength > 0) {
            $paramToSign = substr($paramToSign, 0, $paramLength - 1);

        }
        // return $urlRequest . "?" . $paramToSign;

        $ch = curl_init();
        if ($requestPolicy->httpMethod === "GET") {
            $urlRequest = $urlRequest . "?" . $paramToSign;
            curl_setopt($ch, CURLOPT_URL, $urlRequest);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.2) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            //$result = $newclient->get($urlRequest, $requestData);
        } else {
            curl_setopt($ch, CURLOPT_URL, $urlRequest);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.2) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $paramToSign);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//            $data = curl_exec ( $ch );
        }
        $data = curl_exec($ch);


        if ($data) {
            $content = $data;
            $deSerializerTools = SerializerProvider::getDeSerializer($requestPolicy->responseProtocol);
            $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if ($status >= 400 && $status <= 599) {

                $resultException = $deSerializerTools->buildException($content, $resultDefinition);
                throw $resultException;
//                echo "<title>正在跳转中.....</title>";
//                echo '<script language="javascript">';
//                echo 'document.location.reload()';
//                echo '</script>';
                // echo '服务器忙，请<a href="javascript:document.location.reload()">刷新</a>页面，或稍后再试！谢谢！!';exit;
            } else {

                $resultDefiniation = $deSerializerTools->deSerialize($content, $resultDefinition);
                return $resultDefiniation;


                // echo $status;
            }
        } else {
            $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            return $status;
        }
    }

}

?>