<?php
include('ConectDatabase.php');

$id = $_GET['sid'];


// lấy thông tin của phòng ban có ID đã được chọn từ trước
$querry = "SELECT * FROM NHANVIEN WHERE ID = $id";

// vì kết quả trả về là 0 row or 1 row nên không cần dùng while
$rs = mysqli_query($conn, $querry);
$row = mysqli_fetch_assoc($rs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <!-- Popper JS -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <title>CẬP NHẬT NHÂN VIÊN</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title"> CẬP NHẬT NHÂN VIÊN</h2>
      <form action="xulisuaNV.php" method="post">
         <div class="form-group">
            <input type="text" class="form-control" name="idC" id="idC" value="<?php echo $row['ID'] ?>" hidden />
            <lable for="idnv">Mã Nhân Viên</lable>
            <input type="text" class="form-control" name="idnv" id="idnv" value="<?php echo $row['IDNV'] ?>" readonly="readonly" />
         </div>
         <div class="form-group">
            <lable for="tennv">Tên Nhân Viên</lable>
            <input type="text" class="form-control" name="tennv" id="tennv" value="<?php echo $row['HoTen'] ?>" />
         </div>
         <div class="form-group">
            <lable for="tennv">Phòng Ban</lable>

            <select name="sellist1" class="form-control">
               <option value="" hidden> <?php echo $row['IDPB'] ?> </option>
               <?php
               $query = "SELECT IDPB FROM PHONGBAN";
               $result = $conn->query($query);
               if ($result->num_rows > 0) {
                  while ($optionData = $result->fetch_assoc()) {
                     $option = $optionData['IDPB'];
                     $idpb = $optionData['IDPB'];
               ?>
                     <option value="<?php echo $idpb; ?>"><?php echo $option; ?>
                  <?php
                  }
               }
                  ?>
            </select>
         </div>
         <div class="form-group">
            <lable for="diachi">Địa Chỉ Hiện Tại</lable>
            <input type="text" class="form-control" name="diachi" id="diachi" value="<?php echo $row['DiaChi'] ?>" />
         </div>
         <div class="form-group">
            <input type="text" class="form-control" name="idpbOLD" id="idpbOLD" value="<?php echo $row['IDPB'] ?>" hidden/>
         </div>
         <button name="btnSuaNV" class="btn btn-success">Cập Nhật Nhân Viên</button>
         <button type="button" class="btn btn-secondary" onclick="history.back()">BACK</button>
      </form>
   </div>
</body>

</html>