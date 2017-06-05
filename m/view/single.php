<?php if(!defined('EMLOG_ROOT')) {exit('error!');}?>

<div id="navi"> <a href="./" id="active">首页</a> <a href="./?action=tw">碎语</a> <a href="./?action=com">评论</a>
  <?php if(ISLOGIN === true): ?>
  <a href="./?action=write">写日志</a> <a href="./?action=logout">退出</a>
  <?php else:?>
  <a href="<?php echo BLOG_URL; ?>m/?action=login">登录</a>
  <?php endif;?>
</div>
<div id="m">
  <div class="posttitle"><?php echo $log_title; ?></div>
  <div class="postinfo">Post by:<?php echo $user_cache[$author]['name'];?> <?php echo gmdate('Y-n-j G:i', $date); ?>
    <?php if(ROLE == 'admin' || $author == UID): ?>
    <a href="./?action=dellog&gid=<?php echo $logid;?>">删除</a>
    <?php endif;?>
  </div>
  <div class="postcont"><?php echo $log_content; ?></div>   
 <div class="t">推荐阅读：</div>
 <div class="c">
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
  <div class="t">评论： <a style="font-weight: bold;margin-left:1em;color:#FF6600" href="#t">↓快速评论↓</a> <a style="float: right; margin-top: 0px; " href="#top">↑TOP</a></div>
  <div class="c">
    <?php 
	foreach($comments as $key=>$value):
			$value['poster'] = $value['url'] ? '<a href="'.$value['url'].'" target="_blank">'.$value['poster'].'</a>' : $value['poster'];
		?>
    <div class="l"> <b><?php echo $value['poster']; ?></b>
      <div class="info"><?php echo $value['date']; ?> <a href="./?action=reply&cid=<?php echo $value['cid'];?>">回复</a></div>
      <div class="comcont"><?php echo $value['content']; ?></div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="t">发表评论：</div>
  <a name="t"></a>
  <div class="c">
    <form method="post" action="./index.php?action=addcom&gid=<?php echo $logid; ?>">
      <?php if(ISLOGIN == true):?>
      当前已登录为：<b><?php echo $user_cache[UID]['name']; ?></b><br />
      <?php else: ?>
      昵称 (必填)<br />
      <input type="text" name="comname" value="" />
      <br />
      邮箱 (选填)<br />
      <input type="text" name="commail" value="" />
      <br />
      主页 (选填)<br />
      <input type="text" name="comurl" value="" />
      <br />
      <?php endif; ?>
      内容<br />
      <textarea name="comment" cols="30" rows="3" ></textarea>
      <br />
      <?php echo $verifyCode; ?><br />
      <input type="submit" value="发表评论" />
    </form>
  </div>
</div>
