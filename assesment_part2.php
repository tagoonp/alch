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
              <div class="col-6" onclick="sliderNextPart(1)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 1
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 2</h3>
            <h5 class="">พฤติกรรมการดื่มและการรับรู้สื่อและผลิตภัณฑ์ (1/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card mb-5">
                <div class="card-body">
                  <h5 class="text-cente5 mb-4">1. ความถี่ในการดื่มในรอบ 12 เดือนที่ผ่านมา</h5>
                  <div class="form-group"  id="radiogroup-status">
                      <div class="selectgroup selectgroup-pills">
                        <div class="row">
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="1" class="selectgroup-input" data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ไม่ดื่ม</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="2" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ทุกวัน</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="3" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">5-6 วัน/สัปดาห์</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="4" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">3-4 วัน/สัปดาห์</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="5" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">1-2 วัน/สัปดาห์</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="6" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">2-3 วัน/เดือน</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">1-2 วัน/เดือน</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">7-11 วัน/ปี</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">4-6 วัน/ปี</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">2-3 วัน/ปี</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">1 วัน/ปี</div>
                        </div>
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
              <div class="col-6" onclick="sliderNextPart(1)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 1
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 2</h3>
            <h5 class="">พฤติกรรมการดื่มและการรับรู้สื่อและผลิตภัณฑ์ (2/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-center- mb-4">2. ความถี่ในการมึนเมาในรอบ 12 เดือนที่ผ่านมา</h5>
                  <div class="form-group"  id="radiogroup-status">
                      <div class="selectgroup selectgroup-pills">
                        <div class="row">
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="1" class="selectgroup-input" data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ไม่มึนเมา</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="2" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ทุกวัน</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="3" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">5-6 วัน/สัปดาห์</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="4" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">3-4 วัน/สัปดาห์</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="5" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">1-2 วัน/สัปดาห์</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="6" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">2-3 วัน/เดือน</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">1-2 วัน/เดือน</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">7-11 วัน/ปี</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">4-6 วัน/ปี</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">2-3 วัน/ปี</div>
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="99" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">1 วัน/ปี</div>
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

      <div data-role="page" id="app_3" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="sliderNextPart(1)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 1
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 2</h3>
            <h5 class="">พฤติกรรมการดื่มและการรับรู้สื่อและผลิตภัณฑ์ (3/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-cente5 mb-4">3.	ในชีวิตประจำวันช่วง 3 เดือนที่ผ่านมา ท่านรับข้อมูลข่าวสารผ่านสื่อ รวมทั้งโซเชียลมีเดียบ่อยเพียงใด</h5>
                  <div class="form-group"  id="radiogroup-status">
                      <div class="selectgroup selectgroup-pills">
                        <div class="row">
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="1" class="selectgroup-input" data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ทุกวัน (7 วันต่อสัปดาห์)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="2" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">เกือบทุกวัน (5 - 6 วันต่อสัปดาห์)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="3" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">วันเว้นวัน (3 - 4 วันต่อสัปดาห์)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="4" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ทุกสัปดาห์ (1 – 2 วันต่อสัปดาห์)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="5" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ทุกเดือน (1 – 3 วันต่อเดือน)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="6" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">นาน ๆ ครั้ง (น้อยกว่าเดือนละครั้ง)</div>
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

      <div data-role="page" id="app_4" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="sliderNextPart(1)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 1
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 2</h3>
            <h5 class="">พฤติกรรมการดื่มและการรับรู้สื่อและผลิตภัณฑ์ (4/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-cente5 mb-4">4.	ในช่วง 3 เดือนที่ผ่านมา ท่านรับข้อมูล/เห็น/ได้รับข่าวสารของสื่อหรือผลิตภัณฑ์ที่เกี่ยวกับสุราหรือเครื่องดื่มแอลกอฮอล์ บ่อยเพียงใด</h5>
                  <div class="form-group"  id="radiogroup-status">
                      <div class="selectgroup selectgroup-pills">
                        <div class="row">
                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="1" class="selectgroup-input" data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ทุกวัน (7 วันต่อสัปดาห์)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="2" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">เกือบทุกวัน (5 - 6 วันต่อสัปดาห์)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="3" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">วันเว้นวัน (3 - 4 วันต่อสัปดาห์)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="4" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ทุกสัปดาห์ (1 – 2 วันต่อสัปดาห์)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="5" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">ทุกเดือน (1 – 3 วันต่อเดือน)</div>

                          <div class="col-2 col-sm-1">
                              <label class="selectgroup-item">
                                  <input type="radio" name="icon-input-status" value="6" class="selectgroup-input"  data-role="none">
                                  <span class="selectgroup-button selectgroup-button-icon btn-icon" style="width: 25px; height: 38px;"><i class="fas fa-check"></i></span>
                              </label>
                          </div>
                          <div class="col-10 col-sm-5" style="padding-top: 12px;">นาน ๆ ครั้ง (น้อยกว่าเดือนละครั้ง)</div>
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

      <div data-role="page" id="app_5" style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="sliderNextPart(1)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 1
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400" style="color: rgb(7, 175, 136);">ส่วนที่ 2</h3>
            <h5 class="">พฤติกรรมการดื่มและการรับรู้สื่อและผลิตภัณฑ์ (5/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-cente5 mb-4">5.	ช่องทางการรับทราบ/รับสารข่าวสาร/สื่อในรอบ 3 เดือน (ตอบได้มากกว่า 1 ข้อ)</h5>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">โทรทัศน์</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">วิทยุ</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">หนังสือพิมพ์</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">ื่อกลางแจ้ง (ป้าย คัทเอาท์ แบนเนอร์)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">เฟสบุ๊ค (Facebook)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">ไลน์ (Line)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">อินสตาแกรม (Instagram)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">ทวิตเตอร์ (Twitter)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">ยูทูป (Youtube)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">เว็บไซต์ (Website)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-switch mt-2 pl-0">
                      <input type="checkbox" name="icon-input-q12-1" class="custom-switch-input" data-role="none">
                      <span class="custom-switch-indicator"><i class="fas fa-check"></i></span>
                      <span class="custom-switch-description">อื่น ๆ</span>
                    </label>
                  </div>
                  <div class="form-group mt-4">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNextPart(3)">ถัดไป</button>
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
          window.location = 'assesment_part' + pid + '?sid=' + $('#txtSession').val()
        }
    </script>
</html>
