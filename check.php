<?php
      require_once "backend/config.php";
      if (isset($_POST['check'])) {
            $wound_area = $_POST['wound_area'];
            $contamination = $_POST['contamination'];
            $look = $_POST['look'];
            $wound_nature = $_POST['wound_nature'];
            $wound_shape = $_POST['wound_shape'];
            $wound_color = $_POST['wound_color']; 

            echo "<form action='processresult.php' method='post'>
                  <div class='row my-12'>
                        <div class='col-md-3'>
                              <label class='form-label text-result'>บริเวณที่เกิดแผล</label>
                              <input type='text' class='form-control form-control2' readonly value=' ".$wound_area." '>
                        </div>
                        <div class='col-md-3'>
                              <label class='form-label text-result'>สิ่งปะปน</label>
                              <input type='text' class='form-control form-control2' readonly value=' ".$contamination." '>
                        </div>
                        <div class='col-md-3'>
                              <label class='form-label text-result'>ลักษณะของต้น</label>
                              <input type='text' class='form-control form-control2' readonly value=' ".$look." '>
                        </div>
                        <div class='col-md-3'>
                              <label class='form-label text-result'>ลักษณะของแผล</label>
                              <input type='text' class='form-control form-control2' readonly value=' ".$wound_nature." '>
                        </div>
                        <div class='col-md-3'>
                              <label class='form-label text-result'>รูปร่างของแผล</label>
                              <input type='text' class='form-control form-control2' readonly value=' ".$wound_shape." '>
                        </div>
                        <div class='col-md-3'>
                              <label class='form-label text-result'>สีของแผล</label>
                              <input type='text' class='form-control form-control2' readonly value=' ".$wound_color." '>
                        </div>
                  </div>
                  <hr class='mt-4'>
                  <div class='row'>
                        <div class='col-sm-4 d-flex justify-content-start mt-2 col-md-6 d-sm-flex justify-content-start mt-2'>
                              <ul class='nav col-md-4 justify-content-start  d-flex'>
                                    <li class='accordion-tab' data-actab-group='0' data-actab-id='4'><img
                                                src='assets/img/left-arrow.png' width='42' height='42'></li>
                              </ul>
                        </div>
                        <div class='col-sm-4 d-flex justify-content-end mt-2 col-md-6 d-sm-flex justify-content-end mt-2'>
                              <input type='submit' class='btn btn-primary mx-2' name='result' value='แสดงผลการวินิจฉัย'></input>
                              <button type='button' id='clearRadio' class='btn btn-secondary'>ล้างค่า</button>
                        </div>
                  </div>
            </form>";
      }
?>