<?php
       
 include('config.php');
       
       
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mname = $_POST['Middlename'];
$address = $_POST['Address'];
$contct = $_POST['Contact'];
$email = $_POST['Email'];
$description = $_POST['description'];

switch ($_GET['action'])
{
    case 'add':
        $query = "INSERT INTO profile
								(profile_id,first_name, last_name, mid_name, address,contact_no,email_add, description)
								VALUES ('Null','" . $fname . "','" . $lname . "','" . $mname . "','" . $address . "','".$contct."','" . $email."','" $description . "')";
        mysqli_query($db, $query) or die('Error in updating Database');

    break;

}
?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
	</script>