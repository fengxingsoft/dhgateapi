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
   * dh.category.attrval.list
   * $2.0
   * new 	根据发布类目id,子属性id,发布属性值id获取子属性值列表
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
     * new 	根据发布类目id,子属性id,发布属性值id获取子属性值列表
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
    * 根据发布类目id,子属性id,发布属性值id获取子属性值列表
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
     * new 	通过品牌名称获取品牌列表属性
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
//      * 根据发布类目id,子属性id,发布属性值id获取子属性值列表
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
         * 获取类目详细信息，包括类目信息、属性信息、属性值信息、和类目限制数据(价格、必须包含的关键字、不能包含的关键字)

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
    * 判断是否为3C类目或获取所有3C类目，入参不传为获取全部3C类目值，以逗号分隔；
    * 用于上传,修改产品时，判断是否需要填写售后模板属性值
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
     * 检查产品所在的类目是否容许对应的产品名；入参来源：获取类目列表接口(dh.categorys.get)返回的类目ID参数入参参数
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
     * 根据类目ID查询子类目信息,如果类目ID为空返回所有的一级类目, 所返回的信息可作为获取类目属性接口(dh.category.get)和商品上传（dh.product.add）的入参参数。
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
         * 根据类目ID获取该类目路径上的所有主线类目,即通过子类目获取其以上主线类目
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
     * 检查产品所在的类目是否容许对应的产品名
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
     * new 	通过类目修改时间获取类目Id列表
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
     * 获取佣金率列表,根据佣金公式计算佣金率
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
     * 获取类目列表,根据类目ID查询子类目信息
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

