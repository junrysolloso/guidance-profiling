<?php
  include_once '../../pages/static/config.php';
  $y = $_GET['y'];
  $q = $_GET['q']; 
  try {
    $sQl = "SELECT student_info.StudentNo, `IdNumber`, `Fullname`, `Image`, `EntranceStatus`, `ExitStatus`, `FirstYear`,
    `SecondYear`, `ThirdYear`, `FourthYear` FROM student_info INNER JOIN entrance_exam ON
    student_info.StudentNo = entrance_exam.StudentNo INNER JOIN exit_exam ON entrance_exam.StudentNo =
    exit_exam.StudentNo INNER JOIN psychology_exam ON exit_exam.StudentNo = psychology_exam.StudentNo
    WHERE DropStat = 0 AND ExpelledStat = 0 AND YearLevel = '$y' AND ProgramNo = '$q'";
    $printExamList = mysqli_query($conn, $sQl);
  } catch (Exception $erR) {
    console.log($erR);
  } finally {
    mysqli_close($conn);
  }
?>
