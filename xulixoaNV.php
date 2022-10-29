<?php
include('ConectDatabase.php');

if (isset($_POST['but_delete'])) {

   if (isset($_POST['delete'])) {
      foreach ($_POST['delete'] as $deleteid) {
         $deleteUser = "DELETE from NHANVIEN WHERE ID =" . $deleteid;
         mysqli_query($conn, $deleteUser);
         header('location: xoaNV.php');
      }
   }
   else{
      header('location: xoaNV.php');
   }
}
