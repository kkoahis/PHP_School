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
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <title>TÌM KIẾM PHÒNG BAN</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title">Danh Sách Tìm Kiếm Phòng Ban</h2>
      <table class="table table-hover">
         <thead>
            <tr>
               <th>IDPB</th>
               <th>Tên Phòng Ban</th>
               <th>Mô Tả</th>
            </tr>
         </thead>
         <tbody>

            <?php
            if (isset($_POST['btnTimkempB']) || empty($search)) {
               exit;
            } else if ($selected  == 'searchMapb') {
               $rs = $conn->query("SELECT * FROM PHONGBAN WHERE IDPB LIKE '%$search%'");
               while ($row = $rs->fetch_assoc()) {
            ?>
                  <tr>
                     <td>
                        <?php echo $row['IDPB'] ?>
                     </td>
                     <td>
                        <?php echo $row['TenPB'] ?>
                     </td>
                     <td>
                        <?php echo $row['MoTa'] ?>
                     </td>
                  </tr>
               <?php
               }
            } else if ($selected  == 'searchTenpb') {
               $rs = $conn->query("SELECT * FROM PHONGBAN WHERE TenPB LIKE '%$search%'");
               while ($row = $rs->fetch_assoc()) {
               ?>
                  <tr>
                     <td>
                        <?php echo $row['IDPB'] ?>
                     </td>
                     <td>
                        <?php echo $row['TenPB'] ?>
                     </td>
                     <td>
                        <?php echo $row['MoTa'] ?>
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