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

            if ($contamination == 'black_fungus') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '6' ");
                  $sql -> execute();
                  echo 'Leaf Blight' ;
            } else if ($contamination == 'no' && $look == 'leaf_wither') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  echo 'Leaf Spot' ;
            } else if ($contamination == 'no' && $look == 'leaf_wither' && $wound_nature == 'widely') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  echo 'Leaf Spot' ;
            } else if ($contamination == 'no' && $look == 'leaf_wither' && $wound_nature == 'dried') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  echo 'Blast' ;
            } else if ($contamination == 'no' && $look == 'leaf_wither' && $wound_nature == 'swell') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  echo 'Rust' ;
            } else if ($contamination == 'no' && $look == 'leaf_wither' && $wound_nature == 'pimple') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  echo 'Rust' ;
            } else if ($contamination == 'no' && $look == 'leaf_roll' && $wound_shape == 'spot') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '4' ");
                  $sql -> execute();
                  echo 'Downy Midew' ;
            } else if ($contamination == 'no' && $look == 'leaf_roll' && $wound_shape == 'circle') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  echo 'Anthracnose' ;
            } else if ($contamination == 'no' && $look == 'leaf_roll' && $wound_shape == 'large') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  echo 'Anthracnose' ;
            } else if ($contamination == 'no' && $look == 'stem_dying') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '10' ");
                  $sql -> execute();
                  echo 'Stem Canker' ;
            } else if ($contamination == 'no' && $look == 'leaf_rotten') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  echo 'Anthracnose' ;
            } else if ($contamination == 'white_fiber') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  echo 'Leaf Spot' ;
            } else if ($contamination == 'no' && $wound_nature == 'widely') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  echo 'Leaf Spot' ;
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'small') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  echo 'Leaf Spot' ;
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'split') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  echo 'Rust' ;
            } else if ($contamination == 'yellow_spore' && $wound_nature == 'widely') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  echo 'Blast' ;
            } else if ($contamination == 'yellow_spore' && $wound_nature == 'dried') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  echo 'Blast' ;
            } else if ($contamination == 'yellow_spore' && $wound_nature == 'swell') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  echo 'Rust' ;
            } else if ($contamination == 'yellow_spore' && $wound_nature == 'pimple') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  echo 'Rust' ;
            } else if ($contamination == 'white_funges' && $wound_nature == 'dried') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  echo 'Root Rot' ;
            } else if ($contamination == 'white_funges' && $wound_nature == 'split') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  echo 'Rust' ;
            } else if ($contamination == 'white_funges' && $wound_nature == 'no') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '5' ");
                  $sql -> execute();
                  echo 'Powder Mildew' ;
            } else if ($contamination == 'white_funges' && $wound_nature == 'sink_in') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  echo 'Root Rot' ;
            } else if ($contamination == 'white_funges' && $wound_nature == 'rotten') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  echo 'Root Rot' ;
            } else {
                  echo 'ไม่สามารถวินิจฉัยโรคได้' ;
            }
      }
?>