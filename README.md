 
 ##使用方法
 composer require dhgateapi-com/dhgate
 
###使用例子
    <?php

require __DIR__ . '/vendor/autoload.php'; 
使用Alibaba Cloud SDK for PHP
以下代码示例展示了使用Alibaba Cloud SDK for PHP的基本步骤：

初始化客户端。
<?php

use AlibabaCloud\Client\AlibabaCloud;

AlibabaCloud::accessKeyClient('accessKeyId', 'accessKeySecret')->asDefaultClient();
发起调用。
使用RPC调用：
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

try {
    $result = AlibabaCloud::rpc()
                          ->product('Cdn')
                          ->version('2014-11-11')
                          ->action('DescribeCdnService')
                          ->method('POST')
                          ->request();

    print_r($result->toArray());

} catch (ClientException $exception) {
    print_r($exception->getErrorMessage());
} catch (ServerException $exception) {
    print_r($exception->getErrorMessage());
}
使用ROA调用：
    <?php

    use AlibabaCloud\Client\AlibabaCloud;
    use AlibabaCloud\Client\Exception\ClientException;
    use AlibabaCloud\Client\Exception\ServerException;

    try {
    $result = AlibabaCloud::roa()
                          ->regionId('cn-hangzhou') // 指定请求的地域，不指定则使用客户端地域、默认地域。
                          ->product('CS') // 指定产品。
                          ->version('2015-12-15') // 指定产品版本。
                          ->action('DescribeClusterServices') // 指定产品接口。
                          ->serviceCode('cs') // 设置ServiceCode以备寻址，非必须。
                          ->endpointType('openAPI') // 设置类型，非必须。
                          ->method('GET') // 指定请求方式。
                          ->host('cs.aliyun.com') // 指定域名则不会寻址，如认证方式为Bearer Token的服务则需要指定。
                          ->pathPattern('/clusters/[ClusterId]/services') // 指定ROA风格路径规则。
                          ->withClusterId('123456') // 为路径中参数赋值，方法名：with + 参数。
                          ->request(); // 发起请求并返回结果对象，请求需要放在设置的最后面。

    print_r($result->toArray());

    } catch (ClientException $exception) {
    print_r($exception->getErrorMessage());
    } catch (ServerException $exception) {
      print_r($exception->getErrorMessage());
  }
