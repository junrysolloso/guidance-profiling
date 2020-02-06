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
            <h4 class="title">List of shift students</h4>
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
              <th style="width:30%">Fullname</th>
              <th class="text-center" style="width:15%">Year Level</th>
              <th class="text-center" style="width:15%">Shift From</th>
              <th class="text-center" style="width:10%">Shift To</th>
              <th class="text-center" style="width:10%">Profile</th>
            </tr>
          </thead>
					<tbody>
            <?php
                $count = 1;
              $shiftlist = mysqli_query($conn, "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`,`Image`, `EmailAdd`, `Address`, `PhoneNo`, `LevelName`
              FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
              INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
              INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
              INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
              INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo
              WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `ShiftNo` > 0 ORDER BY `Lastname` ASC");
              while($r = mysqli_fetch_array($shiftlist)) {?>
						<tr>
              <td><?php echo $count; ?></td>
							<td><?php echo $r['IdNumber'] ?></td>
              <td>
                <?php echo $r["Lastname"].', '.$r['Firstname'].' '.$r["Middlename"] ?>
              </td>
              <td class="text-center"><?php echo $r['LevelName'] ?></td>
              <?php
                $st = $conn->prepare("SELECT `ProgramName` FROM `shift_info` INNER JOIN `studentjunc_info`
                ON shift_info.ShiftNo = studentjunc_info.ShiftNo INNER JOIN `program_info`
                ON shift_info.StudentTo = program_info.ProgramNo WHERE StudentNo = ? ");
                if ($st->bind_param("i", $r["StudentNo"])) {
                  if ($st->execute()) {
                    $s = $st->get_result();
                    $f = $s->fetch_array();
                  }
                }
              ?>
              <td class="text-center"><?php echo $f[0] ?></td>
              <?php
                $st = $conn->prepare("SELECT `ProgramName` FROM `shift_info` INNER JOIN `studentjunc_info`
                ON shift_info.ShiftNo = studentjunc_info.ShiftNo INNER JOIN `program_info`
                ON shift_info.StudentFrom = program_info.ProgramNo WHERE StudentNo = ? ");
                if ($st->bind_param("i", $r["StudentNo"])) {
                  if ($st->execute()) {
                    $s = $st->get_result();
                    $f = $s->fetch_array();
                  }
                }
              ?>
              <td class="text-center"><?php echo $f[0] ?></td>
              <td><a href="viewProfile.php?q=<?php echo $r['StudentNo'] ?>" class="btn btn-block btn-success btn-flat"><i class="fa fa-share-square-o"></i> View</a></td>
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
      document.getElementsByTagName("li")[19].classList.add("active"); // CL List of students
      document.getElementsByTagName("li")[23].classList.add("active");
    })
  </script>
</body>
</html>
