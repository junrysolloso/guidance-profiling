<?php
  include_once '../../pages/static/config.php';
  //Query for list of students
  $q = $_GET['q'];
  $c = $_GET['c'];
  if ($c == 'Drop')
  {
    $sQl = "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`,`Image`, `DropOutDate`, `DropOutDesc`, `LevelName`, `ProgramName`
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo
    INNER JOIN `drop_info` ON drop_info.DropNo = studentjunc_info.DropNo WHERE student_info.StudentNo = '$q'";
    $individualDesc = mysqli_query($conn, $sQl);
  } else {
    $sQl = "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`,`Image`, `ExpelledDate`, `ExpelledDesc`, `LevelName`, `ProgramName`
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo
    INNER JOIN `expelled_info` ON expelled_info.ExpelledNo = studentjunc_info.ExpelledNo WHERE student_info.StudentNo = '$q'";
    $individualDesc = mysqli_query($conn, $sQl);
  }
?>
