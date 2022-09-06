<div class='row g-3 mt-2'>
                        <div class="accordion" id="accordion">
                              <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?= $data_show[$i][0]['id'] ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $data_show[$i][0]['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $data_show[$i][0]['id'] ?>">
                                          <?= $data_show[$i][0]['name']." (".$data_show[$i][0]['enname'].") " ?>
                                    </button>
                                    </h2>
                                    <div id="collapse<?= $data_show[$i][0]['id'] ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?= $data_show[$i][0]['id'] ?>" data-bs-parent="#accordion">
                                          <div class="accordion-body">
                                                <div class='row  mx-2 mt-1 mb-4'>
                                                      <div class="text-center">
                                                            <img src="uploads/<?= $data_show[$i][0]['img'] ?>" class="rounded"  width="40%">
                                                      </div>
                                                      <div class='col-md-6'>
                                                            <label class='form-label text-result' for='name'>ชื่อโรค</label>
                                                            <input type='text' class='form-control' name="name" readonly value="<?= $data_show[$i][0]['name']." (".$data_show[$i][0]['enname'].") " ?>">
                                                      </div>
                                                      <div class='col-md-6'>
                                                            <label class='form-label text-result' for='cause'>สาเหตุของโรค</label>
                                                            <input type='text' class='form-control' name="cause" readonly value="<?= $data_show[$i][0]['cause'] ?>">
                                                      </div>
                                                      <div class='col-12'>
                                                            <label class='form-label text-result' for='symptom'>อาการของโรค</label>
                                                            <textarea type='text' class='form-control' name="symptom" readonly><?= $data_show[$i][0]['symptom'] ?></textarea>
                                                      </div>
                                                      <div class='col-12'>
                                                            <label class='form-label text-result' for='remedy'>วิธีการรักษา</label>
                                                            <textarea type='text' class='form-control' name="remedy" readonly><?= $data_show[$i][0]['remedy'] ?></textarea>
                                                      </div>
                                                      <div class='col-12'>
                                                            <label class='form-label text-result' for='caution'>ข้อควรระวัง <span class='text-muted'>(เกี่ยวกับโรคหรือการแพร่ระบาด)</span></label>
                                                            <textarea type='text'  class='form-control' name="caution" readonly><?= $data_show[$i][0]['caution'] ?></textarea>
                                                      </div>
                                                </div>       
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

                <!-- //////////////////////////////////////////////////////////////////////////////////////// -->

                  <div class='row g-3 mt-2'>
                        <div class="accordion" id="accordion">
                              <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $data_show[$i][0]['id'] ?>">
                                          <?= $data_show[$i][0]['name']." (".$data_show[$i][0]['enname'].") " ?>
                                    </button>
                                    </h2>
                                    <div id="collapse<?= $data_show[$i][0]['id'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                          <div class="accordion-body">
                                                <div class='row  mx-2 mt-1 mb-4'>
                                                      <div class="text-center">
                                                            <img src="uploads/<?= $data_show[$i][0]['img'] ?>" class="rounded"  width="40%">
                                                      </div>
                                                      <div class='col-md-6'>
                                                            <label class='form-label text-result' for='name'>ชื่อโรค</label>
                                                            <input type='text' class='form-control' name="name" readonly value="<?= $data_show[$i][0]['name']." (".$data_show[$i][0]['enname'].") " ?>">
                                                      </div>
                                                      <div class='col-md-6'>
                                                            <label class='form-label text-result' for='cause'>สาเหตุของโรค</label>
                                                            <input type='text' class='form-control' name="cause" readonly value="<?= $data_show[$i][0]['cause'] ?>">
                                                      </div>
                                                      <div class='col-12'>
                                                            <label class='form-label text-result' for='symptom'>อาการของโรค</label>
                                                            <textarea type='text' class='form-control' name="symptom" readonly><?= $data_show[$i][0]['symptom'] ?></textarea>
                                                      </div>
                                                      <div class='col-12'>
                                                            <label class='form-label text-result' for='remedy'>วิธีการรักษา</label>
                                                            <textarea type='text' class='form-control' name="remedy" readonly><?= $data_show[$i][0]['remedy'] ?></textarea>
                                                      </div>
                                                      <div class='col-12'>
                                                            <label class='form-label text-result' for='caution'>ข้อควรระวัง <span class='text-muted'>(เกี่ยวกับโรคหรือการแพร่ระบาด)</span></label>
                                                            <textarea type='text'  class='form-control' name="caution" readonly><?= $data_show[$i][0]['caution'] ?></textarea>
                                                      </div>
                                                </div>       
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>