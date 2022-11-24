<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_adddm.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?id=adddm">Danh Mục</a></li>
                <li><a href="index.php?id=addxe">Xe</a></li>
                <li><a href="index.php?id=addkh">Khách Hàng</a></li>
                <li><a href="index.php?id=adddl">Đặt Lịch</a></li>
                <li><a href="index.php?id=addcm">Comment</a></li>
                <li><a href="index.php?id=addtt">Tin tức</a></li>
            </ul>
        </div>
        <div class="form">
            <div class="form">

                <?php
                     include "./model/connect.php";
                     $sql = "select * from datlichxem";
                     $thongtin= getAll($sql);

                     
                     $sql_pheduyet = "select * from pheduyet";
                     $thongtin_pduyet= getAll($sql_pheduyet);        
                
                ?>
                <table>
                    <thead>
                        <th>
                            STT
                        </th>
                        <th>
                            Họ tên
                        </th>
                        <th>
                            SDT
                        </th>
                        <th>
                            Gmail
                        </th>
                        <th>
                            Ngày Xem Xe
                        </th>
                        <th>
                        Loại Xe
                        </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($thongtin as $key => $value):?>
                        <tr>
                            <td>
                                <p><?php echo $key+1?></p>
                            </td>
                            <td>
                                <p><?php 
                                    $idtk = $value['idtk'];
                                    $sqlhoten = "select hoten,sdt,gmail from taikhoan where idtk = $idtk";
                                    $taikhoan = getOne($sqlhoten);
                                    echo $taikhoan[0]
                                ?></p>
                            </td>
                            <td>
                                <?php  echo $taikhoan[1]?>
                            </td>
                            <td>
                                <?php  echo $taikhoan[2]?>

                            </td>
                            <td>
                                <p><?php echo $value['ngaydatlich']?></p>
                            </td>
                            <td>
                                <?php 
                                    $idxe = $value['idxe'];
                                    $sqlxe = "select tenxe from xe where idxe = $idxe";
                                    $xe = getOne($sqlxe);
                                    echo $xe[0]
                                ?>
                            </td>

                            <td>
                                <a onclick="return(a())"
                                    href="./datlich/delete.php?id=<?php echo $value['iddl']?>"><button>Delete</button>
                                </a>
                                <form action="" method="POST">
                                    <input name="hoten" type="hidden" value="<?php echo $taikhoan[0]?>">
                                    <input name="sdt" type="hidden" value="<?php echo $taikhoan[1]?>">
                                    <input name="gmail" type="hidden" value="<?php echo $taikhoan[2]?>">
                                    <input name="date" type="hidden" value="<?php echo $ngaydat?>">
                                    <input name="loaixe" type="hidden" value="<?php echo $xe[0]?>">
                                    <button name="pduyet" type="submit" onclick="pheduyet()">Chấp nhập</button>
                                </form>

                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
            <div class="form">
            <h3>Danh sách đã phê duyệt</h3>
                <table>
                    <thead>
                        <th>
                            STT
                        </th>
                        <th>
                            Họ tên
                        </th>
                        <th>
                            SDT
                        </th>
                        <th>
                            Gmail
                        </th>
                        <th>
                            Ngày Xem Xe
                        </th>
                        <th>
                            Loại Xe
                        </th>
                        <th>Phê duyệt</th>
                    </thead>
                    <tbody>
                        <?php foreach ($thongtin_pduyet as $key => $value):?>
                        <tr>
                            <td>
                                <p><?php echo $key+1?></p>
                            </td>
                            <td>
                                <p><?php echo $value['hoten']?></p>
                                
                            </td>
                            <td>
                                <p><?php echo $value['sdt']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['gmail']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['date']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['loaixe']?></p>
                            </td>
                            <td>
                                <a onclick="return(a())"
                                    href="./datlich/delete.php?id=<?php echo $value['id']?>"><button>Delete</button></a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
function a() {
    var a = confirm("Bạn có muốn xóa không?")
    if (!a == true) {
        return false
    }

}
</script>
<?php    
if(isset($_POST['pduyet'])){
 $hoten = $_POST['hoten'];
 $sdt = $_POST['sdt'];
 $gmail = $_POST['gmail'];
 $date = $_POST['date'];
 $tenxe = $_POST['loaixe'];
    $sqlpheduyet = "insert into pheduyet(hoten,sdt,gmail,date,loaixe) values ('$hoten',$sdt,'$gmail','$date','$tenxe')";
    connect($sqlpheduyet);
   
}
?>
</html>