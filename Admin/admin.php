<?php

include('connect2.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo "Student | Dashboard" ?></title>
    <style>
        <?php include('index2.css');
        ?>
    </style>

</head>

<body>


    <div class="nav">
        <a class="active" href="../index.php">Home Page</a>
        <a class="a" href="welcomepage.php">Admin Page</a>
    </div>

    <div class="login">
        <form id="login" method="POST" action="result.php?action=res">

        <h2>Add Results</h2>
            <label><b>Student ID/ Rollno
                </b>
            </label>
            <input type="text" name="rid" id="Uname" placeholder="Rollno" required>
            <br><br>

            <label><b>Course Name
                </b>
            </label>
            <input type="text" name="cname" id="Uname" placeholder="Course Name" required>
            <br><br>

            <label><b>  MATHS
                </b><br>
            </label>
            <input type="number" min="0" name="s1" id="Pass" placeholder=" MATHS" required>
            <br><br>

            <label><b> DBMS
                </b><br>
            </label>
            <input type="number" min="0" name="s2" id="Pass" placeholder="DBMS" required>
            <br><br>

            <label><b> CD
                </b><br>
            </label>
            <input type="number" min="0" name="s3" id="Pass" placeholder="CD" required>
            <br><br>

            <label><b>  DSTL
                </b><br>
            </label>
            <input type="number" min="0" name="s4" id="Pass" placeholder=" DSTL" required>
            <br><br>

            <label><b> ENGLISH
                </b><br>
            </label>
            <input type="number" min="0" name="s5" id="Pass" placeholder="ENGLISH" required>
            <br><br>
            <label><b> Status
                </b>
            </label>
            <br>
            <input type="text" name="status" id="Uname" placeholder="Pass/ Fail" required>
            <br><br>

           

            <input type="submit" id="log" name= "log" value="Add Result">

            <br><br>

        </form>





    </div>

</body>
</html>