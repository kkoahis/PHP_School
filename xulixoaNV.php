<?php
include('ConectDatabase.php');

$myID = $_REQUEST['IDNV'];
var_dump($_REQUEST);

$rs = mysqli_query($conn, "SELECT IDNV FROM NHANVIEN");

while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
   $myID = $_REQUEST[$row['IDNV']];
   $rs_delete = mysqli_query($conn, "DELETE FROM NHANVIEN WHERE IDNV = '$myID'");
}
var_dump($rs_delete);

header('location: xoaNV.php');
