<?php
include('ConectDatabase.php');

if (isset($_POST['but_delete'])) {

   if (isset($_POST['delete'])) {
      foreach ($_POST['delete'] as $deleteid) {
         $deleteUser = "DELETE from PHONGBAN WHERE ID =" . $deleteid;
         mysqli_query($conn, $deleteUser);
         header('location: xoaPB.php');
      }
   }
   else{
      header('location: xoaPB.php');
   }
}
