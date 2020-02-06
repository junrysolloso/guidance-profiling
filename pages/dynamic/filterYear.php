
<?php
  if ($_GET['q'] == 'HS') {
	echo '<option>Select Grade</option>';
    echo '<option value="Grade 7">Grade 7</option>';
    echo '<option value="Grade 8">Grade 8</option>';
    echo '<option value="Grade 9">Grade 9</option>';
    echo '<option value="Grade 10">Grade 10</option>';
    echo '<option value="Grade 11">Grade 11</option>';
    echo '<option value="Grade 12">Grade 12</option>';
    echo '<option value="All">All</option>';
  } else {
	echo '<option>Year Level</option>';
    echo '<option value="1st Year">1st Year</option>';
    echo '<option value="2nd Year">2nd Year</option>';
    echo '<option value="3rd Year">3rd Year</option>';
    echo '<option value="4th Year">4th Year</option>';
    echo '<option value="All">All</option>';
  }
?>
