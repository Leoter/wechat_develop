<?php
namespace app\index\controller;
use think\Controller;

/**
微信授权相关接口
*/

class Wechat extends Controller
{
    //高级功能-》开发者模式-》获取
    private $app_id = 'wx5d5d58935a6c43a8';
    private $app_secret = '419d59cd73a4d49ae00315c836bf5be3';

    public function index() {
        //$this->get_authorize_url('https://dev.alvinsite.top','123');
        //$this->get_access_token($this->app_id,$this->app_secret,$_GET['code']);
        return $this->fetch('activity_publish');
    }

    /**
    获取微信授权链接
    @param string $redirect_uri 跳转地址
    @param mixed $state 参数
    */
    public function get_authorize_url($redirect_uri = '', $state = '')
    {

        $redirect_uri = urlencode($redirect_uri);
        return "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$this->app_id}&redirect_uri={$redirect_uri}&response_type=code&scope=snsapi_userinfo&state={$state}#wechat_redirect";
    }

    /**
    获取授权token
    @param string $code 通过get_authorize_url获取到的code
    */
    public function get_access_token($app_id = '', $app_secret = '', $code = '')
    {
        $token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$this->app_id}&secret={$this->app_secret}&code={$code}&grant_type=authorization_code";

        $token_data = $this->http($token_url,'GET');
         
        if($token_data[0] == 200)
        {
            $token_data_arr = json_decode($token_data[1], TRUE);
            $this->get_user_info($token_data_arr['access_token'],$token_data_arr['openid']);
            //return json_decode($token_data[1], TRUE);
        }
         
        return FALSE;
    }

    /**
    获取授权后的微信用户信息
    @param string $access_token
    @param string $open_id
    */
    public function get_user_info($access_token = '', $open_id = '')
    {
        if($access_token && $open_id)
        {
            $info_url = "https://api.weixin.qq.com/sns/userinfo?access_token={$access_token}&openid={$open_id}&lang=zh_CN";
            $info_data = $this->http($info_url,'GET');
               
            if($info_data[0] == 200)
            {
                //dump(json_decode($info_data[1], TRUE));
                //return json_decode($info_data[1], TRUE);
                
            }
        }
         
        return FALSE;
    }



    public function http($url, $method, $postfields = null, $headers = array(), $debug = false)
    {

        $ci = curl_init();
        /* Curl settings */
        curl_setopt($ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ci, CURLOPT_TIMEOUT, 30);
        curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);

        switch ($method) {
            case 'POST':
                curl_setopt($ci, CURLOPT_POST, true);
                if (!empty($postfields)) {
                    curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);
                    $this->postdata = $postfields;
                }
                break;
        }
        curl_setopt($ci, CURLOPT_URL, $url);
        curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ci, CURLINFO_HEADER_OUT, true);

        $response = curl_exec($ci);
        $http_code = curl_getinfo($ci, CURLINFO_HTTP_CODE);

        if ($debug) {
            echo "=====post data======\r\n";
            var_dump($postfields);

            echo '=====info=====' . "\r\n";
            print_r(curl_getinfo($ci));

            echo '=====$response=====' . "\r\n";
            print_r($response);
        }
        curl_close($ci);
        return array($http_code, $response);
    }

}