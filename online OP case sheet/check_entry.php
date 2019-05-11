
<?php   
if(isset($_POST['save']))
{
$server="localhost";
$user="root";
$pass="root";
$con=new mysqli($server,$user,$pass); 
$pid=$_POST['id'];
$datee=$_POST['date'];
$hour=$_POST['hour'];
$causes=$_POST['causes'];
$pres=$_POST['pres'];
$doctor=$_POST['doctor'];
$date1=$_POST['date1'];
$hour1=$_POST['hour1'];
$causes1=$_POST['causes1'];
$pres1=$_POST['pres1'];
$doctor1=$_POST['doctor1'];
$date2=$_POST['date2'];
$hour2=$_POST['hour2'];
$causes2=$_POST['causes2'];
$pres2=$_POST['pres2'];
$doctor2=$_POST['doctor2'];
if(mysqli_connect_error())
{
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else
{
    
    $query="INSERT INTO login.checkup(pid,datee,hour,causes,pres,doctor,date1,hour1,causes1,pres1,doctor1,date2,hour2,causes2,pres2,doctor2)VALUES('$pid','$datee','$hour','$causes','$pres','$doctor','$date1','$hour1','$causes1','$pres1','$doctor1','$date2','$hour2','$causes2','$pres2','$doctor2')" ;
    $asd=mysqli_query($con,$query);
    if($asd)
    {
        header("location:entry.php");
    }
    else{
        header("location:welcome.php");
    }
   
}
   

}
 ?>
 
 