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
.abc{
    padding: 5px;
    text-align: left;
}
.hid
{
  height:20px;
   width:70px;
   border:hidden;
}
</style>
</head>
<body>
<form action="general_insert.php" method="POST">
<table align="center">
<tr><td>Patient ID:</td><td><input type="text" name="id"></td></tr></table>
<h1 align="center">Patient Health Information</h1>
<table align="center">

    <h2 align="center">General Examination</h2>
<tr>
    <th>Pulse / min</th>
    <th>Respiration / min</th>
    <th>BP mmHg</th>
    <th>Height cm</th>
    <th>Weight kg</th>
  </tr>
  <tr>
    <td><input type="text" name="pulse" class="hid"></td>
    <td><input type="text" name="respiration" class="hid"></td>
    <td><input type="text" name="bp" class="hid"></td>
    <td><input type="text" name="height" class="hid"></td>
    <td><input type="text" name="weight" class="hid"></td>
  </tr>
  </table>
  <br>
  <table align="center">
  <h2 align="center">Clinical Investigation Reports</h2>
  <tr>
  <th></th>
  <th>Date</th>
  <th>Value</th>
  <th></th>
  <th>Date</th>
  <th>Value</th>
  </tr>
<tr>
<th>Blood</th>
<td></td>
<td></td>
<th>Renal Function</th>
<td></td>
<td></td>
</tr>
<tr>
<td>Bleeding Time</td>
<td><input type="text" name="date" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse" class="hid"></td>
<td>Urea</td>
<td><input type="text" name="date1" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse1" class="hid"></td>
</tr>
<tr>
<td>Clotting Time</td>
<td><input type="text" name="date2" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse2" class="hid"></td>
<td>Creatinin</td>
<td><input type="text" name="date3" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse3" class="hid"></td>
</tr>
<tr>
<td>Platelet Time</td>
<td><input type="text" name="date4" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse4" class="hid"></td>
<td>Sodium</td>
<td><input type="text" name="date5" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse5" class="hid"></td>
</tr>
<th>Blood Sugar</th>
<td></td>
<td></td>
<td>Pottassium</td>
<td><input type="text" name="date6" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse6" class="hid"></td>
</tr>
<td value="Cholesterol">Cholesterol</td>
<td><input type="text" name="date7" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse7" class="hid"></td>
<td>Sugar</td>
<td><input type="text" name="date8" placeholder="DD/MM/YYYY" style="border:hidden;width:85px"></td>
<td><input type="text" name="pulse8" class="hid"></td>
</tr>
<tr>


</table><br><br>
<div><center>
<button id="b2" formaction="general_insert.php" name="submit">Register</button></center></div>

</form>
</body>
</html>
