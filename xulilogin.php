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

   if (mysqli_num_rows($rows) == 0) {
      header("location: form11.php");
   } else {
?>
      <script type="text/javascript">
         // window.open("../TruyXuatDuLieu/indexs_admin.php");
         window.open("http://localhost:8080/truyXuatDuLieu/indexs_admin.php");
      </script>
<?php
   }
}
?>