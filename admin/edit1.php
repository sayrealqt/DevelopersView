<?php
			$zz = $_POST['id'];
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$mname = $_POST['Middlename'];
			$address = $_POST['Address'];
			$contct = $_POST['Contact'];
			$email = $_POST['Email'];
			$description = $_POST['description'];
			
	   include('config.php');
		
	 			$query = 'UPDATE profile set first_name ="'.$fname.'",
					last_name ="'.$lname.'", mid_name="'.$mname.'",
					address="'.$address.'",contact_no='.$contct.', 
					email_add='.$email.',description="'.$description.'" WHERE
					profile_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>