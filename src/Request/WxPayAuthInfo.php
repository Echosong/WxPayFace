<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/13
 * Time: 10:23
 */

namespace Echosong\WxpayFace\Request;

use Echosong\WxpayFace\WxPayDataBase;

class WxPayAuthInfo extends WxPayDataBase
{

    public function __construct ($values) {
        $this->values["version"] = "1";
    }

    /**
     * 设置微信分配的公众账号ID
     * @param string $value
     **/
    public function SetAppid($value)
    {
        $this->values['appid'] = $value;
    }

    /**
     * 设置微信支付分配的商户号
     * @param string $value
     **/
    public function SetMch_id($value)
    {
        $this->values['mch_id'] = $value;
    }

    /**
     * 设置签名，详见签名生成算法类型
     * @param string $value
     **/
    public function SetSignType($sign_type)
    {
        $this->values['sign_type'] = $sign_type;
        return $sign_type;
    }


    public function setName ($value) {
        $this->values['store_name'] = $value;
    }

    public function setDeviceId ($value) {
        $this->values['device_id'] = $value;
    }

    public function setStoreId($value){
        $this->values['store_id'] = $value;
    }

 /**
     * 子商户
     * @param $value
     */
    public function SetSub_mch_id($value){
        $this->values['sub_mch_id'] = $value;
    }

    /**
     * 获取子商户
     * @return mixed
     */
    public function GetSub_mch_id(){
        return $this->values['sub_mch_id'];
    }


    /**
     * @param $value WxPayApi::getNonceStr()
     */
    public function setNonceStr ($value) {
        $this->values['nonce_str'] = $value;
    }

    public function SetRawdata ($value) {
        $this->values['rawdata'] = $value;
    }


    public function GetRawdata () {
        return $this->values['rawdata'];
    }

    public function IsRawdataSet () {
        return array_key_exists('rawdata', $this->values);
    }

    public function SetNow () {
        $this->values['now'] = time();
    }

    public function GetNow () {
        return $this->values['now'];
    }

    public function IsNowSet () {
        return array_key_exists('now', $this->values);
    }
}