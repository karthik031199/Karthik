<?php
session_start();
if(isset($_POST['submit']))
{
$server="localhost";
$user="root";
$pass="root";
$con=new mysqli($server,$user,$pass);
$id=$_POST['id1'];
$_SESSION['pat_id']=$id;
$result=mysqli_query($con,"SELECT pid FROM login.hospital WHERE pid='$id'") or die("could not execute query:".mysqli_error($con));
$ch=mysqli_fetch_assoc($result);
if($ch)
{
    header("location:entry.php");
}
else
{
    header("location:plogin.php");

}
}
?>