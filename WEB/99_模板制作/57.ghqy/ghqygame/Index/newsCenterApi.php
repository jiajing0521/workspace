<?php
/**
 * Created by PhpStorm.
 * User: saunders
 * Date: 2016/12/12
 * Time: 20:14
 */

header("Content-type:text/html;charset=utf8");
$pdo = new PDO("mysql:host=localhost;dbname=ghqy","root","");
$pdo->exec("set names utf8");
if(isset($_POST['index'])){
    if($_POST['index']==0){
        $index = $_POST['index'];
    }else{
        $index = $_POST['index']-1;
    }
    $result = $pdo->query("SELECT * FROM ghqygame ORDER BY id DESC LIMIT {$index}, 4");
    $arr = $result->fetchAll(PDO::FETCH_ASSOC);
    if(count($arr)>0){
        echo '{"err":0,"data":'.json_encode($arr).'}';
    }
}


