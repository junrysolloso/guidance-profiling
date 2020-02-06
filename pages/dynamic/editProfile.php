<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Dropout/Expelled Description section</title>
  <?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/config.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['submit'])) {
        extract($_POST);
        $st = $conn->prepare("UPDATE `father_info` SET `FatherName` = ?, `FatherAge` = ?, `FatherOccu` = ?, `FatherAdd` = ?, `FatherPhone` = ? WHERE `FatherNo` = (SELECT `FatherNo` FROM `studentjunc_info` WHERE `StudentNo` = ?)");
        if ($st->bind_param("sssssi", $FatherName, $FatherAge, $FatherOccu, $FatherAdd, $FatherPhone, $StudentNo)) {
          if ($st->execute()) {
            $st = $conn->prepare("UPDATE `mother_info` SET `MotherName` = ?, `MotherAge` = ?, `MotherOccu` = ?, `MotherAdd` = ?, `MotherPhone` = ?
            WHERE `MotherNo` = (SELECT `MotherNo` FROM `studentjunc_info` WHERE `StudentNo` = ?)");
            if ($st->bind_param("sssssi", $MotherName, $MotherAge, $MotherOccu, $MotherAdd, $MotherPhone, $StudentNo)) {
              if ($st->execute()) {
                $st = $conn->prepare("UPDATE `student_info` SET `IdNumber` = ?, `Firstname` = ?, `Middlename` = ?, `Lastname` = ?, `CivilStatus` = ?, `Gender` = ?, `Age` = ?, `DateBirth` = ?, `Citizenship` = ?,
                `Religion` = ?, `EmailAdd` = ?, `PhoneNo` = ?, `Address` = ? WHERE `StudentNo` = ?");
                if ($st->bind_param("ssssssssssssss", $IdNumber, $Firstname, $Middlename, $Lastname, $CivilStatus, $Gender, $Age, $DateBirth, $Citizenship, $Religion, $EmailAdd, $PhoneNo, $Address, $StudentNo)) {
                  if ($st->execute()) {
                    echo '<script>alert("Done.");</script>';
                  }
                }
              }
            }
          }
        }
      }
    }
    include_once '../../pages/dynamic/profileQuery.php';
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php include_once '../../pages/static/banner.php' ?>
  <div class="wrapper">
    <?php
      include_once '../../pages/static/header.php';
      include_once '../../pages/static/navigation.php';
    ?>
    <div class="content-wrapper">
      <section class="content-header">
        <div class="row">
          <div class="col-sm-8">
            <h4>Edit Personal Information</h4>
          </div>
          <div class="col-sm-4">
            <div class="pull-right ">
              <!-- Header content -->
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div id="EditProfileSuccess"></div>
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?q=<?php echo $q ?>" method="POST">
                <ul class="list-group">
                  <li class="list-group-item">
                    <br><br>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                           Firstname
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control " name="Firstname" value="<?php echo $Firstname ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                           Middlename
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control " name="Middlename" value="<?php echo $Middlename ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                           Lastname
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control " name="Lastname" value="<?php echo $Lastname ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <ul class="list-group">
                          <li class="list-group-item">
                            <center><big>Personal Details</big></center>
                          </li>
                          <li class="list-group-item hide">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Student No
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="StudentNo" value="<?php echo $q ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                  Id Number
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="IdNumber" value="<?php echo $IdNumber ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Civil Status
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="CivilStatus" value="<?php echo $CivilStatus ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Gender
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="Gender" value="<?php echo $Gender ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Age
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="Age" value="<?php echo $Age ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Date of birth
                              </div>
                              <div class="col-sm-8">
                                <input type="date" class="form-control " name="DateBirth" value="<?php echo $DateBirth ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Citizenship
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="Citizenship" value="<?php echo $Citizenship ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 religion
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="Religion" value="<?php echo $Religion ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Email
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="EmailAdd" value="<?php echo $EmailAdd ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Phone
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="PhoneNo" value="<?php echo $PhoneNo ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Address
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="Address" value="<?php echo $Address ?>">
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6 border-left">
                        <ul class="list-group">
                          <li class="list-group-item">
                            <center><big>Parents Details</big></center>
                          </li>
                          <li class="list-group-item">
                             MOTHER
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Name
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="MotherName" value="<?php echo $MotherName ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Age
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="MotherAge" value="<?php echo $MotherAge ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Occupation
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="MotherOccu" value="<?php echo $MotherOccu ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Phone
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="MotherPhone" value="<?php echo $MotherPhone ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Address
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="MotherAdd" value="<?php echo $MotherAdd ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                             FATHER
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Name
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="FatherName" value="<?php echo $FatherName ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Age
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="FatherAge" value="<?php echo $FatherAge ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Occupation
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="FatherOccu" value="<?php echo $FatherOccu ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Phone
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="FatherPhone" value="<?php echo $FatherPhone ?>">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                 Address
                              </div>
                              <div class="col-sm-8">
                                <input type="text" class="form-control " name="FatherAdd" value="<?php echo $FatherAdd ?>">
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <button type="submit" name="submit" value="send" class="btn btn-success btn-block btn-flat">Done</button>
                  </li>
                </ul>
              </form>
            </div>
          <div class="col-sm-1"></div>
        </div>
      </section>
    </div>
    <?php
      include_once '../../pages/static/footer.php';
    ?>
  </div>
  <?php include_once '../../pages/static/script.php' ?>
  <script>
    $(function () {
      document.getElementsByTagName("li")[19].classList.add("active"); // CL List of students
      document.getElementsByTagName("li")[20].classList.add("active");
    })
  </script>
</body>
</html>
