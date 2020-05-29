<?php
session_start();
require_once('./config.inc.php');

if(!isset($_GET['sid'])){
  // Create new session
  $_SESSION['id'] = session_id();
  $strSQL = "INSERT INTO ts2x_session (sid, cdatetime, udatetime) VALUES ('".$_SESSION['id']."', '$sysdatetime', '$sysdatetime')";
  $result = mysqli_query($conn, $strSQL);
  header('Location: ./assesment_part1?sid='.$_SESSION['id']);
  die();
}else{
  // Check session in database
  $sid = mysqli_real_escape_string($conn, $_GET['sid']);
  $strSQL = "SELECT * FROM ts2x_session WHERE sid = '$sid'";
  $result = mysqli_query($conn, $strSQL);
  if(($result) && (mysqli_num_rows($result) > 0)){
    // If continue session
    $data = mysqli_fetch_assoc($result);
    if($data['finish_status'] == 'Y'){
      header('Location: ./assesment_success?sid='.$_GET['sid']);
    }else{
      header('Location: ./assesment_part1?sid='.$_GET['sid']);
    }
    mysqli_close($conn);
    die();
  }else{
    $_SESSION['id'] = session_id();
    $strSQL = "INSERT INTO ts2x_session (sid, cdatetime, udatetime) VALUES ('".$_SESSION['id']."', '$sysdatetime', '$sysdatetime')";
    $result = mysqli_query($conn, $strSQL);
    ?>
    <input type="hidden" name="txtSession" id="txtSession" value="<?php echo $_SESSION['id']; ?>">
    <script type="text/javascript" src="./node_modules/jquery.mobile-1.4.5/js/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/custom/js/config.js" ></script>
    <script type="text/javascript">
      window.localStorage.setItem(conf.prefix + 'session', $('#txtSession').val())
      window.location = 'assesment_part1?sid=' + $('#txtSession').val()
    </script>
    <?php
    mysqli_close($conn);
    die();
  }

}
?>
