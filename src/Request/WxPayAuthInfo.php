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

    public function SetRawdata($value)
    {
        $this->values['rawdata'] = $value;
    }
    public function GetRawdata()
    {
        return $this->values['rawdata'];
    }
    public function IsRawdataSet()
    {
        return array_key_exists('rawdata', $this->values);
    }

    public function SetNow()
    {
        $this->values['now']=time();
    }
    public function GetNow()
    {
        return $this->values['now'];
    }
    public function IsNowSet()
    {
        return array_key_exists('now', $this->values);
    }
}