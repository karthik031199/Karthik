<!DOCTYPE html>
<html>
<head>
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
  padding: 40px;
  text-align: left;
}
.abc{
    padding: 5px;
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
<form action="check_entry.php" method="POST">
<h2>Patient Information</h2>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$conn = mysqli_connect($servername, $username, $password);
$id=$_SESSION['pat_id'];
$result=mysqli_query($conn,"SELECT pid FROM login.checkup WHERE pid='$id'") or die("could not execute query:".mysqli_error($conn));
$ch=mysqli_fetch_assoc($result);
?>
<?php
if($ch)
{
    $sql = "SELECT * FROM login.checkup WHERE pid='$id'";
    $result11 = mysqli_query($conn, $sql);
    while($row=$result11->fetch_assoc())
    {   
?>
<table align="center">

<tr><th style="padding:15px;height=10px;">Patient ID:</td><td><input type="text" name="id" class="hid" ></th></tr>
</table>
<br>
<table style="width:100%">
  <tr>
    <th>Date</th>
    <th>Time</th>
    <th>Causes</th>
    <th>Prescription</th>
    <th>Name of Doctor</th>
  </tr>
  <tr>
    <td ><input type="text" name="date" style="border:hidden;width:85px"><br><?php echo $row['datee'];?> </td>
    <td><input type="text" name="hour"  style="border:hidden;width:50px"><br><?php echo $row['hour'];?></td>
    <td><textarea name="causes" style="border:hidden;height:40px;width:100%"><?php echo $row['causes'];?></textarea></td>
    <td><textarea name="pres" style="border:hidden;height:40px;width:100%"> <?php echo $row['pres'];?></textarea></td>
    <td><input type="text" name="doctor" style="border:hidden;"><br><?php echo $row['doctor'];?></td>
  </tr>
  <tr>
    <td><input type="text" name="date1" style="border:hidden;width:85px"><br><?php echo $row['date1'];?></td>
    <td><input type="text" name="hour1" style="border:hidden;width:50px"><br><?php echo $row['hour1'];?></td>
    <td><textarea name="causes1" style="border:hidden;height:40px;width:100%"><?php echo $row['causes1'];?></textarea></td>
    <td><textarea name="pres1" style="border:hidden;height:40px;width:100%"><?php echo $row['pres1'];?></textarea></td>
    <td><input type="text" name="doctor1" style="border:hidden;"><br> <?php echo $row['doctor1'];?></td>
  </tr>
  <tr>
    <td ><input type="text" name="date2" style="border:hidden;width:85px"><br><?php echo $row['date2'];?></td>
    <td><input type="text" name="hour2" style="border:hidden;width:50px"><br><?php echo $row['hour2'];?> </td>
    <td><textarea name="causes2" style="border:hidden;height:40px;width:100%"><?php echo $row['causes2'];?> </textarea></td>
    <td><textarea name="pres2" style="border:hidden;height:40px;width:100%"><?php echo $row['pres2'];?> </textarea></td>
    <td><input type="text" name="doctor2" style="border:hidden;"> <?php echo $row['doctor2'];?></td>
  </tr>
 
</table><br>

        <?php
    }
}

?>
<div><center>
<button formaction="check_entry.php" style="margin:5px;" name="save">Save</button>
<button id="b2" formaction="entry.php" style="margin:5px;" name="next">Back</button></center></div>
</form>
</body>
</html>