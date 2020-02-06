<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | List of dropout/expelled student</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    include_once '../../pages/static/config.php';
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
            <h4 class="title">List of graduate students</h4>
          </div>
          <div class="col-sm-4">
            <div class="pull-right ">
              <!-- Header content -->
            </div>
          </div>
        </div>
      </section>
      <section class="content">
				<table width="100%" class="table table-condensed" id="studentList">
					<thead>
            <tr>
              <th class="text-center" style="width:5%">No</th>
              <th style="width:15%">Id number</th>
              <th style="width:70%">Fullname</th>
              <th class="text-center" style="width:10%">Profile</th>
            </tr>
          </thead>
					<tbody>
            <?php
              $count = 1;
              $q = htmlspecialchars(trim($_GET['q']));
              $shiftlist = mysqli_query($conn, "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`,`Image`, `EmailAdd`, `Address`, `PhoneNo`, `LevelName`
              FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
              INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
              INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
              INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
              INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo
              WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` > 0 AND `EducName` = '$q' ORDER BY `Lastname` ASC");
              while($r = mysqli_fetch_array($shiftlist)) {?>
						<tr>
              <td class="text-center"><?php echo $count; ?></td>
							<td><?php echo $r['IdNumber'] ?></td>
              <td>
                <?php echo $r["Lastname"].', '.$r['Firstname'].' '.$r["Middlename"] ?>
              </td>
              <td><a href="viewProfile.php?q=<?php echo $r['StudentNo'] ?>&c=<?php echo $_GET['q']; ?>" class="btn btn-block btn-success btn-flat"><i class="fa fa-share-square-o"></i> View</a></td>
						</tr>
            <?php $count++; } ?>
					</tbody>
				</table>
      </section>
    </div>
    <?php
      include_once '../../pages/static/footer.php';
    ?>
  </div>
  <?php include_once '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/tableProperties.js"></script>
  <script>
    $(function () {
      if ("<?php echo $_GET['q']; ?>" == "HS") {
        document.getElementsByTagName("li")[14].classList.add("active"); // HS List of students
        document.getElementsByTagName("li")[18].classList.add("active");
      } else {
        document.getElementsByTagName("li")[19].classList.add("active"); // CL List of students
        document.getElementsByTagName("li")[24].classList.add("active");
      }
    })
  </script>
</body>
</html>
