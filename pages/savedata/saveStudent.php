<?php
  include_once '../../pages/static/config.php';
  if(isset($_POST['Fname'])) {
    htmlentities(extract($_POST));
    $st = $conn->prepare("SELECT `StudentNo` FROM `student_info` WHERE `IdNumber` = ?");
    if ($st->bind_param("s", $IdNumber)) {
      if ($st->execute()) {
        $r = $st->get_result();
        $f = $r->fetch_array();
        if ($f[0] > 0) {
          echo '<script>window.location="'.htmlspecialchars($_SERVER['HTTP_REFERER']).'"; alert("Student with same ID already exist.");</script>';
        } else {
          //Getting fileinfo
          $FileSize = $_FILES['Image']['size'];
          $TempName = $_FILES['Image']['tmp_name'];
          $PicName = $_FILES['Image']['name'];
          $TargetDir = "../../upload/profile/";
          $targetName = $TargetDir .basename($_FILES['Image']['name']);
          $FileType = pathinfo($targetName, PATHINFO_EXTENSION);
          //Student query
          $st = $conn->prepare("INSERT INTO `student_info`(`IdNumber`, `Firstname`, `Middlename`, `Lastname`, `CivilStatus`, `Gender`,
          `Age`, `DateBirth`, `Citizenship`, `Religion`, `EmailAdd`, `PhoneNo`, `Image`, `Address`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
          if ($st->bind_param("ssssssssssssss", $IdNumber, $Fname, $Mname, $Lname, $CivilStatus, $Gender, $Age, $DateBirth, $Citizenship, $Religion, $EmailAdd, $PhoneNo, $PicName, $Address)) {
            if ($st->execute()) {
              $st = $conn->prepare("INSERT INTO `mother_info` (`MotherName`, `MotherAge`, `MotherOccu`, `MotherAdd`, `MotherPhone`) VALUES (?, ?, ?, ?, ?)");
              if ($st->bind_param("sssss", $MotherName, $MotherAge, $MotherOccu, $MotherAdd, $MotherPhone)) {
                if ($st->execute()) {
                  $st = $conn->prepare("INSERT INTO `father_info`(`FatherName`, `FatherAge`, `FatherOccu`, `FatherAdd`, `FatherPhone`) VALUES (?, ?, ?, ?, ?)");
                  if ($st->bind_param("sssss", $FatherName, $FatherAge, $FatherOccu, $FatherAdd, $FatherPhone)) {
                    if ($st->execute()) {
                      $st = $conn->prepare("INSERT INTO `studentjunc_info` (`StudentNo`, `FatherNo`, `LevelNo`, `MotherNo`, ProgramNo)
                      SELECT MAX(StudentNo), (SELECT MAX(FatherNo) FROM `father_info`), (SELECT `LevelNo` FROM `level_info` WHERE `LevelName` = ?),
                      (SELECT MAX(MotherNo) FROM `mother_info`), (SELECT `ProgramNo` FROM `program_info` WHERE `ProgramName` = ?) FROM `student_info`");
                      if ($st->bind_param("ss", $YearLevel, $ProgramName)) {
                        if ($st->execute()) {
                          if (move_uploaded_file($TempName, "../../upload/profile/" .$PicName)) {
                            header("location: ../../pages/dynamic/newStudent.php?q=$EducStatus&alert=Added");
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
?>
