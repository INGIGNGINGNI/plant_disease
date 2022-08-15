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
            background-color: #88ad77;
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
                              <h2>ความรู้ทั่วไปเกี่ยวกับโรคในไม้ประดับ</h2>
                        </div>


                        <div class="row gy4">
                              <div class="col-md-4"></div>
                              <div class="col-md-4"></div>
                              <div class="col-md-4">
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
                              <div class="col-lg-3 col-md-6 d-flex align-items-stretch md-0 py-3" id="itemSearch<?=$i?>"
                                    data-aos="zoom-in" data-aos-delay="100">
                                    <div class="detail-box" id="searchname">
                                          <div class="img">
                                                <img class="rounded" width="90%"
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

      <!-- Bootstrap 5 icons -->
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