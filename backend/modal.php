<style>
      label {
            display: flex;
      }
      .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem;
            display: flex;
      }
</style>

<!-- add Modal -->
<div class="modal fade" id="plantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                        <div class="modal-header mb-2">
                              <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลโรคของไม้ประดับ</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                              <form action="insert.php" method="post" enctype="multipart/form-data" class="needs-validation m-0" novalidate>
                                    <div class="row">
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="name" class="col-form-label">ชื่อของโรค (ไทย) :</label>
                                                <input type="text" class="form-control" name="name" required>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="enname" class="col-form-label">ชื่อของโรค (อังกฤษ) :</label>
                                                <input type="text" class="form-control" name="enname" required>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 mb-3">
                                                <label for="cause" class="col-form-label">สาเหตุของโรค :</label>
                                                <textarea type="text" class="form-control" name="cause" required></textarea>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 mb-3">
                                                <label for="symptom" class="col-form-label">อาการของโรค :</label>
                                                <textarea type="text" class="form-control" name="symptom" required></textarea>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 mb-3">
                                                <label for="scourge" class="col-form-label">การแพร่ระบาด :</label>
                                                <textarea type="text" class="form-control" name="scourge" required></textarea>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 mb-3">
                                                <label for="remedy" class="col-form-label">วิธีการรักษา :</label>
                                                <textarea type="text" class="form-control" name="remedy" required></textarea>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="caution" class="col-form-label">ข้อควรระวัง :</label>
                                                <textarea type="text" class="form-control" name="caution" required></textarea>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="type" class="col-form-label">ไม้ประดับที่พบ :</label>
                                                <textarea type="text" class="form-control" name="type" required></textarea>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mb-3">
                                                <label for="img" class="col-form-label">รูปภาพ :</label>
                                                <input type="file" class="form-control" name="img" id="imgInput" required>
                                                <div class="invalid-feedback">โปรดกรอกข้อมูลในฟิลด์นี้</div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 mt-4 pt-1 mb-3">
                                                <img id="previewImg" width="100%" alt="">
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="submit" name="submit" class="btn btn-success">บันทึก</button>
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
<!-- end add Modal -->

<!--show  Data-->
<div class="container mb-5">
      <div class="collapse " id="showData">
            <div class="card card-body p-5">
                  <h4 class="text-success py-4 me-auto fw-bold">ข้อมูลโรคในไม้ประดับทั้งหมด</h4>
                  <table class="table table-hover  mt-4">
                        <thead>
                              <tr>
                                    <th scope="col">ชื่อโรค</th>
                                    <th scope="col">สาเหตุของโรค</th>
                                    <th scope="col">อาการของโรค</th>
                                    <th scope="col">วิธีการรักษา</th>
                                    <!-- <th scope="col">ข้อควรระวัง</th> -->
                                    <!-- <th scope="col">ไม้ประดับที่พบ</th> -->
                                    <!-- <th scope="col">รูปภาพ</th> -->
                                    <th scope="col"></th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php 
                                    $stmt = $conn -> query("SELECT * FROM plants WHERE status='1' ");
                                    $stmt -> execute();
                                    $plants = $stmt -> fetchAll();
            
                                    if (!$plants) {
                                    echo "<p><td colspan='6' class='text-center'>ไม่มีข้อมูล</td></p>";
                                    } else {
                                    foreach($plants as $plant)  {  
                              ?>
                              <tr>
                                    <td width="270px"><?php echo $plant['name']; ?> (<?php echo $plant['enname']; ?>)</td>
                                    <td ><p class="test2"><?php echo $plant['cause']; ?></p></td>
                                    <td><p class="test2"><?php echo $plant['symptom']; ?></p></td>
                                    <td><p class="test2"><?php echo $plant['remedy']; ?></p></td>
                                    <!-- <td><?php echo $plant['caution']; ?></td>  -->
                                    <!-- <td><?php echo $plant['type']; ?></td> -->
                                    <!-- <td width="200px"><img class="rounded" width="30%"
                                                src="../uploads/<?php echo $plant['img']; ?>" alt=""></td> -->
                                    <td width="200px">
                                          <a href="image.php?id=<?php echo $plant['id']; ?>" class="btn btn-success btn-sm mx-1">รูปภาพ</a>
                                          <a href="edit.php?id=<?php echo $plant['id']; ?>" class="btn btn-warning btn-sm mx-1">แก้ไข</a>
                                          <a data-id="<?php echo $plant['id']; ?>" href="?delete=<?php echo $plant['id']; ?>"
                                                class="btn btn-danger btn-sm mx-1 delete-btn">ลบ</a>
                                    </td>
                              </tr>
                        </tbody>
                        <?php }  } ?>
                  </table>
            </div>
      </div>
