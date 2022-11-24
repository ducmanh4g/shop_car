<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/voiture-html/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 07:27:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
    <meta name="description" content="Voiture - Automotive & Car Dealer HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Title -->
    <title>Mua bán xe ô tô</title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <link rel="stylesheet" href="./css/login.css">
    
</head>
<?php session_start(); 
include "./admin/model/connect.php";     

$Sqltintuc = "select * from tintuc";
$tintuc = getAll($Sqltintuc);

$sqlquyen = "select * from quyen";     
$quyen = getAll($sqlquyen);  

$sqltk = "select * from taikhoan";     
$ngdung = getAll($sqltk);  

$sqldm = "select * from danhmuc";     
$dm = getAll($sqldm);  

$sqlidxe = "select idxe from datlichxem";
$idxe = getAll($sqlidxe);
foreach ($idxe as $key => $value) {  
    $arr[$key] = $value['idxe'];
}
if($idxe){
    $arridxe = implode(' and idxe <> ', $arr);
}
else
    $arridxe = 0;

?>
<script>
function close() {
    var element = document.getElementById('vvv')
    var cl = confirm("bạn có muốn hay không")
    console.log(element)
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
</script>

<body>
    <div class="wrapper ovh">
        <div class="preloader"></div>
        <!-- Sidebar Panel Start -->
        <div class="listing_sidebar">
            <div class="siderbar_left_home pt20">
                <a class="sidebar_switch sidebar_close_btn float-end" href="#">X</a>
                <div class="footer_contact_widget mt100">
                    <h3 class="title">Thông tin liên hệ</h3>
                    <p>Gmail: Vanmanh05042002@gmail.com</p>
                </div>
                <div class="footer_contact_widget">
                    <h5 class="title">SĐT</h5>
                    <div class="footer_phone">0397550504</div>
                    <p>hello@voiture.com</p>
                </div>
                <div class="footer_about_widget">
                    <h5 class="title">Địa chỉ</h5>
                    <p>Hà Nội</p>
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
                                <li class="list-inline-item"><a href="#"><span class="flaticon-map"></span>Hà Nội</a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-clock"></span>Mon - Fri
                                        8:00 - 18:00</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-5">
                        <div class="header_top_social_widgets text-center text-md-end">
                            <ul class="m0">
                                <li class="list-inline-item"><a href="#"><img style="width:30px ;"
                                            src="https://kiemsoat.idmart.com.vn/wp-content/uploads/2019/06/icon-ng%C6%B0%E1%BB%9Di-d%C3%B9ng.png"
                                            alt=""></a></li>
                                <li class="list-inline-item"><a href="#"><span>Xin chào
                                            <?php echo $a =isset($_SESSION['username'])?$_SESSION['username']:"";?></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span></span></a></li>
                                <li class="list-inline-item" style="cursor: pointer;" onclick="dangnhap()">Đăng nhập
                                </li>
                                <li class="list-inline-item" style="cursor: pointer;" onclick="dk()">Đăng ký</li>
                                <li class="list-inline-item" style="cursor: pointer;" onclick=""><a
                                        href="./view/save/save_lgout.php">Đăng xuất</a></li>
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
                    <a href="index.html" class="navbar_brand float-start dn-md">
                        <img style="width: 100px;" class="logo1 img-fluid"
                            src="https://xeoto.cc/wp-content/uploads/2021/09/xeoto-logo.png" alt="header-logo2.png">
                        <img style="width: 100px;" class="logo2 img-fluid"
                            src="https://xeoto.cc/wp-content/uploads/2021/09/xeoto-logo.png" alt="header-logo2.svg">
                    </a>
                    <!-- Responsive Menu Structure-->
                    <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa text-end"
                        data-menu-style="horizontal">
                        <li> <a href="#"><span class="title">Home</span></a>
                            <!-- Level Two-->

                        </li>

                        <li> <a href="#"><span class="title">Liên hệ</span></a>

                        </li>
                        <li> <a href="#"><span class="title">Giới thiệu</span></a>

                        </li>
                        <li> <a href="#"><span class="title">Hỏi đáp</span></a>

                        </li>
                        <li> <a href="#"><span class="title">Pages</span></a>

                        </li>
                        <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Modal -->
        <div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container p60">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content container p0" id="myTabContent">
                            <div class="row mt30 tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="col-lg-12">
                                    <div class="login_form">
                                        <p>New to Cars.com? <a href="page-register.html">Sign up.</a> Are you a dealer?
                                        </p>
                                        <form action="#">
                                            <div class="mb-2 mr-sm-2">
                                                <label class="form-label">Username or email address *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group mb5">
                                                <label class="form-label">Password *</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                                <label class="custom-control-label" for="exampleCheck3">Remember
                                                    me</label>
                                                <a class="btn-fpswd float-end" href="#">Lost your password?</a>
                                            </div>
                                            <button type="submit" class="btn btn-log btn-thm mt5">Sign in</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt30 tab-pane fade" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <div class="col-lg-12">
                                    <div class="sign_up_form">
                                        <p>Already have a profile? <a href="page-login.html">Sign in.</a></p>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb20">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb20">
                                                        <label class="form-label">Confirm Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-signup btn-thm mb0">Sign Up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="mobile_menu_bar">
                        <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
                    </div>
                    <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" src="images/header-logo2.svg"
                            alt="images/header-logo2.png"></div>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><span>Home</span>

                    <li><span>Liên hệ</span>

                    </li>
                    <li><span>Hỏi đáp</span>

                    </li>
                    <li><span>Giới thiệu</span>

                    </li>

                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">
                        <span class="border-none">
                            <span class="mmenu-contact-info">
                                <span class="phone-num"><i class="flaticon-map"></i> <a href="#">Nam từ liên, Hà
                                        Nội</a></span>
                                <span class="phone-num"><i class="flaticon-phone-call"></i> <a
                                        href="#">0397550504</a></span>
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

        <!-- Home Design -->
        <section class="home-one mt0 mt70-992 p0">
            <div class="container-fluid p0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-banner-wrapper home3_style">
                            <div class="banner-style-one no-dots owl-theme owl-carousel">

                                <?php foreach($tintuc as $key => $value):?>
                                <div class="slide slide-one"
                                    style="background-image: url(./admin/uploat/<?php echo $value['img']?>);height: 900px;background-size:100% 90%;">
                                    <div class="container">
                                        <div class="row home-content pl20">
                                            <div class="col-sm-9 col-md-6 col-lg-5 col-xl-3">
                                                <div class="sliding-box-object">
                                                    <div class="car-listing">
                                                        <div class="details">
                                                            <div class="wrapper">
                                                                <h6 class="title"><a
                                                                        href=""><?php echo $value['tieude']?></a>
                                                                </h6>
                                                                <div class="listign_review">
                                                                    <ul class="mb0">
                                                                        <li class="list-inline-item"><a href="#"><i
                                                                                    class="fa fa-star"></i></a></li>
                                                                        <li class="list-inline-item"><a href="#"><i
                                                                                    class="fa fa-star"></i></a></li>
                                                                        <li class="list-inline-item"><a href="#"><i
                                                                                    class="fa fa-star"></i></a></li>
                                                                        <li class="list-inline-item"><a href="#"><i
                                                                                    class="fa fa-star"></i></a></li>
                                                                        <li class="list-inline-item"><a href="#"><i
                                                                                    class="fa fa-star"></i></a></li>
                                                                        <li class="list-inline-item"><a href="#">4.7</a>
                                                                        </li>
                                                                       
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <?php echo $value['noidung']?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>


                            </div>
                            <div class="carousel-btn-block banner-carousel-btn">
                                <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i></span>
                                <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                            </div><!-- /.carousel-btn-block banner-carousel-btn -->
                        </div><!-- /.main-banner-wrapper -->
                    </div>
                </div>
            </div>
        </section>


        <section class="car-for-sale bgc-f9">
            <div class="container p0">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="main-title text-center">
                            <h2 class="title">Các Loại Xe</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="home1_popular_listing home3_style">
                        <div class="listing_item_4grid_slider nav_none">
                            <?php                                                                                  
                                 if(isset($_SESSION['iddm'])){
                                     $iddm =$_SESSION['iddm'];
                                     $sql="select * from xe where iddm='$iddm' and idxe <> $arridxe ";
                                     $xe = getAll($sql);
                                     unset($_SESSION['iddm']);
                                 }
                                 else
                                 {
                                     $sql="select * from xe where idxe <> $arridxe";
                                     $xe = getAll($sql);
                                 }                 
                             ?>
                            <?php foreach($xe as $key => $value):?>
                            <div class="item">
                                <div class="car-listing">
                                    <div class="thumb">
                                        <div class="tag">FEATURED</div>
                                        <img style="height:300px ;" src="./admin/uploat/<?php echo $value['img']?>"
                                            alt="1.jpg">

                                    </div>
                                    <div class="details">
                                        <div class="wrapper">
                                            <h5 class="price"><?php echo $value['gia']?></h5>
                                            <h6 class="title"><a
                                                    href="./view/chitietxe.php?id=<?php echo $value['idxe']?>"><?php echo $value['tenxe']?></a>
                                            </h6>
                                            <div class="listign_review">
                                                <ul class="mb0">
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#">4.7</a></li>
                                                    <li class="list-inline-item">(684 reviews)</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Our Contact -->
        <section class="popular-listing pb90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="main-title text-center">
                            <h2>Bản Đồ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        <div class="contact-info mb30">
                            <div class="footer_about_widget home2 mb50">
                                <h4 class="fz16">Địa chỉ</h4>
                                <p>Nam từ liêm, Hà Nội</p>
                            </div>
                            <div class="footer_contact_widget home2">
                                <h4 class="fz16">OPENING HOURS</h4>
                                <p>Monday – Friday: 09:00AM – 09:00PM<br>Saturday: 09:00AM – 07:00PM<br>Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="our-map mb30 bdrs8 ovh">
                            <div class="h400" id=""><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558831612!2d105.74459305066439!3d21.038132792765037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1668762127079!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer -->
        <section class="footer_one home3_style pt20 pb25 bt1">
            <div class="container pt80 pt20-sm pb70 pb0-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="footer_about_widget home2">
                            <h5 class="title">Địa chỉ</h5>
                            <p>Nam từ liêm, Hà Nội</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget home2">
                            <h5 class="title">SĐT</h5>
                            <div class="footer_phone">0397550504</div>
                            <p>hello@voiture.com</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget home2">
                            <h5 class="title">OPENING HOURS</h5>
                            <p>Monday – Friday: 09:00AM – 09:00PM<br>Saturday: 09:00AM – 07:00PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget home3">
                            <h5 class="title">KEEP IN TOUCH</h5>
                            <form class="footer_mailchimp_form home3">
                                <div class="wrapper">
                                    <div class="col-auto">
                                        <input type="email" class="form-control" placeholder="Your Email...">
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
                        <div class="copyright-widget home2 mt5 text-center text-md-start mb20-sm">
                            <p>CreativeLayers © 2022. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="footer_social_widget home2 text-center text-md-end">
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
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.mmenu.all.js"></script>
    <script src="js/ace-responsive-menu.js"></script>
    <script src="js/isotop.js"></script>
    <script src="js/snackbar.min.js"></script>
    <script src="js/simplebar.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/scrollto.js"></script>
    <script src="js/jquery-scrolltofixed-min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/progressbar.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/timepicker.js"></script>
    <script src="js/wow.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap">
    </script>
    <script src="js/googlemaps1.js"></script>
    <!-- Custom script for all pages -->
    <script src="js/script.js"></script>
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
                        <form action="./view/save/save_dangky.php" id="form" onsubmit="return(checktk())" method="GET">
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
                        <form action="./view/save/save_tk.php" id="form" onsubmit="return(checklogin())" method="GET">
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
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 07:27:06 GMT -->
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