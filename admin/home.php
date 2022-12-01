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
                <li><a href="index.php?id=adddm">Danh mục</a></li>
                <li><a href="index.php?id=addxe">Xe</a></li>
                <li><a href="index.php?id=addkh">Khách hàng</a></li>
                <li><a href="index.php?id=adddl">Đặt lịch</a></li>
                <li><a href="index.php?id=addcm">Bình luận</a></li>
                <li><a href="index.php?id=addtt">Tin tức</a></li>

            </ul>
        </div>
        <div class="col">
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

</body>
<script> 
   

</script>
</html>