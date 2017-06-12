<?php
!defined('EMLOG_ROOT') && exit('access deined!');


?>
<script language="JavaScript">
function checkSubmit(){
	var find=document.getElementById("find");
	if(find.value==''){
		alert('原始内容填写不能为空！');
		find.focus();
		return false;
	}
	var blog=document.getElementById("blog");
	var blog_title=document.getElementById("blog_title");
	var comment=document.getElementById("comment");
	var twitter=document.getElementById("twitter");
	if(blog.checked||blog_title.checked||comment.checked||twitter.checked){
		return true;
	}else{
		alert('替换选择项必须选择一个！');
		blog.focus();
		return false;		
	}
}
</script>
<form action="plugin.php?plugin=ailab_replace" method="post" name="ailab_replace" id="ailab_replace">
<table cellspacing="8" cellpadding="4" width="95%" align="center" border="0">
	<tbody>
		<tr>
			<td width="18%" align="right">原始内容：</td>
			<td width="82%"><input type="text" maxlength="200" style="width:390px;" class="input" value="" name="find" id="find"></td>
		</tr>
		<tr>
			<td width="18%" align="right">替换内容：</td>
			<td width="82%"><input type="text" maxlength="200" style="width:390px;" class="input" value="" name="replace" id="replace"></td>
		</tr>
		<tr>
			<td align="right" width="18%" valign="top">替换选择：<br></td>
			<td width="82%">
				<input type="checkbox" style="vertical-align:middle;" value="y" name="blog" id="blog">博客内容<br>
				<input type="checkbox" style="vertical-align:middle;" value="y" name="blog_title" id="blog_title">博客标题<br>
				<input type="checkbox" style="vertical-align:middle;" value="y" name="comment" id="comment">博客评论<br>
				<input type="checkbox" style="vertical-align:middle;" value="y" name="twitter" id="twitter">微语<br>
			</td>
		</tr>
		<tr>
		</tr>
	</tbody>
</table>
<div class="setting_line"></div>
<p><font color="red">特别提示:</font>本功能使用后会替换您网站的数据库内容，请在使用权务必做好网站数据备份，一遍产生不必要的风险！</p>
<div class="setting_line"></div>
  <table cellspacing="8" cellpadding="4" width="95%" align="center" border="0">
      <tbody>
	  <tr>
        <td align="center" colspan="2">
            <input name="token" id="token" value="<?php echo LoginAuth::genToken(); ?>" type="hidden" />
            <input type="submit" value="提交" class="button" onClick="return checkSubmit()">
        </td>
      </tr>
  </tbody>
  </table>
</form>