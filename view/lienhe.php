<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_view1.css">
</head>
<body>
    <div class="container">
        <div class="banner">
        <div class="header">
                <div class="logo">
                    <img src="./img/xemxe-logowhite.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li><img style="width:15px; margin-right: 5px;"
                                src="https://avvietnam.vn/template/avfrontend/icon/icon-user.png" alt="">Xin Chào
                            <?php echo $username = isset($_SESSION['username'])?$_SESSION['username']:""?></li>
                        <li><a href="../index.php">Trang chủ</a></li>
                        <li><a href="./lienhe.php">Liên hệ</a></li>
                        <li><a href="./gioithieu.php">Giới thiệu</a></li>
                        <li><a href="">Hỏi đáp</a></li>
                        <li>
                            <?php if(isset($_SESSION['username'])){?>
                            <a href="./view/save/save_lgout.php"><button>Đăng xuất</button></a>
                            <?php }
                            else{?>
                            <a href="#"><button onclick="dangnhap()">Đăng nhập</button></a>
                            <?php }?>
                        </li>
                        <li><a href="#"><button onclick="dk()">Đăng ký</button></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="lienhe">
           <h3>phần liên hệ</h3>
        </div>
    </div>
</body>
</html>