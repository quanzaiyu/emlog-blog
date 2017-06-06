<?php
/**
 * 外链创建
 * @copyright (c) Emlog All Rights Reserved
 */
require_once ('../../../init.php');
error_reporting(0);
header('Content-type:text/json');
$title = isset($_POST['title']) ? addslashes($_POST['title']) : '';
$des = isset($_POST['des']) ? addslashes($_POST['des']) : '';
$go = isset($_POST['go']) ? addslashes($_POST['go']) : '';
if(!$_POST){
    exit();
}
$printr=array();
$db = MySql::getInstance();
$sql_go = "SELECT * FROM " . DB_PREFIX . "go where title='$title'";
$res = $db->query($sql_go);
$row = $db->fetch_array($res);
if(preg_match("/[\x7f-\xff]/", $title) || empty($title) || empty($des) || empty($go) || $row['title']==$title){
    $printr['error'] = 'error';
}else{
    $sql="insert into ".DB_PREFIX."go (title,siteurl,description,views) values ('$title','$go','$des','0')";
    $db->query($sql);
    $printr['goto'] = BLOG_URL.'admin/plugin.php?plugin=links_go&active=1';
}
print_r(json_encode($printr));