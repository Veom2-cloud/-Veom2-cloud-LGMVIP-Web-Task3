<?php

include('connect2.php');

?>
<body>
<?php
$rid=$_POST['rid'];
$cname = $_POST['cname'];
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4']; 
$s4 = $_POST['s4']; 
$s5 = $_POST['s5']; 

$status = $_POST['status'];
$query = 'UPDATE course set cname ="'.$cname.'",
					s1 ="'.$s1.'", s2="'.$s2.'",
					s3="'.$s3.'",s4='.$s4.',s5='.$s5.', 
					status="'.$status.'" WHERE
					rid ="'.$rid.'"';
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
							
?>	
	<script type="text/javascript">
			alert("Result Updated Successfully.");
			window.location = "admin.php";
		</script>
</body>