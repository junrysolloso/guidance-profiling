<?php
    include_once '../../pages/static/config.php';
    include_once '../../pages/static/function.php';
    if(isset($_GET['AddUser'])) {
      htmlentities(extract($_GET));
      $st = $conn->prepare("SELECT `UserId` FROM `user_info` WHERE `UserName` = ?");
      if ($st->bind_param("s", $UserName)) {
        if ($st->execute()) {
          $r = $st->get_result();
          $f = $r->fetch_array();
          $r = $f[0];
          if ($r > 0) {
            echo 0;
          } else {
            $Pass = sha1($UserPass);
            $st = $conn->prepare("INSERT INTO `user_info` (`UserName`, `UserPass`, `UserFull`) VALUES (?, ?, ?)");
            if ($st->bind_param("sss", $UserName, $Pass, $UserFull)) {
              if ($st->execute()) {
                echo 1;
              }
            }
          }
        }
      }
    } elseif(isset($_POST['UserCheck'])) {
      htmlentities(extract($_POST));
      $Pass = md5($UserPass);
      $sQl = "SELECT * FROM `user_info` WHERE `UserName` = '$UserName' AND `UserPass` = '$Pass'";
      $q = mysqli_query($conn, $sQl);
      $rV = countValue($q);
      $arV = mysqli_fetch_array($q);
      extract($arV);
      if($rV > 0) {
  			session_start();
        $_SESSION['nav'] = "";
  			$_SESSION['sStat'] = $UserId;
        $_SESSION['sName'] = $UserName;
        $_SESSION['msg'] = "0";
  			header('location: ../../pages/dynamic/index.php');
  		} else {
  			header('location: ../../pages/dynamic/login.php?alert=Error');
  		}
    }
?>
