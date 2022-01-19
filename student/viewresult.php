

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title><?php echo"View Result | Student"?></title>
    <style>
         <?php include('index4.css') ;?>
    </style>
  
</head>

<body >
<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3><?php echo"View Result"?></h3>
          
          </div>
        </div>
        <form class="login-form" method="POST" action="viewresult1.php">
          <input type="text" placeholder="StudentID / Rollno" name="rid" required/>
          <input type="text" placeholder="Course Name" name="cname" required/>
          
          <button type="submit" ><?php echo"View Result" ?></button>
        </form>
      </div>
    </div>
        

    
                   
   
</body>

</html>