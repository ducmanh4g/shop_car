<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="./jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/style_view_ct.css">
    <?php session_start(); ?>

    <script>
    // Validate   
    var i = "<?php echo isset($_SESSION['username'])?$_SESSION['username']:'';?>";

    function close() {
        var element = document.getElementById('vvv')
        console.log(element)
        element.style.display = 'none'

        var cl = confirm("bạn có muốn hay không")
        if (cl == true) {
            element.style.display = 'none'
        } else
            element.style.display = 'block'
    }

    function dk() {
        var element = document.getElementById('vvv')
        element.style.display = 'block'
        document.getElementById('closeel').addEventListener('click', close)

    }

    function close_tt() {
        var element = document.getElementById('tt_khachhang')
        console.log(element)
        element.style.display = 'none'

        var cl = confirm("bạn có đóng hay không")
        if (cl == true) {
            element.style.display = 'none'
        } else
            element.style.display = 'block'
    }

    function byNow() {
        console.log(i)
        if (i === "") {
            alert("Xin mời bạn đăng ký tài khoản để mua hàng");
            //show form đăng nhập
            var element = document.getElementById('vvv')
            element.style.display = 'block'
            document.getElementById('closeel').addEventListener('click', close)
        } else {
            var element = document.getElementById('tt_khachhang')
            element.style.display = 'block'
            document.getElementById('close_tt').addEventListener('click', close_tt)
        }
    }

    function dangnhap() {
        var element = document.getElementById('dangnhap')
        element.style.display = 'block'
        document.getElementById('closee').addEventListener('click', close_dangnhap)

    }

    function close_dangnhap() {
        var element = document.getElementById('dangnhap')
        console.log(element)
        element.style.display = 'none'

        var cl = confirm("bạn có đóng hay không")
        if (cl == true) {
            element.style.display = 'none'
        } else
            element.style.display = 'block'
    }


$(document).ready (function() {
    $.get("./save/load_bl.php",{idxe:"<?php echo $_GET['id']?>"},function(data){
        $("#binhluan").html(data);
    });

});
    </script>
</head>
<?php    
    include "../admin/model/connect.php";
    $a=$_GET['id'];
    if(isset($_SESSION['spcl'])){
        $idsp_cloai = $_SESSION['spcl'];
        $sql="select * from xe where idxe='$idsp_cloai'";
        $xe = getAll($sql);
        unset($_SESSION['spcl']);
    }
    else{
        $sql="select * from xe where idxe=$a";
        $xe = getAll($sql);
    }
   
    $sqldm = "select * from danhmuc";
    $dm = getAll($sqldm);    
    foreach ($xe as $key => $value) {
        $iddm=$value['iddm'];
    }
    $sp_cungloai="select * from xe where idxe <> $a and iddm=$iddm";
    $cl = getAll($sp_cungloai);  

    $sqltk ="select * from taikhoan";
    $ngdung =  getAll($sqltk);

    $sqlbl ="select * from binhluan";
    $binhluan =  getAll($sqlbl);
?>

