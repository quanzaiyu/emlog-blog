<?php
error_reporting(0);
require_once '../../../init.php';
require_once 'Config.php';
require_once 'class/Tencent.php';

OAuth::init($client_id, $client_secret);
Tencent::$debug = $debug;

//打开session
session_start();
header('Content-Type: text/html; charset=utf-8');

$logid = intval($_GET['logid']);
$logurl = Url::log($logid);

$blogname = Option :: get('blogname');
$Log_Model = new Log_Model();
$logData = $Log_Model->getOneLogForHome($logid);
$log_title = $logData['log_title'];

if ($_SESSION['t_access_token'] || ($_SESSION['t_openid'] && $_SESSION['t_openkey'])) {//用户已授权
    $params = array(
		'content' => '《'.$log_title.'》，很不错的一篇文章，分享给大家，' . $logurl
	);
	$add = Tencent::api('t/add', $params, 'POST');
	$arrVal = json_decode($add, true);
	if($arrVal["errcode"]==0){
		setcookie("shareView".$logid, "0", time()+36000000, "/");
		header('Location: ' . $logurl);
	}else if($arrVal["errcode"]==75){
		emMsg("已分享，请勿重复提交", $logurl, true);
	}else{
		emMsg("errcode:".$arrVal["errcode"].",msg:".$arrVal["msg"], $logurl, true);
	}
} else {//未授权
    $callback = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?logurl=' . $logurl . '&logid=' . $logid;//回调url
    if ($_GET['code']) {//已获得code
        $code = $_GET['code'];
        $openid = $_GET['openid'];
        $openkey = $_GET['openkey'];
        //获取授权token
        $url = OAuth::getAccessToken($code, $callback);
        $r = Http::request($url);
        parse_str($r, $out);
        //存储授权数据
        if ($out['access_token']) {
            $_SESSION['t_access_token'] = $out['access_token'];
            $_SESSION['t_refresh_token'] = $out['refresh_token'];
            $_SESSION['t_expire_in'] = $out['expires_in'];
            $_SESSION['t_code'] = $code;
            $_SESSION['t_openid'] = $openid;
            $_SESSION['t_openkey'] = $openkey;
            
            //验证授权
            $r = OAuth::checkOAuthValid();
            if ($r) {
                header('Location: ' . $callback);//刷新页面
            } else {
                exit('<h3>授权失败,请重试</h3>');
            }
        } else {
            exit($r);
        }
    } else {//获取授权code
        if ($_GET['openid'] && $_GET['openkey']){//应用频道
            $_SESSION['t_openid'] = $_GET['openid'];
            $_SESSION['t_openkey'] = $_GET['openkey'];
            //验证授权
            $r = OAuth::checkOAuthValid();
            if ($r) {
                header('Location: ' . $callback);//刷新页面
            } else {
                exit('<h3>授权失败,请重试</h3>');
            }
        } else{
            $url = OAuth::getAuthorizeURL($callback);
            header('Location: ' . $url);
        }
    }
}
