<?php
  include_once '../../pages/static/config.php';
  if(isset($_POST['colN'])) {
    htmlentities(extract($_POST));
    try {
      $rQ = mysqli_query($conn, "SELECT `$colN` FROM `$Tbl` WHERE StudentNo = '$sNo'");
      While($rR = mysqli_fetch_assoc($rQ)) {
        $rV = $rR[$colN];
      }
      if($rV == 0) {
        mysqli_query($conn, "UPDATE `$Tbl` SET `$colN` = 1 WHERE StudentNo = '$sNo'");
      } else {
        mysqli_query($conn, "UPDATE `$Tbl` SET `$colN` = 0 WHERE StudentNo = '$sNo'");
      }
    } catch (Exception $erR) {
      console.log("Error: " .$erR);
    } finally {
      mysqli_close($conn);
    }
  }
?>
