<?php
include('ConectDatabase.php');

$id = $_GET['sid'];

// lấy thông tin của phòng ban có ID đã được chọn từ trước
$querry = "SELECT * FROM PHONGBAN WHERE ID = $id";

// vì kết quả trả về là 0 row or 1 row nên không cần dùng while
$rs = mysqli_query($conn, $querry);
$row = mysqli_fetch_assoc($rs);
?>

<!-- Hiển thị lên form  -->
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
   <title>SỬA PHÒNG BAN</title>
   <style>
      .title {
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <div class="container">
      <h2 class="title"> SỬA PHÒNG BAN</h2>
      <form action="xulisuaPB.php" method="post">
         <input type="hidden" name="sid" id="sid" value="<?php echo $row['ID'] ?>">
         <div class="form-group">
            <lable for="idpb">Mã Phòng Ban</lable>
            <input type="text" class="form-control" name="idpb" id="idpb" value="<?php echo $row['IDPB'] ?>" />
         </div>
         <div class="form-group">
            <lable for="tenpb">Tên Phòng Ban</lable>
            <input type="text" class="form-control" name="tenpb" id="tenpb" value="<?php echo $row['TenPB'] ?>" />
         </div>
         <div class="form-group">
            <lable for="mota">Mô Tả</lable>
            <input type="text" name="mota" class="form-control" id="mota" value="<?php echo $row['MoTa'] ?>" />
         </div>
         <button name="btnsuaPB" class="btn btn-primary">Cập Nhật Phòng Ban</button>
         <button type="button" class="btn btn-secondary" onclick="history.back()">BACK</button>
      </form>
      </form>
   </div>
</body>
</html>