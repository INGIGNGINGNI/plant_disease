<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
      session_start();
      require_once("../backend/config_sqli.php");

      $targetDir = "../uploads/";
      if (isset($_POST['submit'])) {
                  $id = $_POST['id'];
                  if (!empty($_FILES['file']['name'])) {
                        $fileName = basename($_FILES['file']['name']);
                        $targetFilePath = $targetDir . $fileName;
                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
      
                        $allowType = array('jpg', 'jpeg', 'png');
                        if (in_array($fileType, $allowType)) {
                              if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                                    $insert = $conn -> query("INSERT INTO images(imgname, plant_id) VALUE ('".$fileName."', $id)");
                                    if ($insert) {
                                         $_SESSION['completed'] = "อัปโหลดไฟล์ <b>" . $fileName . "</b> เรียบร้อยแล้ว";
                                         echo "<script>
                                         $(document).ready(function () {
                                             Swal.fire ({
                                                 icon: 'success',
                                                 title: 'สำเร็จ',
                                                 text: 'อัปโหลดรูปภาพเรียบร้อยแล้ว',
                                                 timer: 2000,
                                                 showConfirmButton: true
                                             });
                                         });
                                     </script>";
                                     header("refresh:2; url=image.php?id=$id");
                                    } else {
                                         $_SESSION['failed'] = "อัปโหลดไม่สำเร็จ โปรดลองใหม่อีกครั้ง";
                                         echo "<script>
                                         $(document).ready(function () {
                                             Swal.fire ({
                                                 icon: error',
                                                 title: 'เกิดข้อผิดพลาด',
                                                 text: 'อัปโหลดรูปภาพไม่สำเร็จ',
                                                 timer: 2000,
                                                 showConfirmButton: true
                                             });
                                         });
                                     </script>";
                                     header("refresh:2; url=image.php?id=$id");
                                    }
                              } else {
                                   $_SESSION['failed'] = "ไม่สามารถอัปโหลดไฟล์นี้ได้ โปรดลองใหม่อีกครั้ง";
                                   echo "<script>
                                   $(document).ready(function () {
                                       Swal.fire ({
                                           icon: error',
                                           title: 'เกิดข้อผิดพลาด',
                                           text: 'ไม่สามารถอัปโหลดไฟล์นี้ได้',
                                           timer: 2000,
                                           showConfirmButton: true
                                       });
                                   });
                               </script>";
                               header("refresh:2; url=image.php?id=$id");
                              }
                        } else {
                             $_SESSION['failed'] = "สามารถอัปโหลดได้เฉพาะไฟล์ JPG, JPEG และ PNG โปรดลองใหม่อีกครั้ง";
                             echo "<script>
                             $(document).ready(function () {
                                 Swal.fire ({
                                     icon: error',
                                     title: 'เกิดข้อผิดพลาด',
                                     text: 'ไฟล์ที่อัปโหลดไม่ถูกต้อง',
                                     timer: 2000,
                                     showConfirmButton: true
                                 });
                             });
                         </script>";
                         header("refresh:2; url=image.php?id=$id");
                        }
                  }
      } else {
           $_SESSION['failed'] = "โปรดเลือกไฟล์เพื่ออัปโหลด";
            header("location: image.php?id=$id");
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">
        
    <style>
        body {
                  font-family: 'Bai Jamjuree', sans-serif;
                  color: #444444;
            }
    </style>
</head>
<body>
    
</body>
</html>