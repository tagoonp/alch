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
      <div data-role="page" id="app_1"  style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="sliderNextPart(3)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 3
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400  text-success">ส่วนที่ 4</h3>
            <h5 class="">ข้อคำถามและความคิดเห็นอื่น ๆ (1/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card mb-5">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-8">
                      <h5 class="text-left mb-4">1. ท่านคิดว่าผลิตภัณฑ์อื่น ๆ ที่ไม่ใช่สุราของผู้ผลิตผลิตภัณฑ์ที่เกี่ยวข้องกับสุรา/แอลกอฮอล์ มีผลต่อการส่งเสริมการขายหรือผลประโยชน์เชิงพานิชต่อผลิตภัณฑ์ที่สุรา/แอลกอฮอล์หรือไม่</h5>
                    </div>
                    <div class="col-12 col-md-4">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6 pr-1">
                            <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none"><i class="fas fa-times text-danger fa-3x"></i><br>ไม่ส่งผล</button>
                          </div>
                          <div class="col-6 pl-1">
                            <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none"><i class="fas fa-check text-success fa-3x"></i><br>ส่งผล</button>
                          </div>
                        </div>
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

      <div data-role="page" id="app_2"  style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="sliderNextPart(3)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 3
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400  text-success">ส่วนที่ 4</h3>
            <h5 class=""> ข้อคำถามและความคิดเห็นอื่น ๆ (2/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="mb-4">2. ท่านคิดว่าสื่อ/โฆษณา/ผลิตภัณฑ์อื่น ๆ ที่ไม่ใช่สุราแต่เป็นผู้ผลิตเดียวกันกับเจ้าของผลิตภัณฑ์ที่เกี่ยวข้องกับสุรา/แอลกอฮอล์ มีผลต่อการเลือกซื้อ หรือทำให้ท่านเลือกซื้อผลิตภัณฑ์ที่สุรา/แอลกอฮอล์เพิ่มขึ้นหรือไม่</h5>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6 pr-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none"><i class="fas fa-times text-danger fa-3x"></i><br>ไม่ส่งผล</button>
                      </div>
                      <div class="col-6 pl-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none"><i class="fas fa-check text-success fa-3x"></i><br>ส่งผล</button>
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

      <div data-role="page" id="app_3"  style="background: rgb(218, 218, 218);">
        <div class="bg-white">
          <div class="container text-left mb-3 pt-3 pb-4">
            <div class="row">
              <div class="col-6" onclick="sliderNextPart(3)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 3
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400  text-success">ส่วนที่ 4</h3>
            <h5 class=""> ข้อคำถามและความคิดเห็นอื่น ๆ (3/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="mb-4">3. ระดับความง่ายต่อการใช้งาน/ตอบข้อคำถามของแบบสอบถามนี้</h5>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6 pl-1 pr-1 pb-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none" style="height: 100px;">ง่าย</button>
                      </div>
                      <div class="col-6 pl-1 pr-1 pb-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none" style="height: 100px;">ปานกลาง</button>
                      </div>
                      <div class="col-6 pl-1 pr-1 pb-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none" style="height: 100px;">ยาก</button>
                      </div>
                      <div class="col-6 pl-1 pr-1 pb-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none" style="height: 100px;">ยากที่สุด</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mt-5">
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
              <div class="col-6" onclick="sliderNextPart(3)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 3
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400  text-success">ส่วนที่ 4</h3>
            <h5 class=""> ข้อคำถามและความคิดเห็นอื่น ๆ (4/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card">
                <div class="card-body">
                  <h5 class=" mb-4">4. ความเหมาะสมของจำนวนข้อของแบบสอบถาม (มากจนเกินความจำเป็นหรือน้อยจนรู้สึกไม่มีประโยชน์ต่อการศึกษาหรือไม่)</h5>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-4 pr-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none" style="height: 100px;">น้อย</button>
                      </div>
                      <div class="col-4 pl-1 pr-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none" style="height: 100px;">พอดี</button>
                      </div>
                      <div class="col-4 pl-1 pr-1">
                        <button type="button" name="button" class="btn btn-outline-secondary btn-block" data-role="none" style="height: 100px;">เยอะ</button>
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
              <div class="col-6" onclick="sliderNextPart(3)" style="cursor: pointer;">
                <i class="fas fa-chevron-left"></i> ส่วนที่ 3
              </div>
              <div class="col-6 text-right">
                ภาพรวมการตอบ
              </div>
            </div>
            <h3 class="mt-3 fw400  text-success">ส่วนที่ 4</h3>
            <h5 class=""> ข้อคำถามและความคิดเห็นอื่น ๆ (5/5)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-center- mb-4">5. ท่านมีความคิดเห็นอย่างไรต่อสื่อ/โฆษณา ชองผลิตภัณฑ์อื่น ๆ ที่เกี่ยวข้องกับสุรา/แอลกอฮอล์ในปัจจุบัน หรือความคิดเห็นอื่น ๆ (ถ้ามี)</h5>
                  <div class="form-group">
                    <textarea name="" value="" data-role="none" class="form-control" style="height: 300px;"></textarea>
                  </div>
                  <div class="form-group mt-4">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNext()">จบการทำแบบสอบถาม</button>
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
