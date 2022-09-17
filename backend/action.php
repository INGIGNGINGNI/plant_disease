<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
      session_start();
      require_once("config.php");

      if (!isset($_SESSION['username'])) {
            $_SESSION['msg'] = "กรุณาเข้าสู่ระบบก่อนเข้าใช้งาน";
            header('location: ../loginform.php');
      }

      if (isset($_GET['delete'])) {
            $delete_id = $_GET['delete'];
            $delete_stmt = $conn -> query("UPDATE  plants set status='0' WHERE id = $delete_id");
            $delete_stmt -> execute();

            if ($delete_stmt) {
                  $_SESSION['success'] = "ลบข้อมูลเรียบร้อยแล้ว";
                  header("refresh:2; url=index.php");
            }
      }

      if (isset($_GET['lastDelete'])) {
            $delete_id = $_GET['lastDelete'];
            $delete_stmt = $conn -> query("DELETE  FROM plants WHERE id = $delete_id");
            $delete_stmt -> execute();

            if ($delete_stmt) {
                  $_SESSION['success'] = "ลบข้อมูลเรียบร้อยแล้ว";
            }
      }

      if (isset($_GET['restore'])) {
            $restore_id = $_GET['restore'];
            $restore_stmt = $conn -> query("UPDATE  plants set status='1' WHERE id = $restore_id");
            $restore_stmt -> execute();

            if ($restore_stmt) {
                  $_SESSION['success'] = "คืนค่าข้อมูลเรียบร้อยแล้ว";
                  echo "<script>
                        $(document).ready(function () {
                        Swal.fire ({
                              icon: 'success',
                              title: 'สำเร็จ',
                              text: 'คืนค่าข้อมูลเรียบร้อยแล้ว',
                              timer: 2000,
                              showConfirmButton: true
                        });
                        });
                  </script>";
                  header("refresh:2; url=restore.php");
            }
      }

      if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['username']);
            echo "<script>
                  $(document).ready(function () {
                  Swal.fire ({
                        icon: 'success',
                        title: 'ออกจากระบบแล้ว',
                        text: 'กำลังกลับไปยังหน้าล็อคอิน',
                        timer: 2000,
                        showConfirmButton: true
                  });
                  });
            </script>";
            header("refresh:2; url=../loginform.php");
      }
?>