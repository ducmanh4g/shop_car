<?php 
    session_start();
    include "../../admin/model/connect.php";
    $bl = $_POST['binhluan'];
    $idxe = $_POST['idxe'];

    $tk = $_SESSION['username'];

    $sqltk = "select idtk from taikhoan where taikhoan = '$tk'";
    $idtk = getOne($sqltk);
    var_dump($idtk[0]) ;
    if(isset($_SESSION['username'])){     
        $sql = "insert into binhluan(noidung,idtk,idxe) values ('$bl',$idtk[0],$idxe)";
        connect($sql);
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
    else
    
    
    


    


?>