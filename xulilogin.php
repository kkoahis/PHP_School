<?php
include('ConectDatabase.php');

$tk = $_POST["username"];
$mk = md5($_POST["password"]);

if ($tk == '' || $mk == '') {
   header("location: form11.php");
} else {
   $rows = mysqli_query($conn, "
      select * from ADMIN where Username = '$tk' and Password = '$mk'
   ");

   if (mysqli_num_rows($rows) == 1) {
      header("location: indexs_admin.php");
   }
}
?>