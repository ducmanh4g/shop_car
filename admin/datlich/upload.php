<?php    
 include "../model/connect.php";

   $trangthai = $_POST['trangthai'];
   $iddl = $_POST['iddl'];
   $query = "update datlichxem set trangthai=$trangthai WHERE iddl=$iddl";
   connect($query);
   header("Location:".$_SERVER['HTTP_REFERER']);

?>
