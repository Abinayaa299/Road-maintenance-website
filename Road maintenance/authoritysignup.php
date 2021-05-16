<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  width: 100%;
  align: center;
}

* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.content {
  max-width: 500px;
  margin: auto;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="authorityconnect.php" id="#form" method="POST" name="#form">
<div class="content">
  <div class="container">
    <h1>SIGN UP</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="authority id"><b>Authority id</b></label>
    <input type="text" placeholder="Enter id" name="authorityid" required>

    <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="First_Name" required>
    <label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="Last_Name" required>
    <label for="Gender"><b>Gender</b></label><br>
    <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other<br><br>
    <label for="designation"><b>Designation</b></label>
    <input type="text" placeholder="Enter designation" name="designation" required>
     <label for="authority location 1"><b>Authority location 1</b></label>
    <input type="text" placeholder="Enter location 1" name="authority_location1" required>
 <label for="authority location 2"><b>Authority location 2</b></label>
    <input type="text" placeholder="Enter location 2" name="authority_location2" required>
 <label for="authority location 3"><b>Authority location 3</b></label>
    <input type="text" placeholder="Enter location 3" name="authority_location3" required>
   <label for="adminid"><b>Admin ID</b></label>
    <input type="text" placeholder="Enter your admin id" name="adminid" required>

    <label for="phoneno"><b>Phone number</b></label>
    <input type="text" placeholder="Enter phone number" name="phoneno1" required>
    <input type="text" placeholder="Enter another phone number" name="phoneno2" required>
    <label for="emailid"><b>Email id</b></label>
    <input type="text" placeholder="Enter Email id" name="emailid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <input id='btn' name="submit" type='submit' value='Confirm' class="registerbtn">
    <button type="reset" class="registerbtn">Cancel</button>
  </div>
  <?php
include "authoritylogin.php";
?>
  <div class="container signin">
    <p>Already have an account? <a href="second.html">Log in</a>.</p>
  </div>
</div>
</form>

</body>
</html>
