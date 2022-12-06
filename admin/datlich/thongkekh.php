<div class>
    <h3>Thống kê khách đã đặt</h3>
    <div class="">
        <?php
                     include "../model/connect.php";
                     $sql = "select * from datlichxem";
                     $thongke= getAll($sql);
     
                
                ?>
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
                <th>
                    Trạng thái
                </th>
            </thead>
            <tbody>
                <?php foreach ($thongke as $key => $value):?>
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
                    <?php 
                        if($value['trangthai']==0){
                            echo "<p style=\"color: red;\">Không được xem</p>";
                            
                        }
                        else if($value['trangthai']==1){
                            echo "<p style=\"color: green;\">Được xem</p>";
                        }
                        else if($value['trangthai']==2){
                            echo "<p style=\"color:gold;\">Đã xem</p>";
                        }
                    ?>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    