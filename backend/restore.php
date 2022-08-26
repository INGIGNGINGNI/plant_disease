<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
      session_start();
      require_once("../backend/config.php");

      if (isset($_GET['delete'])) {
            $delete_id = $_GET['delete'];
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

      if (!isset($_SESSION['username'])) {
            $_SESSION['msg'] = "กรุณาเข้าสู่ระบบก่อนเข้าใช้งาน";
            header('location: loginform.php');
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
            // header('location: ../loginform.php');
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>คืนค่าข้อมูล - Plant Disease Diagnosis</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="assets/css/style.css" rel="stylesheet">

      <!-- Favicons -->
      <link href="../assets/img/favicon_1.png" rel="icon">
      <link href="assets/img/apple-touch-icon_1.png" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">

      <link rel="stylesheet" href="../assets/css/custom.css">
      
      <style>
            body {
                  width: 100%;
                  background-image: url("../assets/img/admin-bg2.png");
                  background-size: cover;
            }
      </style>
</head>

<body>
      <div class="container">
            <header
                  class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                  <a href="index.php"><img src="../assets/img/web-logo.png" class="bi me-2" width="350px"></a>

                  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                  </ul>

                  <div class="row-md-3 text-end">
                        <b><a href="#" class="align-items-center col-mb-2 mb-md-0 text-dark text-decoration-none">
                                    เว็บแอปพลิเคชันเพื่อการวินิจฉัยโรคในไม้ประดับ
                              </a></b>
                        &nbsp;
                        <button type="button" class="btn btn-outline-primary me-6" data-bs-toggle="modal"
                              data-bs-target="#logoutModal">ออกจากระบบ</button>
                  </div>
            </header>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h5 class="modal-title" id="logoutModalLabel">แจ้งเตือน</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <h5>คุณต้องการออกจากระบบหรือไม่</h5>
                        </div>
                        <div class="modal-footer">
                              <a href="index.php?logout='1' " class="btn btn-success">ยืนยัน</a>
                              <button type="button" class="btn btn-light" data-bs-dismiss="modal">ปิด</button>
                        </div>
                  </div>
            </div>
      </div>

      <div class="container mt-4 indexframe">
            <div class="container text-center ">
                  <h4 class="titleheader">ข้อมูลโรคในไม้ประดับที่นำออก</h4>
            </div>
            <div class="col-md-3 text-start">
                  <a href="index.php" class="btn btn-outline-primary">เพิ่มข้อมูล</a>
                  <a href="restore.php" class="btn btn-primary">คืนค่าข้อมูล</a>
            </div>
            <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                  <?php 
                                    echo $_SESSION['success']; 
                                    unset ($_SESSION['success']);
                              ?>
            </div>
            <?php } ?>

            <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger">
                  <?php 
                                    echo $_SESSION['error']; 
                                    unset ($_SESSION['error']);
                              ?>
            </div>
            <?php } ?>


            <!--show plant data-->
            <table class="table table-striped table-hover  mt-4">
                  <thead>
                        <tr>
                              <th scope="col">ชื่อโรค</th>
                              <th scope="col">สาเหตุของโรค</th>
                              <!-- <th scope="col">อาการของโรค</th>
                              <th scope="col">วิธีการรักษา</th>
                              <th scope="col">ข้อควรระวัง</th> -->
                              <th scope="col">ไม้ประดับที่พบ</th>
                              <th scope="col">รูปภาพ</th>
                              <th scope="col"></th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php 
                              $stmt = $conn -> query("SELECT * FROM plants WHERE status='0' ");
                              $stmt -> execute();
                              $plants = $stmt -> fetchAll();
          
                              if (!$plants) {
                                  echo "<p><td colspan='6' class='text-center'>ไม่มีข้อมูลที่สามารถคืนค่าได้</td></p>";
                              } else {
                              foreach($plants as $plant)  {  
                        ?>
                        <tr>
                              <td width="250px"><?php echo $plant['name']; ?> (<?php echo $plant['enname']; ?>)</td>
                              <td><?php echo $plant['cause']; ?></td>
                              <!-- <td><?php echo $plant['symptom']; ?></td>
                              <td><?php echo $plant['remedy']; ?></td>
                              <td><?php echo $plant['caution']; ?></td> -->
                              <td width="400px"><?php echo $plant['type']; ?></td>
                              <td width="250px"><img class="rounded" width="30%"
                                          src="../uploads/<?php echo $plant['img']; ?>" alt=""></td>
                              <td width="200px">
                                    <button type="button" class="btn btn-warning btn-sm me-6" data-bs-toggle="modal"
                                          data-bs-target="#restoreModal" >คืนค่าข้อมูล</button>
                                          <a data-id="<?php echo $plant['id']; ?>" href="?delete=<?php echo $plant['id']; ?>"
                                          class="btn btn-danger btn-sm delete-btn">ลบ</a>
                              </td>
                        </tr>
                  </tbody>
                  
                        <div class="modal fade" id="restoreModal" tabindex="-1" aria-labelledby="restoreModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog">
                                    <div class="modal-content">
                                          <div class="modal-header">
                                                <h5 class="modal-title" id="restoreModalLabel">แจ้งเตือน</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                      aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                                <h5>คุณต้องการคืนค่าข้อมูลนี้ใช่หรือไม่</h5>
                                          </div>
                                          <div class="modal-footer">
                                                <a href="?restore=<?php echo $plant['id']; ?> "
                                                      class="btn btn-success">ยืนยัน</a>
                                                <button type="button" class="btn btn-light"
                                                      data-bs-dismiss="modal">ปิด</button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  <?php }  } ?>
            </table>

      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

      <script>
      let imgInput = document.getElementById('imgInput');
      let previewImg = document.getElementById('previewImg');

      imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                  previewImg.src = URL.createObjectURL(file);
            }
      }

      $('.delete-btn').click(function(e) {
            var plantId = $(this).data('id');
            e.preventDefault();
            deleteConfirm(plantId);
      })

      function deleteConfirm(plantId) {
            Swal.fire({
                  title: 'ลบรายการนี้หรือไม่',
                  text: 'หากลบแล้วจะไม่สามารถกู้คืนได้อีก !!!',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#bebebe',
                  confirmButtonText: "ตกลง",
                  cancelButtonText: "ยกเลิก",
                  preConfirm: function() {
                        return new Promise(function(resolve) {
                              $.ajax({
                                          url: 'index.php',
                                          type: 'GET',
                                          data: 'delete=' + plantId
                                    })
                                    .done(function() {
                                          Swal.fire({
                                                icon: 'success',
                                                title: 'สำเร็จ',
                                                text: 'ลบข้อมูลสำเร็จแล้ว',
                                                timer: '2000'
                                          }).then(() => {
                                                document.location.href =
                                                      'index.php';
                                          })
                                    })
                                    .fail(function() {
                                          Swal.fire('เกิดข้อผิดพลาด ',
                                                'โปรดลองใหม่อีกครั้ง', 'error'
                                          );
                                          window.location.reload();
                                    })
                        })
                  }
            })
      }
      </script>

      <!-- Vendor JS Files -->
      <script src="assets/js/main.js"></script>

</body>

</html>