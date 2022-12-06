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
            <div class="form_dm">
                <form action="./save/save_adddm.php" method="GET" enctype="multipart/form-data">             
                    <div class="row">
                        <p>Thêm danh mục</p>
                        <div class="add_dm">
                             <input class="input" type="text" name="name" placeholder="tên loại" required="" minlength="3">
                            <button class="add" type="submit">Add Danh Mục</button>
                        </div>
                    </div>
                    
                </form>
                <?php
                     include "./model/connect.php";
                     $sql = "select * from danhmuc";
                     $danhmuc= getAll($sql);
                ?>
                <table>
                    <tbody>
                        <?php foreach ($danhmuc as $key => $value):?>
                        <tr>
                           
                            <td>
                                <p><?php echo $value['name']?></p>
                            </td>
                            <td>
                                <a onclick="return(a())" href="./danhmuc/delete.php?id=<?php echo $value['id']?>"><button>Delete</button></a>
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
    function a(){
      var  a =  confirm("Bạn có muốn xóa danh mục không?")
        if(!a==true){
            return false      
        }
       
    }
</script>
</html>