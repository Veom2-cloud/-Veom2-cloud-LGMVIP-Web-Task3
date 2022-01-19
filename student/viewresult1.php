<?php

include('../Admin/connect2.php');

?>

<head>
    <style>
        <?php include('../index.css'); ?>
    </style>
</head>

<body class="b1">
    <div class="nav">

        <a href="viewresult.php"><?php echo "Go back"; ?></a>

    </div>
    <h2 class="sub-header">All Courses</h2>
    <div class="table1">
        <table class="table2">
            <thead>
                <tr>
                    <th class="t1"><?php echo "Student ID" ?></th>
                    <th class="t1"><?php echo "Course_Name" ?></th>
                    <th class="t1"><?php echo "Subject 1" ?></th>
                    <th class="t1"><?php echo "Subject 2" ?></th>
                    <th class="t1"><?php echo "Subject 3" ?></th>
                    <th class="t1"><?php echo "Subject 4" ?></th>
                    <th class="t1"><?php echo "Subject 5" ?></th>
                    <th class="t1"><?php echo "Percentage" ?></th>
                    <th class="t1"><?php echo "Status" ?></th>

                </tr>
            </thead>

            <tbody>
                <?php


                $rid = $_POST['rid'];
                $cname = $_POST['cname'];

                $query = "SELECT * FROM course where rid='$rid' AND cname='$cname'";

                $result2 = mysqli_query($conn, $query);



                while ($row = mysqli_fetch_array($result2)) {

                    echo '<>';
                    echo '<td class="td1">' . $row['rid'] . '</td>';
                    echo '<td class = "td1">' . $row['cname'] . '</td>';
                    echo ' <td  class = "td2">' . $row['s1'] . '</td>';
                    echo '<td  class = "td2">' . $row['s2'] . '</td>';
                    echo '<td  class = "td2">' . $row['s3'] . '</td>';
                    echo '<td  class = "td2">' . $row['s4'] . '</td>';
                    echo '<td  class = "td2">' . $row['s5'] . '</td>';
                    echo '<td  class = "td2">' . ($row['s1'] + $row['s2'] + $row['s3'] + $row['s4'] + $row['s5']) / 5 . '</td>';
                    echo '<td  class = "td2">' . $row['status'] . '</td>';


                    echo '</tr> ';
                }


                ?>
            </tbody>

        </table>
    </div>

</body>