</div>
<!-- end show Data -->

<!-- restore Data -->
<div class="container mb-5">
      <div class="collapse " id="restoreData">
            <div class="card card-body p-5">
                  <h4 class="text-success py-4 me-auto fw-bold">ข้อมูลที่สามารถคืนค่าได้</h4>
                  <table class="table table-hover  mt-4">
                        <thead>
                              <tr>
                                    <th scope="col">ชื่อโรค</th>
                                    <th scope="col">สาเหตุของโรค</th>
                                    <th scope="col">อาการของโรค</th>
                                    <th scope="col">วิธีการรักษา</th>
                                    <!-- <th scope="col">ข้อควรระวัง</th> -->
                                    <!-- <th scope="col">ไม้ประดับที่พบ</th> -->
                                    <!-- <th scope="col">รูปภาพ</th> -->
                                    <th scope="col"></th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php 
                                    $stmt = $conn -> query("SELECT * FROM plants WHERE status='0' ");
                                    $stmt -> execute();
                                    $plants = $stmt -> fetchAll();
            
                                    if (!$plants) {
                                    echo "<p><td colspan='6' class='text-center'>ไม่มีข้อมูล</td></p>";
                                    } else {
                                    foreach($plants as $plant)  {  
                              ?>
                              <tr>
                                    <td width="270px"><?php echo $plant['name']; ?> (<?php echo $plant['enname']; ?>)</td>
                                    <td ><p class="test2"><?php echo $plant['cause']; ?></p></td>
                                    <td><p class="test2"><?php echo $plant['symptom']; ?></p></td>
                                    <td><p class="test2"><?php echo $plant['remedy']; ?></p></td>
                                    <!-- <td><?php echo $plant['caution']; ?></td>  -->
                                    <!-- <td><?php echo $plant['type']; ?></td> -->
                                    <!-- <td width="200px"><img class="rounded" width="30%"
                                                src="../uploads/<?php echo $plant['img']; ?>" alt=""></td> -->
                                    <td width="200px">
                                          <a data-id="<?php echo $plant['id']; ?>" href="?delete=<?php echo $plant['id']; ?>"
                                                class="btn btn-warning btn-sm me-6 restore-btn">คืนค่าข้อมูล</a>
                                          <!-- <a data-id="<?php echo $plant['id']; ?>" href="?delete=<?php echo $plant['id']; ?>"
                                                class="btn btn-danger btn-sm delete-btn">ลบ</a> -->
                                    </td>
                              </tr>
                        </tbody>
                        <?php }  } ?>
                  </table>
            </div>
      </div>
</div>
<!-- end restore Data -->

<script>
      $('.restore-btn').click(function(e) {
            var plantId = $(this).data('id');
            e.preventDefault();
            restoreConfirm(plantId);
      })

      function restoreConfirm(plantId) {
            Swal.fire({
                  title: 'แจ้งเตือน',
                  text: 'ต้องการคืนค่ารายการนี้หรือไม่',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#bebebe',
                  confirmButtonText: "ตกลง",
                  cancelButtonText: "ยกเลิก",
                  preConfirm: function() {
                        return new Promise(function(resolve) {
                              $.ajax({
                                          url: 'index.php',
                                          type: 'GET',
                                          data: 'restore=' + plantId
                                    })
                                    .done(function() {
                                          Swal.fire({
                                                icon: 'success',
                                                title: 'สำเร็จ',
                                                text: 'คืนค่าข้อมูลสำเร็จแล้ว',
                                                timer: '2000'
                                          }).then(() => {
                                                document.location.href =
                                                      'index.php';
                                          })
                                    })
                                    .fail(function() {
                                          Swal.fire('เกิดข้อผิดพลาด ',
                                                'โปรดลองใหม่อีกครั้ง', 'error'
                                          );
                                          window.location.reload();
                                    })
                        })
                  }
            })
      }
</script>

<!-- logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h5 class="modal-title" id="logoutModalLabel">แจ้งเตือน</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <h5>คุณต้องการออกจากระบบใช่หรือไม่</h5>
                        </div>
                        <div class="modal-footer">
                              <a href="index.php?logout='1' " class="btn btn-success">ยืนยัน</a>
                              <button type="button" class="btn btn-light" data-bs-dismiss="modal">ปิด</button>
                        </div>
                  </div>
            </div>
      </div>
<!-- end logout Modal -->