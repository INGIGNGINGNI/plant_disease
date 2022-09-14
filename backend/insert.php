<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
    session_start();
    require_once("../backend/config.php");
    
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $enname = $_POST['enname'];
        $cause = $_POST['cause'];
        $symptom = $_POST['symptom'];
        $scourge = $_POST['scourge'];
        $remedy = $_POST['remedy'];
        $caution = $_POST['caution'];
        $type = $_POST['type'];
        $img = $_FILES['img'];

            $allow = array('jpg', 'jpeg', 'png');
            $extension = explode('.', $img['name']);
            $fileActExt = strtolower(end($extension));
            $fileNew = rand() . "." . $fileActExt;
            $filePath = '../uploads/'.$fileNew;

            $check_name = $conn -> prepare("SELECT plants.name FROM plants WHERE name = :name");
            $check_name -> bindParam(":name", $name);
            $check_name -> execute();
            $row = $check_name -> fetch(PDO::FETCH_ASSOC);
            if ($check_name -> rowCount() > 0) {
                if ($name == $row['name']) {
                    $_SESSION['error'] = "มีข้อมูล <b>".$name."</b> อยู่แล้ว ไม่สามารถเพิ่มข้อมูลซ้ำได้";
                        echo "<script>
                                        $(document).ready(function () {
                                            Swal.fire ({
                                                icon: 'error',
                                                title: 'ผิดพลาด',
                                                text: 'มีข้อมูล $name อยู่แล้ว กรุณาเพิ่มข้อมูลอื่น',
                                                timer: 2000,
                                                showConfirmButton: true
                                            });
                                        });
                                    </script>";
                                    header("refresh:2; url=index.php");
                }
            } elseif (in_array($fileActExt, $allow)) {
                            if (move_uploaded_file($img['tmp_name'], $filePath)) {
                                $sql = $conn->prepare("INSERT INTO plants(name, enname, cause, symptom, scourge, remedy, caution, type, img) VALUES(:name, :enname, :cause, :symptom, :scourge, :remedy, :caution, :type, :img)");
                                $sql->bindParam(":name", $name);
                                $sql->bindParam(":enname", $enname);
                                $sql->bindParam(":cause", $cause);
                                $sql->bindParam(":symptom", $symptom);
                                $sql->bindParam(":scourge", $scourge);
                                $sql->bindParam(":remedy", $remedy);
                                $sql->bindParam(":caution", $caution);
                                $sql->bindParam(":type", $type);
                                $sql->bindParam(":img", $fileNew);
                                $sql->execute();
          
                                if ($sql) {
                                    $_SESSION['success'] = "เพิ่มข้อมูลเรียบร้อยแล้ว";
                                    echo "<script>
                                        $(document).ready(function () {
                                            Swal.fire ({
                                                icon: 'success',
                                                title: 'สำเร็จ',
                                                text: 'เพิ่มข้อมูลเรียบร้อยแล้ว',
                                                timer: 2000,
                                                showConfirmButton: true
                                            });
                                        });
                                    </script>";
                                    header("refresh:2; url=index.php");
                                } 
                                else {
                                    $_SESSION['error'] = "เพิ่มข้อมูลไม่สำเร็จ";
                                    echo "<script>
                                        $(document).ready(function () {
                                            Swal.fire ({
                                                icon: error',
                                                title: 'เกิดข้อผิดพลาด',
                                                text: 'เพิ่มข้อมูลไม่สำเร็จ',
                                                timer: 2000,
                                                showConfirmButton: true
                                            });
                                        });
                                    </script>";
                                    header("refresh:2; url=index.php");
                                }
                            }
                        } else  { 
                        echo '<script>
                            $(document).ready(function() {
                                swal({
                                    icon: "error",
                                    title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
                                    text: "เพิ่มข้อมูลไม่สำเร็จ",
                                    timer: 2000,
                                    showConfirmButton: true
                                });
                            });
                        </script>';
                        header("refresh:2; url=index.php");
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