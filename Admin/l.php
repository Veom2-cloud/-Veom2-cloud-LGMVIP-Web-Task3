<?php 
session_start(); 
include "connect2.php";

if (isset($_POST['firstname']) && isset($_POST['password1'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['firstname']);
	$pass = validate($_POST['password1']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM register WHERE firstname='$uname' AND password1='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['firstname'] === $uname && $row['password1'] === $pass) {
            	$_SESSION['firstname'] = $row['firstname'];
            	$_SESSION['password1'] = $row['password1'];
            	header("Location: welcomepage.php");
		        exit();
            }else{
				header("Location: adminregister.php");
		        exit();
			}
		}else{
        
			header("Location: adminregister.php");
	        exit();
		}
	}
	
}else{
	header("Location: adminregister.php");
	exit();
}