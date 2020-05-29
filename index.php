<?php
session_start();
$current_session = session_id();
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
      <div data-role="page" id="app" style="background: rgb(228,228,228);
background: linear-gradient(7deg, rgba(228,228,228,1) 0%, rgba(247,247,247,1) 35%, rgba(255,255,255,1) 100%);">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center pt-5">
              <h4>แอพพลิเคชั่น</h4>
              <h3 style="font-weight: 300 !important;">แบบประเมินการตอบสนองและการรู้จำต่อผลิตภัณฑ์ที่เกี่ยวข้องกับธุรกิจเครื่องดื่มแอลกอฮอล์</h3>
            </div>
            <div class="col-12 pt-4">
              <div class="card mb-5">
                <div class="card-body">
                  <h4 class="text-center">คำอธิบาย <?php echo $current_session; ?></h4>
                  <p>
                    <ol>
                      <li>แบบประเมินนี้ แบ่งออกเป็น 5 ส่วน ได้แก่ 1) ข้อมูลส่วนบุคคล 2) พฤติกรรมการดื่มและการรับรู้สื่อ 3) อัตราการตอบสนองต่อการรู้จำ และ 4) ข้อคำถามและความคิดเห็นอื่น ๆ</li>
                      <li>ในส่วนของแบบสอบถามเพื่อประเมินอัตราการตอบสนองต่อการรู้จำ ระบบจะทำการสุ่มภาพจำนวน 3 ชุด ชุดละ 10 ภาพ และท่านจะต้องตอบว่า ภาพที่ท่านมีความเกี่ยวข้องต่อผลิตภัณฑ์สุราหรือเครื่องดื่มแอลกอฮอล์หรือไม่ โดยแต่ละภาพท่านจะมีเวลาพิจารณาไม่เกิน 10 วินาที</li>
                    </ol>
                  </p>
                  <div class="row">
                    <div class="col-12 text-center">
                      <button type="button" name="button" class="btn btn-outline-primary" data-role="none" id="btnCreateSession">เริ่มทำแบบประเมิน</button>
                    </div>
                  </div>
                  <input type="hidden" name="txtSession" id="txtSession" value="<?php echo $current_session; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

        $(document).ready(function(){
          console.log(current_session);
          preload.hide()
        })

        $(function(){
          $('#btnCreateSession').click(function(){

            if(current_session != null){
              // console.log('a');
              window.location = 'createsession?sid=' + current_session
            }else{
              // console.log('b');
              // window.localStorage.setItem(conf.prefix + 'session', $('#txtSession').val())
              // window.location = 'assesment_part1?sid=' + $('#txtSession').val()
              window.location = 'createsession'
            }

          })
        })
    </script>
</html>
