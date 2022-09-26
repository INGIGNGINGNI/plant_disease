<?php
      require_once "config.php";

      if(isset($_POST['id'])) {
            $id = $_POST['id'];
            $select = $conn -> query("SELECT * FROM plants WHERE id = $id");
            $select -> execute();
            $datas = $select -> fetchAll();
            foreach ($datas as $data) { ?>
                  <form action="update.php" method="post" enctype="multipart/form-data" class="needs-validation m-0" novalidate>
                        <div class="row g-3">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4 col-sm-12 align-content-end">
                                          <img width="100%" src="../uploads/<?= $data['img']; ?>" id="previewImg" alt="">
                                          <label for="img" class="col-form-label text-result"></label>
                                          <input type="file" class="form-control" id="imgInput" name="img" >
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6 col-sm-12">
                                          <input type="text" hidden value="<?= $data['id']; ?>" required class="form-control" name="id">
                                          <input type="hidden" value="<?= $data['img']; ?>" required class="form-control" name="img2">
                                          <label for="firstname" class="col-form-label text-result">ชื่อของโรค (ไทย) :</label>
                                          <input type="text" value="<?= $data['name']; ?>" required class="form-control" name="name">
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                          <label for="firstname" class="col-form-label text-result">ชื่อของโรค (อังกฤษ) :</label>
                                          <input type="text" value="<?= $data['enname']; ?>" required class="form-control" name="enname">
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                          <label for="firstname" class="col-form-label text-result">สาเหตุของโรค :</label>
                                          <textarea type="text" class="form-control" name="cause"  required><?= $data['cause']; ?></textarea>
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                          <label for="firstname" class="col-form-label text-result">อาการของโรค :</label>
                                          <textarea type="text" class="form-control" name="symptom"  required><?= $data['symptom']; ?></textarea>
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                          <label for="firstname" class="col-form-label text-result">การแพร่ระบาด :</label>
                                          <textarea type="text" class="form-control" name="scourge"  required><?= $data['scourge']; ?></textarea>
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                          <label for="firstname" class="col-form-label text-result">วิธีการรักษา :</label>
                                          <textarea type="text" class="form-control" name="remedy"  required><?= $data['remedy']; ?></textarea>
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                          <label for="firstname" class="col-form-label text-result">ข้อควรระวัง :</label>
                                          <textarea type="text" class="form-control" name="caution"  required><?= $data['caution']; ?></textarea>
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                          <label for="firstname" class="col-form-label text-result">ไม้ประดับที่พบ :</label>
                                          <textarea type="text" class="form-control" name="type"  required><?= $data['type']; ?></textarea>
                                          <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                    </div>
                              </div>
                                    
                              <div class="col-md-12 col-sm-12 my-4 me-auto">
                                    <hr>
                                    <button type="submit" name="update" class="btn btn-success">อัพเดต</button>
                                    <a href="index.php" class="btn btn-secondary">กลับ</a> 
                              </div>
                        </div>
                  </form>
            <?php } 
      } ?>
