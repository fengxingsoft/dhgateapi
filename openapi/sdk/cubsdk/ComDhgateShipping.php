<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:41
 */
namespace com\dhgate\openapi\sdk\cubsdk;
use com\dhgate\openapi\client\APIId;
use com\dhgate\openapi\client\APIRequest;
use com\dhgate\openapi\client\APIResponse;
use com\dhgate\openapi\client\SyncAPIClient;
use com\dhgate\openapi\client\entity\AuthorizationToken;
use com\dhgate\openapi\client\entity\ParentResult;
use com\dhgate\openapi\client\entity\ResponseStatus;
use com\dhgate\openapi\client\entity\ResponseWrapper;
use com\dhgate\openapi\client\policy\ClientPolicy;
use com\dhgate\openapi\client\policy\DataProtocol;
use com\dhgate\openapi\client\policy\RequestPolicy;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingComputeItemGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingComputeItemGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingComputePackageParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingComputePackageResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTemplateGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTemplateGetParamTwo;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTemplateGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTemplateGetResultTwo;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTemplateListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTemplatesGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTrackinfoGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTrackinfoGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTrackinfoListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTrackinfoListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTypeListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping\DhgateShippingTypesGetResult;

class ComDhgateShipping
{
    private $serverHost = "api.dhgate.com";
    private $accessHost = "secure.dhgate.com";
    private $httpPort = 80;
    private $httpsPort = 443;
    private $appKey = 'dR62likZGM6Ptq6fv4RQ';
    private $secKey = 'JeY2EcHhNXhxhyNqOmLpy9Uz7URVeH5Q';
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
        $reqPolicy->requestProtocol =DataProtocol::param2;
        //访问接口的类型
        $reqPolicy->accessApiType=false;
        //组装网址数据
        $request = new APIRequest ();
        //组装参数数据
        $request->addtionalParams ["grant_type"] = "authorization_code";
        $request->addtionalParams ["code"] = $code;
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        $request->addtionalParams ["redirect_uri"] = "https://www.ejianda.com/testa/index/index/index";
        //获取返回数据
        $resultDefinition = new AuthorizationToken();
        return   $this->getAPIClient()->send($request,$resultDefinition, $reqPolicy);
    }


    public function refreshToken($refreshToken)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = false;
        $reqPolicy->requestSendTimestamp = false;
        $reqPolicy->useHttps = true;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=false;
        $request = new APIRequest ();
        $request->addtionalParams ["grant_type"] = "refresh_token";
        $request->addtionalParams ["refresh_token"] = $refreshToken;
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        $request->addtionalParams ["scope"] = 'basic';
        $resultDefinition = new AuthorizationToken ();
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.shipping.compute.item
     * $2.0
     * new 	计算单个产品，且指定唯一物流方式，所得到的运费接口
     */
    public function DhgateShippingComputeItemGet(DhgateShippingComputeItemGetParam $param,$AccessToken,DhgateShippingComputeItemGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.compute.item", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.shipping.compute.package
     * $2.0
     * new 	产品运费计算通用接口，直接通过物流包装信息、产品数量、运达国家等信息计算运费列表信息
     */
    public function DhgateShippingComputePackageGet(DhgateShippingComputePackageParam $param,$AccessToken,DhgateShippingComputePackageResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "get";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.compute.package", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
         * dh.shipping.template.get
         * $1.0
         * 卖家获取运费模版
         */
    public function DhgateShippingTemplateGet(DhgateShippingTemplateGetParam $param,$AccessToken,DhgateShippingTemplateGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.template.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
    * dh.shipping.template.get
    * $2.0
    * new 	运费模版详情接口
    */
    public function DhgateShippingTemplateGetTwo(DhgateShippingTemplateGetParamTwo $param,$AccessToken,DhgateShippingTemplateGetResultTwo $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.template.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.shipping.template.list
     * $2.0
     * 卖家获取运费模版列表基础信息接口，此接口提供运费模板基本信息。获取运费模板详情请调用接口dh.shipping.template.get
     */
    public function DhgateShippingTemplateListGet($AccessToken,DhgateShippingTemplateListResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.template.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
 * dh.shipping.templates.get
 * $1.0
 * 卖家获取运费模版
 */
    public function DhgateShippingTemplatesGet($AccessToken,DhgateShippingTemplatesGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.templates.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.shipping.trackinfo.get
     * $1.0
     * 获得物流信息
     */

    public function DhgateShippingTrackinfoGet(DhgateShippingTrackinfoGetParam $param,$AccessToken,DhgateShippingTrackinfoGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.trackinfo.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
  * dh.shipping.trackinfo.list
  * $2.0
  * new 	物流追踪信息接口
  */
    public function DhgateShippingTrackinfoListGet(DhgateShippingTrackinfoListParam $param,$AccessToken,DhgateShippingTrackinfoListResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.trackinfo.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
    * dh.shipping.typelist
    * $2.0
    * 获取回填中物流方式列表信息，返回所有物流方式
    */
    public function DhgateShippingTypeListGet($AccessToken, DhgateShippingTypeListResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.typelist", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
    * dh.shipping.types.get
    * $1.0
    * 获取运费模板中物流方式列表信息
    */
    public function DhgateShippingTypesGet($AccessToken, DhgateShippingTypesGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.shipping.types.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

}


