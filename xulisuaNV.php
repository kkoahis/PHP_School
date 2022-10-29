<?php
include('ConectDatabase.php');

$id = $_POST['idC'];
$tenNV = $_POST['tennv'];
$maPB = $_POST['sellist1'];
$maPBOLD = $_POST['idpbOLD'];
$diachi = $_POST['diachi'];

// echo $id . ',' . $tenNV . ',' . $maPB . ',' . $diachi.','.$maPBOLD;

if($maPB == ''){
   $queery = "UPDATE NHANVIEN SET HoTen = '$tenNV', IDPB = '$maPBOLD' , DiaChi = '$diachi' WHERE ID = '$id'";
}
else{
   $queery = "UPDATE NHANVIEN SET HoTen = '$tenNV', IDPB = '$maPB' , DiaChi = '$diachi' WHERE ID = '$id'";
}

if (mysqli_query($conn, $queery)) {
   // echo 'Cập nhật thông tin PB thành công';
   header("location: suaNV.php");
} else {
   echo '<br><br>Cập nhật thông tin PB không thành công, ' . mysqli_error($conn);
}
