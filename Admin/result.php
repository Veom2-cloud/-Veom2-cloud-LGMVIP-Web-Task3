<?php

include('connect2.php');

?>

<body>

    <?php

    $rid = $_POST['rid'];
    $cname = $_POST['cname'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];
    $status = $_POST['status'];

    switch ($_GET['action']) {
        case 'res':

            $query = "INSERT INTO course
            (rid,cname,s1,s2,s3,s4,s5,status)
            VALUES ('" . $rid . "','" . $cname . "','" . $s1 . "','" . $s2 . "','" . $s3 . "','" . $s4 . "','" . $s5 . "','" . $status . "')";
         mysqli_query($conn, $query) or die('Error in updating Database');

         break;
           
           

    }
    ?>
    <script type="text/javascript">
        alert("Result Added Successfully");
        window.location = "admin.php";
    </script>

    

</body>