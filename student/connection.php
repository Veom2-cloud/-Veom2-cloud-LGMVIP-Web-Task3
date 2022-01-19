
 
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $_POST['firstname'];
        $password1 = $_POST['password'];
       
         
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "student1";

      $conn = mysqli_connect($servername, $username, $password, $database);
    

    }

    
?>

