<?php
      session_start();
      require_once "backend/config.php";

      if (isset($_POST['result'])) {
            $wound_area = $_POST['wound_area'];
            $contamination = $_POST['contamination'];
            $look = $_POST['look'];
            $wound_nature = $_POST['wound_nature'];
            $wound_shape = $_POST['wound_shape'];
            $wound_color = $_POST['wound_color'];

            if ($contamination == 'no' && $look == 'leaf_wither') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);    
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'widely') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'dried') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'small') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'swell') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'pimple') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'split') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'no') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'sink_in') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'rotten') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_dried' && $wound_nature == 'burnt') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_fall' && $wound_shape == 'spot') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '4' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_fall' && $wound_shape == 'circle') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_fall' && $wound_shape == 'large') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_fall' && $wound_shape == 'scratch') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '4' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_fall' && $wound_shape == 'no') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '4' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_fall' && $wound_shape == 'wither') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '4' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'leaf_fall' && $wound_shape == 'conglobe') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '4' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'no' && $look == 'stem_slow_growing') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '10' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);        
            } else if ($contamination == 'no' && $look == 'leaf_roll') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '10' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);        
            } else if ($contamination == 'no' && $look == 'stem_stunted') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '10' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);        
            } else if ($contamination == 'no' && $look == 'stem_dying') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '10' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);        
            } else if ($contamination == 'no' && $look == 'leaf_rotten') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            }  else if ($contamination == 'dark_brown_powder' && $wound_nature == 'widely') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'dried') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'small') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'swell') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'pimple') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'split') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'no') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'sink_in') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'rotten') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'dark_brown_powder' && $wound_nature == 'burnt') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'black_fungus') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '6' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'widely') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'dried') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'small') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'swell') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'pimple') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'split') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'no') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'sink_in') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'rotten') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'yellow_spore' && $wound_nature == 'burnt') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else  if  ($contamination == 'white_fungus' && $wound_nature == 'widely') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '5' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'dried') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'small') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '5' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'swell') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '5' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'pimple') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '5' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'split') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'no') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '5' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'sink_in') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'rotten') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if  ($contamination == 'white_fungus' && $wound_nature == 'burnt') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '5' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else if ($contamination == 'white_fiber') {
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '8' ");
                  $sql -> execute();
                  $datas =  $sql -> fetchAll(PDO::FETCH_ASSOC);
                  foreach ($datas as $data);  
            } else {
                  echo 'ไม่สามารถวินิจฉัยได้';
            }
      
      }
?>