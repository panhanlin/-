<?php
header("Content-type:text/html;charset=utf-8");
//连接mysql服务器，通过域名或IP地址，输入口令和密码
$lk= mysqli_connect('localhost','root','root','db_database10') or die("数据库连接失败");
//选择数据库

mysqli_set_charset($lk,"utf8");


?>