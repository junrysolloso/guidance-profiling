<?php
  include_once '../../pages/static/config.php';
  if(isset($_POST['colN'])) {
    htmlentities(extract($_POST));
    try {
      $rQ = mysqli_query($conn, "SELECT `$colN` FROM `status_info` WHERE StudentNo = '$sNo'");
      While($rR = mysqli_fetch_assoc($rQ))
      {
        $rV = $rR[$colN];
      }
      if($rV == 0)
      {
        if ($colN == "Active") {
          mysqli_query($conn, "UPDATE status_info SET `$colN` = 1 WHERE StudentNo = '$sNo'");
        }
        elseif($colN == 'DropOut')
        {
          mysqli_query($conn, "UPDATE student_info SET `DropStat` = 1 WHERE StudentNo = '$sNo'");
        } else {
          mysqli_query($conn, "UPDATE student_info SET `ExpelledStat` = 1 WHERE StudentNo = '$sNo'");
        }
      } else {
        if ($colN == "Active") {
          mysqli_query($conn, "UPDATE status_info SET `$colN` = 0 WHERE StudentNo = '$sNo'");
        }
        elseif($colN == 'DropOut')
        {
          mysqli_query($conn, "UPDATE student_info SET `DropStat` = 0 WHERE StudentNo = '$sNo'");
        } else {
          mysqli_query($conn, "UPDATE student_info SET `ExpelledStat` = 0 WHERE StudentNo = '$sNo'");
        }
      }
    } catch (Exception $erR) {
      console.log("Error: " .$erR);
    } finally {
      mysqli_close($conn);
    }
  }
?>
