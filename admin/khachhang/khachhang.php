<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_khachhang.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#button").click(function() {
        $.get("./khachhang/addkh.php", {}, function(data) {
            $("#add").html(data);
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
            <div class="form_kh">

                <?php
                     include "./model/connect.php";
                     $sql = "select * from taikhoan where idquyen = 2";
                     $taikhoankh= getAll($sql);
                     $sql2 = "select * from taikhoan where idquyen = 1";
                     $taikhoanad= getAll($sql2);
                ?>
                <div class="addkhachhang">
                    <button id="button">Thêm tài khoản</button>
                </div>
                <div id="add">

                </div>
                <h3>Tài khoản khách hàng</h3>
                <table>
                    <thead>
                        <th>
                            TAIKHOAN
                        </th>
                        <th>
                            MATKHAU
                        </th>
                        <th>
                            Gmail
                        </th>
                        <th>
                            Họ tên
                        </th>
                        <th>
                            SĐt
                        </th>
                        <th>
                            Trạng thái
                        </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($taikhoankh as $key => $value):?>
                        <tr>
                            <td>
                                <p><?php echo $value['taikhoan']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['matkhau']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['gmail']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['hoten']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['sdt']?></p>
                            </td>
                            <td>
                                <?php
                                 if($value['trangthai']==0){
                                    echo "<p style=\"color: red;\">Không hoạt động</p>";
                                    
                                }
                                else if($value['trangthai']==1){
                                    echo "<p style=\"color: green;\">Hoạt động</p>";
                                }
                                ?>
                            </td>
                            <td>
                                <a onclick="return(off())"
                                    href="./khachhang/delete.php?id=<?php echo $value['idtk']?>&trangthai=0"><button
                                        style="background-color:red ;">Tắt</button></a>
                                <a onclick="return(on())"
                                    href="./khachhang/delete.php?id=<?php echo $value['idtk']?>&trangthai=1"><button
                                        style="background-color:green ;">Bật</button></a>

                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
            <div class="form_ad">
            <h3>Tài khoản quản trị</h3>
                <table>
                    <thead>
                        <th>
                            TAIKHOAN
                        </th>
                        <th>
                            MATKHAU
                        </th>
                        <th>
                            Gmail
                        </th>
                        <th>
                            Họ tên
                        </th>
                        <th>
                            SĐt
                        </th>
                        <th>
                            Trạng thái
                        </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($taikhoanad as $key => $value):?>
                        <tr>
                            <td>
                                <p><?php echo $value['taikhoan']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['matkhau']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['gmail']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['hoten']?></p>
                            </td>
                            <td>
                                <p><?php echo $value['sdt']?></p>
                            </td>
                            <td>
                                <?php
                                 if($value['trangthai']==0){
                                    echo "<p style=\"color: red;\">Không hoạt động</p>";
                                    
                                }
                                else if($value['trangthai']==1){
                                    echo "<p style=\"color: green;\">Hoạt động</p>";
                                }
                                ?>
                            </td>
                            <td>
                                <a onclick="return(off())"
                                    href="./khachhang/delete.php?id=<?php echo $value['idtk']?>&trangthai=0"><button
                                        style="background-color:red ;">Tắt</button></a>
                                <a onclick="return(on())"
                                    href="./khachhang/delete.php?id=<?php echo $value['idtk']?>&trangthai=1"><button
                                        style="background-color:green ;">Bật</button></a>

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
function off() {
    var a = confirm("Bạn có muốn tắt trạng thái không?")
    if (!a == true) {
        return false
    }

}

function on() {
    var a = confirm("Bạn có muốn bật trạng thái không?")
    if (!a == true) {
        return false
    }

}
</script>

</html>