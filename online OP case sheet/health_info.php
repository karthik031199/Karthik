<html>
<head>
   <title> Health information </title>
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
<h1 align="center">Patient Health Information </h1>
<form action="entry.php" method="post">

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$conn = mysqli_connect($servername, $username, $password);
$id=$_SESSION['pat_id'];
$result=mysqli_query($conn,"SELECT pid FROM login.general WHERE pid='$id'") or die("could not execute query:".mysqli_error($conn));
$ch=mysqli_fetch_assoc($result);
?>
<?php
if($ch)
{
    $sql = "SELECT * FROM login.general WHERE pid='$id'";
    $result11 = mysqli_query($conn, $sql);
    while($row=$result11->fetch_assoc())
    {   
?>
<table align="center">
<h2 align="center">General Examination</h2>
    <?php echo "<tr>";?>
        <th>Pulse / min</th>
        <th>Respiration / min</th>
        <th>BP mmHg	</th>
        <th>Height cm</th>
        <th>Weight cm</th>
     <?php echo "</tr>";?>   
     <?php echo "<tr>";?>
        <td> <?php echo $row['pulse'];?> </td>
        <td> <?php echo $row['respiration'];?> </td>
        <td> <?php echo $row['bp'];?> </td>
        <td> <?php echo $row['height'];?> </td>
        <td> <?php echo $row['weight'];?> </td>
        <?php echo "</tr>";?> 
    
        </table><br>
       <table align="center">
       <h2 align="center">Clinical Investigation Reports</h2>
       <?php echo "<tr>";?>
       <th></th>
        <th>Date</th>
        <th>Value</th>
        <th></th>
        <th>Date</th>
        <th>Value</th>
       <?php echo "</tr>";?> 
       <?php echo "<tr>";?>
       <th>Blood</th>
       <td></td>
       <td></td>
       <th>Renal Function</th>
       <td></td>
       <td></td>
       <?php echo "</tr>";?> 
       <?php echo "<tr>";?>
       <td>Bleeding Time</td>
       <td> <?php echo $row['bdate'];?> </td>
       <td> <?php echo $row['bvalue'];?> </td>
       <td>Urea</td>
       <td> <?php echo $row['udate'];?> </td>
       <td> <?php echo $row['uvalue'];?> </td>
       <?php echo "</tr>";?>
       <?php echo "<tr>";?>
       <td>Clotting Time</td>
       <td> <?php echo $row['cdate'];?> </td>
       <td> <?php echo $row['cvalue'];?> </td>
       <td>Creatinin</td>
       <td> <?php echo $row['crdate'];?> </td>
       <td> <?php echo $row['crvalue'];?> </td>
       <?php echo "</tr>";?>
       <?php echo "<tr>";?>
       <td>Platelet Time</td>
       <td> <?php echo $row['pdate'];?> </td>
       <td> <?php echo $row['pvalue'];?> </td>
       <td>Sodium</td>
       <td> <?php echo $row['sodate'];?> </td>
       <td> <?php echo $row['sovalue'];?> </td>
       <?php echo "</tr>";?>
       <?php echo "<tr>";?>
       <th>Blood Sugar</th>
       <td></td>
       <td></td>
       <td>Pottassium</td>
       <td><?php echo $row['potdate'];?></td>
       <td><?php echo $row['potvalue'];?></td>
       <?php echo "</tr>";?>
       <?php echo "<tr>";?>
       <td>Cholesterol</td>
       <td> <?php echo $row['chodate'];?> </td>
       <td> <?php echo $row['chovalue'];?> </td>
       <td>Sugar</td>
       <td> <?php echo $row['sudate'];?> </td>
       <td> <?php echo $row['suvalue'];?> </td>
       <?php echo "</tr>";?>
       </table><br>
    <?php
    }
}

?>

<div><center>
<button id="b2" formaction="entry.php" name="next">Back</button></center></div>
</form>

</body>
</html>