<body>
    <div class="container">
        <div class="banner">
            <div class="header">
                <div class="logo">
                    <img src="./img/xemxe-logowhite.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="../index.php">Trang chủ</a></li>
                        <li><a href="./lienhe.php">Liên hệ</a></li>
                        <li><a href="./gioithieu.php">Giới thiệu</a></li>
                        <li><a href="">Hỏi đáp</a></li>
                        <?php if(isset($_SESSION['username'])){?>
                        <li> <a href="../view/save/save_lgout.php"><button>Đăng xuất</button></a></li>
                        <?php }
                            else{?>
                        <li><a href="#"><button onclick="dangnhap()">Đăng nhập</button></a></li>
                        <?php }?>
                        <li><a href="#"><button onclick="dk()">Đăng ký</button></a></li>
                    </ul>
                </div>


            </div>
            <div id="slideshow">
                <div class="slide-wrapper">
                    <div class="slide"><img src="./img/banner-03.jpg"></div>
                    <div class="slide"><img src="./img/l_1633602120.jpg"></div>
                    <div class="slide"><img src="./img/trato-venta-coche.jpg"></div>
                </div>
            </div>

        </div>
        <div class="content">
            <div class="col1_ct">
                <h3>Chi tiết sản phẩm</h3>
                <?php foreach($xe as $key => $value):?>
                <div class="sp">
                    <div class="sp_anhsp">
                        <img src="../admin/uploat/<?php echo $value['img']?>" alt="">
                    </div>
                    <div>
                        <p class=""><?php echo $value['tenxe']?></p>
                        <p class="price">$ <?php echo $value['gia']?></p>
                        <button onclick="byNow()">Đặt Lịch Xem</button>
                        <h3>Mô tả</h3>
                        <p><?php echo $value['thongtinxe']?></p>
                        <h3>Bình luận</h3>

                        <!-- bình luận -->
                        <div class="binhluan">
                            <div id="binhluan" class="">
                             
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach?>

                <form class="form_bl" action="./save/save_bl.php?id=<?php echo $a?>" method="POST" onsubmit="return(checkbl())">
                    <input type="text" name="binhluan" placeholder="bình luận" required>
                    <button type="submit">Gửi</button>
                </form>
                

                <div class="cungloai">
                    <h3>Sản phẩm cùng loại</h3>
                    <?php foreach($cl as $key => $value):?>
                    <ul>
                        <li>
                            <a href="./save/save_spcungloai.php?id=<?php echo $value['idxe']?>">
                                <img class="imgchitiet" src="../admin/uploat/<?php echo $value['img']?>" alt="">
                                <?php echo $value['tenxe']?>
                            </a>

                        </li>
                    </ul>
                    <?php endforeach?>
                </div>
            </div>
            <div class="col2_ct">
                <div class="danhmuc">
                    <h3>Danh mục</h3>
                    <?php foreach($dm as $key => $value):?>
                    <ul>
                        <li>
                            <a
                                href="./save/save_danhmuc.php?id=<?php echo $value['id']?>"><?php echo $value['name']?></a>
                        </li>
                    </ul>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
    <!-- form đăng ký -->
    <div id="vvv"
        style="position: fixed; width:100vw; height:100vh; background-color:rgba(48, 82, 212, 0.2);top:0;display: none;">
        <div style="width:100%; height:100%;display: flex;justify-content: center;align-items: center">
            <div style=" width:600px; height:auto; background-color:rgba(0,0,0,0.9);">
                <div class="close"><button id="closeel" style="cursor: pointer;">X</button></div>
                <div class="form">
                    <div class="brand-logo"></div>
                    <div class="brand-title">ĐĂNG KÝ</div>
                    <div class="inputs">
                        <form action="./save/save_dangky.php" id="form" onsubmit="return(checktk())" method="GET">
                            <label>Họ & Tên</label>
                            <input type="text" name="hoten" placeholder="Nhập họ tên" required />
                            <label>Tài Khoản</label>
                            <input type="text" id="taikhoan" name="taikhoan" placeholder="Nhập tài khoản" required />
                            <label>Password</label>
                            <input type="password" name="matkhau" placeholder="password" required minlength="8" />
                            <label>Gmail</label>
                            <input type="text" id="gmail" name="gmail" placeholder="Nhập gmail" required />
                            <label>SĐT</label>
                            <input type="text" id="sdt" name="sdt" placeholder="Nhập SĐT" required />
                            <button type="submit">Đăng Ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- form đăng nhập -->
    <div id="dangnhap"
        style="position: fixed; width:100vw; height:100vh; background-color:rgba(48, 82, 212, 0.2);top:0;display: none;">
        <div style="width:100%; height:100%;display: flex;justify-content: center;align-items: center">
            <div style=" width:600px; height:auto; background-color:rgba(0,0,0,0.9);">
                <div class="close"><button id="closee" style="cursor: pointer;">X</button></div>
                <div class="form">
                    <div class="brand-logo"></div>
                    <div class="brand-title">Đăng nhập</div>
                    <div class="inputs">
                        <form action="./save/save_tk.php" id="form" onsubmit="return(checklogin())" method="GET">
                            <label>Tài Khoản</label>
                            <input type="text" id="user" name="taikhoan" placeholder="Nhập tài khoản" required />
                            <label>Password</label>
                            <input type="password" id="pass" name="matkhau" placeholder="Nhập password" required />
                            <button type="submit">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- form thông tin khách hàng -->
    <div id="tt_khachhang"
        style="position: fixed; width:100vw; height:100vh; background-color:rgba(48, 82, 212, 0.2);top:0;display: none;">
        <div style="width:100%; height:100%;display: flex;justify-content: center;align-items: center">
            <div style=" width:600px; height:auto; background-color:rgba(0,0,0,0.9);color:white">
                <div class="close"><button id="close_tt" style="cursor: pointer;">X</button></div>
                <div class="form">
                    <div class="brand-logo"></div>
                    <div class="brand-title">Thông tin khách hàng</div>
                    <div class="inputs">
                        <form action="./save/save_ttkhachhang.php" id="form" method="GET" onsubmit="return(check())">
                            <input type="hidden" value="<?php echo $a?>" name="idxe">
                            <label for="">Địa điểm: xuân phương, Nam Từ Liêm, Hà Nội</label>
                            <label>Ngày đặt lịch</label>
                            <input id="date" type="datetime-local" name="date" />

                            <button type="submit">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function checktk() {
    var taikhoan = document.getElementById("taikhoan").value
    var sdt = document.getElementById("sdt").value

    <?php 
        $php_array = $ngdung;
        $code_array = json_encode($php_array);
    ?>
    var array_code = <?php echo $code_array; ?>;


    // function kiemTra(item) {
    //     return item['0'] === taikhoan
    // }

    // if (!array_code.some(kiemTra)) {
    //     alert("Tài khoản đã tồn tại");
    //     return;
    // }
    for (let index = 0; index < array_code.length; index++) {
        console.log(array_code[index]['2'])
        if (taikhoan == array_code[index]['2']) {
            alert("Tài khoản đã tồn tại");
            document.getElementById("taikhoan").style.color = "red";
            return false;
        } else
            document.getElementById("taikhoan").style.color = "black";
    }
    if (isNaN(sdt)) {
        document.getElementById("sdt").value = "Xin Nhập Lại SĐT";
        document.getElementById("sdt").style.color = "red";
        return false;
    } else
        document.getElementById("taikhoan").style.color = "black";
    alert("đăng ký thành công")
}

