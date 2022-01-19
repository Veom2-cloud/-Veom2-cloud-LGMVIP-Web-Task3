<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo "Admin Page" ?></title>
  <style>
    <?php include('index3.css');
    ?>
  </style>
</head>

<body>

  <div class="container">
    <div class="nav">
      <a class="navbar-brand" href="../index.php"><?php echo "Home Page" ?></a>

    </div>

    <div class="p1">
      <div id="c1">
        <h1>
          <?php echo " Result -" ?>
        </h1>
      </div>

      <div id="c2">
        <a class="c7" href="Admin.php">
          <?php echo " Add result" ?> </a> <br><br>
        <a class="c7" href="editresult.php"><?php echo "Edit result" ?></a>

      </div>
    </div>
  </div>
  <div class="footer">
    <?php echo "Copyright @ Student Result Management System"; ?>
  </div>

</body>

</html>