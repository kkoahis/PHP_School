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
   <title>CAP NHAT THONG TIN NHAN VIEN</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title">Cập Nhật Thông Tin Nhân Viên</h2>
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
         <tbody>
            <?php
            $rs = $conn->query("SELECT * FROM NHANVIEN");
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
                     <a  class="btn btn-outline-primary" href="form_suaNV.php?sid= <?php echo $row['ID'] ?>" >Chỉnh Sửa</a>
                  </td>
               </tr>
            <?php
            endwhile;
            mysqli_free_result($rs);
            mysqli_close($conn);
            ?>
         </tbody>
      </table>
   </div>
</body>
</html>