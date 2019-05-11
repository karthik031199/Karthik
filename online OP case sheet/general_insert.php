
<?php   
if(isset($_POST['submit']))
{
$server="localhost";
$user="root";
$pass="root";
$con=new mysqli($server,$user,$pass); 
$pid=$_POST['id'];
$pulse=$_POST['pulse'];
$respiration=$_POST['respiration'];
$bp=$_POST['bp'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$bdate=$_POST['date'];
$bvalue=$_POST['pulse'];
$cdate=$_POST['date1'];
$cvalue=$_POST['pulse1'];
$pdate=$_POST['date2'];
$pvalue=$_POST['pulse2'];
$chodate=$_POST['date3'];
$chovalue=$_POST['pulse3'];
$udate=$_POST['date4'];
$uvalue=$_POST['pulse4'];
$crdate=$_POST['date5'];
$crvalue=$_POST['pulse5'];
$sodate=$_POST['date6'];
$sovalue=$_POST['pulse6'];
$potdate=$_POST['date7'];
$potvalue=$_POST['pulse7'];
$sudate=$_POST['date8'];
$suvalue=$_POST['pulse8'];
if(mysqli_connect_error())
{
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else
{
    $query="INSERT INTO login.general(pid,pulse,respiration,bp,height,weight,bdate,bvalue,cdate,cvalue,pdate,pvalue,chodate,chovalue,udate,uvalue,crdate,crvalue,sodate,sovalue,potdate,potvalue,sudate,suvalue)VALUES
    ('$pid','$pulse','$respiration','$bp','$height','$weight','$bdate','$bvalue','$cdate','$cvalue','$pdate','$pvalue','$chodate','$chovalue','$udate','$uvalue','$crdate','$crvalue','$sodate','$sovalue','$potdate','$potvalue','$sudate','$suvalue')" ;
    $asd=mysqli_query($con,$query);
    if($asd)
    {
        header("location:project1.php");
    }
    else{
        header("location:register.php");
    }
}
   

}
 ?>
