<!DOCTYPE html>
<html>

<head>
    <title><?php echo "Student Result Management System"; ?></title>
    <style>
        <?php include 'index.css'; ?>
    </style>

</head>

<body>
    <div class="nav">
        <a class="active" href="index.php"><?php echo "Student Result Management System"; ?></a>

        <a class="a1" href="student/viewresult.php"><?php echo "Student"; ?></a>
        <a  href="student/complaint.php"><?php echo "Complaint"; ?></a>

        <a href="Admin/Adminlogin.php"><?php echo "Admin"; ?></a>
    </div>
    <div class="image1">
        <img src="image4.jpg" alt="result">
    </div>
    <div class="p1">
        <p>
            <?php echo "The result of the students is declared on 10th January 2022. The student can check the result by clicking the student button."; ?>
        </p>
    </div>
</body>

<div class="footer">
    <?php echo "Copyright @ Student Result Management System"; ?>
</div>

</html>