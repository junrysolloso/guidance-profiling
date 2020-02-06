<?php
  include_once '../../pages/static/config.php';
  if(isset($_POST['inStudentNo'])) {
    htmlentities(extract($_POST));
    try
    {
      $dateCol = "";
      $TodayYear = date('m:d:y');
	    $date = date('Y-d-m',strtotime($TodayYear));
      if($inCol == 'DropOutDesc') {
        $dateCol = "DropOutDate";
      } else {
        $dateCol = "ExpelledDate";
      }
      $sQl = "UPDATE `status_info` SET `$dateCol` = '$date', `$inCol` = '$inComments'
      WHERE  `StudentNo` = '$inStudentNo' ";
      mysqli_query($conn, $sQl);
    } catch (Exception $erR) {
      console.log("Error: " .$erR);
    } finally {
      mysqli_close($conn);
    }
  }
?>
