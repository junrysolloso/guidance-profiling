

<?php
	include_once '../../pages/static/config.php';
	if(isset($_POST['shift'])){
    $pNO = htmlentities($_POST['program']);
    $Id = htmlentities($_POST['studentId']);
		$course = htmlentities($_POST['course']);
		$yearLvl = htmlentities($_POST['yearLvl']);
		if($pNO == 0){
			header('location: studentList.php?q=CL');
		} else {
			if($yearLvl == 4){
				header('location: studentList.php?q=CL');
			} else {
				$r0 = mysqli_query($conn, "UPDATE `student_info` SET `ProgramNo` = '$pNO' WHERE  `StudentNo` = '$Id'");
				$r1 = mysqli_query($conn, "INSERT INTO `shift_info` (`shiftId`,`studentNo`, `studentFrom`) VALUES ('','$Id', '$course')");
				if(!$r0 || !$r1){
					header('location: studentList.php?q=CL');
				} else {
					header('location: studentList.php?q=CL');
				}
			}
		}
	}
?>
