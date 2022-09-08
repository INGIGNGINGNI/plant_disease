<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example bg-light">
    <?php 
    require_once "backend/config.php";
    $sql = $conn -> query("SELECT * FROM plants ");
                  $sql -> execute();
                  $datas = $sql -> fetchAll(PDO::FETCH_ASSOC);
                  
                  foreach ($datas as $data_show) { 
                    ?>
    <div class="card my-4">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="uploads/<?= $data_show['img'] ?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-result"><?= $data_show['name']." (".$data_show['enname'].") " ?></h5>
                    <article>
                        <p class="card-text"><?= $data_show['symptom'] ?></p>
                    </article>
                    <button class="btn btn-primary my-4 collapsed" type="button" id="<?= $data_show['id'] ?>"
                        data-bs-toggle="collapse" data-bs-target="#answerCollapse<?= $data_show['id'] ?>"
                        aria-expanded="false" aria-controls="answerCollapse<?= $data_show['id'] ?>">ดูเพิ่มเติม</button>
                </div>
            </div>
        </div>
    </div>

    <div class="collapse" id="answerCollapse<?= $data_show['id'] ?>">
        <div class="card card-body">
            <div class="col my-2">
                <h4 class="text-answer">สาเหตุของโรค</h4>
                <p class="text-answer-p" align="justify"><?=$data_show['cause']?></p>
            </div>
            <div class="col my-2">
                <h4 class="text-answer">ลักษณะอาการของโรค</h4>
                <p class="text-answer-p" align="justify"><?=$data_show['symptom']?></p>
            </div>
            <div class="col my-2">
                <h4 class="text-answer">การป้องกันและวิธีการรักษา</h4>
                <p class="text-answer-p" align="justify"><?=$data_show['remedy']?></p>
            </div>
            <div class="col my-2">
                <h4 class="text-answer">ข้อควรระวัง <span class='text-muted'>(เกี่ยวกับโรคหรือการแพร่ระบาด)</span></h4>
                <p class="text-answer-p" align="justify"><?=$data_show['caution']?></p>
            </div>
        </div>
    </div>


    <?php } ?>

    ?>

    <script src="assets/js/main.js"></script>
</body>

</html>