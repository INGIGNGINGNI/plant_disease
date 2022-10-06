<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วินิจฉัยโรค - Plant Disease Diagnosis</title>

    <!-- Favicons -->
    <link href="assets/img/favicon_1.png" rel="icon">
    <link href="assets/img/apple-touch-icon_1.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/diagnosis_style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <style>
        button:disabled {
            color: black;
            /* background-color: whitesmoke; */
        }
        .check.select {
            max-width: 1700px;
        }
    </style>

</head>
<body onload>
    <script>
        $(document).ready(function(){
            document.querySelector('#wound_area').innerHTML = `บนใบ`;
            document.querySelector('#contamination').innerHTML = `ไม่มีสิ่งปะปน`;
            document.querySelector('#look').innerHTML = `ต้นปกติ`;
            document.querySelector('#wound_nature').innerHTML = `ไม่มีแผล`;
            document.querySelector('#wound_shape').innerHTML = `ไม่มีแผล`;
            document.querySelector('#wound_color').innerHTML = `สีปกติ (ไม่มีแผล)`;
        });
    </script>
    <header id="header" class="fixed-top">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                <img src="assets/img/web-logo.png" class="bi me-2" width="350px">
                <ul
                    class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0 navbar order-last order-lg-0">
                    <li class="nav-item"><a href="home.php" class="nav-link px-2 link-secondary ">หน้าแรก</a></li>
                    <li><a href="diagnosis.php" class="nav-link active px-2 link-dark">วินิจฉัยโรค</a></li>
                    <li><a href="noresult.php" class="nav-link px-2 link-dark">ผลการวินิจฉัยโรค</a></li>
                </ul>
                <div class="col-md-4 text-end">
                    <a href="#footer" class="btn btn-outline-success me-2">ติดต่อเรา</a>
                    <!-- <a href="loginform.php" class="btn btn-success">Admin Page</a> -->
                </div>
            </header>
        </div>
    </header>

    <main id="main">
        <div class="homeheader">
            <div class="align">
                <div class="titlehome">
                    <h4>Web application for diagnosis of ornamental plant diseases </h4>
                </div>
                <div class="titlehome2">
                    <h4>เว็บแอปพลิเคชันเพื่อการวินิจฉัยโรคในไม้ประดับ</h4>
                </div>
            </div>
        </div>

        <section id="services" class="services">
            <div class="container check select" data-aos="fade-up">
                <div class="section-title">
                    <h2>ลักษณะอาการที่เกิด</h2>
                    <h5>โปรดเลือกลักษณะอาการที่เกิดขึ้นกับไม้ประดับของคุณให้ครบถ้วนเพื่อทำการวินิจฉัยโรค</h5>
                </div>
                <hr>
                <div class="row g-3">
                    <div class="col-md-8 mt-5 mx-4">
                        <div class="accordion">
                            <div class="accordion-tabs"> 
                                <button disabled class="accordion-tab accordion-active" data-actab-group="0" data-actab-id="0">บริเวณที่เกิดแผล</button>
                                <button disabled class="accordion-tab" data-actab-group="0" data-actab-id="1">สิ่งปะปน</button>
                                <button disabled class="accordion-tab" data-actab-group="0" data-actab-id="2">ลักษณะของต้น</button>
                                <button disabled class="accordion-tab" data-actab-group="0" data-actab-id="3">ลักษณะของแผล</button>
                                <button disabled class="accordion-tab" data-actab-group="0" data-actab-id="4">รูปร่างของแผล</button>
                                <button disabled class="accordion-tab" data-actab-group="0" data-actab-id="5">สีของแผล</button>
                            </div>
                            <div class="accordion-content">
                                <form action="result.php" method="post" class="needs-validation">
                                    <article class="accordion-item accordion-active" data-actab-group="0" data-actab-id="0">
                                        <h4 class="accordion-item__label accordion-text">บริเวณที่เกิดแผล</h4>
                                        <p class="accordion-item__label accordion-desc">
                                            ไม้ประดับของคุณมีแผลหรือลักษณะที่ผิดปกติไปจากเดิมที่บริเวณใดของต้น</p>
                                        <div class="accordion-item__container">
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_area" id="on_leaf" value="บนใบ" checked required />
                                                <label class="btn btn-outline-success" for="on_leaf">บนใบ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_area" id="under_leaf" value="ใต้ใบ" required />
                                                <label class="btn btn-outline-success" for="under_leaf">ใต้ใบ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_area" id="trunk" value="ลำต้น" required />
                                                <label class="btn btn-outline-success" for="trunk">ลำต้น</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_area" id="stub" value="โคนต้น" required />
                                                <label class="btn btn-outline-success" for="stub">โคนต้น</label>
                                            </div>
                                            <hr class="mt-4">
                                            <div class="col-12 d-sm-flex justify-content-end mt-4">
                                                <ul class="nav col-md-4 justify-content-end  d-flex">
                                                    <li class="accordion-tab" data-actab-group="0" data-actab-id="1">
                                                    <img src="assets/img/right-arrow.png" width="42" height="42"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="accordion-item" data-actab-group="0" data-actab-id="1">
                                        <h4 class="accordion-item__label accordion-text">สิ่งปะปน</h4>
                                        <p class="accordion-item__label accordion-desc">ในบริเวณบนแผลหรือรอบ ๆ
                                            แผลที่เกิดขึ้นบนไม้ประดับของคุณนั้นมีสิ่งปะปนที่ผิดปกติใด</p>
                                        <div class="accordion-item__container">
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="contamination" id="no" value="ไม่มีสิ่งปะปน" checked required />
                                                <label class="btn btn-outline-success" for="no">ไม่มีสิ่งปะปน</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="contamination" id="white_fungus" value="ราสีขาว" required />
                                                <label class="btn btn-outline-success" for="white_fungus">ราสีขาว</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="contamination" id="black_fungus" value="ราสีดำ" required />
                                                <label class="btn btn-outline-success" for="black_fungus">ราสีดำ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="contamination" id="white_fiber" value="เส้นใยสีขาว" required />
                                                <label class="btn btn-outline-success" for="white_fiber">เส้นใยสีขาว</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="contamination" id="dark_brown_powder" value="ผงสีน้ำตาลดำ" required />
                                                <label class="btn btn-outline-success" for="dark_brown_powder">ผงสีน้ำตาลดำ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="contamination" id="yellow_spore" value="สปอร์สีเหลือง" required />
                                                <label class="btn btn-outline-success" for="yellow_spore">สปอร์สีเหลือง</label>
                                            </div>
                                            <hr class="mt-4">
                                            <div class="row">
                                                <div class="col-6 d-sm-flex justify-content-start mt-2">
                                                    <ul class="nav col-md-4 justify-content-start  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="0">
                                                            <img src="assets/img/left-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6 d-sm-flex justify-content-end mt-2">
                                                    <ul class="nav col-md-4 justify-content-end  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="2">
                                                            <img src="assets/img/right-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="accordion-item" data-actab-group="0" data-actab-id="2">
                                        <h4 class="accordion-item__label accordion-text">ลักษณะของต้น</h4>
                                        <p class="accordion-item__label accordion-desc">หลังจากที่เกิดอาการผิดปกติกับไม้ประดับของคุณในตอนนี้ไม้ประดับนั้นมีลักษณะลำต้นหรือใบอย่างไร</p>
                                        <div class="accordion-item__container">
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="normally" value="ต้นปกติ" checked required />
                                                <label class="btn btn-outline-success" for="normally">ต้นปกติ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="leaf_dried" value="ใบเริ่มแห้ง" required />
                                                <label class="btn btn-outline-success" for="leaf_dried">ใบเริ่มแห้ง</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="leaf_wither" value="ใบแห้งและเหี่ยวเฉา" required />
                                                <label class="btn btn-outline-success" for="leaf_wither">ใบแห้งและเหี่ยวเฉา</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="leaf_rotten" value="ใบเน่า" required />
                                                <label class="btn btn-outline-success" for="leaf_rotten">ใบเน่า</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="leaf_roll" value="ใบม้วนงอ" required />
                                                <label class="btn btn-outline-success" for="leaf_roll">ใบม้วนงอ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="leaf_fall" value="ใบร่วงหล่น" required />
                                                <label class="btn btn-outline-success" for="leaf_fall">ใบร่วงหล่น</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="stem_dying" value="ต้นเริ่มตาย" required />
                                                <label class="btn btn-outline-success" for="stem_dying">ต้นเริ่มตาย</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="stem_slow growing" value="ต้นเจริญเติบโตช้า" required />
                                                <label class="btn btn-outline-success" for="stem_slow growing">ต้นเจริญเติบโตช้า</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="look" id="stem_stunted" value="ต้นแคระแกร็น" required />
                                                <label class="btn btn-outline-success" for="stem_stunted">ต้นแคระแกร็น</label>
                                            </div>
                                            <hr class="mt-4">
                                            <div class="row">
                                                <div class="col-6 d-sm-flex justify-content-start mt-2">
                                                    <ul class="nav col-md-4 justify-content-start  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="1">
                                                            <img src="assets/img/left-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6 d-sm-flex justify-content-end mt-2">
                                                    <ul class="nav col-md-4 justify-content-end  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="3">
                                                            <img src="assets/img/right-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="accordion-item" data-actab-group="0" data-actab-id="3">
                                        <h4 class="accordion-item__label accordion-text">ลักษณะของแผล</h4>
                                        <p class="accordion-item__label accordion-desc">แผลหรือลักษณะผิดปกติที่เกิดขึ้นกับไม้ประดับของคุณนั้นมีลักษณะอย่างไร</p>
                                        <div class="accordion-item__container">
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="no_wn" value="ไม่มีแผล" checked required />
                                                <label class="btn btn-outline-success" for="no_wn">ไม่มีแผล</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="widely" value="แผลกว้าง" required />
                                                <label class="btn btn-outline-success" for="widely">แผลกว้าง</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="dried" value="แผลแห้ง" required />
                                                <label class="btn btn-outline-success" for="dried">แผลแห้ง</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="swell" value="แผลพองนูน" required />
                                                <label class="btn btn-outline-success" for="swell">แผลพองนูน</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="pimple" value="แผลเป็นตุ่มเล็กๆ" required />
                                                <label class="btn btn-outline-success" for="pimple">แผลเป็นตุ่มเล็กๆ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="split" value="แผลปริแตก" required />
                                                <label class="btn btn-outline-success" for="split">แผลปริแตก</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="sink_in" value="แผลบุ๋มลึก" required />
                                                <label class="btn btn-outline-success" for="sink_in">แผลบุ๋มลึก</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="rotten" value="แผลเน่า" required />
                                                <label class="btn btn-outline-success" for="rotten">แผลเน่า</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="burnt" value="แผลไหม้" required />
                                                <label class="btn btn-outline-success" for="burnt">แผลไหม้</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_nature" id="small" value="แผลเล็ก" required />
                                                <label class="btn btn-outline-success" for="small">แผลเล็ก</label>
                                            </div>
                                            <hr class="mt-4">
                                            <div class="row">
                                                <div class="col-6 d-sm-flex justify-content-start mt-2">
                                                    <ul class="nav col-md-4 justify-content-start  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="2">
                                                            <img src="assets/img/left-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6 d-sm-flex justify-content-end mt-2">
                                                    <ul class="nav col-md-4 justify-content-end  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="4">
                                                            <img src="assets/img/right-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="accordion-item" data-actab-group="0" data-actab-id="4">
                                        <h4 class="accordion-item__label accordion-text">รูปร่างของแผล</h4>
                                        <p class="accordion-item__label accordion-desc">แผลหรือลักษณะผิดปกติที่เกิดขึ้นกับไม้ประดับของคุณนั้นมีรูปร่างอย่างไร</p>
                                        <div class="accordion-item__container">
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_shape" id="no_ws" value="ไม่มี" checked required />
                                                <label class="btn btn-outline-success" for="no_ws">ไม่มีแผล</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_shape" id="spot" value="รูปร่างเป็นจุด" required />
                                                <label class="btn btn-outline-success" for="spot">รูปร่างเป็นจุด</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_shape" id="large" value="รูปร่างใหญ่" required />
                                                <label class="btn btn-outline-success" for="large">รูปร่างใหญ่</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_shape" id="circle" value="รูปร่างเป็นวงกลม" required />
                                                <label class="btn btn-outline-success" for="circle">รูปร่างเป็นวงกลม</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_shape" id="conglobe" value="รูปร่างเป็นก้อนกลม" required />
                                                <label class="btn btn-outline-success" for="conglobe">รูปร่างเป็นก้อนกลม</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_shape" id="scratch" value="รูปร่างเป็นรอยยาว" required />
                                                <label class="btn btn-outline-success" for="scratch">รูปร่างเป็นรอยยาว</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_shape" id="wither" value="รูปร่างเหี่ยวเฉา" required />
                                                <label class="btn btn-outline-success" for="wither">รูปร่างเหี่ยวเฉา</label>
                                            </div>
                                            <hr class="mt-4">
                                            <div class="row">
                                                <div class="col-6 d-sm-flex justify-content-start mt-2">
                                                    <ul class="nav col-md-4 justify-content-start  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="3">
                                                            <img src="assets/img/left-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6 d-sm-flex justify-content-end mt-2">
                                                    <ul class="nav col-md-4 justify-content-end  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="5">
                                                            <img src="assets/img/right-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="accordion-item" data-actab-group="0" data-actab-id="5">
                                        <h4 class="accordion-item__label accordion-text">สีของแผล</h4>
                                        <p class="accordion-item__label accordion-desc">
                                            แผลหรือลักษณะผิดปกติที่เกิดขึ้นกับไม้ประดับของคุณนั้นมีสีอะไร</p>
                                        <div class="accordion-item__container">
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_color" id="normal_color" value="สีปกติ (ไม่มีแผล)" checked required />
                                                <label class="btn btn-outline-success" for="normal_color">สีปกติ (ไม่มีแผล)</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_color" id="caramel" value="สีเหลืองอมน้ำตาล" required />
                                                <label class="btn btn-outline-success" for="caramel">สีเหลืองอมน้ำตาล</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_color" id="red_brown" value="สีน้ำตาลแดง" required />
                                                <label class="btn btn-outline-success" for="red_brown">สีน้ำตาลแดง</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_color" id="black_brown" value="สีน้ำตาลดำ" required />
                                                <label class="btn btn-outline-success" for="black_brown">สีน้ำตาลดำ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_color" id="brown" value="สีน้ำตาล" required />
                                                <label class="btn btn-outline-success" for="brown">สีน้ำตาล</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_color" id="black" value="สีดำ" required />
                                                <label class="btn btn-outline-success" for="black">สีดำ</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_color" id="yellow" value="สีเหลือง" required />
                                                <label class="btn btn-outline-success" for="yellow">สีเหลือง</label>
                                            </div>
                                            <div class="btn-group my-2 mx-2">
                                                <input type="radio" class="btn-check" name="wound_color" id="purple" value="สีม่วง" required />
                                                <label class="btn btn-outline-success" for="purple">สีม่วง</label>
                                            </div>
                                            <hr class="mt-4">
                                            <div class="row">
                                                <div
                                                    class="col-sm-4 d-flex justify-content-start mt-2 col-md-6 d-sm-flex justify-content-start mt-2">
                                                    <ul class="nav col-md-4 justify-content-start  d-flex">
                                                        <li class="accordion-tab" data-actab-group="0" data-actab-id="4">
                                                            <img src="assets/img/left-arrow.png" width="42" height="42">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4 d-flex justify-content-end mt-2 col-md-6 d-sm-flex justify-content-end mt-2">
                                                    <input type="submit" class="btn btn-primary mx-2" name="result" value="แสดงผลการวินิจฉัย"></input>
                                                    <!-- <button type="button" id="clearRadio" class="btn btn-secondary">ล้างค่า</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-5">
                        <h5 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-success fw-bold">ลักษณะอาการที่เลือก</span>
                        </h5>
                        <div class="list-group">
                            <button type="button" class="accordion-tab list-group-item list-group-item-action d-flex gap-3 py-3" data-actab-group="0" data-actab-id="0">
                                <img src="assets/img/plant.png" width="32" height="32" class="rounded-circle flex-shrink-0">
                                <div class="d-flex g-2 w-50 justify-content-between">
                                    <div>
                                        <h5 class="mb-0 text-result">บริเวณที่เกิดแผล</h5>
                                    </div>
                                </div>
                                <h6 class="opacity-75" id="wound_area"></h6>
                            </button>
                            <button type="button" class="accordion-tab list-group-item list-group-item-action d-flex gap-3 py-3" data-actab-group="0" data-actab-id="1">
                                <img src="assets/img/plant.png" width="32" height="32" class="rounded-circle flex-shrink-0">
                                <div class="d-flex g-2 w-50 justify-content-between">
                                    <div>
                                        <h5 class="mb-0 text-result">สิ่งปะปน</h5>
                                    </div>
                                </div>
                                <h6 class="opacity-75" id="contamination"></h6>
                            </button>
                            <button type="button" class="accordion-tab list-group-item list-group-item-action d-flex gap-3 py-3" data-actab-group="0" data-actab-id="2">
                                <img src="assets/img/plant.png" width="32" height="32" class="rounded-circle flex-shrink-0">
                                <div class="d-flex g-2 w-50 justify-content-between">
                                    <div>
                                        <h5 class="mb-0 text-result">ลักษณะของต้น</h5>
                                    </div>
                                </div>
                                <h6 class="opacity-75" id="look"></h6>
                            </button>
                            <button type="button" class="accordion-tab list-group-item list-group-item-action d-flex gap-3 py-3" data-actab-group="0" data-actab-id="3">
                                <img src="assets/img/plant.png" width="32" height="32" class="rounded-circle flex-shrink-0">
                                <div class="d-flex g-2 w-50 justify-content-between">
                                    <div>
                                        <h5 class="mb-0 text-result">ลักษณะของแผล</h5>
                                    </div>
                                </div>
                                <h6 class="opacity-75" id="wound_nature"></h6>
                            </button>
                            <button type="button" class="accordion-tab list-group-item list-group-item-action d-flex gap-3 py-3" data-actab-group="0" data-actab-id="4">
                                <img src="assets/img/plant.png" width="32" height="32" class="rounded-circle flex-shrink-0">
                                <div class="d-flex g-2 w-50 justify-content-between">
                                    <div>
                                        <h5 class="mb-0 text-result">รูปร่างของแผล</h5>
                                    </div>
                                </div>
                                <h6 class="opacity-75" id="wound_shape"></h6>
                            </button>
                            <button type="button" class="accordion-tab list-group-item list-group-item-action d-flex gap-3 py-3" data-actab-group="0" data-actab-id="5">
                                <img src="assets/img/plant.png" width="32" height="32" class="rounded-circle flex-shrink-0">
                                <div class="d-flex g-2 w-50 justify-content-between">
                                    <div>
                                        <h5 class="mb-0 text-result">สีของแผล</h5>
                                    </div>
                                </div>
                                <h6 class="opacity-75" id="wound_color"></h6>
                            </button>
                        </div>
                        <!-- <div class="d-flex justify-content-end mt-3">
                            <button type="button" class="btn btn-primary">แสดงผลการวินิจฉัย</button>
                        </div> -->
                    </div>
                </div>
            </div>
    </main>

    <?php include "footer.php" ;?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/diagnosis_script.js"></script>
    <script src="assets/js/showSelected.js"></script>
    <script src="assets/js/valueValidation.js"></script>
    <script src="assets/js/clearSelected.js"></script>

</body>

</html>