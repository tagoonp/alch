<?php
session_start();
if(!isset($_GET['sid'])){
  session_regenerate_id();
  session_unset();
  session_destroy();
  header('Location: ./destroysession.php');
  die();
}

$current_session = $_GET['sid'];

if($current_session != session_id()){
  session_regenerate_id();
  session_unset();
  session_destroy();
  header('Location: ./destroysession.php');
  die();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>แบบประเมินการตอบสนองและการรู้จำต่อผลิตภัณฑ์ที่เกี่ยวข้องกับธุรกิจเครื่องดื่มแอลกอฮอล์</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <link rel="stylesheet" href="./node_modules/jquery.mobile-1.4.5/jquery.mobile-1.4.5.css">
        <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">
        <link rel="stylesheet" href="./node_modules/sweetalert/dist/sweetalert.css">
        <link rel="stylesheet" href="./node_modules/preload.js/dist/css/preload.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="./assets/custom/css/style.css">
    </head>
    <body>
      <div data-role="page" id="app_1" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="window.location = './'" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> หน้าแรก
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <div class="pt-4">
              <div class="row">
                <div class="col-4 col-sm-2">
                  <img src="./img/boy.png" alt="" style="width: 100px;">
                </div>
                <div class="col-8">
                  <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 1</h3>
                  <h5 class="">ข้อมูลส่วนตัว (1/7)</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card mb-5" style="border: none;">
                <div class="card-body">
                  <h5 class=" mb-4">1. อีเมล์แอดเดรส (ถ้ามี)</h5>
                  <div class="form-group">
                    <input type="email" name="" value="" data-role="none" class="form-control" autofocus placeholder="กรอก E-mail address ถ้ามี เพื่อรับข่าวสารและการติดต่อภายหลัง">
                    <div class="" style="font-size: 0.8em; padding-top: 15px;">
                      ** คุณสามารถข้ามข้อนี้ได้ในกรณีที่ไม่ต้องการรับข่าวสารจากทางโครงการ
                    </div>
                  </div>
                  <div class="form-group mt-4">
                    <div class="row">
                      <div class="col-6">

                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNext()">ถัดไป</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-role="page" id="app_2" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="window.location = './'" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> หน้าแรก
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <div class="pt-4">
              <div class="row">
                <div class="col-4 col-sm-2">
                  <img src="./img/boy.png" alt="" style="width: 100px;">
                </div>
                <div class="col-8">
                  <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 1</h3>
                  <h5 class="">ข้อมูลส่วนตัว (2/7)</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card" style="border: none;">
                <div class="card-body">
                  <h5 class="mb-4">2. เพศ</h5>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6 text-right pl-0">
                        <button type="button" name="button" class="btn btn-outline-secondary" data-role="none" style="width: 130px;">
                          <div class="">
                            <img src="img/barista.png" alt="" class="img-fluid">
                          </div>
                          <div class="text-center">
                            ชาย
                          </div>
                        </button>
                      </div>
                      <div class="col-6">
                        <div class="col-6 pl-1 pr-0">
                          <button type="button" name="button" class="btn btn-outline-secondary" data-role="none" style="width: 130px;">
                            <div class="">
                              <img src="img/chinese.png" alt="" class="img-fluid">
                            </div>
                            <div class="text-center">
                              หญิง
                            </div>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mt-5 pt-3">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNext()">ถัดไป</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-role="page" id="app_3" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="window.location = './'" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> หน้าแรก
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <div class="pt-4">
              <div class="row">
                <div class="col-4 col-sm-2">
                  <img src="./img/boy.png" alt="" style="width: 100px;">
                </div>
                <div class="col-8">
                  <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 1</h3>
                  <h5 class="">ข้อมูลส่วนตัว (3/7)</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card" style="border: none;">
                <div class="card-body">
                  <h5 class=" mb-4">3. อายุ</h5>
                  <div class="form-group">
                    <select class="form-control" name="txtAge" id="txtAge" data-role="none">
                      <option value="">--- เลือกอายุ ---</option>
                      <?php
                      for ($i=10; $i < 100; $i++) {
                        // code...
                        ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group mt-5 pt-3">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNext()">ถัดไป</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-role="page" id="app_4" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="window.location = './'" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> หน้าแรก
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <div class="pt-4">
              <div class="row">
                <div class="col-4 col-sm-2">
                  <img src="./img/boy.png" alt="" style="width: 100px;">
                </div>
                <div class="col-8">
                  <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 1</h3>
                  <h5 class="">ข้อมูลส่วนตัว (4/7)</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card" style="border: none;">
                <div class="card-body">
                  <h5 class=" mb-4">4. ที่อยู่ปัจจุบัน</h5>
                  <div class="form-group">
                    <select class="form-control" name="txtAge" id="txtAge" data-role="none">
                      <option value="">--- เลือกจังหวัด ---</option>
                      <?php
                      for ($i=10; $i < 100; $i++) {
                        // code...
                        ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="txtAge" id="txtAge" data-role="none">
                      <option value="">--- เลือกอำเภอ ---</option>
                      <?php
                      for ($i=10; $i < 100; $i++) {
                        // code...
                        ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="txtAge" id="txtAge" data-role="none">
                      <option value="">--- เลือกตำบล ---</option>
                      <?php
                      for ($i=10; $i < 100; $i++) {
                        // code...
                        ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group mt-5 pt-3">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNext()">ถัดไป</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-role="page" id="app_5" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="window.location = './'" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> หน้าแรก
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <div class="pt-4">
              <div class="row">
                <div class="col-4 col-sm-2">
                  <img src="./img/boy.png" alt="" style="width: 100px;">
                </div>
                <div class="col-8">
                  <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 1</h3>
                  <h5 class="">ข้อมูลส่วนตัว (5/7)</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card" style="border: none;">
                <div class="card-body">
                  <h5 class="mb-4">5. ระดับการศึกษา</h5>
                  <div class="form-group"  id="radiogroup-status">
                      <div class="selectgroup selectgroup-pills">
                        <div class="row">
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="1" class="selectgroup-input" data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ไม่ได้รับการศึกษา</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="2" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ประถมศึกษา</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="3" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">มัธยมศึกษา</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="4" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">อนุปริญญา/ปวส/ปวช</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="5" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ปริญญาตรีหรือเทียบเท่า</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="6" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">สูงกกว่าปริญญาตรี</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">อื่น ๆ</div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group mt-4">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNext()">ถัดไป</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-role="page" id="app_6" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="window.location = './'" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> หน้าแรก
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <div class="pt-4">
              <div class="row">
                <div class="col-4 col-sm-2">
                  <img src="./img/boy.png" alt="" style="width: 100px;">
                </div>
                <div class="col-8">
                  <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 1</h3>
                  <h5 class="">ข้อมูลส่วนตัว (6/7)</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card" style="border: none;">
                <div class="card-body">
                  <h5 class="mb-4">6. อาชีพ</h5>
                  <div class="form-group"  id="radiogroup-status">
                      <div class="selectgroup selectgroup-pills">
                        <div class="row">
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="1" class="selectgroup-input" data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">เกษตรกรรม/ประมง</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="2" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ค้าขาย/เจ้าของกิจการ</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="3" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ผู้ใช้แรงงาน/รับจ้างทั่วไป</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="4" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">พนักงานบริษัทเอกชน</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="5" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">พ่อบ้าน/แม่บ้าน</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="6" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">เกษียณ</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="7" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">นักเรียน/นักศึกษา</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="8" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">อยู่ระหว่างหางาน</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">อื่น ๆ</div>

                        </div>
                      </div>
                  </div>
                  <div class="form-group mt-4">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNext()">ถัดไป</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-role="page" id="app_7" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="window.location = './'" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> หน้าแรก
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <div class="pt-4">
              <div class="row">
                <div class="col-4 col-sm-2">
                  <img src="./img/boy.png" alt="" style="width: 100px;">
                </div>
                <div class="col-8">
                  <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 1</h3>
                  <h5 class="">ข้อมูลส่วนตัว (7/7)</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card" style="border: none;">
                <div class="card-body">
                  <h5 class="mb-4">7. รายได้ต่อเดือน</h5>
                  <div class="form-group"  id="radiogroup-status">
                      <div class="selectgroup selectgroup-pills">
                        <div class="row">
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="1" class="selectgroup-input" data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">น้อยกว่า 5,000 บาท</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="2" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">5,000 – 10,000 บาท</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="3" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">10,001 – 20,000 บาท</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="4" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">มากกว่า 20,000 บาท</div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group mt-4">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNextPart(2)">ไปส่วนที่ 2</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <input type="hidden" name="txtSession" id="txtSession" value="<?php echo $current_session; ?>">

    </body>
    <script type="text/javascript" src="./node_modules/jquery.mobile-1.4.5/js/jquery.min.js"></script>
    <script type="text/javascript" src="./node_modules/jquery.mobile-1.4.5/js/jquery.mobile-1.4.5.js"></script>
    <script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="./node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="./node_modules/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="./node_modules/preload.root.js/dist/js/preload.js"></script>

    <script type="text/javascript" src="./assets/custom/js/config.js" ></script>
    <!-- <script type="text/javascript" src="./assets/custom/js/config.js" ></script>
    <script type="text/javascript" src="./assets/custom/js/function.js" ></script> -->
    <script>

        var init_app = 1

        $(document).ready(function(){
          console.log(current_session);
            preload.hide()
        })

        $(function(){
          $('#btnCreateSession').click(function(){
            window.localStorage.setItem(conf.prefix + 'session', $('#txtSession').val())
            window.location = 'assesment_part1?sid=' + $('#txtSession').val()
          })
        })

        function sliderPrev(){
          init_app = init_app - 1;
          $.mobile.changePage( "#app_" + init_app, {
            transition: "slide",
            reverse: true,
            changeHash: false
          });
        }

        function sliderNext(){
          init_app = init_app + 1;
          $.mobile.changePage( "#app_" + init_app, {
            transition: "slide",
            reverse: false,
            changeHash: false
          });
        }

        function sliderNextPart(pid){
          window.location = 'assesment_part2?sid=' + $('#txtSession').val()
        }
    </script>
</html>
