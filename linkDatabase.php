<?php
// 引入数据库配置文件
include_once 'config.php';

// 创建数据库连接
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// 检查连接是否成功
if(!$con) {
    die("数据库连接失败xxxx" . $con->connect_error);
}

// 关闭数据库连接
// mysql_close($com);