<?php

include('connect2.php');

?>

<body>
    <?php

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
  
    $state = $_POST['state'];
    $city = $_POST['city'];
    

    $password1 = $_POST['password1'];


    switch ($_GET['action']) {
        case 'add':
            
            $query = "INSERT INTO register
               (firstname, lastname,state,city,password1)
               VALUES ('" . $fname . "','" . $lname . "','$state','" . $city . "','" . $password1 . "')";
            mysqli_query($conn, $query) or die('Error in updating Database');

            break;
    }
    ?>
    <script type="text/javascript">
        alert("Admin Registered Successfully");
        window.location = "Adminlogin.php";
    </script>
</body>