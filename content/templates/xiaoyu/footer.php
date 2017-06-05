<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php
function foot_date(){
	$db = MySql::getInstance();
	?>
	<?php
	$sql2 = "SELECT gid,title,date FROM ".DB_PREFIX."blog WHERE gid='2' ORDER BY `date` DESC LIMIT 1";
	$list = $db->query($sql2);
	while($row = $db->fetch_array($list)){
	?>
	<?php 
		echo gmdate('Y', $row['date']); ?>
	<?php }?>
<?php } ?>
<?php 
Copyright(); 
?><?php  echo $blogname; ?> <?php $str = '4oCUIOWni+S6jg==';echo base64_decode($str);?>
<?php foot_date(); ?> 
<?php $str = '54mI5p2D5omA5pyJ';echo base64_decode($str);?> 
 <?php echo $footer_info; ?><br/>
<?php doAction('index_footer'); ?> <?php echo $icp; ?></p>
</div>
</footer>
<style>
.avatar a {
    background: url("<?php echo _g('side_logo'); ?>") no-repeat scroll 0 0 / 160px 160px;
}
.logo {
    background: url("<?php echo _g('index_logo'); ?>") no-repeat scroll center center #000;
}
</style>
</body>
</html>