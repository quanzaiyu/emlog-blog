<?php
if(!defined('EMLOG_ROOT')){die('err');}
class QiniuClient{
	public $accessKey;
	public $secretKey;
	public $uphost;
	function __construct($accessKey='',$secretKey='',$uphost='http://up.qiniu.com')
	{
		$this->accessKey = $accessKey;
		$this->secretKey = $secretKey;
		$this->uphost = $uphost;
	}
	public function uploadToken($flags)
	{
		if(!isset($flags['deadline']))
			$flags['deadline'] = 3600 + time();
		$encodedFlags = self::urlsafe_base64_encode(json_encode($flags));
		$sign = hash_hmac('sha1', $encodedFlags, $this->secretKey, true);
		$encodedSign = self::urlsafe_base64_encode($sign);
	    $token = $this->accessKey.':'.$encodedSign. ':' . $encodedFlags;
	    return $token;
	}
	public static function urlsafe_base64_encode($str){
	    $find = array("+","/");
	    $replace = array("-", "_");
	    return str_replace($find, $replace, base64_encode($str));
	}
}
$qiukong_qiniu_set=unserialize(ltrim(file_get_contents(dirname(__FILE__).'/qiukong.com.php'),'<?php die; ?>'));
$qiukong_qiniu_fuck=new QiniuClient($qiukong_qiniu_set['ak'],$qiukong_qiniu_set['sk'],$qiukong_qiniu_set['up']);
$qiukong_qiniu_set['tk']=$qiukong_qiniu_fuck->uploadToken(array('scope'=>$qiukong_qiniu_set['bk']));
echo '
<style>
#qiniu_pick{max-width:35%;}
#qiniu_list{margin:2px 0;font-size:12px;}
.qiniu_pic{margin:2px;width:160px;height:120px;display:inline-block;}
.qiniu_act{padding-top:50px;width:160px;height:70px;background:rgba(0,0,0,0.2);text-align:center;}
.qiniu_act a{color:#FFF;font-weight:bold;text-shadow:1px 1px 3px #000;}
</style>
<script>
var qiniu_token="'.$qiukong_qiniu_set['tk'].'"; //全局密钥
var qiniu_upurl="'.$qiukong_qiniu_set['up'].'"; //上传接口
var qiniu_dnurl="'.$qiukong_qiniu_set['dn'].'"; //下载接口
var qiniu_thumb="'.$qiukong_qiniu_set['th'].'"; //缩略宽度
function qiukong_qiniu_cpone(numb){
'.$qiukong_qiniu_set['callback'].'
}
function qiukong_qiniu_cpall(){
if(!qiniu_skep.length){alert("队列为空");}
for(var numb=0;numb<qiniu_skep.length;numb++){qiukong_qiniu_cpone(numb);}
}
function qiukong_qiniu_show(node){
var item=document.createElement("div");
item.setAttribute("id","qiukong_qiniu_body");
item.innerHTML="<input type=\"file\" onchange=\"qiniu_cpick()\" id=\"qiniu_pick\" multiple=\"multiple\" accept=\"image/jpeg,image/png,image/gif\" /><input type=\"button\" onclick=\"qiniu_cpush()\" id=\"qiniu_push\" value=\"开始\" /><input type=\"button\" onclick=\"qiukong_qiniu_cpall()\" value=\"插入\" /><div id=\"qiniu_list\"></div>";
if(document.getElementById("qiukong_qiniu_body")){node.parentNode.removeChild(document.getElementById("qiukong_qiniu_body"));}
else{node.parentNode.appendChild(item);}
}
</script>
<script src="'.BLOG_URL.'content/plugins/qiukong_qiniu/qiniu.js"></script>
';
?>