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
use com\dhgate\openapi\client\APIResponse;
use com\dhgate\openapi\client\SyncAPIClient;
use com\dhgate\openapi\client\entity\AuthorizationToken;
use com\dhgate\openapi\client\entity\ParentResult;
use com\dhgate\openapi\client\entity\ResponseStatus;
use com\dhgate\openapi\client\entity\ResponseWrapper;
use com\dhgate\openapi\client\policy\ClientPolicy;
use com\dhgate\openapi\client\policy\DataProtocol;
use com\dhgate\openapi\client\policy\RequestPolicy;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderApplymoneyCheckParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderApplymoneyCheckResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderApplymoneyGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderApplymoneyGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderDeliverySaveParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderDeliverySaveResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderDisputecloseListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderDisputecloseListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderDisputeopenListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderDisputeopenListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderListGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderListGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderMoneyGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderMoneyGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderProductGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateOrderProductGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateSellerPaymentGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder\DhgateSellerPaymentGetResult;


class ComDhgateOrder
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
    //???????????????????????????
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
        //?????????????????????????????????????????????
        $reqPolicy->needAuthorization = false;
        //gettoken???????????????
        $reqPolicy->requestSendTimestamp = false;
        //????????????https??????
        $reqPolicy->useHttps = true;
        //?????????????????????
        $reqPolicy->requestProtocol =DataProtocol::param2;
        //?????????????????????
        $reqPolicy->accessApiType=false;
        //??????????????????
        $request = new APIRequest ();
        //??????????????????
        $request->addtionalParams ["grant_type"] = "authorization_code";
        $request->addtionalParams ["code"] = $code;
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        $request->addtionalParams ["redirect_uri"] = "https://www.ejianda.com/testa/index/index/index";
        //??????????????????
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
     * dh.order.applymoney.check
     * $2.0
     * new 	??????????????????????????????,?????????POST??????????????????
     */
    public function DhgateOrderApplymoneyCheckGet(DhgateOrderApplymoneyCheckParam $param,$AccessToken ,  DhgateOrderApplymoneyCheckResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.applymoney.check", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.order.applymoney.get
     * $2.0
     * new 	??????????????????,?????????POST??????????????????
     */
    public function DhgateOrderApplymoneyGet(DhgateOrderApplymoneyGetParam $param,$AccessToken ,DhgateOrderApplymoneyGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.applymoney.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.order.delivery.save
     * $2.0
     * new 	???????????????,????????????????????????,?????????POST?????????????????????????????????????????????????????????
     */
    public function DhgateOrderDeliverySaveGet(DhgateOrderDeliverySaveParam $param,$AccessToken ,DhgateOrderDeliverySaveResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.applymoney.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.order.disputeopen.list
     * $2.0
     * new 	??????seller????????????????????????,?????????POST??????????????????
     */
    public function DhgateOrderDisputeopenListGet(DhgateOrderDisputeopenListParam $param,$AccessToken ,DhgateOrderDisputeopenListResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.disputeopen.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.order.disputeclose.list
     * $2.0
     * new 	??????seller????????????????????????,?????????POST??????????????????
     */
    public function DhgateOrderDisputecloseListGet(DhgateOrderDisputecloseListParam $param,$AccessToken ,DhgateOrderDisputecloseListResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.disputeclose.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.order.get
     * $2.0
     * new 	??????????????????
     */
    public function DhgateOrderGet(DhgateOrderGetParam $param,$AccessToken ,DhgateOrderGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.order.list.get
     * $2.0
     * new 	??????seller????????????,?????????POST??????????????????,????????????????????????1??????365??????
     */
    public function DhgateOrderListGet(DhgateOrderListGetParam $param,$AccessToken ,DhgateOrderListGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.list.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.order.money.get
     * $1.0
     * ??????????????????,?????????POST??????????????????
     */
    public function DhgateOrderMoneyGet(DhgateOrderMoneyGetParam $param,$AccessToken ,DhgateOrderMoneyGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.money.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.order.product.get
     * $2.0
     * new 	????????????????????????
     */
    public function DhgateOrderProductGet(DhgateOrderProductGetParam $param,$AccessToken ,DhgateOrderProductGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.order.product.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.seller.payment.get
     * $1.0
     * ??????????????????????????????,?????????POST??????????????????
     */
    public function DhgateSellerPaymentGet(DhgateSellerPaymentGetParam $param,$AccessToken ,DhgateSellerPaymentGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.seller.payment.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
}


