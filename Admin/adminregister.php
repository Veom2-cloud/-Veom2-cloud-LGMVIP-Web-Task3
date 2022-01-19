<?php
include('connect2.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        <?php include('index1.css'); ?>
    </style>
</head>

<body>

    <div class="main1">


        <div class="signup">
            <form action="register1.php?action=add" method="POST">
                <h2>Admin registration form</h2>
                <input type="text" name="firstname" placeholder="firstname" required />
                <input type="text" name="lastname"  placeholder="lastname"  required />
                <input type="text" name="state"  placeholder="state"  required />
                <input type="text" name="city"   placeholder="city" required />
                <input type="password" name="password1"  placeholder="password"  required/>
                <input type="submit" value="Register" class="submit" name="submit" />

                    <a href="Adminlogin.php">Login</a>
            
        </div>
        </form>
    </div>
    </div>
    </div>

</body>

</html>