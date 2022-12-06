<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
// $(document).ready(function() {
//     $("#tuchoi").click(function() {
//         var iddl = $("#iddl").val();
//         var trangthai = $("#trangthai").val();
//         $.post("./datlich/upload.php", {
//             iddl: iddl,
//             trangthai: trangthai
//         }, function(data) {
           
//         });
//     });
// });
</script>
<?php
        include "../model/connect.php";
        $sql = "select * from datlichxem where trangthai=0";
        $chua_pheduyet= getAll($sql);

        
        $sql_pheduyet = "select * from datlichxem where trangthai=1";
        $da_pheduyet= getAll($sql_pheduyet);        

?>
<div class="">
    <h3>Danh sách đã phê duyệt</h3>

    <table>
        <thead>
            <th>
                STT
            </th>
            <th>
                Họ tên
            </th>
            <th>
                SDT
            </th>
            <th>
                Gmail
            </th>
            <th>
                Ngày Xem Xe
            </th>
            <th>
                Loại Xe
            </th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($da_pheduyet as $key => $value):?>
            <tr>
                <td>
                    <p><?php echo $key+1?></p>
                </td>
                <td>
                    <p><?php 
                        $idtk = $value['idtk'];
                        $sqlhoten = "select hoten,sdt,gmail from taikhoan where idtk = $idtk";
                        $taikhoan = getOne($sqlhoten);
                        echo $taikhoan[0]
                    ?></p>
                </td>
                <td>
                    <?php  echo $taikhoan[1]?>
                </td>
                <td>
                    <?php  echo $taikhoan[2]?>

                </td>
                <td>
                    <p><?php echo $value['ngaydatlich']?></p>
                </td>
                <td>
                    <?php 
                        $idxe = $value['idxe'];
                        $sqlxe = "select tenxe from xe where idxe = $idxe";
                        $xe = getOne($sqlxe);
                        echo $xe[0]
                    ?>
                </td>

                <td>
                    <form action="./datlich/upload.php" method="POST">
                        <input name="iddl" type="hidden" value="<?php echo $value['iddl']?>">
                        <input name="trangthai" type="hidden" value="2">
                        <button style="background-color: gold;border-radius: 7px; border: none; cursor: pointer;" name="pduyet" type="submit">xóa</button>
                    </form>

                    <form action="./datlich/upload.php" method="POST">
                        <input id="iddl" name="iddl" type="hidden" value="<?php echo $value['iddl']?>">
                        <input id="trangthai" name="trangthai" type="hidden" value="0">
                        <button style="background-color: red; border-radius: 7px; border: none; cursor: pointer;" id="tuchoi" name="pduyet" type="submit">Từ chối</button>
                    </form>

                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>