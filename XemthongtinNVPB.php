<?php
include('ConectDatabase.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <title>Xem Thong Tin NVPB</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title">Thông Tin Nhân Viên</h2>
      <table class="table table-hover">
         <thead>
            <tr>
               <th>IDNV</th>
               <th>Họ Tên</th>
               <th>IDPB</th>
               <th>Địa Chỉ</th>
               <th>Thao Tác</th>
            </tr>
         </thead>
         <tab>
            <?php
            $idNV = $_REQUEST['id'];
            $rs = $conn->query("SELECT * FROM NHANVIEN WHERE IDPB = '$idNV'");
            while ($row = $rs->fetch_assoc()) :
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
                  <td>
                     <a class="btn btn-outline-primary" href="suaNV.php?sid= <?php echo $row['ID'] ?>">Chỉnh Sửa</a>
                     <a onclick="return confirm('Bạn có chắc chắn muốn xóa nhân viên này không?');" class="btn btn-outline-danger" href="xulixoaNV.php?sid=<?php echo $row['ID'] ?>">Xóa NV</a>
                  </td>
               </tr>
            <?php
            endwhile;
            mysqli_free_result($rs);
            mysqli_close($conn);
            ?>
            </tbody>
      </table>
      <button type="button" class="btn btn-secondary" onclick="history.back()">BACK</button> 
   </div>
</body>
</html>