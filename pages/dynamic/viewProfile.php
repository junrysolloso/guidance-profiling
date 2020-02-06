<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Dropout/Expelled Description section</title>
  <?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
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
            <h4>Personal Information</h4>
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
              <ul class="list-group">
                <li class="list-group-item">
                  <br><br>
                  <center>
                    <img src="../../upload/profile/<?php echo $Image ?>" width="150px" height="150px" class="img-bordered img-circle" alt="Image">
                  </center>
                  <h3 class="profile-username text-center"><?php echo $Lastname.', '.$Firstname.' '.$Middlename ?></h3>
                  <center><a href="editProfile.php?q=<?php echo $StudentNo ?>">Edit Profile</a></center>
                  <br> 
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <center><big>Personal Details</big></center>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Id Number
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $IdNumber ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Civil Status
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $CivilStatus ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Gender
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $Gender ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Age
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $Age ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Date of birth
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $DateBirth ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Citizenship
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $Citizenship ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               religion
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $Religion ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Email
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $EmailAdd ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Phone
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $PhoneNo ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Address
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $Address ?></a>
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
                              <a><?php echo $MotherName ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Age
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $MotherAge ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Occupation
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $MotherOccu ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Phone
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $MotherPhone ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Address
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $MotherAdd ?></a>
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
                              <a><?php echo $FatherName ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Age
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $FatherAge ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Occupation
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $FatherOccu ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Phone
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $FatherPhone ?></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-sm-4 border-right">
                               Address
                            </div>
                            <div class="col-sm-8">
                              <a><?php echo $FatherAdd ?></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          <div class="col-sm-1"></div>
        </div>
      </section>
      </section>
    </div>
    <?php
      include_once '../../pages/static/footer.php';
    ?>
  </div>
  <?php include_once '../../pages/static/script.php' ?>
  <script>
    $(function () {
      if ("<?php echo $_GET['c']; ?>" == "HS") {
        document.getElementsByTagName("li")[14].classList.add("active"); // HS List of students
        document.getElementsByTagName("li")[15].classList.add("active");
      } else {
        document.getElementsByTagName("li")[19].classList.add("active"); // CL List of students
        document.getElementsByTagName("li")[20].classList.add("active");
      }
    })
  </script>
</body>
</html>
