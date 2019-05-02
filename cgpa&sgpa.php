<html>
<head>
<title>6th sem cgpa and sgpa </title>
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
</style>
</head>
<body background="b.jpg">
<form>
<h2 align="center"> CGPA </h2><br>
<table align="center">
<tr><td>40CS601(SS)  </td><td><select id="op1" ><option></option><option value='40'>O</option><option value='36'>A+</option><option value='32'>A</option>
<option value='28'>B+</option><option value='24'>B</option><option value='20'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>40CS602(CNS) </td><td><select id="op2"><option></option><option value='30'>O</option><option value='27'>A+</option><option value='24'>A</option>
<option value='21'>B+</option><option value='18'>B</option><option value='15'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>40CS603(GMS) </td><td><select id="op3"><option></option><option value='30'>O</option><option value='27'>A+</option><option value='24'>A</option>
<option value='21'>B+</option><option value='18'>B</option><option value='15'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>40CS604(DM)  </td><td><select id="op4"><option></option><option value='30'>O</option><option value='27'>A+</option><option value='24'>A</option>
<option value='21'>B+</option><option value='18'>B</option><option value='15'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>40HS003(TQM)  </td><td><select id="op5"><option></option><option value='30'>O</option><option value='27'>A+</option><option value='24'>A</option>
<option value='21'>B+</option><option value='18'>B</option><option value='15'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>41CSE12(UIT) OR 40HS001(PE) </td><td><select id="op6"><option></option><option value='30'>O</option><option value='27'>A+</option><option value='24'>A</option>
<option value='21'>B+</option><option value='18'>B</option><option value='15'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>40SAT02(SAP) OR 40MBL02(IPR) OR </td><td><select id="op7"><option></option><option value='30'>O</option><option value='27'>A+</option><option value='24'>A</option>
<option value='21'>B+</option><option value='18'>B</option><option value='15'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>40CS6P2(DM) </td><td><select id="op8"><option></option><option value='20'>O</option><option value='18'>A+</option><option value='16'>A</option>
<option value='14'>B+</option><option value='12'>B</option><option value='10'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>40CS6P4(GMS)  </td><td><select id="op9"><option></option><option value='20'>O</option><option value='18'>A+</option><option value='16'>A</option>
<option value='14'>B+</option><option value='12'>B</option><option value='10'>C</option><option value='0'>RA</option></select></td></tr>
<tr><td>40CS6P4(OOAD)   </td><td><select id="op10" ><option></option><option value='20'>O</option><option value='18'>A+</option><option value='16'>A</option>
<option value='14'>B+</option><option value='12'>B</option><option value='10'>C</option><option value='0'>RA</option></select></td></tr>
</table>
</form>
<center><button onclick="fun()">GET CGPA</button><h3><br>Your's CGPA : <span id="hell"></span></h3></center><br>
<form>
<table align="center">
<h2 align="center">SGPA</h2><br>
<tr><td>CGPA(UPTO 5TH SEM)</td><td><input type="text" value="" id="it"></td></tr>
</table>
</form>
<center><button onclick="fun1()">GET SGPA</button><h3><br>Your's SGPA : <span id="hel"></span></h3></center>
<script>
function fun()
{
    var a1=Number(document.getElementById("op1").value);
    var a2=Number(document.getElementById("op2").value);
    var a3=Number(document.getElementById("op3").value);
    var a4=Number(document.getElementById("op4").value);
    var a5=Number(document.getElementById("op5").value);
    var a6=Number(document.getElementById("op6").value);
    var a7=Number(document.getElementById("op7").value);
    var a8=Number(document.getElementById("op8").value);
    var a9=Number(document.getElementById("op9").value);
    var a10=Number(document.getElementById("op10").value);
    var tot=a1+a2+a3+a4+a5+a6+a7+a8+a9+a10;
    var cgpa=tot/28;
    document.getElementById("hell").innerHTML=cgpa.toFixed(2);

}
function fun1()
{
    var a1=Number(document.getElementById("op1").value);
    var a2=Number(document.getElementById("op2").value);
    var a3=Number(document.getElementById("op3").value);
    var a4=Number(document.getElementById("op4").value);
    var a5=Number(document.getElementById("op5").value);
    var a6=Number(document.getElementById("op6").value);
    var a7=Number(document.getElementById("op7").value);
    var a8=Number(document.getElementById("op8").value);
    var a9=Number(document.getElementById("op9").value);
    var a10=Number(document.getElementById("op10").value);
    var tot=a1+a2+a3+a4+a5+a6+a7+a8+a9+a10;
    var cgpa=tot/28;
    var s1=Number(document.getElementById("it").value);
    var sg=cgpa+s1;
    var sgpa=sg/2;
    document.getElementById("hel").innerHTML=sgpa.toFixed(2);
}
</script>
</body>
</html>