//check thời gian
function check() {
    var a = document.getElementById("date").value

    var date = new Date()
    var input_date = new Date(a)
    console.log()
    if (input_date.getFullYear() < date.getFullYear()) {
        alert("Năm không hợp lệ")
        return false
    } else if (input_date.getMonth() + 1 < date.getMonth() + 1) {
        alert("tháng không hợp lệ")
        return false
    } else if (input_date.getMonth() + 1 === date.getMonth() + 1) {
        if (input_date.getDate() < date.getDate()) {
            alert("ngày không hợp lệ")
            return false
        }else if(input_date.getDate() === date.getDate()){
            if(input_date.getHours()< date.getHours())
            {
                alert("giờ không hợp lệ")
                return false
            }
        }
    }
}

function checkbl() {
    if (i === "") {
        alert("Xin mời bạn đăng ký tài khoản");
        //show form đăng nhập
        var element = document.getElementById('vvv')
        element.style.display = 'block'
        document.getElementById('closeel').addEventListener('click', close)
        return false;
    } else {
        
    }
}

function checklogin() {
    var cout = "";
    var user = document.getElementById("user").value
    var pass = document.getElementById("pass").value
    <?php 
        $code_array = json_encode($ngdung);
    ?>
    var array_code = <?php echo $code_array; ?>;
    for (let index = 0; index < array_code.length; index++) {
        if (user == array_code[index]['2'] && pass == array_code[index]['3']) {
            cout++;
        }
    }
    if (!cout) {
        alert("Sai tài khoản hoặc mật khẩu")
        return false
    }
}

// $(document).ready(function() {
//     $('.form_bl').submit(function(event) {
//         $.ajax({
//             method: $(this).attr('method'),
//             url: $(this).attr('action'),
//             data: $(this).serialize(),
//             // other AJAX settings goes here
//             // ..
//         }).done(function(response) {
//             // Process the response here
//         });
//         event.preventDefault(); // <- avoid reloading
//    });
// });




</script>

</html>
