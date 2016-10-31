<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/10/31
 * Time: 下午6:19
 */

header("Content-type:text/html;charset=utf-8");

mysql_connect("localhost","root","");
mysql_select_db("0811");
mysql_query("set names utf8");

$type = $_POST["type"];
$username = $_POST["username"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$password = $_POST["password"];

//查重
$sql = "SELECT * FROM login WHERE tel = '{$tel}' OR name = '{$username}' OR email = '{$email}'";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0){
    echo "该用户已存在";
    echo "<br>";
    echo "<a href='02_emailSignin.html'>返回注册</a>";
}else{
    $sql = "INSERT INTO login (id,tel,email,name,password) VALUES (NULL,'{$tel}','{$email}','{$username}','{$password}')";
    mysql_query($sql);
    if (mysql_insert_id() > 0){
        echo "注册成功";
        echo "<br>";
        echo "<a href='02_emailLogin.html'>登录</a>";
    }else{
        echo "注册失败";
        echo "<br>";
        echo "<a href='02_emailSignin.html'>返回注册</a>";
    }
}
mysql_close();





