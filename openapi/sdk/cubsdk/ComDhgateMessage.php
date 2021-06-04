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
use com\dhgate\openapi\sdk\cubsdk\param\DhgateBase\DhgateMessageGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageCountGet;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageCountListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageCountListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageDeleteParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageDeleteResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageDetailGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageDetailGetResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageGetParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageInfoReplyParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageInfoReplyResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageListParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageListRecentParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageListRecentResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageListResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageReadedUpdateParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageReadedUpdateResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageSendParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageSendResult;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageStatusUpdateParam;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageStatusUpdateResult;

class ComDhgateMessage
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
     * dh.message.count
     * $2.0
     * new
     * 获取站内信总数、未读数量、已读数量、未读系统消息量、未读买卖消息量、未读平台公告消息量
     */
    public function DhgateMessageCount($AccessToken ,  DhgateMessageCountGet $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.count", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.message.count.list
     * $2.0
     * new
     * 获取时间段内不同类型站内信数量接口
     */
    public function DhgateMessageCountListGet(DhgateMessageCountListParam $param,$AccessToken ,  DhgateMessageCountListResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.count.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.message.delete
     * $2.0
     * new 	删除站内信信息
     */

    public function DhgateMessageDeleteGet(DhgateMessageDeleteParam $param ,$AccessToken ,  DhgateMessageDeleteResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.delete", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.message.detail.get
     * $1.0
     * 获取站内信内容信息
     */
    public function DhgateMessageDetailGet(DhgateMessageDetailGetParam $param ,$AccessToken ,  DhgateMessageDetailGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.detail.get", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
   /*
    * dh.message.get
    * $2.0     new
    * 获取一条站内信的详细回复内容信息
    */
    public function DhgateMessageGet(DhgateMessageGetParam $param ,$AccessToken ,  DhgateMessageGetResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.get", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.message.info.reply
     * $2.0
     * 站内信回复
     */
    public function DhgateMessageInfoReplyGet(DhgateMessageInfoReplyParam $param ,$AccessToken ,  DhgateMessageInfoReplyResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.info.reply", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

    /*
     * dh.message.send
     * $2.0     new 	站内信发送
     */
    public function DhgateMessageSend(DhgateMessageSendParam $param ,$AccessToken ,  DhgateMessageSendResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.send", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.message.list
     * $2.0     new
     * 获取站内信主题列表
     */
    public function DhgateMessageListGet(DhgateMessageListParam $param ,$AccessToken ,  DhgateMessageListResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.list", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.message.list.recent
     * $2.0
     * new 	获取最近更新的站内信主题列表
     */
    public function DhgateMessageListRecentGet(DhgateMessageListRecentParam $param ,$AccessToken ,DhgateMessageListRecentResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.list.recent", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }
    /*
     * dh.message.readed.update
     * $1.0
     * 更新站内信状态为已读
     * DhgateMessageReadedUpdateParam
     */
    public function DhgateMessageReadedUpdateGet(DhgateMessageReadedUpdateParam $param ,$AccessToken,DhgateMessageReadedUpdateResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.readed.update", "1.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request,$resultDefinition, $reqPolicy);

    }
    /*
     * dh.message.status.update
     * $2.0     new 	修改站内信为已读、未读、标记、未标记状态
     */
    public function DhgateMessageStatusUpdateGet(DhgateMessageStatusUpdateParam $param ,$AccessToken ,  DhgateMessageStatusUpdateResult $resultDefinition){
        $reqPolicy = new RequestPolicy ();
        $reqPolicy->httpMethod = "POST";
        $reqPolicy->needAuthorization = true;
        $reqPolicy->requestSendTimestamp = true;
        $reqPolicy->useHttps = false;
        $reqPolicy->requestProtocol = DataProtocol::param2;
        $reqPolicy->accessApiType=true;
        $request = new APIRequest ();
        $apiId = new APIId ("dh.message.status.update", "2.0");
        $request->addtionalParams ["method"] = $apiId->method;
        $request->addtionalParams ["v"] =  $apiId->version;
        $request->accessToken=$AccessToken;
        $request->requestEntity=$param;
        $resultDefinition=$this->getAPIClient()->send($request, $resultDefinition, $reqPolicy);
        return $resultDefinition;
    }

}


