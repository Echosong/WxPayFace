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
