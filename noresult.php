<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>ผลการวินิจฉัย - Plant Disease</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="assets/img/favicon_1.png" rel="icon">
      <link href="assets/img/apple-touch-icon_1.png" rel="apple-touch-icon">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/custom.css">

      <style>
            .list-group-item:last-child {
                  border-bottom-right-radius: inherit;
                  border-bottom-left-radius: inherit;
                  background-color: honeydew;
            }
            .text-result {
                  font-weight: bold;
                  color: #528d61;
            }
      </style>

</head>

<body>
      <main id="main">
            <header id="header" class="fixed-top">
                  <div class="container">
                        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                              <img src="assets/img/web-logo.png" class="bi me-2" width="350px">
                              <ul
                                    class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0 navbar order-last order-lg-0">
                                    <li><a href="home.php" class="nav-link  px-2 link-secondary ">หน้าแรก</a></li>
                                    <li><a href="diagnosis.php" class="nav-link px-2 link-dark">วินิจฉัยโรค</a></li>
                                    <li class="nav-item"><a href="noresult.php"
                                                class="nav-link active px-2 link-dark">ผลการวินิจฉัยโรค</a></li>
                              </ul>
                              <div class="col-md-4 text-end">
                                    <a href="#footer" class="btn btn-outline-success me-2">ติดต่อเรา</a>
                                    <a href="loginform.php" class="btn btn-success">Admin Page</a>
                              </div>
                        </header>
                  </div>
            </header>
            <div class="homeheader">
                  <div class="align">
                        <div class="titlehome">
                              <h4>Web application for diagnosis of ornamental plant diseases </h4>
                        </div>
                        <div class="titlehome2">
                              <h4>เว็บแอปพลิเคชันเพื่อการวินิจฉัยโรคในไม้ประดับ</h4>
                        </div>
                  </div>
            </div>
            <section id="services" class="services">
                  <div class="container" data-aos="fade-up">
                        <div class="section-title">
                              <h2>ผลการวินิจฉัยโรคในไม้ประดับ</h2>
                              <h5>จากการวินิจฉัยโรคเบื้องต้นของระบบจากอาการข้างต้น
                                    พบว่าโรคที่เกิดขึ้นกับไม้ประดับของคุณคือ</h5>
                        </div>
                        <hr>
                        <div class='list-group w-auto my-3 py-4'>
                              <a class='list-group-item list-group-item-action d-flex gap-3 py-3' aria-current='true'>
                                    <img src='assets/img/warning.gif' width='60' height='60' class='rounded-circle flex-shrink-0'>
                                    <div class='d-flex gap-2 w-100 justify-content-center'>
                                          <div class="text-center">
                                                <h5 class='mt-2 mb-3 text-result'>ไม่สามารถแสดงผลการวินิจฉัยได้ โปรดเลือกเมนูวินิฉัยโรคและเลือกลักษณะอาการเพื่อทำการวินิจฉัยโรค</h5>
                                                <p class='mb-0 opacity-75'>Can't show diagnostic results Please select the diagnostic menu and select symptoms for diagnosis.</p>
                                          </div>
                                    </div>
                              </a>
                        </div>
                  </div>
      </main>

      <?php include "footer.php" ;?>

      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                  class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="assets/vendor/purecounter/purecounter.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>

      <script src="assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

      <script>
            $('textarea').each(function() {
                  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden');
            }).on('input', function() {
                  this.style.height = 'auto';
                  this.style.height = (this.scrollHeight) + 'px';
            });
      </script>

</body>

</html>