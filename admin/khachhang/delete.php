<?php
    include "../model/connect.php";
    $id = $_GET["id"];
    $trangthai = $_GET["trangthai"];

    
    $query3 = "update taikhoan set trangthai = $trangthai WHERE idtk=$id";
    connect($query3);
   
    header("Location:".$_SERVER['HTTP_REFERER']);
?>