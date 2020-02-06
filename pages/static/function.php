<?php
	//Count rows
	function countValue($query) {
		$Count = mysqli_num_rows($query);
		return $Count;
	}
	//Just return a value
	function eValue($value)
	{
		echo $value;
	}
	//Get exam value status
	function getExam($cl)
	{
		if($cl == 1) {
			echo '<i class="fa fa-check-square-o"></i>';
		} else {
			echo '<i class="fa fa-close"></i>';
		}
	}
	//Check exam value
	function checkExam($Fcl, $sn, $Tcl, $tb)
	{
		if($Fcl == 1) {
			echo '<i class="fa fa-check-square-o pull-right"></i>';
		} else {
			echo '<input type="checkbox" class="pull-right" name="'.$Tcl.'" id="'.$sn.'" title="'.$tb.'">';
		}
	}
	//Check category
	function checkCategory($pNo) {
		include '../../pages/static/config.php';
		$r = "";
		$sQ = mysqli_query($conn, "SELECT Category FROM program_info WHERE ProgramNo = '$pNo'");
		$rS = mysqli_fetch_array($sQ);
		extract($rS);
		if ($Category == 'HS') {
			$r = 'true';
		} else {
			$r = 'false';
		}
		return $r;
	}
	//Return program name
	function returnProgram($pNo) {
		include '../../pages/static/config.php';
		$sQ = mysqli_query($conn, "SELECT ProgramName FROM program_info WHERE ProgramNo = '$pNo'");
		$rS = mysqli_fetch_array($sQ);
		extract($rS);
		return $ProgramName;
	}
	//Convert year string
	function convertYear($y) {
		$rY = "";
		if($y == 1) {
			$rY = '1st Year';
		}
		elseif($y == 2) {
			$rY = '2nd Year';
		}
		elseif($y == 3) {
			$rY = '3rd Year';
		}
		elseif($y == 4) {
			$rY = '4th Year';
		}
		elseif($y == 11) {
			$rY = 'Grade 11';
		}
		elseif($y == 12) {
			$rY = 'Grade 12';
		}
		return $rY;
	}
	//Show alert message
	function getAlert($message) {
		$AddClass = "";
		$AlertMessage = "";
		if($message == "error 4") {
			$AddClass = "alert-warning";
			$AlertMessage = "Student is already 4th year.";
		}elseif ($message == "error") {
			$AddClass = "alert-danger";
			$AlertMessage = "Sorry! error occured.";
		}elseif ($message == "Success") {
			$AddClass = "alert-success";
			$AlertMessage = "Action successfully done.";
		}elseif ($message == "Select") {
			$AddClass = "alert-warning";
			$AlertMessage = "Please select valid year level.";
		}elseif ($message == "Course") {
			$AddClass = "alert-warning";
			$AlertMessage = "Please select valid Course.";
		}
		elseif ($message == "Login") {
			$AddClass = "alert-warning";
			$AlertMessage = "Please login first to start your session.";
		}
		elseif ($message == "Error") {
			$AddClass = "alert-warning";
			$AlertMessage = "Sorry! Please try again.";
		}
		elseif ($message == "Out") {
			$AddClass = "alert-warning";
			$AlertMessage = "You logout successfully.";
		}
		elseif ($message == "Added") {
			$AddClass = "alert-success";
			$AlertMessage = "Data successfully save.";
		}
		elseif ($message == "Fail") {
			$AddClass = "alert-warning";
			$AlertMessage = "Failed to execute command.";
		}
		elseif ($message == "FileType") {
			$AddClass = "alert-warning";
			$AlertMessage = "File format is not valid.";
		}
		elseif ($message == "FileSize") {
			$AddClass = "alert-warning";
			$AlertMessage = "File iss too large.";
		}
		elseif ($message == "Other") {
			$AddClass = "alert-warning";
			$AlertMessage = "Program save successfully.";
		}
		elseif ($message == "CExist") {
			$AddClass = "alert-warning";
			$AlertMessage = "Program already exist.";
		}
		elseif ($message == "Done") {
			$AddClass = "alert-warning";
			$AlertMessage = "Database backup successfully.";
		}
		echo '
			<div class="row">
				<div class="col-sm-12">
					<div class="alert ' .$AddClass. ' alert-dismissible">
						<a href="#" class="close" data-dismiss="alert"><i class="fa fa-close"></i></a>
						<p><center>' .$AlertMessage. '</center></p>
					</div>
				</div>
			</div>
		';
	}
?>
