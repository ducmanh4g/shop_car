<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_adddm.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#dapd").click(function() {
        $.get("./datlich/dapheduyet.php", {}, function(data) {
            $("#da").html(data);
        });
    });
});

$(document).ready(function() {
    $("#thongke").click(function() {
        $.get("./datlich/thongkekh.php", {}, function(data) {
            $("#da").html(data);
        });
    });
});
</script>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
            <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?id=adddm">Quản lý danh Mục</a></li>
                <li><a href="index.php?id=addxe">Quản lý  xe</a></li>
                <li><a href="index.php?id=addkh">Quản lý tài khoản</a></li>
                <li><a href="index.php?id=adddl">Quản lý đặt Lịch</a></li>
                <li><a href="index.php?id=addcm">Quản lý bình luận</a></li>
                <li><a href="index.php?id=addtt">Quản lý tin tức</a></li>
            </ul>
        </div>
        <div class="form">
            <div class="">
                <div class="" style="display: flex; justify-content: space-between;">
                    <h3>Danh sách chưa phê duyệt</h3>
                    <div>
                        <button
                            style=" background-color: rgb(19, 4, 107); color: white; border: none; border-radius: 5px;cursor: pointer;"
                            id="dapd">Danh sách đã phê duyệt</button>
                        <button
                            style=" background-color: rgb(19, 4, 107); color: white; border: none; border-radius: 5px;cursor: pointer;"
                            id="thongke">Thống kê khách đặt lịch</button>
                    </div>
                </div>

                <?php
                     include "./model/connect.php";
                     $sql = "select * from datlichxem where trangthai=0";
                     $chua_pheduyet= getAll($sql);

                     
                     $sql_pheduyet = "select * from datlichxem where trangthai=1";
                     $da_pheduyet= getAll($sql_pheduyet);        
                
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
                        <?php foreach ($chua_pheduyet as $key => $value):?>
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
                               
                                <form action="./datlich/upload.php" method="POST">
                                    <input name="iddl" type="hidden" value="<?php echo $value['iddl']?>">
                                    <input name="trangthai" type="hidden" value="2">
                                    <button style="background-color: gold;border-radius: 7px; border: none; cursor: pointer;" name="pduyet" type="submit">xóa</button>
                                </form>
                               
                                <form action="./datlich/upload.php" method="POST">
                                    <input name="iddl" type="hidden" value="<?php echo $value['iddl']?>">
                                    <input name="trangthai" type="hidden" value="1">
                                    <button style="background-color:green;border-radius: 7px; border: none; cursor: pointer;color: white;" name="pduyet" type="submit">Chấp nhập</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>

            <div id="da" class="">


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
     $trangthai = $_POST['trangthai'];
     $iddl = $_POST['iddl'];

    $query = "update datlichxem set trangthai=$trangthai WHERE iddl=$iddl";
    connect($query);
}
?>

</html>