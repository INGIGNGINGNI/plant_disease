<?php 
	session_start();
?>
<!doctype html>
<html lang="en">

<head>
      <title>Login Admin</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Favicons -->
      <link href="assets/img/favicon_1.png" rel="icon">
      <link href="assets/img/apple-touch-icon_1.png" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/loginstyle.css">

</head>

<body>
      <section class="ftco-section">
            <div class="container">
                  <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                              <div class="wrap d-md-flex">
                                    <div class="img" style="background-image: url(assets/img/login-bg.jpg);"></div>
                                    <div class="login-wrap p-4 p-md-5">
                                          <div class="d-flex">
                                                <div class="w-100">
                                                      <h3 class="mb-4 text-center">เข้าสู่ระบบก่อนเข้าใช้งาน</h3>
                                                </div>
                                          </div>
                                          <form action="login.php" class="signin-form" method="POST">

                                                <?php 
								if (isset($_SESSION['success'])) { ?>
                                                <div class="alert alert-success" role="alert">
                                                      <?php 
											echo $_SESSION['success'];
											unset ($_SESSION['success']);
										?>
                                                </div>
                                                <?php } ?>

                                                <?php 
								if (isset($_SESSION['error'])) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                      <?php 
											echo $_SESSION['error'];
											unset ($_SESSION['error']);
										?>
                                                </div>
                                                <?php } ?>

                                                <div class="form-group mb-3">
                                                      <label class="col-form-label" for="username">ชื่อผู้ใช้</label>
                                                      <input type="text" class="form-control" name="username" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                      <label class="col-form-label" for="password">รหัสผ่าน</label>
                                                      <input type="password" class="form-control" name="password"
                                                            required>
                                                </div>
                                                <div class="form-group">
                                                      <button type="submit" class="btn btn-success rounded submit px-3"
                                                            name="login">เข้าสู่ระบบ</button>
                                                </div>
                                                <div class="form-group d-md-flex">
                                                      <div class="w-50 text-left"></div>
                                                      <div class="w-50 text-right">
                                                            <a href="index.php">กลับไปยังหน้าหลัก</a>
                                                      </div>
                                                </div>
                                          </form>
                                    </div>
                              </div>
                        </div>
      </section>

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/loginmain.js"></script>

</body>

</html>