<?php

$con = mysqli_connect("localhost","root","", "short"); // Add mySQL password and correct DB
if (!$con)
  {
  die('Could not connect: ' . mysqli_error()); // Basic test connection
  }



$de= mysqli_real_escape_string($con, $_GET["decode"]);

$sql = 'SELECT * FROM shortr WHERE shortened="$de"';

$result=mysqli_query($con,"SELECT * FROM shortr WHERE shortened='$de'"); // Get Long url

while($row = mysqli_fetch_array($result))
{
$res=$row['url'];
header("location:".$res); // Redirect
}

?>