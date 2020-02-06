<!DOCTYPE html>
<html>
<head>
 	<title>Guidance Profiling | List of students</title>
 	<?php
    include_once '../../pages/static/sessionCheck.php';
    include_once '../../pages/static/style.php';
    include_once '../../pages/static/function.php';
    include_once '../../pages/static/config.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['shift'])) {
        $id = $_POST['id'];
        $new = $_POST['program'];
        $last = $_POST['last'];
        $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `program_info`
        SET studentjunc_info.ProgramNo = (SELECT `ProgramNo` FROM `program_info` WHERE `ProgramName` = ?) WHERE `StudentNo` = ?");
        if ($st->bind_param("si", $new, $id)) {
          if ($st->execute()) {
            $st = $conn->prepare("INSERT INTO `shift_info` (`StudentFrom`, `StudentTo`) SELECT `ProgramNo`, (SELECT `ProgramNo` FROM `program_info` WHERE `ProgramName` = ?) FROM `program_info` WHERE `ProgramName` = ?");
            if ($st->bind_param("ss", $last, $new)) {
              if ($st->execute()) {
                $st = $conn->prepare("UPDATE `studentjunc_info` INNER JOIN `shift_info` SET studentjunc_info.ShiftNo = (SELECT MAX(ShiftNo) FROM `shift_info`) WHERE `StudentNo` = ?");
                if ($st->bind_param("i", $id)) {
                  if ($st->execute()) {
                    echo '<script>alert("Done.");window.location="../../pages/dynamic/studentList.php?q='.$_POST["cat"].'"</script>';
                  }
                }
              }
            }
          }
        }
      }
    }
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
       <!-- <h4>Shift Student</h4> -->
      </section>
      <section class="content">
        <div class="box box-info">
          <div class="box-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <div class="input-group">
                <input type="hidden" name="id" value="<?php echo $_GET['q']; ?>">
                <input type="hidden" name="cat" value="<?php echo $_GET['c']; ?>">
                <input type="hidden" name="last" value="<?php echo $_GET['p']; ?>">
                <span class="input-group-addon">
                  Shift <b><?php print($_GET['n']) ?></b> from <b><?php print($_GET['p']) ?></b> to
                </span>
                <select class="form-control" name="program">
                 <?php
                 $st = $conn->prepare("SELECT program_info.ProgramNo, `ProgramName` FROM `program_info` INNER JOIN `educjunc_info`
                 ON program_info.ProgramNo = educjunc_info.ProgramNo INNER JOIN `educ_info`
                 ON educ_info.EducNo = educjunc_info.EducNo WHERE `ProgramName` <> ? AND `EducName` = ?");
                 if ($st->bind_param("ss", $_GET['p'], $_GET['c'])) {
                   if ($st->execute()) {
                     $r = $st->get_result();
                     while($c = $r->fetch_array()) {
                     echo '<option value="'.$c['ProgramName'].'">'.$c['ProgramName'].'</option>';
                     }
                   }
                 }
                 ?>
                </select>
              <div class="input-group-btn">
                <button type="submit" name="shift" value="send" class="btn btn-default btm-flat"><i class="fa fa-save"></i> Continue</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <?php
      include '../../pages/static/footer.php';
    ?>
  </div>
  <?php include '../../pages/static/script.php' ?>
  <script>
    $(function () {
      document.getElementsByTagName("li")[19].classList.add("active"); // CL List of students
      document.getElementsByTagName("li")[20].classList.add("active");
    })
  </script>
</body>
</html>
