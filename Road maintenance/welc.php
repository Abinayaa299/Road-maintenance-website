<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body, html {
  height:100%;
  margin:0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg {
  background-image: url("myroad.jpg");

  height: 100%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.button {
  background-color: #93F17E;
  border: none;
  color: #6520F8;
  padding: 15px 32px;
  text-align: center;
  text-decoration-style: wavy;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}


</style>
</head>
<body>
<div class="bg" align="center"><p>
<h1 align="center"><font color="black" size=20>MY ROADS</font></h1>
<br>
<a href="first.php"><button class="button">ADMIN</button></a><br><br>
<a href="second.php"><button class="button">AUTHORITY</button></a><br><br>
<a href="third.php"><button class="button">CITIZEN</button></a><br></p>
</div>
</body>
</html>