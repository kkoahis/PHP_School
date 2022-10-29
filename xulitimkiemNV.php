<?php
include('ConectDatabase.php');

$search = $_POST['search'];
$selected = $_POST['optionSearch'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Danh Sach Tim Kiem</title>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <!-- Popper JS -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js">

   </script>
   <title>TÌM KIẾN NHÂN VIÊN</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title">Danh Sách Tìm Kiếm Nhân Viên</h2>
      <table class="table table-hover">
         <thead>
            <tr>
               <th>IDNV</th>
               <th>Tên Nhân Viên</th>
               <th>IDPB</th>
               <th>Địa Chỉ</th>
            </tr>
         </thead>
         <tbody>

            <?php
            if (isset($_POST['btnTimkemNV']) || empty($search)) {
               exit;
            } else if ($selected  == 'searchManv') {
               $rs = $conn->query("SELECT * FROM NHANVIEN WHERE IDNV = '$search'");
               while ($row = $rs->fetch_assoc()) {
            ?>
                  <tr>
                     <td>
                        <?php echo $row['IDNV'] ?>
                     </td>
                     <td>
                        <?php echo $row['HoTen'] ?>
                     </td>
                     <td>
                        <?php echo $row['IDPB'] ?>
                     </td>
                     <td>
                        <?php echo $row['DiaChi'] ?>
                     </td>
                  </tr>
               <?php
               }
            } else if ($selected  == 'searchTennv') {
               $rs = $conn->query("SELECT * FROM NHANVIEN WHERE HoTen LIKE '%$search%'");
               while ($row = $rs->fetch_assoc()) {
               ?>
                  <tr>
                     <td>
                        <?php echo $row['IDNV'] ?>
                     </td>
                     <td>
                        <?php echo $row['HoTen'] ?>
                     </td>
                     <td>
                        <?php echo $row['IDPB'] ?>
                     </td>
                     <td>
                        <?php echo $row['DiaChi'] ?>
                     </td>
                  </tr>
            <?php
               }
            }

            else if ($selected  == 'searchDiachinv') {
               $rs = $conn->query("SELECT * FROM NHANVIEN WHERE DiaChi LIKE '%$search%'");
               while ($row = $rs->fetch_assoc()) {
               ?>
                  <tr>
                     <td>
                        <?php echo $row['IDNV'] ?>
                     </td>
                     <td>
                        <?php echo $row['HoTen'] ?>
                     </td>
                     <td>
                        <?php echo $row['IDPB'] ?>
                     </td>
                     <td>
                        <?php echo $row['DiaChi'] ?>
                     </td>
                  </tr>
            <?php
               }
            }
            ?>
            
            <?php
            mysqli_free_result($rs);
            mysqli_close($conn);
            ?>
         </tbody>
      </table>
      <button type="button" class="btn btn-secondary" onclick="history.back()">BACK</button>
   </div>
</body>

</html>