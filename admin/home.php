<?php 
    include "./model/connect.php";
   $sqlxe = "select * from datlichxem where trangthai=0";
   $xe = getAll($sqlxe);

   $sqlbl = "select * from datlichxem where trangthai=0";
   $bl = getAll($sqlbl);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_home.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


</head>

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
        <div class="col_1">
            <div class="row">
                <div class="content">
                    <a href="index.php?id=adddl"><i class='fas fa-tty' style='font-size:48px;color:red'></i></a>
                    <div class="icon">
                        <?php echo count($xe)?>
                    </div>

                </div>
                <div class="content">
                    <a href="index.php?id=addcm"><i class='far fa-comment-dots' style='font-size:48px;color:red'></i>
                    </a>
                    <div class="icon">
                        <?php echo count($bl)?>


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>


</script>

</html>