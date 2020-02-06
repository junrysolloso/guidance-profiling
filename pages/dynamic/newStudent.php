
<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | Add new student</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    $q = $_GET['q'];
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<?php include_once '../../pages/static/banner.php' ?>
	<div class="wrapper">
	  <?php include_once '../../pages/static/header.php' ?>
	  <?php include_once '../../pages/static/navigation.php' ?>
	  <div class="content-wrapper">
	    <section class="content-header">
        <h4>Add Student</h4>
      </section>
      <section class="content">
				<form action="../../pages/savedata/saveStudent.php" enctype="multipart/form-data" method="post">
          <center>
            <?php 
              error_reporting(0);
              if($_GET['alert'])
              {
                $Alert = $_GET['alert'];
                GetAlert($Alert);
              }
            ?>
          </center>
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>Personal Information</h4>
                </li>
                <li class="list-group-item">
                  <div class="form-group">
                    <div class="input-group image-preview">
                      <div class="image-preview-input">
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="Image" class="form-control" required>
                      </div>
                      <div class="input-group-addon">
                        <button type="button" class="hide image-preview-clear">Hide Preview</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Fname" placeholder="Firstname" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Lname" placeholder="Lastname" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Mname" placeholder="Middlename" required>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="CivilStatus" required>
                      <option>Status</option>
                      <option value="Single"> Single</option>
                      <option value="Married"> Married</option>
                      <option value="widow"> widow</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="Gender" required>
                      <option>Gender</option>
                      <option value="Male"> Male</option>
                      <option value="Female"> Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Age" placeholder="Age" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Citizenship" placeholder="Citizenship" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Religion" placeholder="Religion" required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="EmailAdd" placeholder="Email Address" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="PhoneNo" placeholder="Phone Number" required>
                  </div>
                  <div class="form-group">
                    <input type="Date" class="form-control" name="DateBirth" placeholder="Select date" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="Address" placeholder="Address" required></textarea>
                  </div>
                </li>
              </ul>
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>Program Information</h4>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="IdNumber" placeholder="Id Number" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control" name="ProgramName" required>
                          <?php include_once '../../pages/dynamic/course.php' ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control" name="YearLevel">
                          <?php include_once '../../pages/dynamic/yearLevel.php' ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group hide">
                        <select name="EducStatus" class="form-control">
                          <option value="<?php echo $q ?>"><?php echo $q ?></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>Mother/Guardian Information</h4>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="MotherName" placeholder="Fullname" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="MotherPhone" placeholder="Phone Number" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="MotherOccu" placeholder="Occupation" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="MotherAge" placeholder="Age" required>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea type="text" class="form-control" name="MotherAdd" placeholder="Address" required></textarea>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>Father Information (Optional)</h4>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="FatherName" placeholder="Fullname">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="FatherPhone" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="FatherOccu" placeholder="Occupation">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="FatherAge" placeholder="Age">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea type="text" class="form-control" name="FatherAdd" placeholder="Address"></textarea>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <button type="submit" name="submit" value="send" class="btn btn-success btn-flat"><i class="fa fa-save"></i> <span>Save</span></button>
	           </div>
            <div class="col-sm-2"></div>
	        </div>
	      </form>
	    </section>
	  </div>
	  <?php include '../../pages/static/footer.php' ?>
	 </div>
	 <?php include '../../pages/static/script.php' ?>
   <script>
     $(document).ready(function () {
       document.getElementsByTagName("li")[5].classList.add("active");
       if ("<?php echo $_GET['q']; ?>" == "HS") {
         document.getElementsByTagName("li")[6].classList.add("active");
       } else {
         document.getElementsByTagName("li")[7].classList.add("active");
       }
     })
   </script>
</body>
</html>
