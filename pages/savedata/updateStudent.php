<?php
  include_once '../../pages/static/config.php';
  if(isset($_POST['StudentNo'])) {
    htmlentities(extract($_POST));
    $st = $conn->prepare("UPDATE `father_info` SET `FatherName` = ?, `FatherAge` = ?, `FatherOccu` = ?, `FatherAdd` = ?, `FatherPhone` = ?
    WHERE `FatherNo` = (SELECT `FatherNo` FROM `studentjunc_info` WHERE `StudentNo` = ?)");
    if ($st->bind_param("sssssi", $FatherName, $FatherAge, $FatherOccu, $FatherAdd, $FatherPhone, $StudentNo)) {
      if ($st->execute()) {
        $st = $conn->prepare("UPDATE `mother_info` SET `MotherName` = ?, `MotherAge` = ?, `MotherOccu` = ?, `MotherAdd` = ?, `MotherPhone` = ?
        WHERE `MotherNo` = (SELECT `MotherNo` FROM `studentjunc_info` WHERE `StudentNo` = ?)");
        if ($st->bind_param("sssssi", $MotherName, $MotherAge, $MotherOccu, $MotherAdd, $MotherPhone, $StudentNo)) {
          if ($st->execute()) {
            $st = $conn->prepare("UPDATE `student_info` SET `Fullname` = ?, `CivilStatus` = ?, `Gender` = ?, `Age` = ?, `DateBirth` = ?, `Citizenship` = ?,
            `Religion` = ?, `EmailAdd` = ?, `PhoneNo` = ?, `Address` = ? WHERE `StudentNo` = ?");
            if ($st->bind_param("sssssssssssss", $Firstname, $Middlename, $Lastname, $CivilStatus, $Gender, $Age, $DateBirth, $Citizenship, $Religion, $EmailAdd, $PhoneNo, $Address, $StudentNo)) {
              if ($st->execute()) {
                echo 1;
              }
            }
          }
        }
      }
    }


      //Father update query
      // mysqli_query($conn, "UPDATE `father_info` SET `FatherName` = '$FatherName', `FatherAge` = '$FatherAge',
      // `FatherOccu` = '$FatherOccu', `FatherAdd` = '$FatherAdd', `FatherPhone` = '$FatherPhone'
      // WHERE `StudentNo` = '$StudentNo'");
      //Mother update query
      // mysqli_query($conn, "UPDATE `mother_info` SET `MotherName` = '$MotherName', `MotherAge` = '$MotherAge',
      // `MotherOccu` = '$MotherOccu', `MotherAdd` = '$MotherAdd', `MotherPhone` = '$MotherPhone'
      // WHERE `StudentNo` = '$StudentNo'");
      //Student update query
      // mysqli_query($conn, "UPDATE `student_info` SET `Fullname` = '$Fullname', `CivilStatus` = '$CivilStatus',
      // `Gender` = '$Gender', `Age` = '$Age', `DateBirth` = '$DateBirth', `Citizenship` = '$Citizenship',
      // `Religion` = '$Religion', `EmailAdd` = '$EmailAdd', `PhoneNo` = '$PhoneNo', `Address` = '$Address'
      // WHERE `StudentNo` = '$StudentNo'");

  }
?>
