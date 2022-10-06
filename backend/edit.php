<?php 
      include "action.php";
      include "modal.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล - Plant Disease Diagnosis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Favicons -->
    <link href="../assets/img/favicon_1.png" rel="icon">
    <link href="assets/img/apple-touch-icon_1.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom.css">

    <style>
    body {
        width: 100%;
        background-image: url("../assets/img/admin-background.png");
        background-size: cover;
    }

    .text-result {
        font-size: 18px;
        font-weight: bold;
        color: #528d61;
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

    <div class="container mt-4">
        <div class="container px-4 pt-2 my-5 text-center">
            <h3 class="display-6 fw-bold mb-4 text-success">แก้ไขข้อมูลโรคในไม้ประดับ</h3>
        </div>
    </div>

    <div class="container mt-5">
        <form action="update.php" method="post" enctype="multipart/form-data" class="needs-validation m-0" novalidate>
            <?php
                        if (isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $stmt = $conn->query("SELECT * FROM plants WHERE id = $id");
                                    $stmt->execute();
                                    $data = $stmt->fetch();
                        }
                  ?>

            <div class="card shadow-sm p-4 card-body p-4 rounded">
                <div class="row g-3">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 col-sm-12 align-content-end">
                        <img width="100%" src="../uploads/<?php echo $data['img']; ?>" id="previewImg" alt="">
                        <label for="img" class="col-form-label text-result"></label>
                        <input type="file" class="form-control" id="imgInput" name="img">
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-6 col-sm-12">
                        <input type="text" hidden value="<?php echo $data['id']; ?>" required class="form-control"
                            name="id">
                        <input type="hidden" value="<?php echo $data['img']; ?>" required class="form-control"
                            name="img2">
                        <label for="firstname" class="col-form-label text-result">ชื่อของโรค (ไทย) :</label>
                        <input type="text" value="<?php echo $data['name']; ?>" required class="form-control"
                            name="name">
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="firstname" class="col-form-label text-result">ชื่อของโรค (อังกฤษ) :</label>
                        <input type="text" value="<?php echo $data['enname']; ?>" required class="form-control"
                            name="enname">
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label for="firstname" class="col-form-label text-result">สาเหตุของโรค :</label>
                        <textarea type="text" class="form-control" name="cause"
                            required><?php echo $data['cause']; ?></textarea>
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label for="firstname" class="col-form-label text-result">อาการของโรค :</label>
                        <textarea type="text" class="form-control" name="symptom"
                            required><?php echo $data['symptom']; ?></textarea>
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label for="firstname" class="col-form-label text-result">การแพร่ระบาด :</label>
                        <textarea type="text" class="form-control" name="scourge"
                            required><?php echo $data['scourge']; ?></textarea>
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label for="firstname" class="col-form-label text-result">วิธีการรักษา :</label>
                        <textarea type="text" class="form-control" name="remedy"
                            required><?php echo $data['remedy']; ?></textarea>
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="firstname" class="col-form-label text-result">ข้อควรระวัง :</label>
                        <textarea type="text" class="form-control" name="caution"
                            required><?php echo $data['caution']; ?></textarea>
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="firstname" class="col-form-label text-result">ไม้ประดับที่พบ :</label>
                        <textarea type="text" class="form-control" name="type"
                            required><?php echo $data['type']; ?></textarea>
                        <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 mt-4">
                    <hr>
                    <button type="submit" name="update" class="btn btn-success">อัพเดต</button>
                    <a href="index.php" class="btn btn-secondary">กลับ</a>
                </div>
            </div>
        </form>
    </div>

    <?php include "../footer.php" ;?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
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
    <script src="assets/js/valueValidation.js"></script>
    <script src="../assets/js/textArea.js"></script>


</body>

</html>