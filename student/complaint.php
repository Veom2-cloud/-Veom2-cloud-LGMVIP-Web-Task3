<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo"Student Complaint Form"?>
        </title>
        <style>

* { box-sizing: border-box; }

body {
	font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
  color:white;
  font-size:12px;
  background:#333 url(/images/classy_fabric.png);
}

form {

 	background:#111; 
  width:300px;
  margin:100px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}

.inset {
 	padding:20px; 
  border-top:1px solid #19191a;
}

form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}

label {
 	color: white;
  display:block;
  padding-bottom:9px;
}

input[type=text],
input[type=password] {
 	width:100%;
  padding:8px 5px;
  background:linear-gradient(#1f2124, #27292c);
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
  color: white;
}

.p-container {
 	padding:0 10px 20px 20px; 
    
}


input[type=submit] {
 	padding:5px 20px;
  border:1px solid rgba(0,0,0,0.4);
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 10px 10px rgba(255,255,255,0.1);
  border-radius:0.3em;
  background:#0184ff;
  color:white;
  margin-left: 90px;
  font-weight:bold;
  cursor:pointer;
  font-size:13px;
}


            </style>
    </head>
    <body>
    <form method="POST" action="complaint1.php?action=add">
  <h1>Student Complaint Form</h1>
  <div class="inset">
  <p>
    <label for="sname">Student Name</label>
    <input type="text" name="sname" id="sname">
  </p>
  <p>
    <label for="rollno">Roll no</label>
    <input type="text" name="rollno" id="rollno">
  </p>
  <p>
    <label for="complaint">Complaint</label>
    <input type="text" name="complaint" id="complaint">
  </p>
 
  </div>
  <p class="p-container">
    <input type="submit" name="go" id="go" value="Submit">
  </p>
</form>
    </body>
</html>