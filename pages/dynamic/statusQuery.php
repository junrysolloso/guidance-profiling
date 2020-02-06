<?php
  include_once '../../pages/static/config.php';
  try {
    $sQl = "SELECT student_info.StudentNo, `IdNumber`, `Fullname`, `Image`, `StatusNo`, `Active`, `DropOut`, `Expelled`, `Graduated`,
    `ProgramNo` FROM student_info INNER JOIN status_info ON student_info.StudentNo = status_info.StudentNo
    WHERE DropStat = 0 AND ExpelledStat = 0";
    $statusList = mysqli_query($conn, $sQl);
    if(isset($_GET['q'])) {
      $q = $_GET['q'];
      $sQl = "SELECT student_info.StudentNo, `IdNumber`, `Fullname`, `Image`, `YearLevel`, `StatusNo`, `Active`, `DropOut`, `Expelled`, `Graduated`,
      `ProgramNo`, `DropOutDesc`, `DropOutDate`, `DropStat`, `ExpelledDesc`, `ExpelledStat`, `ExpelledDate` FROM student_info INNER JOIN status_info ON student_info.StudentNo = status_info.StudentNo
      WHERE DropStat = 0 AND ExpelledStat = 0 AND student_info.StudentNo = '$q'";
      $individualStatus = mysqli_query($conn, $sQl);
    }
  } catch (Exception $erR) {
    console.log("Error: " .$erR);
  } finally {
    mysqli_close($conn);
  }
?>
