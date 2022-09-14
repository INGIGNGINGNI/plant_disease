<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
      session_start();
      require_once("../backend/config.php");

      if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $enname = $_POST['enname'];
            $cause = $_POST['cause'];
            $symptom = $_POST['symptom'];
            $scourge = $_POST['scourge'];
            $remedy = $_POST['remedy'];
            $caution = $_POST['caution'];
            $type = $_POST['type'];
            $img = $_FILES['img'];
    
            $img2 = $_POST['img2'];
            $upload = $_FILES['img']['name'];
    
            if ($upload != '') {
                $allow = array('jpg', 'jpeg', 'png');
                $extension = explode('.', $img['name']);
                $fileActExt = strtolower(end($extension));
                $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
                $filePath = '../uploads/'.$fileNew;
    
                if (in_array($fileActExt, $allow)) {
                    if ($img['size'] > 0 && $img['error'] == 0) {
                       move_uploaded_file($img['tmp_name'], $filePath);
                    }
                }
    
            } else {
                $fileNew = $img2;
            }
    
            $sql = $conn->prepare("UPDATE plants SET name = :name, enname = :enname, cause = :cause, symptom = :symptom, scourge = :scourge, remedy = :remedy, caution = :caution, type = :type, img = :img WHERE id = :id");
            $sql->bindParam(":id", $id);
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
                $_SESSION['success'] = "แก้ไขข้อมูลเรียบร้อยแล้ว";
                echo "<script>
                  $(document).ready(function () {
                        Swal.fire ({
                              icon: 'success',
                              title: 'สำเร็จ',
                              text: 'แก้ไขข้อมูลเรียบร้อยแล้ว',
                              timer: 3000,
                              showConfirmButton: true
                        });
                  });
                  </script>";
                  header("refresh:2; url=index.php");
            } else {
                $_SESSION['error'] = "แก้ไขข้อมูลไม่สำเร็จ";
                header("location: index.php");
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