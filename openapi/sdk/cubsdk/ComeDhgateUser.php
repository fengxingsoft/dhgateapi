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
use com\dhgate\openapi\sdk\cubsdk\param\DhgateUser\DhgateSellerNtalkerAccountGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateUser\DhgateSellerNtalkerAccountGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateUser\DhgateSellerNtalkerSiteidGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateUser\DhgateSellerNtalkerSiteidGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateUser\DhgateUserBaseGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateUser\DhgateUserSellerGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateUser\DhgateUserSellerGetTwoResult;


class ComeDhgateUser extends ComDhgateFacade
{

    /*
     * dh.seller.ntalker.account.get
     * $1.0
     * 获取卖家ntalker账号信息
     */
    public function DhgateSellerNtalkerAccountGet(DhgateSellerNtalkerAccountGetParam $param,$AccessToken ,DhgateSellerNtalkerAccountGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.seller.ntalker.account.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.seller.ntalker.siteid.get
     * $1.0
     * 获取卖家企业ID
     */
    public function DhgateSellerNtalkerSiteidGet(DhgateSellerNtalkerSiteidGetParam $param,$AccessToken ,DhgateSellerNtalkerSiteidGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.seller.ntalker.siteid.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.user.base.get
     * $1.0
     * 查询账号基本信息,可查询买家账号与卖家账号的基本信息
     */
    public function DhgateUserBaseGet($AccessToken ,DhgateUserBaseGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.user.base.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.user.seller.get
     * $1.1
     * 查询卖家用户信息
     */
    public function DhgateUserSellerGetOne($AccessToken ,DhgateUserSellerGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.user.seller.get", "1.1");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.user.seller.get
     * $2.0
     * 查询卖家用户信息
     */
    public function DhgateUserSellerGetTwo($AccessToken ,DhgateUserSellerGetTwoResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.user.seller.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

}


