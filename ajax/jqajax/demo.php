<?php 
header("Content-type: text/html; charset=utf-8"); 
 /*$demo = "<div>你好啊</div>";
echo $demo;*/

 /*$demo1 = "你好啊";
echo $demo1;*/

$arr = array("username"=>"zhangsan","password"=>"456");
echo json_encode($arr);
 ?>