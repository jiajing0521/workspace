<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/10/31
 * Time: 下午5:47
 */

header("Content-type:text/html;charset=utf-8");

mysql_connect("localhost","root","");
mysql_select_db("0811");
mysql_query("set names utf8");

$type = $_POST["type"];
$username = $_POST["username"];
$password = $_POST["password"];

//$sql = "SELECT * FROM login WHERE password = '{$password}' AND (tel = '{$username}' OR email = '{$username}' OR name = '{$username}')";
$sql = "SELECT * FROM login WHERE password = '{$password}' AND tel = '{$username}' OR  password = '{$password}' AND email = '{$username}' OR password = '{$password}' AND name = '{$username}'";

echo $sql;
echo "<br>";

$result = mysql_query($sql);
var_dump($result);
echo "<br>";

if (mysql_num_rows($result) > 0){
    echo "登录成功";
}else{
    echo "登录失败";
}

