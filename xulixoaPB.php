<?php
include('ConectDatabase.php');

$myID = $_REQUEST['IDPB'];

$rs = mysqli_query($conn, "SELECT IDPB FROM PHONGBAN");

while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
   $myID = $_REQUEST[$row['IDPB']];
   $rs_delete = mysqli_query($conn, "DELETE FROM PHONGBAN WHERE IDPB = '$myID'");
}

header('location: xoaPB.php');
