<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>วินิจฉัยโรค - Plant Disease Diagnosis</title>

      <!-- Favicons -->
      <link href="../assets/img/favicon_1.png" rel="icon">
      <link href="../assets/img/apple-touch-icon_1.png" rel="apple-touch-icon">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="../assets/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
      <header id="header" class="fixed-top">
            <div class="container">
                  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                        <img src="../assets/img/web-logo.png" class="bi me-2" width="350px">
                        <ul
                              class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0 navbar order-last order-lg-0">
                              <li class="nav-item"><a href="home.php" class="nav-link px-2 link-secondary ">หน้าแรก</a>
                              </li>
                              <li><a href="diagnosis.php" class="nav-link active px-2 link-dark">วินิจฉัยโรค</a></li>
                              <li><a href="noresult.php" class="nav-link px-2 link-dark">ผลการวินิจฉัยโรค</a></li>
                        </ul>
                        <div class="col-md-3 text-end">
                              <a href="#footer" class="btn btn-outline-success me-2">ติดต่อเรา</a>
                              <a href="loginform.php" class="btn btn-success">Admin Page</a>
                        </div>
                  </header>
            </div>
      </header>

      <main id="main">
            <div class="homeheader">
                  <div class="align">
                        <div class="titleheader">
                              <h4>เว็บแอปพลิเคชันเพื่อการวินิจฉัยโรคในไม้ประดับ</h4>
                        </div>
                        <h4>Web application for diagnosis of ornamental plant diseases </h4>
                  </div>
            </div>

            <section id="services" class="services">
                  <div class="container" data-aos="fade-up">
                        <div class="section-title">
                              <h2>ลักษณะอาการ</h2>
                              <h5>โปรดเลือกลักษณะอาการที่เกิดขึ้นกับไม้ประดับของคุณเพื่อทำการวินิจฉัยโรค</h5>
                        </div>
                        <hr>
                              <!-- <form action="">
                                    <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="wound_area" value="on_leaf">
                                          <label class="form-check-label" for="wound_area">บนใบ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="wound_area" value="under_leaf">
                                          <label class="form-check-label" for="wound_area">ใต้ใบ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="wound_area" value="trunk">
                                          <label class="form-check-label" for="wound_area">ลำต้น</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="wound_area" value="stub">
                                          <label class="form-check-label" for="wound_area">โคนต้น</label>
                                    </div>
                              </form> -->
                        <div class="container">
                              <div class="row">
                                    <div class="col sm-12 md-4 lg-6 py-4">
                                          <form action="showresult.php" method="post">
                                                <h4>รูปร่างของแผลที่เกิดขึ้น</h4>
                                                <div class="container modal-body">
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_shape" id="spot" value="spot" autocomplete="off" />
                                                            <label class="btn btn-outline-success"  for="spot">รูปร่างเป็นจุด</label>
                                                      </div>
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_shape" id="large" autocomplete="off" />
                                                            <label class="btn btn-outline-success" for="large">รูปร่างใหญ่</label>
                                                      </div>
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_shape" id="circle" autocomplete="off" />
                                                            <label class="btn btn-outline-success" for="circle">รูปร่างเป็นวงกลม</label>
                                                      </div>
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_shape" id="conglobe" autocomplete="off" />
                                                            <label class="btn btn-outline-success" for="conglobe">รูปร่างเป็นก้อนกลม</label>
                                                      </div>
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_shape" id="scratch" autocomplete="off" />
                                                            <label class="btn btn-outline-success" for="scratch">รูปร่างเป็นรอยยาว</label>
                                                      </div>
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_shape" id="normally" autocomplete="off" />
                                                            <label class="btn btn-outline-success" for="normally">รูปร่างปกติ</label>
                                                      </div>
                                                </div>
                                          </form>
                                          <div class="d-sm-flex justify-content-end mt-2">
                                                <a href="../diagnosis/page_1.php" class="btn btn-secondary mx-2">ย้อนกลับ</a>
                                                <a href="../diagnosis/page_3.php" class="btn btn-primary">ถัดไป</a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
      </main>

      <footer id="footer">
            <div class="container">
                  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                        <div class="d-flex align-items-center">
                              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                                    <svg class="bi" width="30" height="24">
                                          <use xlink:href="#bootstrap"></use>
                                    </svg>
                              </a>
                              <span class="mb-3 mb-md-0 text-muted">Copyright &copy; 2022 <strong>Information
                                          Technology, Faculty of Science, Thaksin University</strong></span>
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

      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                  class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="../assets/vendor/purecounter/purecounter.js"></script>
      <script src="../assets/vendor/aos/aos.js"></script>
      <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
      <script src="../assets/vendor/php-email-form/validate.js"></script>

      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="../assets/js/main.js"></script>

      <script>
            $('#clearRadio').click(function () {
                  $('input[name="wound_area"]').prop("checked", false);
            });
            $('#clearRadio').click(function () {
                  $('input[name="wound_shape"]').prop("checked", false);
            });
            $('#clearRadio').click(function () {
                  $('input[name="wound_nature"]').prop("checked", false);
            });
            $('#clearRadio').click(function () {
                  $('input[name="wound_color"]').prop("checked", false);
            });
            $('#clearRadio').click(function () {
                  $('input[name="contamination"]').prop("checked", false);
            });
            $('#clearRadio').click(function () {
                  $('input[name="look"]').prop("checked", false);
            });
      </script>

</body>

</html>