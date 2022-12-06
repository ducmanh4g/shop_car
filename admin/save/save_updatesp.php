<?php 
    include "../model/connect.php";
    $a=$_GET["id"];

     $name = $_POST["name"];
     $price = $_POST["price"];
     $mota = $_POST["mt"];
     $dm = $_POST["dm"];
     
     $img = $_FILES["productImage"]["name"];
    //  $id = $_POST["productId"];

    if(!empty($img)){
         $query = "update xe set  tenxe= '$name', img = '$img', gia= $price, thongtinxe='$mota', iddm='$dm' WHERE idxe=$a";
        connect($query);
    }
    else{  
        $query = "update xe set tenxe = '$name', gia= $price, thongtinxe='$mota', iddm='$dm' WHERE idxe=$a";
        connect($query);
    };

    move_uploaded_file($_FILES["productImage"]["tmp_name"],"../uploat/".$_FILES["productImage"]["name"]);

    // if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
    // (isset($_FILES['fileupload']))) {
    //     $files = $_FILES['fileupload'];
    //     $names      = $files['name'];
    //     $types      = $files['type'];
    //     $tmp_names  = $files['tmp_name'];
        
    //     $numitems = count($names);
    //     $query = "DELETE FROM chitiet_imgxe WHERE idxe=$a";
    //     connect($query);

    //     if(!empty($files)){
    //     $query = "DELETE FROM chitiet_imgxe WHERE idxe=$a";
    //     connect($query);
    //     for ($i = 0; $i < $numitems; $i ++) {  
                                                  
    //             $sql2 = "insert into chitiet_imgxe(img,idxe) values('$names[$i]', $a)";
    //             connect($sql2);             
    //             move_uploaded_file($tmp_names[$i],"../uploat/".$names[$i]);             
    //             }


    //     var_dump($files);
    //     }
       
        
    // } 
      
    header("Location:../index.php?id=addxe");

?>