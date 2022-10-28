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
   <title>Thong Tin Phong Ban</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title">Thông Tin Phòng Ban</h2>
      <table class="table table-hover">
         <thead>
            <tr>
               <th>IDPB</th>
               <th>Tên Phòng Ban</th>
               <th>Mô Tả</th>
               <th>Thông Tin NVPB</th>
               <!-- <th>Thao Tác</th> -->
            </tr>
         </thead>
         <tbody>
            <?php
            $rs = $conn->query("SELECT * FROM PHONGBAN");
            while ($row = $rs->fetch_assoc()) :
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
                  <td>
                     <a href="XemthongtinNVPB.php?sid=<?php echo $row['IDPB'] ?>" class="btn btn-outline-info btn-block">Chi Tiết</a>
                  </td>
                  <!-- <td>
                     <a class="btn btn-outline-primary" href="suaPB.php?sid= <?php echo $row['ID'] ?>">Chỉnh Sửa</a>
                     <a onclick="return confirm('Bạn có chắc chắn muốn xóa phòng ban này không?');" class="btn btn-outline-danger" href="xulixoaPB.php?sid=<?php echo $row['ID'] ?>">Xóa PB</a>
                  </td> -->
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