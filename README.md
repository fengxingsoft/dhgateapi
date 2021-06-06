 
**使用方法**

 composer require dhgateapi-com/dhgate
 

**使用例子**
 
 
    <?php
    namespace app\index\controller;

    use com\dhgate\openapi\client\exception as ClientException;
    use com\dhgate\openapi\sdk\cubsdk\ComDhgateAlbum;
    use com\dhgate\openapi\sdk\cubsdk\ComDhgateFacade;
    use com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum\DhgateAlbumGetParam;
    use com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum\DhgateAlbumGetResult;

    Class Index
    {

    private $acctoken;

    /**
     * @param $code
     * @return array
     * 获取token
     */
    public function gettoken($code)
    {
        $ComEbayFacade = new ComDhgateFacade();
        $ComDhgateFacade->setAppKey('your appkey');
        $ComDhgateFacade->setSecKey('your seckey');
        $tokeninfo = $ComEbayFacade->getToken($code);
        $accesstoken = $tokeninfo->getAccessToken();
        $refertoken = $tokeninfo->getReferToken();
        $expirein = $tokeninfo->getExpirein();
        $createtime = $tokeninfo->setMilliSecond();
        $updatetime = $tokeninfo->setMilliSecond();
        $data = compact('accesstoken', 'refertoken', 'expirein', 'createtime', 'updatetime');
        return $data;
    }

    /**
     * @param $data
     * @return \com\dhgate\openapi\client\entity\AuthorizationToken
     *根据refertoken 获取token信息
     */
    public function getrefreshtoken($data)
    {
        $ComDhgateFacade = new ComDhgateFacade();
        $ComDhgateFacade->setAppKey('your appkey');
        $ComDhgateFacade->setSecKey('your seckey');
        $ComDhgateFacade = new ComDhgateFacade();
        $token = $ComDhgateFacade->refreshToken($data['refreshToken']);
        $this->acctoken = $token;
    }


    /**
     * @param $accesstoken
     * @param $albWindowId
     * @return DhgateAlbumGetResult
     * dh.album.get$2.0 (卖家获取相册详情接口)
     *  albWindowId    String    必须    该参数可通过调用dh.albums.get接口中返回值获得；示例值：ff8080812cbf8102012cbf81a18a0003    相册窗口ID
     */
    public function getAlbums($accesstoken, $albWindowId)
    {
        try {
            $param = new DhgateAlbumGetParam();
            $param->setAlbWindowId($albWindowId); //相册ID
            $getalbum = new ComDhgateAlbum();
            $resultDefiniton = new DhgateAlbumGetResult();
            $albuminfo = $getalbum->DhgateAlbumGet($param, $accesstoken, $resultDefiniton);
            return $albuminfo;
        } catch (ClientException $exception) {
            print_r($exception->getErrorMessage());
        }
     }
    }
