<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>รายละเอียด - Plant Disease</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="assets/img/favicon_1.png" rel="icon">
      <link href="assets/img/apple-touch-icon_1.png" rel="apple-touch-icon">

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
      <link rel="stylesheet" href="assets/css/slidegallary.css">

      <style>
      h6 {
            font-weight: bold;
            font-size: 18px;
            color: #528d61;
      }

      p,
      li {
            font-size: 18px;
      }

      .text-green {
            color: #528d61;
      }

      .img-box {
            max-width: 1300px;
      }
      </style>
</head>

<body>
      <header id="header" class="fixed-top">
            <div class="container">
                  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                        <img src="assets/img/web-logo.png" class="bi me-2" width="350px">
                        <ul
                              class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0 navbar order-last order-lg-0">
                              <li class="nav-item"><a href="home.php"
                                          class="nav-link active px-2 link-secondary ">หน้าแรก</a></li>
                              <li><a href="diagnosis.php" class="nav-link px-2 link-dark">วินิจฉัยโรค</a></li>
                              <li><a href="noresult.php" class="nav-link px-2 link-dark">ผลการวินิจฉัยโรค</a></li>
                        </ul>
                        <div class="col-md-3 text-end">
                              <a href="#footer" class="btn btn-outline-success me-2">ติดต่อเรา</a>
                              <!-- <a href="loginform.php" class="btn btn-success">Admin Page</a> -->
                        </div>
                  </header>
            </div>
      </header>

      <main id="main">
            <header id="header" class="fixed-top">
                  <div class="container">
                        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                              <img src="assets/img/web-logo.png" class="bi me-2" width="350px">
                              <ul
                                    class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0 navbar order-last order-lg-0">
                                    <li class="nav-item"><a href="home.php"
                                                class="nav-link active px-2 link-secondary ">หน้าแรก</a></li>
                                    <li><a href="diagnosis.php" class="nav-link px-2 link-dark">วินิจฉัยโรค</a></li>
                                    <li><a href="noresult.php" class="nav-link px-2 link-dark">ผลการวินิจฉัยโรค</a></li>
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

            <section id="about" class="about">
                  <div class="container img-box" data-aos="fade-up">
                        <div class="container">
                              <?php 
                                    include_once("backend/config_sqli.php");
                                    if (isset($_GET['id'])) {
                                          $id = $_GET['id'];
                                          $query = $conn -> query("SELECT  * FROM plants WHERE id = $id && status='1' ");
                                          $plant = $query -> fetch_assoc();
                                    }
                              ?>
                              <div class="section-title">
                                    <h2><?php echo $plant['name']; ?> (<?php echo $plant['enname']; ?>)</h2>
                              </div>
                              <div class="row">
                                    <div class="col-lg-6">
                                          <div class="container img-box">
                                                <?php
                                                require_once("backend/config_sqli.php");
                                                if (isset($_GET['id'])) {
                                                      $id = $_GET['id'];
                                                      $query = $conn -> query("SELECT * FROM images WHERE plant_id = '$id' && status='1' ");
                                                      if ($query -> num_rows > 0) {
                                                            while ($row = $query -> fetch_assoc()) {
                                                                        $imageURL = 'uploads/' .$row['imgname']; 
                                                                        ?>
                                                <div class="mySlides">
                                                      <img src="<?php echo $imageURL?>" width="100%">
                                                </div>
                                                <?php } ?>
                                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                                <a class="next" onclick="plusSlides(1)">❯</a>
                                                <div class="row">
                                                      <?php 
                                                            require_once("backend/config_sqli.php");
                                                                  $id = $_GET['id'];
                                                                  $query = $conn -> query("SELECT * FROM images WHERE plant_id = '$id' && status='1' ");
                                                                  if ($query -> num_rows > 0) {
                                                                        while ($row = $query -> fetch_assoc()) {
                                                                              $imageURL = 'uploads/' .$row['imgname']; 
                                                                              ?>
                                                      <div class="column-tmp">
                                                            <img class="demo cursor" src="<?php echo $imageURL?>"
                                                                  width="100%" onclick="currentSlide(1)">
                                                      </div>
                                                      <?php } ?>
                                                      <?php } ?>
                                                </div>
                                                <?php } 
                                               } ?>
                                          </div>
                                    </div>
                                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                                          <div class="my-4">
                                                <h5 class="text-green"><strong>ลักษณะของโรค</strong></h5>
                                                <p Align="justify"><?php echo $plant['symptom']; ?></p>
                                          </div>

                                          <div class="my-4">
                                                <h5 class="text-green"><strong>สาเหตุ</strong></h5>
                                                <p Align="justify"><?php echo $plant['cause']; ?></p>
                                          </div>

                                          <div class="my-4">
                                                <h5 class="text-green"><strong>ไม้ประดับที่พบโรคนี้</strong></h5>
                                                <p Align="justify"><?php echo $plant['type']; ?></p>
                                          </div>

                                          <div class="my-4">
                                                <h5 class="text-green"><strong>การแพร่ระบาดของโรค</strong></h5>
                                                <p Align="justify"><?php echo $plant['scourge']; ?></p>
                                          </div>

                                          <div class="my-4">
                                                <h5 class="text-green"><strong>วิธีการรักษา</strong></h5>
                                                <p Align="justify"><?php echo $plant['remedy']; ?></p>
                                          </div>
                                                
                                          <div class="my-4">
                                                <h5 class="text-green"><strong>ข้อควรระวัง</strong></h5>
                                                <p Align="justify"><?php echo $plant['caution']; ?></p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
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
      <script src="assets/js/slideGallary.js"></script>
</body>

</html>