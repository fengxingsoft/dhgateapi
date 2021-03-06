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
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryAttrvalListGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryAttrvalListGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryBrandListGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryBrandListGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryidListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryidListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryIs3CcategoryParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryIs3CcategoryResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryItemnameValidParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryItemnameValidResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryListGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryListGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryAttrvalListBrandGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryAttrvalListBrandGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryPathGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryPathGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryPronameValidParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryPronameValidResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategorysCommissionsResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategorysGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategorysGetResult;

class ComDhgateCategory
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
   * dh.category.attrval.list
   * $2.0
   * new 	??????????????????id,?????????id,???????????????id????????????????????????
   */
    public function DhgateCateGoryAttrvalListGet(DhgateCategoryAttrvalListGetParam $param,$AccessToken,DhgateCategoryAttrvalListGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.attrval.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.category.attrval.listBrand
     * $2.0
     * new 	??????????????????id,?????????id,???????????????id????????????????????????
     */

    public function DhgateCateGoryAttrvalListBrandGet(DhgateCategoryAttrvalListGetParam $param,$AccessToken,DhgateCategoryAttrvalListGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.attrval.listBrand", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
    * ??????????????????id,?????????id,???????????????id????????????????????????
    * 	dh.category.brandList
    */

    public function DhgateCateGoryBrandListGet(DhgateCategoryBrandListGetParam $param,$AccessToken,DhgateCategoryBrandListGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.brandList", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.category.brands
     * $2.0
     * new 	??????????????????????????????????????????
     */
    public function DhgateCateGoryBrandsGet(DhgateCategoryBrandListGetParam $param,$AccessToken,DhgateCategoryBrandListGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.brands", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }


//    /*
//      * ??????????????????id,?????????id,???????????????id????????????????????????
//      * 	 	dh.category.attrval.listBrand
//      */
//
//    public function DhgateCategoryAttrvalListBrandGet(DhgateCategoryAttrvalListBrandGetParam $param,$AccessToken,DhgateCategoryAttrvalListBrandGetResult $resultDefinition){
//        $reqPolicy = new RequestPolicy ();
//        $reqPolicy->httpMethod = "POST";
//        $reqPolicy->needAuthorization = true;
//        $reqPolicy->requestSendTimestamp = true;
//        $reqPolicy->useHttps = false;
//        $reqPolicy->requestProtocol = DataProtocol::param2;
//        $reqPolicy->accessApiType=true;
//        $request = new APIRequest ();
//        $apiId = new APIId ("dh.category.attrval.listBrand", "2.0");
//        $request->addtionalParams ["method"] = $apiId->method;
//        $request->addtionalParams ["v"] =  $apiId->version;
//        $request->accessToken=$AccessToken;
//        $request->requestEntity=$param;
//        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
//        return $resultDefinition;
//    }
    /*
         * ??????????????????????????????????????????????????????????????????????????????????????????????????????(????????????????????????????????????????????????????????????)

         * 	 	dh.category.get$2.0
         */

    public function DhgateCategoryGet(DhgateCategoryGetParam $param,$AccessToken,DhgateCategoryGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
   /*
    *
    * ???????????????3C?????????????????????3C????????????????????????????????????3C??????????????????????????????
    * ????????????,???????????????????????????????????????????????????????????????
    *  dh.category.is3Ccategory  $2.0
    */

    public function DhgateIs3cCategoryGet(DhgateCategoryIs3CcategoryParam $param,$AccessToken,DhgateCategoryIs3CcategoryResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.is3Ccategory", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.category.itemname.valid
     * $2.0     new
     * ???????????????????????????????????????????????????????????????????????????????????????????????????(dh.categorys.get)???????????????ID??????????????????
     *
     */
    public function DhgateCategoryItemnameValidGet(DhgateCategoryItemnameValidParam $param,$AccessToken,DhgateCategoryItemnameValidResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.itemname.valid", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.category.list$2.0
     * new
     * ????????????ID?????????????????????,????????????ID?????????????????????????????????, ???????????????????????????????????????????????????(dh.category.get)??????????????????dh.product.add?????????????????????
     */
    public function DhgateCateGoryListGet(DhgateCategoryListGetParam $param,$AccessToken,DhgateCategoryListGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
        /*
         * dh.category.path.get
         * $2.0
         * ????????????ID?????????????????????????????????????????????,?????????????????????????????????????????????
         */
    public function DhgateCategoryPathGet(DhgateCategoryPathGetParam $param,$AccessToken,DhgateCategoryPathGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.path.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.category.proname.valid
     * $1.0
     * ?????????????????????????????????????????????????????????
     */
    public function DhgateCategoryPronameValidGet(DhgateCategoryPronameValidParam $param,$AccessToken,DhgateCategoryPronameValidResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.category.path.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.categoryid.list
     * $2.0
     * new 	????????????????????????????????????Id??????
     */

    public function DhgateCategoryidListGet(DhgateCategoryidListParam $param,$AccessToken,DhgateCategoryidListResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.categoryid.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.categorys.commissions
     * $1.0
     * ?????????????????????,?????????????????????????????????
     */
    public function DhgateCategorysCommissionsGet($AccessToken,DhgateCategorysCommissionsResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.categorys.commissions", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.categorys.get
     * $1.0
     * ??????????????????,????????????ID?????????????????????
     */
    public function DhgateCategorysGet(DhgateCategorysGetParam $param,$AccessToken,DhgateCategorysGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.categorys.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }



}

