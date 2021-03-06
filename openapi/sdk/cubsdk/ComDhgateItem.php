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
use com\dhgate\openapi\client\policy\ClientPolicy;
use com\dhgate\openapi\client\policy\DataProtocol;
use com\dhgate\openapi\client\policy\RequestPolicy;
use com\dhgate\openapi\client\SyncAPIClient;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemAddParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemAddResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemAferSaleListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemBaseUpdateParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemBaseUpdateResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemDeleteListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemDeleteListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemDownShelfListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemDownShelfListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemGroupListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemGroupListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemHtmlGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemHtmlGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemLeadingUpdateListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemLeadingUpdateListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemPeriodUpdateListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemPeriodUpdateListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemPeroidListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemPeroidListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemPriceUpdateParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemPriceUpdateResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemSkuAttrValGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemSkuAttrValGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemSkuGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemSkuGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemSkuListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemSkuListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemStatusGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemStatusGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemTemplateListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemTemplateListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemUpdateParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemUpdateResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemUpshelfListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemUpshelfListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemWholesaleUpdateListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateItemWholesaleUpdateListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateRelmodelDeleteParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateRelmodelDeleteResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateRelmodelPageGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateItem\DhgateRelmodelPageGetResult;

class ComDhgateItem
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
        $reqPolicy->requestProtocol = DataProtocol::param2;
        //?????????????????????
        $reqPolicy->accessApiType = false;
        //??????????????????
        $request = new APIRequest ();
        //??????????????????
        $request->addtionalParams ["grant_type"] = "authorization_code";
        $request->addtionalParams ["code"] = $code;
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        $request->addtionalParams ["redirect_uri"] = "http://www.ejianda.com:9998/sysauth/getdhgatetokenpage";
        //??????????????????
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
        $reqPolicy->accessApiType = false;
        $request = new APIRequest ();
        $request->addtionalParams ["grant_type"] = "refresh_token";
        $request->addtionalParams ["refresh_token"] = $refreshToken;
        $request->addtionalParams ["client_id"] = $this->appKey;
        $request->addtionalParams ["client_secret"] = $this->secKey;
        $request->addtionalParams ["scope"] = 'basic';
        $resultDefinition = new AuthorizationToken ();
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.add
     * $2.0
     * new
     * ????????????????????????,?????????POST??????????????????.?????????????????????dh.categorys.get???dh.album.img.upload???dh.shipping.templates.get???
     */
    public function DhgateItemAdd(DhgateItemAddParam $param, $AccessToken, DhgateItemAddResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.add", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.aftersale.list
     * $2.0
     * new 	??????????????????????????????
     */
    public function DhgateItemAftersaleListGet($AccessToken, DhgateItemAferSaleListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.aftersale.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.base.update
     * $2.0
     * new 	??????????????????????????????????????????POST?????????????????????
     */
    public function DhgateItemBaseUpdateGet(DhgateItemBaseUpdateParam $param, $AccessToken, DhgateItemBaseUpdateResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.base.update", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.delete.list
     * $2.0
     * new 	??????????????????,?????????POST??????????????????
     */
    public function DhgateItemDeleteListGet(DhgateItemDeleteListParam $param, $AccessToken, DhgateItemDeleteListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.delete.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.downshelf.list
     * $2.0
     * new 	??????????????????,?????????POST??????????????????
     */
    public function DhgateItemDownShelfListGet(DhgateItemDownShelfListParam $param, $AccessToken, DhgateItemDownShelfListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.downshelf.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.get
     * $2.0
     *  new 	????????????????????????
     */
    public function DhgateItemGet(DhgateItemGetParam $param, $AccessToken, DhgateItemGetResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.group.list
     * $2.0
     * new 	???????????????????????????,?????????????????????????????????
     */
    public function DhgateItemGroupListGet(DhgateItemGroupListParam $param, $AccessToken, DhgateItemGroupListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.group.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.html.get
     * $2.0
     * new 	????????????????????????
     */
    public function DhgateItemHtmlGet(DhgateItemHtmlGetParam $param, $AccessToken, DhgateItemHtmlGetResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.html.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.leading.update.list
     * $2.0
     * new 	???????????????????????????????????????POST?????????????????????
     */
    public function DhgateItemLeadingUpdateListGet(DhgateItemLeadingUpdateListParam $param, $AccessToken, DhgateItemLeadingUpdateListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.leading.update.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.list
     * $2.0
     * new 	???????????????????????????????????????????????????????????????????????????????????????????????????
     */
    public function DhgateItemListGet(DhgateItemListParam $param, $AccessToken, DhgateItemListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.period.list
     * $2.0
     * new 	?????????????????????????????????
     */
    public function DhgateItemPeriodListGet(DhgateItemPeroidListParam $param, $AccessToken, DhgateItemPeroidListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.period.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.period.update.list
     * $2.0
     * new 	?????????????????????????????????????????????POST?????????????????????
     */
    public function DhgateItemPeriodUpdateListGet(DhgateItemPeriodUpdateListParam $param, $AccessToken, DhgateItemPeriodUpdateListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.period.update.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.price.update
     * $2.0
     * new 	??????????????????????????????????????????POST?????????????????????
     */

    public function DhgateItemPriceUpdateGet(DhgateItemPriceUpdateParam $param, $AccessToken, DhgateItemPriceUpdateResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.price.update", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.sku.get
     * $2.0
     * new 	????????????sku????????????.skuId??????dh.item.sku.list??????
     */
    public function DhgateItemSkuGet(DhgateItemSkuGetParam $param, $AccessToken, DhgateItemSkuGetResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.sku.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.sku.list
     * $2.0
     * new 	??????sku????????????
     */
    public function DhgateItemSkuListGet(DhgateItemSkuListParam $param, $AccessToken, DhgateItemSkuListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.sku.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.skuAttrval.get
     * $2.0
     * new 	????????????sku????????????????????????skuId??????dh.product.sku.list??????
     */
    public function DhgateItemSkuAttrValGet(DhgateItemSkuAttrValGetParam $param, $AccessToken, DhgateItemSkuAttrValGetResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.skuAttrval.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.status.get
     * $2.0     new
     * ??????????????????
     */
    public function DhgateItemStatusGet(DhgateItemStatusGetParam $param, $AccessToken, DhgateItemStatusGetResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.status.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.template.list
     * $2.0
     * new 	??????????????????????????????
     */
    public function DhgateItemTemplateListGet(DhgateItemTemplateListParam $param, $AccessToken, DhgateItemTemplateListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.template.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.update
     * $2.0
     * new
     * ?????????????????????????????????dh.item.get?????????????????????,?????????????????????dh.item.add?????????????????????????????????????????????????????????????????????????????????
     */
    public function DhgateItemUpdateGet(DhgateItemUpdateParam $param, $AccessToken, DhgateItemUpdateResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.update", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.upshelf.list
     * $2.0
     * new 	??????????????????,?????????POST??????????????????
     */
    public function DhgateItemUpshelfListGet(DhgateItemUpshelfListParam $param, $AccessToken, DhgateItemUpshelfListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.upshelf.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.item.wholesale.update.list
     * $2.0
     * new 	????????????????????????????????????POST?????????????????????
     */
    public function DhgateItemWholesaleUpdateListGet(DhgateItemWholesaleUpdateListParam $param, $AccessToken, DhgateItemWholesaleUpdateListResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.item.wholesale.update.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.relmodel.add
     * $2.0
     * new 	????????????????????????????????????,?????????POST??????????????????.
     */
    public function DhgateRelmodelAddGet($AccessToken)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.relmodel.add", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $resultDefinition = $this->getAPIClient()->send($request, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.relmodel.delete
     * $2.0
     * new 	????????????????????????????????????,?????????POST??????????????????.
     */
    public function DhgateRelmodelDeleteGet(DhgateRelmodelDeleteParam $param, $AccessToken, DhgateRelmodelDeleteResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.relmodel.delete", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.relmodel.modify
     * $2.0
     * new 	????????????????????????????????????,?????????POST??????????????????.
     */
    public function DhgateRemodelModifyGet($AccessToken)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.relmodel.modify", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $resultDefinition = $this->getAPIClient()->send($request, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.relmodel.pageget
     * $2.0
     * new 	?????????????????????????????????????????????????????????????????????
     */
    public function DhgateRelmodelPageGet(DhgateRelmodelPageGetParam $param, $AccessToken, DhgateRelmodelPageGetResult $resultDefinition)
    {
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType = true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.relmodel.pageget", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] = $apiId->version;
        $request->accessToken = $AccessToken;
        $request->requestEntity = $param;
        $resultDefinition = $this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

}


