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
                                         $_SESSION['success'] = "อัพโหลดไฟล์ <b>" . $fileName . "</b> เรียบร้อยแล้ว";
                                         echo "<script>
                                         $(document).ready(function () {
                                             Swal.fire ({
                                                 icon: 'success',
                                                 title: 'สำเร็จ',
                                                 text: 'อัพโหลดรูปภาพเรียบร้อยแล้ว',
                                                 timer: 2000,
                                                 showConfirmButton: true
                                             });
                                         });
                                     </script>";
                                     header("refresh:2; url=image.php?id=$id");
                                    } else {
                                         $_SESSION['error'] = "อัพโหลดไม่สำเร็จ โปรดลองใหม่อีกครั้ง";
                                         echo "<script>
                                         $(document).ready(function () {
                                             Swal.fire ({
                                                 icon: error',
                                                 title: 'เกิดข้อผิดพลาด',
                                                 text: 'อัพโหลดรูปภาพไม่สำเร็จ',
                                                 timer: 2000,
                                                 showConfirmButton: true
                                             });
                                         });
                                     </script>";
                                     header("refresh:2; url=image.php?id=$id");
                                    }
                              } else {
                                   $_SESSION['error'] = "ไม่สามารถอัพโหลดไฟล์นี้ได้ โปรดลองใหม่อีกครั้ง";
                                   echo "<script>
                                   $(document).ready(function () {
                                       Swal.fire ({
                                           icon: error',
                                           title: 'เกิดข้อผิดพลาด',
                                           text: 'ไม่สามารถอัพโหลดไฟล์นี้ได้',
                                           timer: 2000,
                                           showConfirmButton: true
                                       });
                                   });
                               </script>";
                               header("refresh:2; url=image.php?id=$id");
                              }
                        } else {
                             $_SESSION['error'] = "สามารถอัพโหลดได้เฉพาะไฟล์ JPG, JPEG และ PNG โปรดลองใหม่อีกครั้ง";
                             echo "<script>
                             $(document).ready(function () {
                                 Swal.fire ({
                                     icon: error',
                                     title: 'เกิดข้อผิดพลาด',
                                     text: 'ไฟล์ที่อัพโหลดไม่ถูกต้อง',
                                     timer: 2000,
                                     showConfirmButton: true
                                 });
                             });
                         </script>";
                         header("refresh:2; url=image.php?id=$id");
                        }
                  }
      } else {
           $_SESSION['error'] = "โปรดเลือกไฟล์เพื่ออัพโหลด";
            header("location: image.php?id=$id");
      }
?>