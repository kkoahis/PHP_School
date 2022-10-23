<?php
include('ConectDatabase.php');

// lấy giá trị cần phải xóa (IDNV)
$id = $_GET['sid'];

$queery = "DELETE FROM PHONGBAN WHERE ID = $id";
// echo $queery;

if (mysqli_query($conn, $queery)) {
   // echo '<h1>Xóa Nhân Viên Thành Công</h1>';
   header("location: XemthongtinPB.php");
} else {
   echo '<h1>Xóa Phòng Ban Không Thành Công, ' . mysqli_error($conn) . '</h1>';
}
