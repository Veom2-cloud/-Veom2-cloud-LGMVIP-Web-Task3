<?php

include('../Admin/connect2.php');

?>

<body>
    <?php

    $sname = $_POST['sname'];
    $rollno = $_POST['rollno'];
  
    $complaint = $_POST['complaint'];
   

    switch ($_GET['action']) {
        case 'add':
            
            $query = "INSERT INTO complaint
               (sname,rollno ,complaint)
               VALUES ('" . $sname . "','" . $rollno . "','$complaint')";
            mysqli_query($conn, $query) or die('Error in updating Database');

            break;
    }
    ?>
    <script type="text/javascript">
        alert("Complaint Registered Successfully");
        window.location = "../index.php";
    </script>
</body>