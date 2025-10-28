<DOCTYPE html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />

    <style> 
 @media only screen and (max-width:600px) {

html, body, table, tr, td {
font-size:16px;
}

 }

  </style>
    <title> Music used in 'The Shield' </title>
</head>
<body>
<p class="t1">Music used in 'The Shield'</p>
<p class="t2">http://tom-grant.com/theshield/</p>

<br>


    <table border="1" cellspacing="0" cellpadding="0" width="90%">
      <tr>
        <td class="srow" colspan="3">Soundtrack on Lakeshore Records</td>
      </tr>
      <tr>
        <td class="drow">How It Was Used</td>
        <td class="drow" width="30%">Song Title</td>
        <td class="drow" width="30%">Artist</td>
      </tr>

<?php
$servername="XXXXXXXX"; // Host name
$username="XXXX"; // Mysql username
$password="XXXXXXXX"; // Mysql password
$dbname="XXXXXXXX"; // Database name
$tblname="Shield_music"; // Table name
// Connect to server and select databse
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM " . $tblname . " WHERE Season = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr> <td class='mrow'> ". $row["How_its_used"] . "</td><td class='mrow'>" . $row["Song"]. "</td><td class='mrow'>". $row["Artist"]. "</td></tr>";
  }
} else {
  echo "<tr> <td class='mrow'> 0 results </td> </tr>";
}
$conn->close();
?>

    </table>
<br><br>

<b>View More:</b><br>
- Season 1<br>
- <a href="season2.html">Season 2</a><br>
- <a href="season3.html">Season 3</a><br>
- <a href="javascript:void();javascript://index.php?type=season4">Season 4</a><br>
- <a href="season5.html">Season 5</a><br>
- <a href="javascript:void();javascript://index.php?type=season6">Season 6</a><br>
<br>
- <a href="tom_grant.html">Other</a><br>
- <a href="javascript:void();javascript://index.php?type=soundtrack">Soundtrack by Lakeshore Records</a>

<br><br>
<!--
<b>Contribute:</b><br>
- <a href='index.php?type=search'>Search</a><br>
- <a href='index.php?type=add'>Make Additions</a><br>
- <a href='index.php?type=correct'>Make Corrections</a>

<br><br>
-->
<b>Credits:</b><br>
- <a href="http://www.fxnetworks.com/" target="_blank">fxnetworks.com</a><br>
- <a href="http://www.lakeshore-records.com/" target="_blank">lakeshore-records.com</a><br>
- <a href="javascript:void();" target="_blank">shieldforum.com</a><br>
- <a href="javascript:void();" target="_blank">the shield rap @ proboads</a></font><br>
- <a href="javascript:void();" target="_blank">tv.com</a><br>
- <a href="http://www.tvguide.com/" target="_blank">tvguide.com</a></font>
</body>
</html>