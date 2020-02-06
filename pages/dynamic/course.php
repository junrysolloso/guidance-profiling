
<?php
	include_once '../../pages/static/config.php';
	$q = $_GET['q'];
	if($q == 'HS') {
		$q = "HS";
		echo '<option value="">Track</option>';
	} else {
		$q = "CL";
		echo '<option value="">Program</option>';
	}
	$st = $conn->prepare("SELECT program_info.ProgramNo, `ProgramName` FROM `program_info` INNER JOIN `educjunc_info`
	ON program_info.ProgramNo = educjunc_info.ProgramNo INNER JOIN `educ_info`
	ON educ_info.EducNo = educjunc_info.EducNo WHERE `EducName` = ?");
	if ($st->bind_param("s", $q)) {
		if ($st->execute()) {
			$r = $st->get_result();
			while($c = $r->fetch_array()) {
			echo '<option value="'.$c['ProgramName'].'">'.$c['ProgramName'].'</option>';
			}
		}
	}
	if($pgName == 'studentList.php') {
		echo '<option value="All">All</option>';
	}
?>
