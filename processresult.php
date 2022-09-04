<?php
      require_once "backend/config.php";
      $id_tmp = array();
      $have_data = false;
      $datas = array();
      $data_show = array();
      
      if (isset($_POST['result'])) {
            $wound_area = $_POST['wound_area'];
            $contamination = $_POST['contamination'];
            $look = $_POST['look'];
            $wound_nature = $_POST['wound_nature'];
            $wound_shape = $_POST['wound_shape'];
            $wound_color = $_POST['wound_color'];

            echo "<div class='row g-3 mb-4'>
            <div class='card p-0'>
                  <div class='card-header'>
                        ลักษณะที่เกิดขึ้นกับไม้ประดับของคุณ
                  </div>
                  <div class='card-body p-32'>
                        <div class='row my-12'>
                              <div class='col-md-3'>
                                    <label class='form-label text-result'>บริเวณที่เกิดแผล</label>
                                    <input type='text' class='form-control form-control2' readonly value=' ".$wound_area." ' >
                              </div>
                              <div class='col-md-3'>
                                    <label class='form-label text-result'>สิ่งปะปน</label>
                                    <input type='text' class='form-control form-control2' readonly value=' ".$contamination." ' >
                              </div>
                              <div class='col-md-3'>
                                    <label class='form-label text-result'>ลักษณะของต้น</label>
                                    <input type='text' class='form-control form-control2' readonly value=' ".$look." ' >
                              </div>
                              <div class='col-md-3'>
                                    <label class='form-label text-result'>ลักษณะของแผล</label>
                                    <input type='text' class='form-control form-control2' readonly value=' ".$wound_nature." ' >
                              </div>
                              <div class='col-md-3'>
                                    <label class='form-label text-result'>รูปร่างของแผล</label>
                                    <input type='text' class='form-control form-control2' readonly value=' ".$wound_shape." ' >
                              </div>
                              <div class='col-md-3'>
                                    <label class='form-label text-result'>สีของแผล</label>
                                    <input type='text' class='form-control form-control2' readonly value=' ".$wound_color." ' >
                              </div>
                        </div>
                  </div>
            </div>          
            </div><hr>" ;

            // rule base #1
            if ($contamination == 'ราสีดำ') {
                  // Leaf_blight
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '6' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #2
            if ($contamination == 'เส้นใยสีขาว') {
                  // Black_spot
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '8' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #3
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look == 'ใบแห้งและเหี่ยวเฉา') {
                  // Leaf_spot
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #4
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเน่า') {
                  // Antracnose
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #5
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ต้นเริ่มตาย') {
                  // Stem_canker
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '10' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #6
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ต้นแคระแกร็น') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #7
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบม้วนงอ') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #8
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ต้นเจริญเติบโตช้า') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #9
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลกว้าง') {
                  // Leaf_spot
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #10
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลแห้ง') {
                  // Blast
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #11
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลพองนูน') {
                  // Rust
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #12
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลเป็นตุ่มเล็กๆ') {
                  // Rust
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #13
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลเล็ก') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #14
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลปริแตก') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #15
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'ไม่มีแผล') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #16
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลบุ๋มลึก') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #17
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลเน่า') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #18
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบเริ่มแห้ง' && $wound_nature == 'แผลไหม้') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #19
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบร่วงหล่น' && $wound_shape == 'รูปร่างเป็นจุด') {
                  // Downy_mildew
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '4' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #20
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบร่วงหล่น' && $wound_shape == 'รูปร่างเป็นวงกลม') {
                  // Antracnose
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #21
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบร่วงหล่น' && $wound_shape == 'รูปร่างใหญ่') {
                  // Antracnose
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '3' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            //  rule base #22
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบร่วงหล่น' && $wound_shape == 'รูปร่างเป็นรอยยาว') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #23
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบร่วงหล่น' && $wound_shape == 'ไม่มีแผล') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #24
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบร่วงหล่น' && $wound_shape == 'รูปร่างเหี่ยวเฉา') {
                  // Not disease
                  $have_data = false;
            }
            //  rule base #25
            if ($contamination == 'ไม่มีสิ่งปะปน' && $look = 'ใบร่วงหล่น' && $wound_shape == 'รูปร่างเป็นก้อนกลม') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #26
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลกว้าง') {
                  // Leaf_spot
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #27
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลเล็ก') {
                  // Leaf_spot
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '1' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #28
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลปริแตก') {
                  // Rust
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #29
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลแห้ง') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #30
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลพองนูน') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #31
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลเป็นตุ่มเล็กๆ') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #32
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'ไม่มีแผล') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #33
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลบุ๋มลึก') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #34
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลเน่า') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #35
            if ($contamination == 'ผงสีน้ำตาลดำ' && $wound_nature == 'แผลไหม้') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #36
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลกว้าง') {
                  // Blast
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #37
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลแห้ง') {
                  // Blast
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '7' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #38
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลพองนูน') {
                  // Rust
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #39
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลเป็นตุ่มเล็กๆ') {
                  // Rust
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #40
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลเล็ก') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #41
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลปริแตก') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #42
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'ไม่มีแผล') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #43
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลบุ๋มลึก') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #44
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลเน่า') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #45
            if ($contamination == 'สปอร์สีเหลือง' && $wound_nature == 'แผลไหม้') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #46
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลแห้ง') {
                  // Root_rot
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #47
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลปริแตก') {
                  // Rust
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '2' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #48
            if ($contamination == 'ราสีขาว' && $wound_nature == 'ไม่มีแผล') {
                  // Powdery_mildew
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '5' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #49
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลบุ๋มลึก') {
                  // Root_rot
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
                  if (!in_array($datas[0]['id'], $id_tmp)) {
                        array_push($id_tmp, $datas[0]['id']);
                        array_push($data_show, $datas);
                  }
            }
            // rule base #50
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลเน่า') {
                  // Root_rot
                  $sql = $conn -> query("SELECT * FROM plants WHERE id = '9' ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  $have_data = true;
            // if (!in_array($datas[0]['id'], $id_tmp)) {
            //             $id_tmp.array_push($id_tmp, $datas[0]['id']);
            //             array_push($data_show, $datas);
            //       }
            }
            // rule base #51
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลกว้าง') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #52
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลเล็ก') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #53
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลพองนูน') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #54
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลเป็นตุ่มเล็กๆ') {
                  // Not disease
                  $have_data = false;
            }
            // rule base #55
            if ($contamination == 'ราสีขาว' && $wound_nature == 'แผลไหม้') {
                  // Not disease
                  $have_data = false;
            }
            if ($have_data) { 
                  echo count($data_show);
                  // print_r($data_show);
                  // print_r($id_tmp);
                  for($i=0;$i < count($data_show);$i++){ 
                        // echo $data_show[$i]['id'];
                  ?>
                  <div class='row g-3 mt-4'>
                        <div class='col-md-6'>
                              <label class='form-label text-result'>ชื่อโรค</label>
                              <input type='text' id="name" class='form-control' readonly value="<?= $data_show[$i][0]['name']." (".$data_show[$i][0]['enname'].") " ?>">
                        </div>
                        <div class='col-md-6'>
                              <label class='form-label text-result'>สาเหตุของโรค</label>
                              <input type='text' id="cause" class='form-control' readonly value="<?= $data_show[$i][0]['cause'] ?>">
                        </div>
                        <div class='col-12'>
                              <label class='form-label text-result'>อาการของโรค</label>
                              <textarea type='text' id="symptom" class='form-control' readonly><?= $data_show[$i][0]['symptom'] ?></textarea>
                        </div>
                        <div class='col-12'>
                              <label class='form-label text-result'>วิธีการรักษา</label>
                              <textarea type='text' id="remedy" class='form-control' readonly><?= $data_show[$i][0]['remedy'] ?></textarea>
                        </div>
                        <div class='col-12'>
                              <label class='form-label text-result'>ข้อควรระวัง <span class='text-muted'>(เกี่ยวกับโรคหรือการแพร่ระบาด)</span></label>
                              <textarea type='text' id="caution" class='form-control' readonly><?= $data_show[$i][0]['caution'] ?></textarea>
                        </div>
                  </div>       
                  <?php } ?>
      
            <?php } else { ?> 
            <table class='table table-success'>
                  <thead>
                        <tbody>
                              <tr>
                                    <td colspan='6' class='text-center'>ไม้ประดับของคุณไม่เป็นโรค</td>
                              </tr>
                        </tbody>
                  </thead>
            </table>
            <?php } 

      } else {
            echo "<table class='table table-success'>
                              <thead>
                                    <tbody>
                                          <tr>
                                                <td colspan='6' class='text-center'>ไม่สามารถแสดงผลการวินิจฉัยได้</td>
                                          </tr>
                                    </tbody>
                              </thead>
                        </table>";
      }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">

    <style>
    body {
        font-family: 'Bai Jamjuree', sans-serif;
        color: #444444;
    }

    .text-result {
        font-size: 18px;
        font-weight: bold;
        color: #528d61;
    }

    .result {
        max-width: 1000px;
    }

    .form-control2:disabled,
    .form-control2[readonly] {
        background-color: rgba(82, 141, 97, 0.2);
        /* background-color:  rgba(155, 196, 137, 0.3); */
        opacity: 1;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 26px;
    }

    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 1.5rem;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x) * -.5);
        margin-left: calc(var(--bs-gutter-x) * -.5);
    }
    </style>
</head>

<body>

    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('textarea').each(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) +
                'px;overflow-y:hidden');
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
            console.log(this.scrollHeight);
        });
    });
    </script>
    <script>

    </script>
</body>

</html>