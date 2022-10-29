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
   <title>Thong Tin Nhan Vien</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <form action="xulixoaNV.php" method="post">
      <div class="container">
         <h2 class="title">Xóa Nhân Viên</h2>
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
                  $id = $row['ID'];
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
                        <div class="form-check">
                           <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" value="<?= $id ?>" name="delete[]">Chọn
                           </label>
                        </div>
                     </td>
                  </tr>
               <?php
               endwhile;
               mysqli_free_result($rs);
               mysqli_close($conn);
               ?>
            </tbody>
         </table>
         <button onclick="return confirm('Bạn có chắc chắn muốn xóa nhân viên này không?');" class="btn btn-outline-danger btn-block" name="but_delete">Xóa Nhân Viên</button>
      </div>
   </form>

</body>

</html>