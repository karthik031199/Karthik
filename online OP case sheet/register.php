<html>
<head>
<title>Log in page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
.hid
{
  height:20px;
   width:190px;
   border:hidden;
}
</style>
</head>
<body>
<form action="message.php" method="post">
<h1 align="center">Patient Personal Information</h1>
<table align="center">
<tr><td>Patient ID:</td><td><input type="text" name="id" class="hid"></td></tr>
 <tr><td>First Name:</td><td><input type="text" name="fname" class="hid"></td></tr>
 <tr><td>Last Name:</td><td><input type="text" name="lname" class="hid"></td></tr>
 <tr><td>Father's Name:</td><td><input type="text" name="fathername" class="hid"></td></tr>
 <tr><td>Mother's Name:</td><td><input type="text" name="mothername" class="hid"></td></tr>
 <tr><td>Gender:</td><td> <input type="radio" name="gender" value="male"> Male   
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other  </td></tr>
  <tr><td>Date Of Birth:</td><td><input type="date" name="date" class="hid"></td></tr>
 <tr><td>Age:</td><td><input type="text" name="age" class="hid"></td></tr>

 <tr><td>Marital Status:</td><td> <input type="radio" name="marital" value=" Married"> Married
  <input type="radio" name="marital" value="Single"> Single
  <input type="radio" name="marital" value="Separated "> Separated 
  <input type="radio" name="marital" value=" Widowed"> Widowed </td></tr>
  <tr><td>E-mail:</td><td><input type="text" name="mail" class="hid"></td></tr>
  <tr><td>Address:</td><td><input type="text" name="add" class="hid"></td></tr>
 <tr><td>City:</td><td><input type="text" name="city" class="hid"></td></tr>
 <tr><td>State:</td><td><input type="text" name="state" class="hid"></td></tr>
 <tr><td>Zip Code:</td><td><input type="text" name="zip" class="hid"></td></tr> 
  <tr><td>Mobile No:</td><td><input type="text" name="mobile" class="hid"></td></tr>

</table><br><br>
<div><center>
<button id="b2" formaction="insert.php" name="next">Next</button></center></div>

</form>
</body>
</html>
