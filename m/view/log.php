<?php 
/**
 *
 * @云爱分享手机模板 www.YunAw.Com
 * 
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}?>

<div id="navi"> <a href="./" id="active">首页</a> <a href="./?action=tw">碎语</a> <a href="./?action=com">评论</a>
  <?php if(ISLOGIN === true): ?>
  <a href="./?action=write">写日志</a> <a href="./?action=logout">退出</a>
  <?php else:?>
  <a href="<?php echo BLOG_URL; ?>m/?action=login">登录</a>
  <?php endif;?>
</div>
<div id="m">
<div id="navi2">最新日志：</div>
  <?php foreach($logs as $value): ?>
  <div class="title"><a href="<?php echo BLOG_URL; ?>m/?post=<?php echo $value['logid'];?>"><span><?php echo $value['log_title']; ?></span></a></div>
  <div class="info">
    <?php $weekarray=array("日","一","二","三","四","五","六"); 
echo gmdate('Y年n月j日 G:i', $value['date']);echo " 周".$weekarray[gmdate('w', $value['date'])];?>
  </div>
  <div class="info2"> 围观:(<?php echo $value['views']; ?>)&nbsp;&nbsp;吐槽:(<?php echo $value['comnum']; ?>)
    <?php if(ROLE == 'admin' || $value['author'] == UID): ?>
    <a href="./?action=write&id=<?php echo $value['logid'];?>">[编辑]</a>
    <?php endif;?>
  </div>
  <?php endforeach; ?>
  <div id="page"><?php echo $page_url;?></div>
</div>
<div id="m">
<div id="navi2">随机推荐：</div>
  <?php 	
    $index_randlognum = Option::get('index_randlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getRandLog($index_randlognum);
	?>
 <?php foreach($randLogs as $value): ?>
  <li style="display:inline">◈&nbsp;<a href="./?post=<?php echo $value['gid']; ?>"><?php echo $value['title']; ?></a></li>
  <br />
  <?php endforeach; ?>
</div>
<div id="m2">
<div id="navi2">有情链接：</div>
<?php
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
	?>
    <?php foreach($link_cache as $value): $color = dechex(rand(0,16777215));?>
    <a style="color:#<?php echo $color;?>" href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a> 
    <?php endforeach; ?>
</div>