<?php
      include_once "../backend/config_sqli.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รูปภาพ - Plant Disease Diagnosis</title>

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

    <link rel="stylesheet" href="../assets/css/custom.css">


</head>

<body background="../assets/img/admin-background.png">
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="index.php"><img src="../assets/img/web-logo.png" class="bi me-2" width="350px"></a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"></ul>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

    <div class="container">
        <div class="row mt-5">
            <div class="row">
                  <?php if (isset($_SESSION['completed'])) {?>
                        <div class="alert alert-success" id="alertBox">
                              <?php
                                    echo $_SESSION['completed'];
                                    unset($_SESSION['completed']);
                              ?>
                        </div>
                  <?php }?>

                  <?php if (isset($_SESSION['failed'])) {?>
                        <div class="alert alert-danger" id="alertBox">
                              <?php
                                    echo $_SESSION['failed'];
                                    unset($_SESSION['failed']);
                              ?>
                        </div>
                <?php }?>
            </div>

            <div class="px-4 text-center">
                  <?php
                        if (isset($_GET['id'])) {
                              $id = $_GET['id'];
                              $query = $conn->query("SELECT  plants.id, plants.name FROM plants WHERE id = $id && status='1' ");
                              $row = $query->fetch_assoc();
                        }
                  ?>
                <h3 class="display-6 fw-bold mb-4 text-success">รูปภาพของ<?php echo $row['name']; ?></h3>
            </div>

            <div class="col-12">
                <form action="img_upload.php" method="post" enctype="multipart/form-data">
                    <div
                        class="text-center justify-content-center align-items-center p-4 border-2 border-dashed rounded-3">
                        <h5 class="my-2">เลือกรูปภาพเพื่ออัปโหลด</h5>
                        <input type="text" hidden value="<?php echo $id ?>" required class="form-control my-3" name="id">
                        <input type="file" name="file" class="form-control streched-link" required accept="image/jpeg, image/jpg, image/png">
                        <p class="mb-0 mt-3"><strong>คำเตือน : </strong>สามารถอัปโหลดได้เฉพาะไฟล์นามสกุล JPG, JPEG และ PNG</p>
                    </div>
                    <div class="d-sm-flex justify-content-end mt-2">
                        <input type="submit" name="submit" value="อัปโหลด" class="btn btn-primary mb-3">
                        <a href="index.php" class="btn btn-outline-secondary mb-3 mx-2">กลับ</a>
                    </div>
                </form>
            </div>
            <div class="row g-2">
                  <?php
                        if (isset($_GET['id'])) {
                              $id = $_GET['id'];
                              $query = $conn->query("SELECT * FROM images WHERE plant_id = '$id' && status='1' ");
                              if ($query->num_rows > 0) {
                                    while ($row = $query->fetch_assoc()) {
                                          $imageURL = '../uploads/' . $row['imgname'];
                  ?>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card shadow h-100">
                        <img src="<?php echo $imageURL ?>" alt="" width="100%" class="card-img image">
                    </div>
                </div>
                <?php }
                        } else {?>
                <table class="table table-success">
                    <thead>
                    <tbody>
                        <tr>
                            <td colspan='6' class='text-center'>ไม่มีรูปภาพของโรคนี้</td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
                <?php }?>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="footers mt-5 pt-5">
        <?php include "../footer.php";?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="assets/js/main.js"></script>

    <script>
    $('#alertBox').show();
    setTimeout(function() {
        $('#alertBox').hide()
    }, 2000);
    </script>
</body>

</html>