<?php
      session_start();
      require_once "backend/config.php";

      if (isset($_POST['result'])) {
            $wound_area = $_POST['wound_area'];
            $wound_shape = $_POST['wound_shape'];
            $wound_nature = $_POST['wound_nature'];
            $wound_color = $_POST['wound_color'];
            $contamination = $_POST['contamination'];
            $look = $_POST['look'];

            if ($wound_area == 'on_leaf' AND $wound_shape == 'spot' AND $wound_nature == 'widely' AND 
            $wound_color == 'caramel' AND $contamination == 'white_fungus' AND $look == 'leaf_dried') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  
                  while($result = $sql->fetch(PDO::FETCH_ASSOC)){
                        foreach ($result as $r) {
                              echo $r."<br>";
                        }
                  }
            } else {
                  echo "ไม่สามารถวินิจฉัยโรคได้";
                  header("refresh:2; url=diagnosis.php");
            }
      }
?>