<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/13
 * Time: 9:58
 */

namespace Echosong\WxpayFace\Request;

use Echosong\WxpayFace\Request\WxPayResults;


/**
 *
 * 回调回包数据基类
 *
 **/
class WxPayNotifyResults extends WxPayResults
{
    /**
     * 将xml转为array
     * @param WxPayConfigInterface $config
     * @param string $xml
     * @return WxPayNotifyResults
     * @throws WxPayException
     */
    public static function Init($config, $xml)
    {
        $obj = new self();
        $obj->FromXml($xml);
        //失败则直接返回失败
        $obj->CheckSign($config);
        return $obj;
    }
}