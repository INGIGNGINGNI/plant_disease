<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>หน้าแรก - Plant Disease Diagnosis</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="assets/img/favicon_1.png" rel="icon">
      <link href="assets/img/apple-touch-icon_1.png" rel="apple-touch-icon">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript">
            $(document).ready(function() {
                  $("#mySearch").on("keyup", function() {
                        var value = $(this).val();
                        // console.log(value);
                        // console.log(item.toString());
                        var inde = getAllIndexes(item, value);
                        // console.log(inde);
                  });
            });
      </script>

      <style>
            .input-group-text {
            background-color: #528d61;
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
                                    <li class="nav-item"><a href="home.php"
                                                class="nav-link active px-2 link-secondary ">หน้าแรก</a></li>
                                    <li><a href="diagnosis.php" class="nav-link px-2 link-dark">วินิจฉัยโรค</a></li>
                                    <li><a href="noresult.php" class="nav-link px-2 link-dark">ผลการวินิจฉัยโรค</a></li>
                              </ul>
                              <div class="col-md-4 text-end">
                                    <a href="#footer" class="btn btn-outline-success me-2">ติดต่อเรา</a>
                                    <a href="about.php" class="btn btn-outline-success">เกี่ยวกับเรา</a>
                              </div>
                        </header>
                  </div>
            </header>
            <div class="homeheader">
                  <div class="align">
                        <div class="titlehome">
                              <h4>Web application for diagnosis of ornamental plant diseases</h4>
                        </div>
                        <div class="titlehome2">
                              <h4>เว็บแอปพลิเคชันเพื่อการวินิจฉัยโรคในไม้ประดับ</h4>
                        </div>
                  </div>
            </div>
            <section id="services" class="services">
                  <div class="container" data-aos="fade-up">
                        <div class="section-title">
                              <h2>ความรู้ทั่วไปเกี่ยวกับโรคในไม้ประดับ</h2>
                        </div>
                        
                        <div class="row gy-4">
                              <div class="col-md-4 mb-3"></div>
                              <div class="col-md-4 mb-3"></div>
                              <div class="col-md-4 mb-3">
                                    <div class="input-group w-100">
                                          <input type="text" class="form-control" id="mySearch"
                                                aria-label="Input group example" aria-describedby="basic-addon1" placeholder="ค้นหาชื่อโรค">
                                          <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                      fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                      <path
                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                      </path>
                                                </svg>
                                          </span>
                                    </div>
                              </div>
                        </div>

                        <!-- Show name disease -->
                        <div class="row gy4" id="itemResult">
                              <script>
                              var item = [];
                              </script>
                              <?php
                                        require_once "backend/config.php";
                                        $stmt = $conn->query("SELECT * FROM plants WHERE status='1' ");
                                        $stmt->execute();
                                        $plants = $stmt->fetchAll();
                                        // foreach($plants as $plant)  {
                                        for ($i = 0; $i < count($plants); $i++) {
                                  ?>
                              <script>
                              item.push("<?=$plants[$i]['name'];?>");
                              </script>
                              <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-stretch md-0 py-3" id="itemSearch<?=$i?>"
                                    data-aos="zoom-in" data-aos-delay="100">
                                    <div class="detail-box" id="searchname">
                                          <div class="img">
                                                <img class="img-box" width="100%"
                                                      src="uploads/<?php echo $plants[$i]['img']; ?>" alt="">
                                          </div>
                                          <div>
                                                <h4 class="mt-4"><?php echo $plants[$i]['name']; ?></h4>
                                                <a href="detail.php?id=<?php echo $plants[$i]['id']; ?>"
                                                      class="my-3 btn btn-outline-success">ดูเพิ่มเติม</a>
                                          </div>
                                    </div>
                              </div>
                              <?php }?>
                        </div>

                        <script type="text/javascript">
                        function getAllIndexes(arr, val) {
                              var indexes = [];
                              for (var i = 0; i < arr.length; i++) {
                                    if (arr[i].includes(val)) {
                                          $("#itemSearch" + i).attr('style', 'display: block !important');
                                    } else {
                                          $("#itemSearch" + i).attr('style', 'display: none !important');
                                    }
                              }
                              return indexes;
                        }
                        </script>
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

      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="assets/js/main.js"></script>

</body>

</html>