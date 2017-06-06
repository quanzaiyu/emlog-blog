<?php
/*
Plugin Name: 外链跳转
Version: 1.0
Plugin URL：http://www.xlonewolf.net
Description: 这是一款外链管理系统，让您创建、管理，并通过使用自定义文章类型和301重定向跟踪从您的网站出站链接。
Author: lonewolf
Author URL: http://www.xemlog.net
*/

!defined('EMLOG_ROOT') && exit('access deined!');
$db = Database::getInstance();
function plugin_setting_view(){
    
}
?>
<link href="<?php echo PLUGINS_GO; ?>bootstrap.css" type="text/css" rel="stylesheet">
<link href="<?php echo PLUGINS_GO; ?>buttons.css" type="text/css" rel="stylesheet">
<?php if(isset($_GET['active'])):?><span class="actived">创建成功</span><?php endif;?>
<div class="containertitle"><b>外链设置</b></div>
<form class="form-inline">
    <div class="form-group">
        <label>别名</label>
        <input type="text" class="form-control" id="post_title" name="post_title" placeholder="">
    </div>
    <div class="form-group">
        <label>说明</label>
        <input type="text" class="form-control" id="post_des" name="post_des" placeholder="">
    </div>
    <div class="form-group">
        <label>外链</label>
        <input type="text" class="form-control" id="lgurl_redirect" name="lgurl_redirect" placeholder="">
    </div>
    <button type="button" class="button button-uppercase button-primary publish">生成</button>
</form>
<div class="containertitle" style="margin-top:20px;"><b>外链查看</b></div>
<table class="table table-bordered">
	<thead>
		<tr>
			<th style="width:45%;">Redirect to</th>
			<th style="width:45%;">Permalink</th>
			<th style="width:10%;">Clicks</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$sql = "SELECT * FROM " . DB_PREFIX . "go order by id desc";
			$res = $db->query($sql);
			while ($row = $db->fetch_array($res)) {
				$row['title'] = "<a href=\"".BLOG_URL."go/{$row['title']}\" target=\"_blank\">".BLOG_URL."go/{$row['title']}</a>";
		?>
		<tr>
			<td><?php echo $row['siteurl']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['views']; ?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<script>
$("#links_go").addClass("sidebarsubmenu1");
$('.publish').on('click', function(){
	var ajax_url = '<?php echo BLOG_URL; ?>content/plugins/links_go/api.php',
		t = $("#post_title").val(),
		d = $("#post_des").val(),
		g = $("#lgurl_redirect").val();
	$.ajax({
		url: ajax_url,
		type: 'POST',
		dataType: 'json',
		data: {title:t,des:d,go:g},
		success: function(data, textStatus, xhr) {
			if(!data.error){
				window.location.href = data.goto
			}else{
				alert(data.error)
			}
		}
	});
});
</script>