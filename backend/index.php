<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
      session_start();
      require_once("config.php");

      if (isset($_GET['delete'])) {
            $delete_id = $_GET['delete'];
            $delete_stmt = $conn -> query("UPDATE  plants set status='0' WHERE id = $delete_id");
            $delete_stmt -> execute();

            if ($delete_stmt) {
                  $_SESSION['success'] = "ลบข้อมูลเรียบร้อยแล้ว";
                  header("refresh:2; url=index.php");
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
      <title>จัดการข้อมูล - Plant Disease Diagnosis</title>

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
            background-image: url("../assets/img/admin-background.png");
            background-size: cover;
      }
      p.test2 {
            white-space: nowrap; 
            width: 200px; 
            overflow: hidden;
            text-overflow: ellipsis;
      }
      </style>

</head>

<body>
      <div class="modal fade" id="plantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                        <div class="modal-header mb-2">
                              <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลโรคของไม้ประดับ</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                              <form action="insert.php" method="post" enctype="multipart/form-data"
                                    class="needs-validation m-0" novalidate>
                                    <div class="row">
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="name" class="col-form-label">ชื่อของโรค (ไทย) :</label>
                                                <input type="text" class="form-control" name="name" required>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="enname" class="col-form-label">ชื่อของโรค (อังกฤษ) :</label>
                                                <input type="text" class="form-control" name="enname" required>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 mb-3">
                                                <label for="cause" class="col-form-label">สาเหตุของโรค :</label>
                                                <textarea type="text" class="form-control" name="cause" required></textarea>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 mb-3">
                                                <label for="symptom" class="col-form-label">อาการของโรค :</label>
                                                <textarea type="text" class="form-control" name="symptom" required></textarea>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 mb-3">
                                                <label for="scourge" class="col-form-label">การแพร่ระบาด :</label>
                                                <textarea type="text" class="form-control" name="scourge" required></textarea>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 mb-3">
                                                <label for="remedy" class="col-form-label">วิธีการรักษา :</label>
                                                <textarea type="text" class="form-control" name="remedy" required></textarea>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="caution" class="col-form-label">ข้อควรระวัง :</label>
                                                <textarea type="text" class="form-control" name="caution" required></textarea>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="type" class="col-form-label">ไม้ประดับที่พบ :</label>
                                                <textarea type="text" class="form-control" name="type" required></textarea>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="img" class="col-form-label">รูปภาพ :</label>
                                                <input type="file" class="form-control" name="img" id="imgInput" required>
                                                <div class="invalid-feedback">
                                                      โปรดกรอกข้อมูลในฟิลด์นี้
                                                </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mt-4 pt-1 mb-3">
                                                <img id="previewImg" width="100%" alt="">
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="submit" name="submit" class="btn btn-success">บันทึก</button>
                                          <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ปิด</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
      

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
                              <h5>คุณต้องการออกจากระบบใช่หรือไม่</h5>
                        </div>
                        <div class="modal-footer">
                              <a href="index.php?logout='1' " class="btn btn-success">ยืนยัน</a>
                              <button type="button" class="btn btn-light" data-bs-dismiss="modal">ปิด</button>
                        </div>
                  </div>
            </div>
      </div>

      <div class="px-4 pt-2 my-5 text-center border-bottom">
            <h3 class="display-6 fw-bold mb-4">ข้อมูลโรคในไม้ประดับ</h3>
            <div class="col-lg-6 mx-auto">
                  <p class="lead">หน้าจอการจัดการข้อมูลและรูปภาพโรคของไม้ประดับ สำหรับผู้ดูแลระบบ เว็บแอปพลิเคชันเพื่อการวินิจฉัยโรคในไม้ประดับ</p>
                  <p class="lead mb-4">(Web application for diagnosis of ornamental plant diseases)</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5" >
                        <button type="button" class="btn btn-success btn-lg px-4 me-sm-3" data-bs-toggle="modal" 
                              data-bs-target="#plantModal">เพิ่มข้อมูล</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-toggle="collapse" data-bs-target="#showData" 
                              aria-expanded="false" aria-controls="showData">ดูข้อมูลทั้งหมด</button>
                  </div>
            </div>
            
            <!--show plant data-->
            <div class="container mb-5">
                  <div class="collapse" id="showData">
                        <div class="card card-body p-5">
                              <div class="col-md-3 text-start">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                          data-bs-target="#plantModal">เพิ่มข้อมูล</button>
                                    <a href="restore.php" class="btn btn-outline-primary">คืนค่าข้อมูล</a>
                              </div>
                              <table class="table table-hover  mt-4">
                                    <thead>
                                          <tr>
                                                <th scope="col">ชื่อโรค</th>
                                                <th scope="col">สาเหตุของโรค</th>
                                                <th scope="col">อาการของโรค</th>
                                                <th scope="col">วิธีการรักษา</th>
                                                <!-- <th scope="col">ข้อควรระวัง</th> -->
                                                <!-- <th scope="col">ไม้ประดับที่พบ</th> -->
                                                <!-- <th scope="col">รูปภาพ</th> -->
                                                <th scope="col"></th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <?php 
                                                $stmt = $conn -> query("SELECT * FROM plants WHERE status='1' ");
                                                $stmt -> execute();
                                                $plants = $stmt -> fetchAll();
                        
                                                if (!$plants) {
                                                echo "<p><td colspan='6' class='text-center'>ไม่มีข้อมูล</td></p>";
                                                } else {
                                                foreach($plants as $plant)  {  
                                          ?>
                                          <tr>
                                                <td width="270px"><?php echo $plant['name']; ?> (<?php echo $plant['enname']; ?>)</td>
                                                <td ><p class="test2"><?php echo $plant['cause']; ?></p></td>
                                                <td><p class="test2"><?php echo $plant['symptom']; ?></p></td>
                                                <td><p class="test2"><?php echo $plant['remedy']; ?></p></td>
                                                <!-- <td><?php echo $plant['caution']; ?></td>  -->
                                                <!-- <td><?php echo $plant['type']; ?></td> -->
                                                <!-- <td width="200px"><img class="rounded" width="30%"
                                                            src="../uploads/<?php echo $plant['img']; ?>" alt=""></td> -->
                                                <td width="200px">
                                                      <a href="image.php?id=<?php echo $plant['id']; ?>" class="btn btn-success btn-sm mx-1">รูปภาพ</a>
                                                      <a href="edit.php?id=<?php echo $plant['id']; ?>" class="btn btn-warning btn-sm mx-1">แก้ไข</a>
                                                      <a data-id="<?php echo $plant['id']; ?>" href="?delete=<?php echo $plant['id']; ?>"
                                                            class="btn btn-danger btn-sm mx-1 delete-btn">ลบ</a>
                                                </td>
                                          </tr>
                                    </tbody>
                                    <?php }  } ?>
                              </table>
                        </div>
                  </div>
            </div>

            <div class="overflow-hidden" style="max-height: 45vh;">
                  <div class="row">
                        <div class="col-md-12 ">
                              <div class="container">
                                    <img src="../assets/img/admin-cover2.png" class="img-fluid  rounded-3 shadow-lg mb-4" width="100%" loading="lazy">
                              </div>
                        </div>
            </div>
      </div>
</div>

<!-- Footer -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="facebook" viewBox="0 0 16 16">
                  <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                  </path>
            </symbol>
            <symbol id="globe" viewBox="0 0 16 16">
                  <path
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
            </symbol>
      </svg>

      <footer id="footer">
            <div class="container">
                  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                        <div class="d-flex align-items-center">
                              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                                    <svg class="bi" width="30" height="24">
                                          <use xlink:href="#bootstrap"></use>
                                    </svg>
                              </a>
                              <span class="mb-3 mb-md-0 text-muted">Copyright &copy; 2022 <strong>Information Technology, Faculty of Science, Thaksin University</strong></span>
                        </div>

                        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                              <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/csit.tsu"
                                          target="_blank"><svg class="bi" width="24" height="24">
                                                <use xlink:href="#facebook"></use>
                                          </svg></a></li>
                              <li class="ms-3"><a class="text-muted" href="http://www.sci.tsu.ac.th/csit"
                                          target="_blank"><svg class="bi" width="24" height="24">
                                                <use xlink:href="#globe"></use>
                                          </svg></a></li>
                        </ul>
                  </footer>
            </div>
      </footer>
      <!-- end Footer -->

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
      </script>

      <script>
            $('.delete-btn').click(function(e) {
                  var plantId = $(this).data('id');
                  e.preventDefault();
                  deleteConfirm(plantId);
            })

            function deleteConfirm(plantId) {
                  Swal.fire({
                        title: 'แจ้งเตือน',
                        text: 'ต้องการลบรายการนี้หรือไม่',
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

      <script>
            $('textarea').each(function() {
                  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden');
            }).on('input', function() {
                  this.style.height = 'auto';
                  this.style.height = (this.scrollHeight) + 'px';
                  console.log(this.scrollHeight);
            });
      </script>

      <script>
            (function() { 'use strict'
                  var forms = document.querySelectorAll('.needs-validation')

                  Array.prototype.slice.call(forms)
                        .forEach(function(form) {
                              form.addEventListener('submit', function(event) {
                                    if (!form.checkValidity()) {
                                          event.preventDefault()
                                          event.stopPropagation()
                                    }

                                    form.classList.add('was-validated')
                              }, false)
                        })
            })()
      </script>

      <!-- Vendor JS Files -->
      <script src="assets/js/main.js"></script>

</body>

</html>