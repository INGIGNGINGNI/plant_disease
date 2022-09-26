<?php 
      include "action.php"
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
    <link
        href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Flaticon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <link rel="stylesheet" href="../assets/css/custom.css">

    <style>
    /* body {
                  width: 100%;
                  background-image: url("../assets/img/admin-background.png");
                  background-size: cover;
            } */
    p.test2 {
        white-space: nowrap;
        width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    </style>

</head>

<body background="../assets/img/admin-background.png">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="index.php"><img src="../assets/img/web-logo.png" class="bi me-2" width="350px"></a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"></ul>

            <div class="row-md-3 text-end">
                <b><a href="#" class="align-items-center col-mb-2 mb-md-0 text-dark text-decoration-none">
                        เว็บแอปพลิเคชันเพื่อการวินิจฉัยโรคในไม้ประดับ</a></b>&nbsp;
                <button type="button" class="btn btn-outline-primary me-6" data-bs-toggle="modal"
                    data-bs-target="#logoutModal">ออกจากระบบ</button>
            </div>
        </header>
    </div>

    <div class="px-4 pt-2 my-5 text-center border-bottom">
        <h3 class="display-6 fw-bold mb-4">การจัดการข้อมูลโรคในไม้ประดับ</h3>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">หน้าจอการจัดการข้อมูลและรูปภาพโรคของไม้ประดับ สำหรับผู้ดูแลระบบ
                เว็บแอปพลิเคชันเพื่อการวินิจฉัยโรคในไม้ประดับ (Web application for diagnosis of ornamental plant
                diseases)</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button type="button" class="btn btn-success btn-lg px-4" data-bs-toggle="modal"
                    data-bs-target="#plantModal">เพิ่มข้อมูล</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-toggle="collapse"
                    data-bs-target="#showData" aria-expanded="false" aria-controls="showData">ดูข้อมูล</button>
            </div>
        </div>

        <div class="container text-start">
            <?php if (isset($_SESSION['success'])) { ?>
                  <div class="alert alert-success" id="alertBox">
                        <?php 
                              echo $_SESSION['success']; 
                              unset ($_SESSION['success']);
                        ?>
                  </div>
            <?php } ?>

            <?php if (isset($_SESSION['error'])) { ?>
                  <div class="alert alert-danger" id="alertBox">
                        <?php 
                              echo $_SESSION['error']; 
                              unset ($_SESSION['error']);
                        ?>
                  </div>
            <?php } ?>
      </div>

            <?php include "modal.php"; ?>

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

        <?php include "../footer.php" ;?>

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="assets/js/main.js"></script>

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
            $('#alertBox').show();
            setTimeout(function() {
                  $('#alertBox').hide()
            }, 2000);
        </script>

        <script>
            (function() {
                  'use strict'
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



</body>

</html>