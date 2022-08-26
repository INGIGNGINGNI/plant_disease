<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>วินิจฉัยโรค - Plant Disease Diagnosis</title>

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

</head>

<body>
      
      <main id="main">
            <header id="header" class="fixed-top">
                  <div class="container">
                        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                              <img src="assets/img/web-logo.png" class="bi me-2" width="350px">
                              <ul
                                    class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0 navbar order-last order-lg-0">
                                    <li class="nav-item"><a href="home.php" class="nav-link px-2 link-secondary ">หน้าแรก</a>
                                    </li>
                                    <li><a href="diagnosis.php" class="nav-link active px-2 link-dark">วินิจฉัยโรค</a></li>
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

            <section id="services" class="services">
                  <div class="container" data-aos="fade-up">
                        <div class="section-title">
                              <h2>ลักษณะอาการ</h2>
                              <h5>โปรดเลือกลักษณะอาการที่เกิดขึ้นกับไม้ประดับของคุณเพื่อทำการวินิจฉัยโรค</h5>
                        </div>
                        <hr>
                        <div class="container my-4">
                              <form action="result.php" method="post">
                              <!-- row 1 -->
                              <div class="row">
                                    <div class="col">
                                          <h4>บริเวณใดของไม้ประดับที่เกิดแผล</h4>
                                                <div class="container modal-body">
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_area" id="on_leaf" value="on_leaf"autocomplete="off" />
                                                            <label class="btn btn-outline-success"  for="on_leaf">บนใบ</label>
                                                      </div>
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_area" id="under_leaf" autocomplete="off" />
                                                            <label class="btn btn-outline-success" for="under_leaf">ใต้ใบ</label>
                                                      </div>
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_area" id="trunk" autocomplete="off" />
                                                            <label class="btn btn-outline-success" for="trunk">ลำต้น</label>
                                                      </div>
                                                      <div class="btn-group my-2 mx-2">
                                                            <input type="radio" class="btn-check" name="wound_area" id="stub" autocomplete="off" />
                                                            <label class="btn btn-outline-success" for="stub">โคนต้น</label>
                                                      </div>
                                                </div>
                                    </div>
                                    <div class="col">
                                          <h4>สิ่งปะปนที่อยู่บนแผลหรือบริเวณแผล</h4>
                                          <div class="container modal-body">
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="contamination" id="white_fungus" value="white_fungus" autocomplete="off" />
                                                      <label class="btn btn-outline-success"  for="white_fungus">ราสีขาว</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="contamination" id="black_fungus" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="black_fungus">ราสีดำ</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="contamination" id="white_fiber" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="white_fiber">เส้นใยสีขาว</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="contamination" id="red_brown_powder" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="red_brown_powder">ผงสีน้ำตาลแดง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="contamination" id="dark_brown_powder" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="dark_brown_powder">ผงสีน้ำตาลดำ</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="contamination" id="spore" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="spore">สปอร์</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="contamination" id="yellow_spore" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="yellow_spore">สปอร์สีเหลือง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="contamination" id="no" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="no">ไม่มี</label>
                                                </div>
                                          </div>
                                          
                                    </div>
                                    <div class="col">
                                    <h4>ลักษณะโดยรวมของต้น</h4>
                                          <div class="container modal-body">
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="look" id="leaf_dried" value="leaf_dried"autocomplete="off" />
                                                      <label class="btn btn-outline-success"  for="leaf_dried">ใบเริ่มแห้ง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="look" id="leaf_wither" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="leaf_wither">ใบแห้งและเหี่ยวเฉา</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="look" id="leaf_rotten" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="leaf_rotten">ใบเน่า</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="look" id="leaf_roll" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="leaf_roll">ใบม้วนงอ</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="look" id="leaf_fall" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="leaf_fall">ใบร่วงหล่น</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="look" id="stem_dying" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="stem_dying">ต้นเริ่มตาย</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="look" id="stem_slow growing" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="stem_slow growing">ต้นเจริญเติบโตช้า</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="look" id="stem_stunted" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="stem_stunted">ต้นแคระแกร็น</label>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <!-- row 2 -->
                              <div class="row my-4">
                                    <div class="col">
                                          <h4>ลักษณะของแผลที่เกิดขึ้น</h4>
                                          <div class="container modal-body">
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="widely" value="widely" autocomplete="off" />
                                                      <label class="btn btn-outline-success"  for="widely">แผลกว้าง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="dried" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="dried">แผลแห้ง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="swell" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="swell">แผลพองนูน</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="pimple" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="pimple">แผลเป็นตุ่มเล็กๆ</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="split" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="split">แผลปริแตก</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="sink_in" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="sink_in">แผลบุ๋มลึก</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="rotten" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="rotten">แผลเน่า</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="burnt" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="burnt">แผลไหม้</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_nature" id="small" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="small">แผลเล็ก</label>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col">
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
                                    </div>
                                    <div class="col">
                                          <h4>สีของแผลที่เกิดขึ้น</h4>
                                          <div class="container modal-body">
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="caramel" value="caramel" autocomplete="off" />
                                                      <label class="btn btn-outline-success"  for="caramel">สีเหลืองอมน้ำตาล</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="red_brown" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="red_brown">สีน้ำตาลแดง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="black_brown" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="black_brown">สีน้ำตาลดำ</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="brown" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="brown">สีน้ำตาล</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="black" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="black">สีดำ</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="yellow" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="yellow">สีเหลือง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="purple" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="purple">สีม่วง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="green" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="green">สีเขียว</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="red" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="small">สีแดง</label>
                                                </div>
                                                <div class="btn-group my-2 mx-2">
                                                      <input type="radio" class="btn-check" name="wound_color" id="white" autocomplete="off" />
                                                      <label class="btn btn-outline-success" for="white">สีขาว</label>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <hr>
                              <div class="container my-4">
                                    <button type="submit" class="btn btn-primary" name="result">แสดงผลการวินิจฉัย</button>
                                    <a id="clearRadio" class="btn btn-secondary">ล้างค่า</a>
                              </div>
                        </form>
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