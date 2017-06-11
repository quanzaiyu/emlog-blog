<?php
/*
Plugin Name: 自动摘要
Version: 1.1
Plugin URL: http://kller.cn/?post=71
Description: 如果你在写日志时未填写摘要，该插件会按照你设置的长度自动为你填写摘要。
Author: KLLER
Author Email: kller@foxmail.com
Author URL: http://kller.cn
*/
!defined('EMLOG_ROOT') && exit('access deined!');

function kl_auto_excerpt()//写入插件导航
{
	echo '<div class="sidebarsubmenu" id="kl_auto_excerpt"><a href="./plugin.php?plugin=kl_auto_excerpt">自动摘要</a></div>';
}
addAction('adm_sidebar_ext', 'kl_auto_excerpt');

function kl_auto_excerpt_do($blogid)
{
	global $logData, $Log_Model;
	if($logData['excerpt'] == ''){
		include(EMLOG_ROOT.'/content/plugins/kl_auto_excerpt/kl_auto_excerpt_config.php');
		$logData['excerpt'] = kl_htmlsubString($logData['content'], KL_AUTO_EXCERPT_LENGTH);
		$Log_Model->updateLog($logData, $blogid);
	}
}
addAction('save_log', 'kl_auto_excerpt_do');

/*
* 函数功能：实现了完整的HTML标签截取而不会错位。支持中英文混合，可以运行于支持mb_string，iconv函数和通用环境。
* 作    者：Harry Zhang
* 邮    箱：korsenzhang@yahoo.com.cn
*/
function kl_htmlSubString($content,$maxlen=300)
{
	$content = preg_split("/(<[^>]+?>)/si", $content, -1, PREG_SPLIT_NO_EMPTY| PREG_SPLIT_DELIM_CAPTURE);
	$wordrows = 0;
	$outstr = "";
	$wordend = false;
	$beginTags = 0;
	$endTags = 0;
	foreach($content as $value)
	{
		if(trim($value) == "") continue;
		if(strpos(";$value", "<")>0)
		{
			if(trim($value) == $maxlen)
			{
				$wordend = true;
				continue;
			}
			if($wordend == false)
			{
				$outstr .= $value;
				if(!preg_match("/<img([^>]+?)>/is", $value) && !preg_match("/<param([^>]+?)>/is", $value) && !preg_match("/<!([^>]+?)>/is", $value) && !preg_match("/<br([^>]*?)>/is", $value) && !preg_match("/<hr([^>]*?)>/is", $value))
				{
					$beginTags++;
				}
			}elseif(preg_match("/<\/([^>]+?)>/is", $value, $matches))
			{
				$endTags++;
				$outstr .= $value;
				if($beginTags == $endTags && $wordend == true) break;
			}else{
				if(!preg_match("/<img([^>]+?)>/is", $value) && !preg_match("/<param([^>]+?)>/is", $value) && !preg_match("/<!([^>]+?)>/is", $value) && !preg_match("/<br([^>]*?)>/is", $value) && !preg_match("/<hr([^>]*?)>/is", $value))
				{
					$beginTags++;
					$outstr .= $value;
				}
			}
		}else{
			if(is_numeric($maxlen))
			{
				$curLength = kl_getStringLength($value);
				$maxLength = $curLength + $wordrows;
				if($wordend == false)
				{
					if($maxLength > $maxlen)
					{
						$outstr .= kl_subString($value, 0, $maxlen-$wordrows)."...";
						$wordend = true;
					}else{
						$wordrows = $maxLength;
						$outstr .= $value;
					}
				}
			}else{
				if($wordend == false) $outstr .= $value;
			}
		}
	}
	while(preg_match("/<([^\/][^>]*?)><\/([^>]+?)>/is", $outstr))
	{
		$outstr=preg_replace_callback("/<([^\/][^>]*?)><\/([^>]+?)>/is","kl_strip_empty_html", $outstr);
	}
	if(strpos(";".$outstr, "[html_") > 0)
	{
		$outstr = str_replace("[html_&lt;]", "<",$outstr);
		$outstr = str_replace("[html_&gt;]", ">",$outstr);
	}
	return $outstr;
}

function kl_strip_empty_html($matches)
{
	$arr_tags1 = explode(" ", $matches[1]);
	if($arr_tags1[0] == $matches[2])
	{
		return "";
	}else{
		$matches[0] = str_replace("<", "[html_&lt;]", $matches[0]);
		$matches[0] = str_replace(">", "[html_&gt;]", $matches[0]);
		return $matches[0];
	}
}

function kl_getStringLength($text)
{
	if(function_exists('mb_substr'))
	{
		$length = mb_strlen($text,'UTF-8');
	}elseif(function_exists('iconv_substr')){
		$length = iconv_strlen($text,'UTF-8');
	}else{
		preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $text, $ar);
		$length = count($ar[0]);
	}
	return $length;
}

function kl_subString($text, $start=0, $limit=12)
{
	if(function_exists('mb_substr'))
	{
		$more = (mb_strlen($text, 'UTF-8') > $limit) ? TRUE : FALSE;
		$text = mb_substr($text, 0, $limit, 'UTF-8');
		return $text;
	}elseif(function_exists('iconv_substr')){
		$more = (iconv_strlen($text, 'UTF-8') > $limit) ? TRUE : FALSE;
		$text = iconv_substr($text, 0, $limit, 'UTF-8');
		return $text;
	}else{
		preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $text, $ar);
		if(func_num_args() >= 3)
		{
			if(count($ar[0]) > $limit){
				$more = TRUE;
				$text = join("", array_slice($ar[0], 0, $limit));
			}else{
				$more = FALSE;
				$text = join("", array_slice($ar[0], 0, $limit));
			}
		}else{
			$more = FALSE;
			$text =  join("", array_slice($ar[0], 0));
		}
		return $text;
	}
}
?>