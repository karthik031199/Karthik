<html>
<head>
   <title> personal information </title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
</style>
<body>
<form action="entry.php" method="post">
<table align="center">
 
 <h1 align="center"> Personal Information </h1>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$conn = mysqli_connect($servername, $username, $password);
$id=$_SESSION['pat_id'];
$result=mysqli_query($conn,"SELECT pid FROM login.hospital WHERE pid='$id'") or die("could not execute query:".mysqli_error($conn));
$ch=mysqli_fetch_assoc($result);
?>
<?php
if($ch)
{
    $sql = "SELECT * FROM login.hospital WHERE pid='$id'";
    $result11 = mysqli_query($conn, $sql);
  //  echo "<table>";
    while($row=$result11->fetch_assoc())
    {
?>
    <?php echo "<tr>";?>
        <th>First Name </th>
        <td width="500"> <?php echo $row['first'];?> </td>
     <?php echo "</tr>";?>   
     <?php echo "<tr>";?>
     <th>Last Name</th>
        <td> <?php echo $row['last'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
    <th>Father's Name </th>
        <td> <?php echo $row['fname'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>Mother's Name</th>
        <td> <?php echo $row['mname'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>Gender</th>
        <td> <?php echo $row['gender'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>DOB</th>
        <td> <?php echo $row['dob'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>Age</th>
        <td> <?php echo $row['age'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>Marital Status</th>
        <td> <?php echo $row['mstatus'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>E-mail</th>
        <td> <?php echo $row['email'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>Address</th>
        <td> <?php echo $row['address'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>City</th>
        <td> <?php echo $row['city'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>State</th>
        <td> <?php echo $row['state'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>Zip Code</th>
        <td> <?php echo $row['zip'];?> </td>
        <?php echo "</tr>";?> 
        <?php echo "<tr>";?>
        <th>Mobile no</th>
        <td> <?php echo $row['mno'];?> </td>
    <?php echo "</tr>";?>
    <?php
    }
}

    ?>
</table><br>
<div><center>
<button id="b2" formaction="entry.php" name="next">Back</button></center></div>
</form>
</body>
</html>