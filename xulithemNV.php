<?php
include('ConectDatabase.php');

// kiểm tra khi người dùng submit form
if (isset($_POST['btnThemNV'])) {
   // lấy dữ liệu trên form => lưu vào biến
   $maNV = $_POST['idnv'];
   $tenNV = $_POST['tennv'];
   $diachiNV = $_POST['diachi'];
   $idPB = $_POST['sellist1'];

   $duplicate = mysqli_query($conn, "select * from NHANVIEN where IDNV ='$maNV'");
   // kiểm tra input empty
   if (empty($_POST['idnv'])) {
      echo 'Xin Vui Lòng Nhập Mã PB';
      exit;
   } else if (mysqli_num_rows($duplicate) > 0) {
      echo 'Mã Nhân Viên "' . $maNV . '" đã tồn tại';
   }
}

$querry = "INSERT INTO NHANVIEN (IDNV, HoTen, IDPB, DiaChi) VALUES ('$maNV', '$tenNV', '$idPB' ,'$diachiNV')";
// echo $querry;

if (mysqli_query($conn, $querry)) {
   // nếu thành công thì chuyển đến file indexs.php
   // echo "<h1>them thanh cong</h1>";
   header('location: XemthongtinNV.php');
} else {
   $result = "<br><br>Lỗi thêm mới Phòng Ban (Chưa chọn phòng ban, ...)" . mysqli_error($conn);
   echo $result.'<br><br>';
}
?>
<button type="button" class="btn btn-secondary" onclick="history.back()">BACK</button>

