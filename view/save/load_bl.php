<?php 
include "../../admin/model/connect.php";
$idxe = $_GET['idxe'];
$sqlbl ="select * from binhluan";
$binhluan =  getAll($sqlbl);?>
<?php foreach($binhluan as $key => $value):?>
<?php
    if($idxe==$value['idxe']){
        echo "<div class=\"binhluan_ngd\">";
        echo "<img src=\"./img/icon.png\" alt=\"\">";
        $b = $value['idtk'];
        $sqlbl = "select taikhoan from taikhoan where idtk = $b";
        $tentk = getAll($sqlbl);                                   
        echo $tentk[0][0];
        echo ": ";
        echo $value['noidung']; 
        echo "</div>";                                         
    }                                        
    ?>
<?php endforeach?>