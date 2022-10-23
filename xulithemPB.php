<?php
include('ConectDatabase.php');

// kiểm tra khi người dùng submit form
if (isset($_POST['btnThemPB'])) {
   // lấy dữ liệu trên form => lưu vào biến
   $maPB = $_POST['idpb'];
   $tenPB = $_POST['tenpb'];
   $motaPB = $_POST['mota'];
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
   } else if (mysqli_num_rows($duplicate) > 0) {
      echo 'Mã Phòng Ban "' . $maPB . '" đã tồn tại';
   }
}
// echo var_dump($maPB);
// echo var_dump($tenPB);
// echo var_dump($motaPB);

$querry = "INSERT INTO PHONGBAN (IDPB, TenPB, MoTa) VALUES ('$maPB', '$tenPB', '$motaPB')";
// echo $querry;

if (mysqli_query($conn, $querry)) {
   // nếu thành công thì chuyển đến file indexs.php
   echo "<h1>them thanh cong</h1>";
   // header('location: themPB.php');
} else {
   $result = "<br><br>Lỗi thêm mới Phòng Ban " . mysqli_error($conn);
   echo $result;
}
