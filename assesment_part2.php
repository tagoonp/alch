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
      <div data-role="page" id="app_1" style="background: rgb(228,228,228);
background: linear-gradient(7deg, rgba(228,228,228,1) 0%, rgba(247,247,247,1) 35%, rgba(255,255,255,1) 100%);">
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
            <h3 class="mt-3 fw400">ส่วนที่ 2</h3>
            <h5 class="">พฤติกรรมการดื่มและการรับรู้สื่อและผลิตภัณฑ์ (1/3)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-4">
              <div class="card mb-5">
                <div class="card-body">
                  <h5 class="text-cente5 mb-4">ความถี่ในการดื่มในรอบ 12 เดือนที่ผ่านมา</h5>
                  <div class="form-group">
                    <input type="email" name="" value="" data-role="none" class="form-control" placeholder="กรอก E-mail address ถ้ามี เพื่อรับข่าวสารและการติดต่อภายหลัง">
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

      <div data-role="page" id="app_2" style="background: rgb(228,228,228); background: linear-gradient(7deg, rgba(228,228,228,1) 0%, rgba(247,247,247,1) 35%, rgba(255,255,255,1) 100%);">
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
            <h3 class="mt-3 fw400">ส่วนที่ 2</h3>
            <h5 class="">พฤติกรรมการดื่มและการรับรู้สื่อและผลิตภัณฑ์ (2/3)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-center- mb-4">ความถี่ในการมึนเมาในรอบ 12 เดือนที่ผ่านมา</h5>
                  <div class="form-group">
                    <input type="email" name="" value="" data-role="none" class="form-control" placeholder="กรอก E-mail address ถ้ามี เพื่อรับข่าวสารและการติดต่อภายหลัง">
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

      <div data-role="page" id="app_3" style="background: rgb(228,228,228); background: linear-gradient(7deg, rgba(228,228,228,1) 0%, rgba(247,247,247,1) 35%, rgba(255,255,255,1) 100%);">
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
            <h3 class="mt-3 fw400">ส่วนที่ 2</h3>
            <h5 class="">พฤติกรรมการดื่มและการรับรู้สื่อและผลิตภัณฑ์ (3/3)</h5>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-cente5 mb-4">ท่านได้เห็นได้ฟัง สื่อ/โฆษณา/ หรือใช้ผลิตภันฑ์อื่น ๆ ที่เกี่ยวข้องกับสุรา / เครื่องดื่มแอลกอฮอล์ทั้งทางตรงและทางอ้อมในรอบ 1 สัปดาห์บ่อยเพียงใด <small> (ทางอ้อม หมายถึง ผลิตภันฑ์อื่นที่ไม่ใช่เครื่องดื่มแอลกอฮอล์แต่มาจากผู้ผลิตเดียวกัน) </small></h5>
                  <div class="form-group">
                    <input type="email" name="" value="" data-role="none" class="form-control" placeholder="กรอก E-mail address ถ้ามี เพื่อรับข่าวสารและการติดต่อภายหลัง">
                  </div>
                  <div class="form-group mt-4">
                    <div class="row">
                      <div class="col-6">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderPrev()">ก่อนหน้า</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="button" name="button" class="btn btn-outline-primary" data-role="none" onclick="sliderNextPart(3)">ไปส่วนที่ 3</button>
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
