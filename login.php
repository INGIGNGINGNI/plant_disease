<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
    session_start();
    include("backend/config_sqli.php");

    $errors = array();

    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "กรุณากรอกชื่อผู้ใช้");
        }

        if (empty($password)) {
            array_push($errors, "กรุณากรอกรหัสผ่าน");
        }

        if (count($errors) == 0) {
            $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                // $_SESSION['success'] = "เข้าสู่ระบบแล้ว";
                echo "<script>
                        $(document).ready(function () {
                            Swal.fire ({
                                icon: 'success',
                                title: 'เข้าสู่ระบบแล้ว',
                                text: 'ยินดีต้อนรับ Admin !!',
                                timer: 2000,
                                showConfirmButton: true
                            });
                        });
                  </script>";
                  header("refresh:2; url=backend/index.php");
            //     header("location: backend/index.php");
            } else {
                array_push($errors, "ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่ !");
                $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่ !";
                header("location: loginform.php");
            }
        } else {
            array_push($errors, "กรุณากรอกชื่อผู้ใช้และรหัสผ่านให้ครบถ้วน !");
            $_SESSION['error'] = "กรุณากรอกชื่อผู้ใช้และรหัสผ่านให้ครบถ้วน !";
            header("location: loginform.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">
        
    <style>
        body {
                  font-family: 'Bai Jamjuree', sans-serif;
                  color: #444444;
            }
    </style>
</head>
<body>

</body>
</html>