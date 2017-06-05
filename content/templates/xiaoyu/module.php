<?php 
/**
 * 侧边栏组件、页面模块
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php
if (!function_exists('_g')) {
	emMsg('请先安装 <a href="http://vps.lantk.com/?post=92" target="_blank">模板设置插件</a>', BLOG_URL . 'admin/plugins.php');
}
?>
<?php
//widget：blogger
function widget_blogger($title){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$name = $user_cache[1]['mail'] != '' ? "<a href=\"mailto:".$user_cache[1]['mail']."\">".$user_cache[1]['name']."</a>" : $user_cache[1]['name'];?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<ul id="bloggerinfo">
	<div id="bloggerinfoimg">
	<?php if (!empty($user_cache[1]['photo']['src'])): ?>
	<img src="<?php echo BLOG_URL.$user_cache[1]['photo']['src']; ?>" width="<?php echo $user_cache[1]['photo']['width']; ?>" height="<?php echo $user_cache[1]['photo']['height']; ?>" alt="blogger" />
	<?php endif;?>
	</div>
	<p><b><?php echo $name; ?></b>
	<?php echo $user_cache[1]['des']; ?></p>
	</ul>
	</li>
<?php }?>
<?php
//widget：日历
function widget_calendar($title){ ?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<div id="calendar">
	</div>
	<script>sendinfo('<?php echo Calendar::url(); ?>','calendar');</script>
	</li>
<?php }?>
<?php
//widget：标签
function widget_tag($title){
	global $CACHE;
	$tag_cache = $CACHE->readCache('tags');?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<ul id="blogtags">
	<?php foreach($tag_cache as $value): ?>
		<span style="font-size:<?php echo $value['fontsize']; ?>pt; line-height:30px;">
		<a href="<?php echo Url::tag($value['tagurl']); ?>" title="<?php echo $value['usenum']; ?> 篇文章"><?php echo $value['tagname']; ?></a></span>
	<?php endforeach; ?>
	</ul>
	</li>
<?php }?>
<?php
//widget：分类
function widget_sort($title){
	global $CACHE;
	$sort_cache = $CACHE->readCache('sort'); ?>
	<?php
	foreach($sort_cache as $value):
		if ($value['pid'] != 0) continue;
	?>
	<li>
	<a href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?>(<?php echo $value['lognum'] ?>)</a></li>
	
	<?php endforeach; ?>
	
<?php }?>
<?php
//widget：最新微语
function widget_twitter($title){
	global $CACHE; 
	$newtws_cache = $CACHE->readCache('newtw');
	$istwitter = Option::get('istwitter');
	?>
	<?php foreach($newtws_cache as $value): ?>
	<?php $img = empty($value['img']) ? "" : '<a title="查看图片" class="t_img" href="'.BLOG_URL.str_replace('thum-', '', $value['img']).'" target="_blank">&nbsp;</a>';?>
	<li><?php echo $value['t']; ?><?php echo $img;?><p class="t_time"><?php echo smartDate($value['date']); ?></p></li>
	<?php endforeach; ?>
    <?php if ($istwitter == 'y') :?>
	<?php endif;?>
<?php }?>
<?php
//widget：最新评论
function widget_newcomm($title){
	global $CACHE; 
	$com_cache = $CACHE->readCache('comment');
	?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<ul id="newcomment">
	<?php
	foreach($com_cache as $value):
	$url = Url::comment($value['gid'], $value['page'], $value['cid']);
	?>
	<li id="comment"><?php echo $value['name']; ?>
	<br /><a href="<?php echo $url; ?>"><?php echo $value['content']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</li>
<?php }?>
<?php
//widget：最新文章
function widget_newlog($title){
	global $CACHE; 
	$newLogs_cache = $CACHE->readCache('newlog');
	?>
	<?php foreach($newLogs_cache as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
	<?php endforeach; ?>
<?php }?>
<?php
//widget：热门文章
function widget_hotlog($title){
	$index_hotlognum = Option::get('index_hotlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getHotLog($index_hotlognum);?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<ul id="hotlog">
	<?php foreach($randLogs as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</li>
<?php }?>
<?php
//widget：随机文章
function widget_random_log($title){
	$index_randlognum = Option::get('index_randlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getRandLog($index_randlognum);?>
	<?php foreach($randLogs as $value): ?>
	<li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
	<?php endforeach; ?>
<?php }?>
<?php
//widget：搜索
function widget_search($title){ ?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<ul id="logsearch">
	<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
	<input name="keyword" class="search" type="text" />
	</form>
	</ul>
	</li>
<?php } ?>
<?php
//widget：归档
function widget_archive($title){
	global $CACHE; 
	$record_cache = $CACHE->readCache('record');
	?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<ul id="record">
	<?php foreach($record_cache as $value): ?>
	<li><a href="<?php echo Url::record($value['date']); ?>"><?php echo $value['record']; ?>(<?php echo $value['lognum']; ?>)</a></li>
	<?php endforeach; ?>
	</ul>
	</li>
<?php } ?>
<?php
//widget：自定义组件
function widget_custom_text($title, $content){ ?>
	<li>
	<h3><span><?php echo $title; ?></span></h3>
	<ul>
	<?php echo $content; ?>
	</ul>
	</li>
<?php } ?>
<?php
//widget：链接
function widget_link($title){
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
    //if (!blog_tool_ishome()) return;#只在首页显示友链去掉双斜杠注释即可
	?>
	<?php foreach($link_cache as $value): ?>
	<li><a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a></li>
	<?php endforeach; ?>
<?php }?> 
<?php
//blog：导航
function blog_navi(){
	global $CACHE; 
	$navi_cache = $CACHE->readCache('navi');
	?>
	<?php
	foreach($navi_cache as $value):
        if ($value['pid'] != 0) {
            continue;
        }
		if($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
			?>
			<?php 
			continue;
		endif;
		$newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
        $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
        $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'topnav_current' : 'common';
		?>
			<a id="<?php echo $current_tab;?>" href="<?php echo $value['url']; ?>" <?php echo $newtab;?>><?php echo $value['naviname']; ?></a>
	<?php endforeach; ?>	       
<?php }?>
<?php
//blog：置顶
function topflg($top, $sortop='n', $sortid=null){
    if(blog_tool_ishome()) {
       echo $top == 'y' ? "<img src=\"".TEMPLATE_URL."/images/top.png\" title=\"首页置顶文章\" /> " : '';
    } elseif($sortid){
       echo $sortop == 'y' ? "<img src=\"".TEMPLATE_URL."/images/sortop.png\" title=\"分类置顶文章\" /> " : '';
    }
}
?>
<?php
//blog：编辑
function editflg($logid,$author){
	$editflg = ROLE == ROLE_ADMIN || $author == UID ? '<a href="'.BLOG_URL.'admin/write_log.php?action=edit&gid='.$logid.'" target="_blank">编辑</a>' : '';
	echo $editflg;
}
?>
<?php
//blog：分类
function blog_sort($blogid){
	global $CACHE; 
	$log_cache_sort = $CACHE->readCache('logsort');
	?>
	<?php if(!empty($log_cache_sort[$blogid])): ?>
    <a href="<?php echo Url::sort($log_cache_sort[$blogid]['id']); ?>"><?php echo $log_cache_sort[$blogid]['name']; ?></a>
	<?php endif;?>
<?php }?>
<?php
//blog：文章标签
function blog_tag($blogid){
	global $CACHE;
	$log_cache_tags = $CACHE->readCache('logtags');
	if (!empty($log_cache_tags[$blogid])){
		$tag = '';
		foreach ($log_cache_tags[$blogid] as $value){
			$tag .= "	<a href=\"".Url::tag($value['tagurl'])."\">".$value['tagname'].'</a>';
		}
		echo $tag;
	}
}
?>
<?php
//blog：文章作者
function blog_author($uid){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$author = $user_cache[$uid]['name'];
	$mail = $user_cache[$uid]['mail'];
	$des = $user_cache[$uid]['des'];
	$title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
	echo $author;
}
?>
<?php
//blog：相邻文章
function neighbor_log($neighborLog){
	extract($neighborLog);?>
	<?php if($prevLog):?>
	&laquo; <a href="<?php echo Url::log($prevLog['gid']) ?>"><?php echo $prevLog['title'];?></a>
	<?php endif;?>
	<?php if($nextLog && $prevLog):?>
		|
	<?php endif;?>
	<?php if($nextLog):?>
		 <a href="<?php echo Url::log($nextLog['gid']) ?>"><?php echo $nextLog['title'];?></a>&raquo;
	<?php endif;?>
<?php }?>
<?php
//blog：评论列表
function blog_comments($comments,$params){
    extract($comments);
    if($commentStacks): ?>
	<a name="comments"></a>
	<p class="comment-header"><b>评论：</b></p>
	<?php endif; ?>
	<?php
	$isGravatar = Option::get('isgravatar');
	$comnum = count($comments);
			foreach($comments as $value){
				if($value['pid'] != 0){
				$comnum--;
				}
			}
			$page = isset($params[5])?intval($params[5]):1;
			$i= $comnum - ($page - 1)*Option::get('comment_pnum');
	foreach($commentStacks as $cid):
    $comment = $comments[$cid];
    $gface_url = "http://www.gravatar.com/avatar/".md5($comment['mail'])."?size=42&d=".TEMPLATE_URL."images/tx.jpg";
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
	<div class="comment" id="comment-<?php echo $comment['cid']; ?>">
		<a name="<?php echo $comment['cid']; ?>"></a>
		<?php if($isGravatar == 'y'): ?><div class="avatar1"><img src="<?php echo $gface_url; ?>" /></div><?php endif; ?>
		<div class="comment-info">
			<b class="commname"><?php echo $comment['poster']; ?> </b>
			<?php $mail_str="\"".strip_tags($comment['mail'])."\"";echo_levels($mail_str,"\"".$comment['url']."\""); ?> <?php if(function_exists('display_useragent')){display_useragent($comment['cid']);} ?>
			<span class="louceng" style="color:#555555;font-weight: bold;font-size:12px;float: right;">
                   <?php if ($i == 1){ echo "哎哟，沙发<sup>#</sup>";}
				         elseif ($i == 2){echo "自古二楼出人才<sup>#</sup>";}
				         elseif ($i == 3){ echo "越牛逼的人往往出来的越晚<sup>#</sup>";}
				         else{ echo $i.'<sup>楼</sup>';}?>
            </span> <a title="<?php echo convertip($comment['ip']); ?>" data-original-title="<?php echo convertip($comment['ip']); ?>"><img width="16" height="16" class="useragent" alt="" src="http://flyercn.com/content/templates/D8/img/ip.png"></a> 
			<br />
			<span class="comment-time"><?php echo $comment['date']; ?></span>
			<div class="comment-content"><?php echo $comment['content']; ?></div>
			<div class="comment-reply"><a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">回复</a></div>
		</div>
<div class="xiao"><?php blog_comments_children($comments, $comment['children']); ?></div>
	</div>
	<?php $i--;endforeach; ?>
    <div class="page">
	    <?php echo $commentPageUrl;?>
    </div>
<?php }?>
<?php
//blog：子评论列表
function blog_comments_children($comments, $children){
	$isGravatar = Option::get('isgravatar');
	foreach($children as $child):
	$comment = $comments[$child];
	$gface_url = "http://www.gravatar.com/avatar/".md5($comment['mail'])."?size=42&d=".TEMPLATE_URL."images/tx.jpg";
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
	<div class="comment comment-children" id="comment-<?php echo $comment['cid']; ?>">
		<a name="<?php echo $comment['cid']; ?>"></a>
		<?php if($isGravatar == 'y'): ?><div class="avatar1"><img src="<?php echo $gface_url; ?>" /></div><?php endif; ?>
		<div class="comment-info">
			<b class="commname"><?php echo $comment['poster']; ?> </b>
		<?php $mail_str="\"".strip_tags($comment['mail'])."\"";echo_levels($mail_str,"\"".$comment['url']."\""); ?> <?php if(function_exists('display_useragent')){display_useragent($comment['cid']);} ?><a title="<?php echo convertip($comment['ip']); ?>" data-original-title="<?php echo convertip($comment['ip']); ?>"><img width="16" height="16" class="useragent" alt="" src="http://flyercn.com/content/templates/D8/img/ip.png"></a><br /><span class="comment-time"><?php echo $comment['date']; ?> </span>
			<div class="comment-content"><?php echo $comment['content']; ?></div>
			<?php if($comment['level'] < 4): ?><div class="comment-reply"><a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">回复</a></div><?php endif; ?>
		</div>
		<?php blog_comments_children($comments, $comment['children']);?>
	</div>
	<?php endforeach; ?>
<?php }?>
<?php
//blog：发表评论表单
function blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark){
	if($allow_remark == 'y'): ?>
	<div id="comment-place">
	<div class="comment-post" id="comment-post">
		<div class="cancel-reply" id="cancel-reply" style="display:none"><a href="javascript:void(0);" onclick="cancelReply()">取消回复</a></div>
		<p class="comment-header"><b>发表评论：</b><a name="respond"></a></p>
		 <!--获取QQ号码及用户资料-->
			  <?php
                   if(isset($_POST['u'])){
                        header('Content-Type: text/html; charset=utf-8');
                        $ret = '';
                        if(preg_match('/\"nickname\":\"([^\"]+)\"/', file_get_contents('http://r.qzone.qq.com/cgi-bin/user/cgi_personal_card?uin='.$_POST['u']), $QQInfo)){
                        $ret = $QQInfo[1];
                        }
                        echo '<script>parent.document.getElementsByName("comname")[0].value = "',$ret,'";</script>';
                        echo '<script>parent.document.getElementsByName("commail")[0].value = "',$_POST['u'],'@qq.com";</script>';
                        echo '<script>parent.document.getElementsByName("comurl")[0].value = "http://user.qzone.qq.com/',$_POST['u'],'";</script>';
                        }else{?>
                      <?php
                     }
               ?>
			<!--获取QQ号码及用户资料 end-->
		   <p>
               <iframe name="hiddenIframe" style="display:none;"></iframe>
               <form action="" method="POST" target="hiddenIframe">
		  <p style="color:#FF262E;">您也可以直接填写QQ到下面的输入框中，点击获取用户资料实现自动调用您的QQ资料</p>
               <input placeholder="请输入您的QQ号码" value="" type="text" name="u" />
               <input style="width:90px;" type="submit" value="获取用户资料">
               </form>
		  </p>
		<form method="post" name="commentform" action="<?php echo BLOG_URL; ?>index.php?action=addcom" id="commentform">
			<input type="hidden" name="gid" value="<?php echo $logid; ?>" />
			<?php if(ROLE == 'visitor'): ?>
			<p>
				<input type="text" name="comname" maxlength="49" value="<?php echo $ckname; ?>" size="22" tabindex="1">
				<label for="author"><small>昵称</small></label>
			</p>
			<p>
				<input type="text" name="commail"  maxlength="128"  value="<?php echo $ckmail; ?>" size="22" tabindex="2">
				<label for="email"><small>邮件地址 (选填)</small></label>
			</p>
			<p>
				<input type="text" name="comurl" maxlength="128"  value="<?php echo $ckurl; ?>" size="22" tabindex="3">
				<label for="url"><small>个人主页 (选填)</small></label>
			</p>
			<?php endif; ?>
			<p>
			<textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>
			<p><?php echo $verifyCode; ?> <input type="submit" id="comment_submit" value="发表评论" tabindex="6" /></p>
			<input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="1"/>
		</form>
	</div>
	</div>
	<?php endif; ?>
<?php }?>
<?php
function Copyright(){
	$db = MySql::getInstance();
	?>
<footer>
  <div class="footer-bottom">
       <div class="foot_box">
	   <div class="foot_box1">
	 <p>&copy; powered by emlog. Theme by 小昱. Design by Quanzaiyu.<br/>
		&copy; <?php date_default_timezone_set('Etc/GMT-8'); echo date("Y");?>
<?php } ?>
<?php
 //Custom: 获取附件第一张图片
function getThumbnail($blogid){
 $db = MySql::getInstance();
 $sql = "SELECT * FROM ".DB_PREFIX."attachment WHERE blogid=".$blogid." AND (`filepath` LIKE '%jpg' OR `filepath` LIKE '%gif' OR `filepath` LIKE '%png') ORDER BY `aid` ASC LIMIT 0,1";
 //die($sql);
 $imgs = $db->query($sql);
 $img_path = "";
 while($row = $db->fetch_array($imgs)){
 $img_path .= BLOG_URL.substr($row['filepath'],3,strlen($row['filepath']));
 }
 return $img_path;
 }
 ?> 
 <?php
function echo_levels($comment_author_email,$comment_author_url){
  $DB = MySql::getInstance();
  $adminEmail = '"chenziwen@lantk.com"';
  if($comment_author_email==$adminEmail)
  {
    echo '<a class="vip" href="mailto:chenziwen@lantk.com" title="管理员认证"></a><a class="vip7" title="特别认证"></a>';
  }
  $sql = "SELECT cid as author_count,mail FROM emlog_comment WHERE mail != '' and mail = $comment_author_email and hide ='n'";
  $res = $DB->query($sql);
  $author_count = mysql_num_rows($res);
   if($author_count>=2 && $author_count<10 && $comment_author_email!=$adminEmail)
    echo '<a class="vip1" title="路过酱油 LV.1"></a>';
  else if($author_count>=10 && $author_count<20 && $comment_author_email!=$adminEmail)
    echo '<a class="vip2" title="偶尔光临 LV.2"></a>';
  else if($author_count>=20 && $author_count<40 && $comment_author_email!=$adminEmail)
    echo '<a class="vip3" title="常驻人口 LV.3"></a>';
  else if($author_count>=40 && $author_count<80 && $comment_author_email!=$adminEmail)
    echo '<a class="vip4" title="以博为家 LV.4"></a>';
  else if($author_count>=80 &&$author_count<160 && $comment_author_email!=$adminEmail)
    echo '<a class="vip5" title="情牵小博 LV.5"></a>';
  else if($author_count>=160 && $author_coun<320 && $comment_author_email!=$adminEmail)
    echo '<a class="vip6" title="为博终老 LV.6"></a>';
  else if($author_count>=50 && $author_coun<60 && $comment_author_email!=$adminEmail)
    echo '<a class="vip7" title="三世情牵 LV.7"></a>';
}
?>
<?php
	//显示评论者IP信息
function convertip($ip) {   
    $dat_path = EMLOG_ROOT.'/content/templates/heiseyouhuo/qqwry.dat'; //*数据库路径*//  
    if(!$fd = @fopen($dat_path, 'rb')){   
        return 'IP数据库文件不存在或者禁止访问或者已经被删除！';   
    }   
    $ip = explode('.', $ip);   
    $ipNum = $ip[0] * 16777216 + $ip[1] * 65536 + $ip[2] * 256 + $ip[3];   
    $DataBegin = fread($fd, 4);   
    $DataEnd = fread($fd, 4);   
    $ipbegin = implode('', unpack('L', $DataBegin));   
    if($ipbegin < 0) $ipbegin += pow(2, 32);   
    $ipend = implode('', unpack('L', $DataEnd));   
    if($ipend < 0) $ipend += pow(2, 32);   
    $ipAllNum = ($ipend - $ipbegin) / 7 + 1;   
    $BeginNum = 0;   
    $EndNum = $ipAllNum;   
    while($ip1num>$ipNum || $ip2num<$ipNum) {   
        $Middle= intval(($EndNum + $BeginNum) / 2);   
        fseek($fd, $ipbegin + 7 * $Middle);   
        $ipData1 = fread($fd, 4);   
        if(strlen($ipData1) < 4) {   
            fclose($fd);   
            return '系统出错！';   
        }   
        $ip1num = implode('', unpack('L', $ipData1));   
        if($ip1num < 0) $ip1num += pow(2, 32);   
        if($ip1num > $ipNum) {   
            $EndNum = $Middle;   
            continue;   
        }   
        $DataSeek = fread($fd, 3);   
        if(strlen($DataSeek) < 3) {   
            fclose($fd);   
            return '系统出错！';   
        }   
        $DataSeek = implode('', unpack('L', $DataSeek.chr(0)));   
        fseek($fd, $DataSeek);   
        $ipData2 = fread($fd, 4);   
        if(strlen($ipData2) < 4) {   
            fclose($fd);   
            return '系统出错！';   
        }   
        $ip2num = implode('', unpack('L', $ipData2));   
        if($ip2num < 0) $ip2num += pow(2, 32);   
        if($ip2num < $ipNum) {   
            if($Middle == $BeginNum) {   
                fclose($fd);   
                return '未知';   
            }   
            $BeginNum = $Middle;   
        }   
    }   
    $ipFlag = fread($fd, 1);   
    if($ipFlag == chr(1)) {   
        $ipSeek = fread($fd, 3);   
        if(strlen($ipSeek) < 3) {   
            fclose($fd);   
            return '系统出错！';   
        }   
        $ipSeek = implode('', unpack('L', $ipSeek.chr(0)));   
        fseek($fd, $ipSeek);   
        $ipFlag = fread($fd, 1);   
    }   
    if($ipFlag == chr(2)) {   
        $AddrSeek = fread($fd, 3);   
        if(strlen($AddrSeek) < 3) {   
            fclose($fd);   
            return '系统出错！';   
        }   
        $ipFlag = fread($fd, 1);   
        if($ipFlag == chr(2)) {   
            $AddrSeek2 = fread($fd, 3);   
            if(strlen($AddrSeek2) < 3) {   
                fclose($fd);   
                return '系统出错！';   
            }   
            $AddrSeek2 = implode('', unpack('L', $AddrSeek2.chr(0)));   
            fseek($fd, $AddrSeek2);   
        } else {   
            fseek($fd, -1, SEEK_CUR);   
        }   
        while(($char = fread($fd, 1)) != chr(0))   
        $ipAddr2 .= $char;   
        $AddrSeek = implode('', unpack('L', $AddrSeek.chr(0)));   
        fseek($fd, $AddrSeek);   
        while(($char = fread($fd, 1)) != chr(0))   
        $ipAddr1 .= $char;   
    } else {   
        fseek($fd, -1, SEEK_CUR);   
        while(($char = fread($fd, 1)) != chr(0))   
        $ipAddr1 .= $char;   
 
        $ipFlag = fread($fd, 1);   
        if($ipFlag == chr(2)) {   
            $AddrSeek2 = fread($fd, 3);   
            if(strlen($AddrSeek2) < 3) {   
                fclose($fd);   
                return '系统出错！';   
            }   
            $AddrSeek2 = implode('', unpack('L', $AddrSeek2.chr(0)));   
            fseek($fd, $AddrSeek2);   
        } else {   
            fseek($fd, -1, SEEK_CUR);   
        }   
        while(($char = fread($fd, 1)) != chr(0)){   
            $ipAddr2 .= $char;   
        }   
    }   
    fclose($fd);   
    if(preg_match('/http/i', $ipAddr2)) {   
        $ipAddr2 = '';   
    }   
    $ipaddr = "$ipAddr1 $ipAddr2";   
    $ipaddr = preg_replace('/CZ88.Net/is', '', $ipaddr);   
    $ipaddr = preg_replace('/^s*/is', '', $ipaddr);   
    $ipaddr = preg_replace('/s*$/is', '', $ipaddr);   
    if(preg_match('/http/i', $ipaddr) || $ipaddr == '') {   
        $ipaddr = '未知';   
    }   
    $ipaddr = iconv('gbk', 'utf-8//IGNORE', $ipaddr);    
    if( $ipaddr != '  ' )   
        return $ipaddr;   
    else  
        $ipaddr = '评论者来自火星，无法或者其所在地!';   
        return $ipaddr;   
}
?>