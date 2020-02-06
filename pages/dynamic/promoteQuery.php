

<?php
	include_once '../../pages/static/config.php';
	if(isset($_POST['promote'])){
    $Year = htmlentities($_POST['YearLevel']);
    $Id = htmlentities($_POST['studentId']);
		$cat = htmlentities($_POST['cat']);

		if($cat == 'CL'){
			if($Year == 0){
				header('location: studentList.php?q=CL');
			} else {
				$result = mysqli_query($conn, "UPDATE `student_info` SET `YearLevel` = '$Year' WHERE  `StudentNo` = '$Id'");
				if(! $result){
					header('location: studentList.php?q=CL');
				} else {
					header('location: studentList.php?q=CL');
				}
			}
		} else {
			if($Year == 0){
				header('location: studentList.php?q=CL');
			} else {
				$result = mysqli_query($conn, "UPDATE `student_info` SET `YearLevel` = '$Year' WHERE  `StudentNo` = '$Id'");
				if(! $result){
					header('location: studentList.php?q=CL');
				} else {
					header('location: studentList.php?q=');
				}
			}
		}
  }
?>
