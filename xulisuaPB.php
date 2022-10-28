<?php
include('ConectDatabase.php');

if (isset($_POST['btnsuaPB'])) {
   // lấy dữ liệu trên form => lưu vào biến
   // nhận dữ liệu từ form
   $id = $_POST['sid']; // sid này là name của input="hidden"
   $maPB = $_POST['idpb'];
   $tenPB = $_POST['tenpb'];
   $mota = $_POST['mota'];
   $duplicate = mysqli_query($conn, "select * from PHONGBAN where IDPB ='$maPB'");

}

// echo $id;
// echo $maPB;
// echo $tenPB;
// echo $mota;

$queery = "UPDATE PHONGBAN SET TenPB = '$tenPB', MoTa = '$mota' WHERE ID = $id";

if (mysqli_query($conn, $queery)) {
   // echo 'Cập nhật thông tin PB thành công';
   header("location: suaPB.php");
} else {
   echo '<br><br>Cập nhật thông tin PB không thành công, ' . mysqli_error($conn);
}
