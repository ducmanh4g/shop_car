<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-car-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 07:27:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
    <meta name="description" content="Voiture - Automotive & Car Dealer HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Title -->
    <title>Voiture - Automotive & Car Dealer HTML Template</title>
    <!-- Favicon -->
    <link href="../images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="../images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <link rel="stylesheet" href="../css/login.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
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

function dangnhap() {
    var element = document.getElementById('dangnhap')
    element.style.display = 'block'
    document.getElementById('closee').addEventListener('click', close_login)

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

function close_login() {
    var element = document.getElementById('dangnhap')
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
    <div class="wrapper ovh">
        <div class="preloader"></div>
        <!-- Sidebar Panel Start -->
        <div class="listing_sidebar">
            <div class="siderbar_left_home pt20">
                <a class="sidebar_switch sidebar_close_btn float-end" href="#">X</a>
                <div class="footer_contact_widget mt100">
                    <h3 class="title">Quick contact info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur.</p>
                </div>
                <div class="footer_contact_widget">
                    <h5 class="title">CONTACT</h5>
                    <div class="footer_phone">0397550504</div>
                    <p>hello@voiture.com</p>
                </div>
                <div class="footer_about_widget">
                    <h5 class="title">địa chỉ</h5>
                    <p>Nam từ liêm, Hà Nội</p>
                </div>
                <div class="footer_contact_widget">
                    <h5 class="title">OPENING HOURS</h5>
                    <p>Monday – Friday: 09:00AM – 09:00PM<br>Saturday: 09:00AM – 07:00PM<br>Sunday: Closed</p>
                </div>
            </div>
        </div>
        <!-- Sidebar Panel End -->

        <!-- header top -->
        <div class="header_top home3_style dn-992">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-7">
                        <div class="header_top_contact_opening_widget text-center text-md-start">
                            <ul class="mb0">
                                <li class="list-inline-item"><a href="#"><span
                                            class="flaticon-phone-call"></span>0397550504</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-map"></span>Nam từ liêm,
                                        Hà Nội</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-clock"></span>Mon - Fri
                                        8:00 - 18:00</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-5">
                        <div class="header_top_social_widgets text-center text-md-end">
                            <ul class="m0">
                                <li class="list-inline-item"><a href="#"><img style="width:30px ;" src="https://kiemsoat.idmart.com.vn/wp-content/uploads/2019/06/icon-ng%C6%B0%E1%BB%9Di-d%C3%B9ng.png" alt=""></a></li>
                                <li class="list-inline-item"><a href="#"><span>Xin chào <?php echo $b =isset($_SESSION['username'])?$_SESSION['username']:"";?></span></a></li>                           
                                <li class="list-inline-item"><a href="#"><span ></span></a></li>
                                <li class="list-inline-item" style="cursor: pointer;" onclick="dangnhap()">Đăng nhập</li>
                                <li class="list-inline-item"style="cursor: pointer;" onclick="dk()">Đăng ký</li>
                                <li class="list-inline-item"style="cursor: pointer;" onclick=""><a href="./save/save_lgout.php">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_one home3_style main-menu">
            <!-- Ace Responsive Menu -->
            <nav>
                <div class="container posr">
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="../index.php" class="navbar_brand float-start dn-md">
                        <img style="width: 100px;" class="logo1 img-fluid"
                            src="https://xeoto.cc/wp-content/uploads/2021/09/xeoto-logo.png" alt="header-logo2.png">

                    </a>
                    <!-- Responsive Menu Structure-->
                    <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa text-end"
                        data-menu-style="horizontal">
                        <li> <a href="../index.php"><span class="title">Home</span></a>

                        </li>
                        <li> <a href="#"><span class="title">giới thiệu</span></a>

                        </li>
                        <li> <a href="#"><span class="title">hỏi đáp</span></a>

                        </li>
                        <li> <a href="#"><span class="title">Liên hệ</span></a>

                        </li>

                        <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
                    </ul>
                </div>
            </nav>
        </header>
    
        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="mobile_menu_bar">
                        <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
                    </div>
                    <div class="mobile_menu_main_logo"></div>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><span>Home</span>
                      
                    </li>
                    <li><span>Giới thiệu</span>
                        
                    </li>
                    <li><span>Liên hệ</span>
                       
                    </li>
                    <li><span>Hỏi đáp</span>
                        
                    </li>
                    <li><span>Shop</span>
                        
                    </li>
                    
                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">
                        <span class="border-none">
                            <span class="mmenu-contact-info">
                                <span class="phone-num"><i class="flaticon-map"></i> <a href="#">47 Bakery Street,
                                        London, UK</a></span>
                                <span class="phone-num"><i class="flaticon-phone-call"></i> <a
                                        href="#">1-800-458-56987</a></span>
                                <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Mon - Fri 8:00 -
                                        18:00</a></span>
                            </span>
                            <span class="social-links">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-youtube"></span></a>
                                <a href="#"><span class="fab fa-pinterest"></span></a>
                            </span>
                        </span>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- tt xe -->
        <section class="our-agent-single bgc-f9 pb90 mt70-992 pt30">
            <?php foreach($xe as $key => $value):?>
            <div class="container">
                <div class="row mb30">
                    <div class="col-lg-7 col-xl-8">
                        <div class="single_page_heading_content">
                            <div class="sp">
                                <div class="sp_anhsp">
                                    <img src="../admin/uploat/<?php echo $value['img']?>" alt="">
                                </div>
                                <div>
                                    <h4 class=""><?php echo $value['tenxe']?></h4>
                                    <h3 class="price">$ <?php echo $value['gia']?></h3>
                                    <button onclick="byNow()">Đặt Lịch Xem</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="listing_single_description mt30">
                                    <h3>Mô tả</h3>
                                    <p><?php echo $value['thongtinxe']?></p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="listing_single_description mt30">
                                    <h3>Bình luận</h3>
                                    <div class="binhluan">
                                        <div class="">
                                            <?php $idxe = $value['idxe']?>
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
                                        </div>
                                        <hr>
                                        <form class="form_bl" action="./save/save_bl.php"
                                            method="POST" onsubmit="return(checkbl())">
                                            <input type="hidden" name="idxe" id="" value="<?php echo $idxe?>">
                                            <input type="text" name="binhluan" placeholder="bình luận" required>
                                            <button>Gửi</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
        </section>

        <!-- sp cùng loại -->
        <section class="our-shop pb100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-title text-center text-md-start mb15-sm">
                            <h2>Sản phẩm cùng loại</h2>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="listing_item_4grid_slider nav_none">
                            <?php foreach($cl as $key => $value):?>
                            <div class="item">
                                <a href="./save/save_spcungloai.php?id=<?php echo $value['idxe']?>">
                                    <div class="car-listing">
                                        <div class="thumb">
                                            <img style="height:300px ;" src="../admin/uploat/<?php echo $value['img']?>" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="wrapper">
                                                <h5 class="price">$<?php echo $value['gia']?></h5>
                                                <h6 class="title"><?php echo $value['tenxe']?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer -->
        <section class="footer_one pt50 pb25">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xl-7">
                        <div class="footer_about_widget text-start">
                            <div class="logo mb40 mb0-sm"><img src="images/header-logo.svg" alt="header-logo.png"></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-5">
                        <div class="footer_menu_widget text-start text-md-end mt15">
                            <ul>
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><a href="#">Explore</a></li>
                                <li class="list-inline-item"><a href="#">Listings</a></li>
                                <li class="list-inline-item"><a href="#">Blog</a></li>
                                <li class="list-inline-item"><a href="#">Shop</a></li>
                                <li class="list-inline-item"><a href="#">Pages</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container pt80 pt20-sm pb70 pb0-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="footer_about_widget">
                            <h5 class="title">OFFICE</h5>
                            <p>Germany —<br>329 Queensberry Street,<br>North Melbourne VIC 3051</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget">
                            <h5 class="title">NEED HELP</h5>
                            <div class="footer_phone">+1 670 936 46 70</div>
                            <p>hello@voiture.com</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget">
                            <h5 class="title">OPENING HOURS</h5>
                            <p>Monday – Friday: 09:00AM – 09:00PM<br>Saturday: 09:00AM – 07:00PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget">
                            <h5 class="title">KEEP IN TOUCH</h5>
                            <form class="footer_mailchimp_form">
                                <div class="wrapper">
                                    <div class="col-auto">
                                        <input type="email" class="form-control" placeholder="Enter your email...">
                                        <button type="submit">GO</button>
                                    </div>
                                </div>
                            </form>
                            <p>Get latest updates and offers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8 col-xl-9">
                        <div class="copyright-widget mt5 text-start mb20-sm">
                            <p>CreativeLayers © 2022. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer_social_widget text-start text-md-end">
                            <ul class="mb0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- Wrapper End -->
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/jquery-migrate-3.0.0.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-select.min.js"></script>
    <script src="../js/jquery.mmenu.all.js"></script>
    <script src="../js/ace-responsive-menu.js"></script>
    <script src="../js/isotop.js"></script>
    <script src="../js/snackbar.min.js"></script>
    <script src="../js/simplebar.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/scrollto.js"></script>
    <script src="../js/jquery-scrolltofixed-min.js"></script>
    <script src="../js/jquery.counterup.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/progressbar.js"></script>
    <script src="../js/slider.js"></script>
    <script src="../js/timepicker.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap">
    </script>
    <script src="../js/googlemaps1.js"></script>
    <!-- Custom script for all pages -->
    <script src="../js/script.js"></script>
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
                            <input id="date" type="date" name="date" />

                            <button type="submit">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-car-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 07:27:35 GMT -->
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

//check year
function check() {
    var a = document.getElementById("date").value
     
    var date = new Date()
    var  input_date = new Date(a)
    console.log()
    if (input_date.getFullYear() < date.getFullYear()) {
        alert("Năm không hợp lệ")
        return false
    } else if (input_date.getMonth() + 1 < date.getMonth() + 1) {
        alert("tháng không hợp lệ")       
        return false
    } else if (input_date.getMonth() + 1 === date.getMonth() + 1) {
        if(input_date.getDate() < date.getDate()){
             alert("ngày không hợp lệ")
        return false
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
</script>
</html>