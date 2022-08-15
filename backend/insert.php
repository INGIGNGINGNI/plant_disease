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
        $remedy = $_POST['remedy'];
        $caution = $_POST['caution'];
        $type = $_POST['type'];
        $img = $_FILES['img'];

            $allow = array('jpg', 'jpeg', 'png');
            $extension = explode('.', $img['name']);
            $fileActExt = strtolower(end($extension));
            $fileNew = rand() . "." . $fileActExt;
            $filePath = '../uploads/'.$fileNew;

            if (in_array($fileActExt, $allow)) {
                if ($img['size'] > 0 && $img['error'] == 0) {
                    if (move_uploaded_file($img['tmp_name'], $filePath)) {
                        $sql = $conn->prepare("INSERT INTO plants(name, enname, cause, symptom, remedy, caution, type, img) VALUES(:name, :enname, :cause, :symptom, :remedy, :caution, :type, :img)");
                        $sql->bindParam(":name", $name);
                        $sql->bindParam(":enname", $enname);
                        $sql->bindParam(":cause", $cause);
                        $sql->bindParam(":symptom", $symptom);
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
                                        timer: 3000,
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
                                        timer: 3000,
                                        showConfirmButton: true
                                    });
                                });
                            </script>";
                            header("refresh:2; url=index.php");
                        }
                    }
                }
            } 
            else  { 
                echo '<script>
                    $(document).ready(function() {
                        swal({
                            icon: "error",
                            title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
                            text: "เพิ่มข้อมูลไม่สำเร็จ",
                            timer: 3000,
                            showConfirmButton: true
                        });
                    });
                </script>';
                header("refresh:2; url=index.php");
            }
    }
?>