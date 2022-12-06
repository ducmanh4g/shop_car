<?php 
    include "./model/connect.php";
     $sqlxe = "select * from xe";
     $xe = getAll($sqlxe);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_xe.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#button").click(function() {
        $.get("./xe/add.php", {}, function(data) {
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



        <div class="table">
            <button id="button">Thêm mới</button>
            <div id="add">
                
            </div>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Tên xe</th>
                    <th>Ảnh xe</th>
                    
                    <th>Thông tin xe</th>
                    <th>Danh mục</th>
                    <th></th>
                </tr>
                <?php foreach ($xe as $key => $value) :?>
                <tr>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $value['tenxe']?></td>
                    <td><img src="./uploat/<?php echo $value['img']?>" alt=""></td>
                    
                    <td><?php echo $value['thongtinxe']?></td>
                    <td><?php 
                        $iddm = $value['iddm'];
                        $sqldm = "select name from danhmuc where id = $iddm";
                        $name = getOne($sqldm);
                        echo $name[0];
                    
                    ?></td>
                    <td>
                        <div class="button">
                            <a onclick="return(a())"
                                href="./xe/delete.php?id=<?php echo $value['idxe']?>"><button style="background-color:red ; border:none ; color: white">xóa</button></a>
                                   
                            <a id=""
                                href="./xe/update.php?id=<?php echo $value['idxe']?>"><button style="background-color:green ; border:none ; color: white">sửa</button></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach?>
            </table>
            
        </div>
    </div>
</body>
<script>
function a(){
      var  a =  confirm("Bạn có muốn xóa Xe không?")
        if(!a==true){
            return false      
        }
       
    }


</script>

</html>