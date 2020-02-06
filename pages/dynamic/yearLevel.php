
<?php
	$q = $_GET['q'];
	if($q == 'HS') {
		echo '<option value="">Grade</option>';
		echo '<option value="Grade 7">Grade 7</option>';
		echo '<option value="Grade 8">Grade 8</option>';
		echo '<option value="Grade 9">Grade 9</option>';
		echo '<option value="Grade 10">Grade 10</option>';
		echo '<option value="Grade 11">Grade 11</option>';
		echo '<option value="Grade 12">Grade 12</option>';
	} else {
		echo '<option value="">Year Level</option>';
		echo '<option value="1st Year">1st Year</option>';
		echo '<option value="2nd Year">2nd Year</option>';
		echo '<option value="3rd Year">3rd Year</option>';
		echo '<option value="4th Year">4th Year</option>';
	}
?>
