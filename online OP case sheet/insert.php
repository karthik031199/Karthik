
<?php   
if(isset($_POST['next']))
{
$server="localhost";
$user="root";
$pass="root";
$con=new mysqli($server,$user,$pass); 
$pid=$_POST['id'];
$first=$_POST['fname'];
$last=$_POST['lname'];
$fname=$_POST['fathername'];
$mname=$_POST['mothername'];
$gender=$_POST['gender'];
$dob=$_POST['date'];
$age=$_POST['age'];
$mstatus=$_POST['marital'];
$email=$_POST['mail'];
$address=$_POST['add'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$mob=$_POST['mobile'];
if(mysqli_connect_error())
{
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else
{
    $query="INSERT INTO login.hospital(pid,first,last,fname,mname,gender,dob,age,mstatus,email,address,city,state,zip,mno)VALUES('$pid','$first','$last','$fname','$mname','$gender','$dob','$age','$mstatus','$email','$address','$city','$state','$zip','$mob')" ;
    $asd=mysqli_query($con,$query);
    if($asd)
    {
        header("location:health.php");
    }
    else
    {
        header("location:register.php");
    }
}
   

}
 ?>
 
 