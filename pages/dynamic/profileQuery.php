<?php
  include_once '../../pages/static/config.php';
  try {
    $q = $_GET['q'];
    htmlentities($q);
    $sQl = "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`, `Image`, `CivilStatus`,
    `Gender`, `Age`, `DateBirth`, `Citizenship`, `Religion`, `EmailAdd`, `PhoneNo`, `Address`,
    `MotherName`, `MotherAge`, `MotherOccu`, `MotherAdd`, `MotherPhone`, `FatherName`, `FatherAge`,
    `FatherOccu`, `FatherAdd`, `FatherPhone` FROM `student_info`
    INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `mother_info` ON mother_info.MotherNo = studentjunc_info.MotherNo
    INNER JOIN `Father_info` ON father_info.FatherNo = studentjunc_info.FatherNo
    WHERE student_info.StudentNo = '$q'";
    $profileQuery = mysqli_query($conn, $sQl);
    $rQ = mysqli_fetch_array($profileQuery);
    extract($rQ);
  } catch (Exception $erR) {
    console.log("Error: " .$erR);
  } finally {
    mysqli_close($conn);
  }
?>
