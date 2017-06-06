<?php
/*原作者@周超，修改整理@陈小儒
*周朝的博客http://www.zc520.cc/，陈小儒云·博客http://cxryun.cn
*2016年8月18日
*/
require_once ('../config.php');//调用数据库信息
$conn=@mysql_connect(DB_HOST,DB_USER,DB_PASSWD)or die("连接数据库出错！");
mysql_select_db(DB_NAME,$conn);
mysql_query("set names utf8");

$useragent = addslashes($_SERVER['HTTP_USER_AGENT']);
$url_img ="";

//博客名称
$blogname="小昱 - xiaoyulive.top";

header("Content-type: image/JPEG");

//背景图片调用，可自行更改
$im = imagecreatefromjpeg("bj.jpg");  

$black = ImageColorAllocate($im, 0,0,0);//定义黑色的值
$yellow = ImageColorAllocate($im, 255,255,128);//定义黄色的值
$white = ImageColorAllocate($im, 255,255,255);//定义白色的值
$red = ImageColorAllocate($im, 0xff,0x00,0x00);//定义红色的值
$blue = ImageColorAllocate($im, 0x33,0x99,0xff);//定义蓝色色的值
$green = ImageColorAllocate($im, 0x66,0x99,0x00);//定义绿色的值

$font = 'shaonv.ttf';//加载少女字体，可更换字体文件，名字要更改正确
$font2 = 'msyh.ttf';//加载微软雅黑字体，可更换字体文件，名字要更改正确
imagettftext($im, 12, 0, 15, 110, $black, $font, $blogname);//博客名称添加到图片上，“15”“110”为X和Y轴，可自己测试修改
imagettftext($im, 12, 0, 200, 110, $black, $font, date('Y年n月j日'));//当前时间添加到图片
function rep($str){
$str=str_replace(' (Compatibility Mode)','',$str);
$str=str_replace(' Edition','',$str);
return $str;
}

$imgsql="select * from ".DB_PREFIX."blog where hide=true and type='blog' order by date desc limit 5";
$img=mysql_query($imgsql);//按照最新时间调用数据库文章

function mbsubstr($val){
if (strlen($val)<=27){
	$str=$val;
}
else{
	$str=mb_substr($val,0,24,'UTF-8')."...";//文章标题字数自动截取
}
return $str;
}
//不知道干什么用。。。
// $color[1]= imageColorAllocate($im, 0xf8, 0x16, 0x27);
// $color[2]= imageColorAllocate($im, 0xe8, 0x82, 0x24);
// $color[3]= imageColorAllocate($im, 0x00, 0x60, 0xf0);
// $color[4]= imageColorAllocate($im, 0x00, 0x60, 0x30);
// $color[5]= imageColorAllocate($im, 0xf7, 0xec, 0x17);

// for($i=1;$row=mysql_fetch_array($img);$i++){
// $y=$i*17+3;
// $yy=$i*18+10;
// $x=310;
// $str[0]=mbsubstr($row['title']);//定义文章标题函数
// $str[1]=gmdate('Y-n-j',$row['date']);//定义文章发布日期函数
// imagettftext($im, 9, 0, 15, $y, $black, $font2, $i.".");//文章编码显示
// imagettftext($im, 9, 0, 32, $y, $black, $font2, $str[0]." --- ".$str[1]);//文章标题及日期显示
// }

ImageGif($im);
ImageDestroy($im);
?>