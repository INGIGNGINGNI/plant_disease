<style>
label {
    display: flex;
}

/* .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem;
            display: flex;
      } */
.tabcontent {
    display: none;
}

i {
    font-size: 20px;
    color: fff;
    padding: 8px;
}
</style>

<!-- add Modal -->
<div class="modal fade" id="plantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header mb-2">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลโรคในไม้ประดับ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="insert.php" method="post" enctype="multipart/form-data" class="needs-validation m-0"
                    novalidate>
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
            <div class="row justify-content-between">
                <div class="col-4 me-auto">
                    <h4 class="text-success text-start fw-bold">ข้อมูลโรคในไม้ประดับทั้งหมด</h4>
                </div>
                <div class="col-3 ms-auto">
                    <button type="button" class="tablinks btn btn-outline-primary me-2" onclick="openCity(event, 'showDatas')">ข้อมูลทั้งหมด</button>
                    <button type="button" class="tablinks btn btn-outline-primary me-2" onclick="openCity(event, 'restoreData')">ข้อมูลที่คืนค่าได้</button>
                </div>
            </div>

            <table id="showDatas" class="tabcontent table table-hover  mt-5">
                  <thead>
                        <tr>
                              <th scope="col">ชื่อโรค</th>
                              <th scope="col">สาเหตุของโรค</th>
                              <th scope="col">อาการของโรค</th>
                              <th scope="col">วิธีการรักษา</th>
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
                              <td width="250px"><?php echo $plant['name']; ?> (<?php echo $plant['enname']; ?>)</td>
                              <td><p class="test2"><?php echo $plant['cause']; ?></p></td>
                              <td><p class="test2"><?php echo $plant['symptom']; ?></p></td>
                              <td><p class="test2"><?php echo $plant['remedy']; ?></p></td>
                              <td width="220px">
                                    <a href="image.php?id=<?php echo $plant['id']; ?>" class="btn btn-success btn-sm mx-1">
                                          <i class="fi fi-rr-picture"></i></a>
                                          
                                    <!-- <a href="edit.php?id=<?php echo $plant['id']; ?>"  class="btn btn-warning btn-sm mx-1"><i class="fi fi-rr-edit"></i></a> -->
                                    <button type="button" id="<?php echo $plant['id']; ?>" data-bs-toggle="modal" data-bs-target="#editModal" 
                                          class="btn btn-warning btn-sm mx-1 fetchEdit"><i class="fi fi-rr-edit"></i></button>

                                    <a data-id="<?php echo $plant['id']; ?>" href="?delete=<?php echo $plant['id']; ?>" class="btn btn-danger btn-sm mx-1 delete-btn"><i class="fi fi-rr-trash"></i></a>
                              </td>
                        </tr>
                  </tbody>
                <?php }  } ?>
            </table>

            <table id="restoreData" class="tabcontent table table-hover  mt-5">
                  <thead>
                        <tr>
                              <th scope="col">ชื่อโรค</th>
                              <th scope="col">สาเหตุของโรค</th>
                              <th scope="col">อาการของโรค</th>
                              <th scope="col">วิธีการรักษา</th>
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
                              <td><p class="test2"><?php echo $plant['cause']; ?></p></td>
                              <td><p class="test2"><?php echo $plant['symptom']; ?></p></td>
                              <td><p class="test2"><?php echo $plant['remedy']; ?></p></td>
                              <td width="220px">
                                    <a data-id="<?php echo $plant['id']; ?>" href="?delete=<?php echo $plant['id']; ?>"
                                          class="btn btn-warning btn-sm me-6 mx-1 restore-btn">
                                          <i class="fi fi-rr-time-past"></i></a>
                                    <a data-id="<?php echo $plant['id']; ?>" href="?lastDelete=<?php echo $plant['id']; ?>"
                                          class="btn btn-danger btn-sm mx-1 lastDelete-btn">
                                          <i class="fi fi-rr-cross-circle"></i></a>
                              </td>
                        </tr>
                  </tbody>
                <?php }  } ?>
            </table>

        </div>
    </div>
</div>
<!-- end show Data -->

<!-- logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">แจ้งเตือน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
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


<!-- edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header mb-2">
                <h5 class="modal-title" id="editModalLabel">แก้ไขข้อมูลโรคในไม้ประดับ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="detail">

            </div>
        </div>
    </div>
</div>
<!-- end edit Modal -->

<script>
$(document).ready(function() {
    $('.fetchEdit').click(function() {
        var id = $(this).attr("id");
        $.ajax({
            url: "selectData.php",
            method: "post",
            data: {
                id: id
            },
            success: function(data) {
                $('#detail').html(data);
                $('#dataModal').modal('show');
            }
        });
        1
    });
});
</script>

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

<script>
$('.lastDelete-btn').click(function(e) {
    var plantId = $(this).data('id');
    e.preventDefault();
    lastDeleteConfirm(plantId);
})

function lastDeleteConfirm(plantId) {
    Swal.fire({
        title: 'แจ้งเตือน',
        text: 'ต้องการลบรายการนี้หรือไม่ หากลบแล้วจะไม่สามารถกู้คืนได้',
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
                        data: 'lastDelete=' + plantId
                    })
                    .done(function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'สำเร็จ',
                            text: 'ลบข้อมูลสำเร็จแล้ว',
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

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "inline-table";
    evt.currentTarget.className += " active";
}
</script>