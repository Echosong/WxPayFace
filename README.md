# WxPayFace
微信刷脸支付,服务端sdk  支持composer

```php

require_once __DIR__ . '/vendor/autoload.php';
use  Echosong\WxpayFace;
use Echosong\WxpayFace\Request;

$WxPayConfig = new WxpayFace\WxPayConfig();

/***************获取authinfo****************/
$request = new Request\WxPayAuthInfo(App::payConfig());
$request->SetRawdata($rawdata);
$request->setName('测试');
$request->setStoreId('test');
$request->setDeviceId('test0002');
$result = WxpayFace\WxPayApi::authInfo($request, $WxPayConfig);
print_r($result) ;

/***************提交人脸支付****************/
$request = new Request\WxPayFacePay(App::payConfig());
$request->SetDevice_info($deviceno);
$request->SetBody("测试人脸支付一笔订单");
$request->SetDetail('测试支付商品');
$request->SetAttach('原样返回数据');
$request->SetOut_trade_no('112233'); //订单号
$request->SetTotal_fee(100); //单位分
$request->SetSpbill_create_ip('127.0.0.1');
$request->SetOpenId('***');
$request->SetFace_code('***');
try{
    $result = WxpayFace\WxPayApi::facepay(App::payConfig(),$request);
}catch (Exception $exception){
    var_dump($exception->getMessage());
}
var_dump($result);


```


> 微信刷脸、支付宝刷脸、聚合支付扫码 被扫  联系qq 313690636
