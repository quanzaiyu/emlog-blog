<?php

/*@support tpl_options*/
!defined('EMLOG_ROOT') && exit('access deined!');
$options = array(

//首页logo设置开始
	'index_logo' => array(
		'type' => 'image',
		'name' => '首页logo设置',
		'default' => ''.TEMPLATE_URL.'images/logo.png',
	),
//侧边栏头像设置
	'side_logo' => array(
		'type' => 'image',
		'name' => '侧边栏头像设置',
		'default' => ''.TEMPLATE_URL.'images/photos.jpg',
	),
//首页大图说明
	'index_baner' => array(
		'type' => 'text',
		'name' => '首页大图文字说明',
		'multi' => true,
		'rich' => true,
		'default' => '<p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>',
	),

//侧边栏个人资料
	'side_zl' => array(
		'type' => 'text',
		'name' => '侧边栏主题设置',
		'multi' => true,
		'rich' => true,
		'default' => '<p>网名：风居住的街道 | 陈子文</p>
      <p>职业：Web前端设计、电子工程 </p>
      <p>籍贯：湖南省—常德市-澧县</p>
      <p>电话：***********</p>
      <p>邮箱：chenziwen@lantk.com</p>',
	),

//搜索框
	 'index_so' => array(
	    'type' => 'radio',
		'name' => '是否开启首页搜索框',
		 'description' => '是否开启首页搜索框',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),
//搜索框
	 'echo_so' => array(
	    'type' => 'radio',
		'name' => '是否开启内页搜索框',
		 'description' => '是否开启内页搜索框',
		'values' => array(
			'yes' => '开启',
			'no' => '关闭',
		),
		'default' => 'yes',
	),









);
