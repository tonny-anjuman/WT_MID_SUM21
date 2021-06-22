<?php
	$studentenrollmentid ="";
	$error_studentenrollmentid = "";
	$studentid = "";
	$error_studentid = "";
	$courseid = "";
	$error_courseid = "";
	$error = false;
	
	
	
	if(isset($_POST["submit"])){
		if(empty($_POST["studentenrollmentid"])){
			$error = true;
			$error_studentenrollmentid = "need Student Enrollment Id";
		}
		else if(is_numeric($_POST["studentenrollmentid"])==false){
			$error = true;
			$error_studentenrollmentid = "Student Enrollment Id must be number";
		}
		else{
			$studentenrollmentid = $_POST["studentenrollmentid"];
		}
		if(empty($_POST["studentid"])){
			$error = true;
			$error_studentid = "need Student Id";
		}
		else if(is_numeric($_POST["studentid"])==false){
			$error = true;
			$error_studentid = "Student Id must be number";
		}
		else{
			$studentid = $_POST["studentid"];
		}
		if(empty($_POST["courseid"])){
			$error = true;
			$error_courseid = "need Course Id";
		}
		else if(is_numeric($_POST["courseid"])==false){
			$error = true;
			$error_courseid = "Course Id must be number";
		}
		else{
			$courseid = $_POST["courseid"];
		}
	}	
?>
<html>
	<body>
		<form action=""method="POST">
			<table>
				<tr>
					<td>
						<h1>STUDENT ENTRY IN THE COURSE</h1>
					</td>
				</tr>
				<tr>
					<td align ="right">
						Studentenrollment ID:
					</td>
					<td>
						<input type="text" name="studentenrollmentid" value="<?php echo $studentenrollmentid?>">
					</td>
					<td><span><?php echo $error_studentenrollmentid;?></span></td>
				</tr>
				<tr>
					<td align ="right">
						Student ID:
					</td>
					<td>
						<input type="text" name="studentid" value="<?php echo $studentid?>">
					</td>
					<td><span><?php echo $error_studentid;?></span></td>
				</tr>
				<tr>
					<td align ="right">
						Course ID:
					</td>
					<td>
						<input type="text" name="courseid" value="<?php echo $courseid?>">
					</td>
					<td><span><?php echo $error_courseid;?></span></td>
				</tr>
				<tr>
					<td align="right">
						<input type="Submit" name="submit" value="Delete">
					</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>