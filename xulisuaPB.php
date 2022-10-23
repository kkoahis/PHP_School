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

   // kiểm tra input empty
   if (empty($_POST['idpb'])) {
      echo 'Xin Vui Lòng Nhập Mã PB';
      exit;
      // } else if (empty($_POST['tenpb'])) {
      //    echo 'Xin Vui Lòng Nhập Tên PB';
      //    exit;
      // } else if (empty($_POST['mota'])) {
      //    echo 'Xin Vui Lòng Nhập Mô Tả PB';
      //    exit;
   } 
   else if($maPB == $maPB){
   }
   else if (mysqli_num_rows($duplicate) > 0) {
      echo 'Mã Phòng Ban "' . $maPB . '" đã tồn tại, vui lòng nhập lại Mã Phòng Ban';
   }
}

// echo $id;
// echo $maPB;
// echo $tenPB;
// echo $mota;

$queery = "UPDATE PHONGBAN SET IDPB = '$maPB', TenPB = '$tenPB', MoTa = '$mota' WHERE ID = $id";

if (mysqli_query($conn, $queery)) {
   // echo 'Cập nhật thông tin PB thành công';
   header("location: XemthongtinPB.php");
} else {
   echo '<br><br>Cập nhật thông tin PB không thành công, ' . mysqli_error($conn);
}
