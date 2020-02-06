  <?php
    include_once '../../pages/static/config.php';
    define("query", "SELECT student_info.StudentNo, `IdNumber`, `Firstname`, `Middlename`, `Lastname`,`Image`, `EmailAdd`, `Address`, `PhoneNo`, `LevelName`, `ProgramName`
    FROM `student_info` INNER JOIN `studentjunc_info` ON student_info.StudentNo = studentjunc_info.StudentNo
    INNER JOIN `program_info` ON program_info.ProgramNo = studentjunc_info.ProgramNo
    INNER JOIN `educjunc_info` ON educjunc_info.ProgramNo = program_info.ProgramNo
    INNER JOIN `educ_info` ON educ_info.EducNo = educjunc_info.EducNo
    INNER JOIN `level_info` ON level_info.LevelNo = studentjunc_info.LevelNo ");
    if(isset($_GET['q']))
    {
      $q = $_GET['q'];
      if($q == 'HS' ) {
        $studentList = mysqli_query($conn, query."WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `EducName` = 'HS' ORDER BY `Lastname` ASC");
      } else {
        $studentList = mysqli_query($conn, query."WHERE `DropNo` = 0  AND ExpelledNo = 0 AND `GraduateNo` = 0 AND `EducName` = 'CL' ORDER BY `Lastname` ASC");
      }
    }
  ?>
