<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | List of students</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    include_once '../../pages/dynamic/listQuery.php';
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
        <h4 class="title">Student List</h4>
      </section>
      <section class="content">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <span>Find by </span>
            </div>
            <form action="#" method="post">
              <select class="form-control input-sm" name="course" onchange="this.form.submit()">
                <?php include_once '../../pages/dynamic/course.php' ?>
              </select>
            </form>
            <div class="input-group-addon">
              <span>or</span>
            </div>
            <form action="#" method="post">
              <select class="form-control input-sm" name="YearLevel" onchange="this.form.submit()">
                <?php include_once '../../pages/dynamic/filterYear.php' ?>
              </select>
            </form>
          </div>
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
              while($r = mysqli_fetch_array($studentList)){?>
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
