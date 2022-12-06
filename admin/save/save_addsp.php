
<?php 
    $dm = $_POST["dm"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $img = $_FILES["productImage"]["name"];
    $mota = $_POST["mt"];

    $conn = new PDO("mysql:host=localhost;dbname=duan1;charset=utf8","root","");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into xe(tenxe,img,thongtinxe,gia,iddm) values ('$name','$img','$mota',$price,'$dm')";
    move_uploaded_file($_FILES["productImage"]["tmp_name"],"../uploat/".$_FILES["productImage"]["name"]); 
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();


    
    if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
    (isset($_FILES['fileupload']))) {

    $files = $_FILES['fileupload'];

        $names      = $files['name'];
        $types      = $files['type'];
        $tmp_names  = $files['tmp_name'];
        
        $numitems = count($names);
        $numfiles = 0;
        for ($i = 0; $i < $numitems; $i ++) {
            //Kiểm tra file thứ $i trong mảng file, up thành công không
     
                $sql2 = "insert into chitiet_imgxe(img,idxe) values ('$names[$i]',$last_id)";
                $conn->exec($sql2);
                move_uploaded_file($tmp_names[$i], "../uploat/".$names[$i]);

        }
    }
    header("Location:".$_SERVER['HTTP_REFERER']);
   
?>
