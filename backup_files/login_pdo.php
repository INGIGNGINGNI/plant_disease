<?php
      session_start();
      require_once("backend/config.php");

      if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username)) {
                  $_SESSION['error'] = "กรุณากรอกชื่อผู้ใช้";
                  header('location: loginform.php');
            } 
            else if (empty($password)) {
                  $_SESSION['error'] = "กรุณากรอกรหัสผ่าน";
                  header('location: loginform.php');
            } 
            else {
                  try {
                        $check_login = $conn -> prepare("SELECT * FROM admins WHERE username = :username");
                        $check_login -> bindParam(":username", $username);
                        $check_login -> execute();
                        $row = $check_login -> fetch(PDO::FETCH_ASSOC);

                        if ($check_login -> rowCount() > 0) {
                              if ($username == $row['username']) {
                                    if (password_verify('$password', $row['password'])) {
                                          $_SESSION['admin_login'] = $row['id'];
                                          header('loacation: index.php');
                                    }
                                    else {
                                          $_SESSION['error'] = 'รหัสผ่านไม่ถูกต้อง';
                                          header('loacation: loginform.php');
                                    }
                              }
                              else {
                                    $_SESSION['error'] = 'ชื่อผู้ใช้ไม่ถูกต้อง';
                                    header('loacation: loginform.php');
                              }
                        }
                        else {
                              $_SESSION['error'] = 'ไม่มีข้อมูลในระบบ';
                              header('loacation: loginform.php');
                        }
                  }
                  catch (PDOException $e) {
                        echo $e -> getMessage();
                  }
            }
      }
?>