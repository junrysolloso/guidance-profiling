<?php
  include_once '../../pages/static/config.php';
  if(isset($_GET['ProgramName'])) {
    htmlentities(extract($_GET));
    $st = $conn->prepare("SELECT `ProgramNo` FROM `program_info` WHERE `ProgramName` = ?");
    if ($st->bind_param("s", $ProgramName)) {
      if ($st->execute()) {
        $r = $st->get_result();
        $f = $r->fetch_array();
        $r = $f[0];
        if ($r == 0 && $r == NULL) {
          $st = $conn->prepare("INSERT INTO `program_info`(`ProgramName`, `ProgramDesc`) VALUES (?, ?)");
          if ($st->bind_param("ss", $ProgramName, $ProgramDesc)) {
            if ($st->execute()) {
              $st = $conn->prepare("INSERT INTO `educjunc_info` (`ProgramNo`, `EducNo`) SELECT MAX(ProgramNo),
              (SELECT `EducNo` FROM `educ_info` WHERE `EducName` = ?) FROM `program_info`");
              if ($st->bind_param("s", $Category)) {
                if ($st->execute()) {
                  echo 1;
                }
              }
            }
          }
        } else {
          echo 0;
        }
      }
    }
  }
?>
