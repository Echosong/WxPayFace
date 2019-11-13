# WxPayFace
微信刷脸支付,服务端sdk  支持composer

```php
require_once __DIR__ . '/vendor/autoload.php';
use  Echosong\WxpayFace;
use Echosong\WxpayFace\Request;
$rawdata = $_POST['rawdata'];
$WxPayConfig = new WxpayFace\WxPayConfig();
$request = new Request\WxPayAuthInfo($WxPayConfig);
$request->SetRawdata($rawdata);
$result = WxpayFace\WxPayApi::authInfo($request, $WxPayConfig);
print_r($result) ;

```


> 微信刷脸、支付宝刷脸、聚合支付扫码 被扫  联系qq 313690636
