<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | List of students</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    include_once '../../pages/static/config.php';
    define("query", "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`,`Image`, `EmailAdd`, `Address`, `PhoneNo`, `LevelName`, `ProgramName`
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
    INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
    INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo ");
    $hide = "";
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php include_once '../../pages/static/banner.php' ?>
  <div class="wrapper">
    <?php
      include_once '../../pages/static/header.php';
      include_once '../../pages/static/navigation.php';

      $st = $conn->prepare(query." WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `EducName` = ? ORDER BY `Lastname` ASC");
      if ($st->bind_param("s", $_GET['q'])) {
        if ($st->execute()) {
          $getarr = $st->get_result();
        }
      }

      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['find'])) {
          $p = htmlspecialchars(trim($_GET['p']));
          $lvl = htmlspecialchars(trim($_GET['YearLevel']));
          if ($_GET['q'] == 'HS') {
            if ($p == "") {
              $st = $conn->prepare(query." WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `LevelName` = ? ORDER BY `Lastname` ASC");
              if ($st->bind_param("s", $lvl)) {
                if ($st->execute()) {
                  $getarr = $st->get_result();
                }
              }
            } else {
              $st = $conn->prepare(query." WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `ProgramName` = ? ORDER BY `Lastname` ASC");
              if ($st->bind_param("s", $p)) {
                if ($st->execute()) {
                  $getarr = $st->get_result();
                }
              }
            }
          } else {
            $st = $conn->prepare(query." WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `LevelName` = ? AND `ProgramName` = ? ORDER BY `Lastname` ASC");
            if ($st->bind_param("ss", $lvl, $p)) {
              if ($st->execute()) {
                $getarr = $st->get_result();
              }
            }
          }
        }
      }

      if ($_GET['q'] == "CL") {
        $hide = "hide";
      }
    ?>
    <div class="content-wrapper">
      <section class="content-header">
        <h4 class="title">Student List</h4>
      </section>
      <section class="content">
        <div class="form-group">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
            <div class="form-group">
              <div class="input-group">
                <input type="hidden" name="q" value="<?php echo $_GET['q']; ?>">
          			<div class="input-group-addon">
          				<select name="p">
          					<?php include_once '../../pages/dynamic/course.php' ?>
          				</select>
          			</div>
                <div class="input-group-addon <?php echo $hide; ?>"> Or </div>
          			<div class="input-group-addon">
          				<select name="YearLevel">
          					<?php include_once '../../pages/dynamic/yearLevel.php' ?>
          				 </select>
          			</div>
          			<div class="input-group-addon">
          				<button type="submit" name="find" value="0">Show</button>
          			</div>
              </div>
            </div>
          </form>
        </div>
				<table width="100%" class="table" id="studentList">
					<thead>
            <tr>
              <th class="text-center" style="width:5%">No</th>
              <th style="width:15%">Id number</th>
              <th style="width:30%">Fullname</th>
              <th class="text-center" style="width:20%" colspan="2">Status</th>
              <th class="text-center" style="width:10%">Profile</th>
              <th class="text-center" style="width:10%">Promote</th>
              <?php if ($_GET['q'] == "CL"): ?>
                <th class="text-center" style="width:10%">Shift</th>
              <?php endif; ?>
            </tr>
          </thead>
					<tbody>
            <?php
              $count = 1;
              while($r = $getarr->fetch_array()) { ?>
						<tr>
              <td><?php echo $count; ?></td>
							<td><?php echo $r['IdNumber']; ?></td>
              <td>
                <?php echo $r["Lastname"].', '.$r['Firstname'].' '.$r["Middlename"]; ?>
              </td>
              <td class="text-right"><?php echo $r["LevelName"]; ?></td>
              <td class="text-left"><?php echo $r["ProgramName"]; ?></td>
              <td><a href="viewProfile.php?q=<?php echo $r['StudentNo']; ?>&c=<?php echo $_GET['q']; ?>" title="Profile" class="btn btn-success btn-flat btn-block"><i class="fa fa-user"></i> View</a></td>
              <td><a href="promote.php?q=<?php echo $r['StudentNo']; ?>&y=<?php echo $r["LevelName"]; ?>&c=<?php echo $q; ?>&n=<?php echo $r["Lastname"].', '.$r['Firstname'].' '.$r["Middlename"] ?>"
              title="Promote" class="btn btn-success btn-flat btn-block promote"><i class="fa fa-external-link"></i> Go</a></td>
              <?php if ($_GET['q'] == "CL"): ?>
                <td><a href="shift.php?q=<?php echo $r['StudentNo']; ?>&p=<?php echo $r["ProgramName"]; ?>&c=<?php echo $q; ?>&n=<?php echo $r["Lastname"].', '.$r['Firstname'].' '.$r["Middlename"] ?>"
                title="Shift" class="btn btn-success btn-flat btn-block"><i class="fa fa-sign-in"></i> Go</a></td>
              <?php endif; ?>
						</tr>
            <?php $count++; } ?>
					</tbody>
				</table>
      </section>
    </div>
    <?php
      include '../../pages/static/footer.php';
    ?>
  </div>
  <?php include '../../pages/static/script.php' ?>
  <script src="../../pages/interactive/tableProperties.js"></script>
  <script>
    $(function () {
      if ("<?php echo $_GET['q']; ?>" == "HS") {
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
