<?php
include "config.php";
if (!isset($_GET['do']) || $_GET['do'] != 1)
{

    switch ($_GET['type'])
    {
        case 'profile':
            $query = 'DELETE FROM profile
							WHERE
							profile_id = ' . $_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));

?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "index.php";
			</script>				
				
			<?php
            //break;
            
    }
}
?>