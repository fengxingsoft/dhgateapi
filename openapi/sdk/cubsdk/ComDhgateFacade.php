<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/9/30
 * Time: 21:36
 */

namespace com\dhgate\openapi\sdk\cubsdk;

use com\dhgate\openapi\client\APIId;
use com\dhgate\openapi\client\APIRequest;
use com\dhgate\openapi\client\entity\AuthorizationToken;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\policy\ClientPolicy;
use com\dhgate\openapi\client\policy\DataProtocol;
use com\dhgate\openapi\client\policy\RequestPolicy;
use com\dhgate\openapi\client\SyncAPIClient;

class ComDhgateFacade extends SDKDomain
{
    private $serverHost = "api.dhgate.com";
    private $accessHost = "secure.dhgate.com";
    private $httpPort = 80;
    private $httpsPort = 443;
    private $appKey = '';
    private $secKey = '';
    private $syncAPIClient;

    public function setServerHost($serverHost)
    {
        $this->serverHost = $serverHost;
    }

    public function setHttpPort($httpPort)
    {
        $this->httpPort = $httpPort;
    }

    public function setHttpsPort($httpsPort)
    {
        $this->httpsPort = $httpsPort;
    }

    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
    }

    public function setSecKey($secKey)
    {
        $this->secKey = $secKey;
    }

    //初始化链接地址状态
    public function initClient()
    {
        $clientPolicy = new ClientPolicy ();
        $clientPolicy->appKey = $this->appKey;
        $clientPolicy->secKey = $this->secKey;
        $clientPolicy->httpPort = $this->httpPort;
        $clientPolicy->httpsPort = $this->httpsPort;
        $clientPolicy->serverHost = $this->serverHost;

        $this->syncAPIClient = new SyncAPIClient ($clientPolicy);
    }

    public function getAPIClient()
    {
        if ($this->syncAPIClient == null) {
            $this->initClient();
        }
        return $this->syncAPIClient;
    }


    public function getToken($code)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "post";
        //暂时不用这个以后升级可能会用到
        $reqPolicy->needAuthorization = false;
        //gettoken不用时间戳
        $reqPolicy->requestSendTimestamp = false;
        //是否使用https访问
        $reqPolicy->useHttps = true;
        //访问接口的模块
        $reqPolicy->requestProtocol = DataProtocol::param2;
        //访问接口的类型
        $reqPolicy->accessApiType = false;
        //组装网址数据
        $request = new APIRequest ();
        //组装参数数据
        $request->addtionalParams ["grant_type"] = "authorization_code";
        $request->addtionalParams ["code"] = $code;
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        //https://www.ejianda.com/testa/index/index/index
        $request->addtionalParams ["redirect_uri"] = "http://www.ejianda.com:9998/sysauth/getdhgatetokenpage";

        $apiId = new APIId("system.oauth2", "getToken", $reqPolicy->defaultApiVersion);

        $request->apiId = $apiId;
        //获取返回数据
        $resultDefinition = new AuthorizationToken();
        return $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
    }


    public function refreshToken($refreshToken)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = false;
        $reqPolicy->requestSendTimestamp = false;
        $reqPolicy->useHttps = true;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $request = new APIRequest ();
        $request->addtionalParams ["grant_type"] = "refresh_token";
        $request->addtionalParams ["refresh_token"] = $refreshToken;
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        $request->addtionalParams ["scope"] = 'basic';

        $apiId = new APIId ("system.oauth2", "getToken", $reqPolicy->defaultApiVersion);
        $request->apiId = $apiId;

        $resultDefinition = new AuthorizationToken ();
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
}

