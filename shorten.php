



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP url shortener</title>
<style type="text/css">
<!--
#form1 p {
text-align:center;
}
.header {
	font-family: "Fertigo Pro", Fontin, Calluna, Steinem;
	font-size: 36px;
	width: 100%;
	text-align: center;
	top: 5%;
	position: absolute;
}
footer {
	width: 100%;
	text-align: justify;
	top:80%;
	position: absolute;
	text-align: center;
}
.content {
	position: absolute;
	width: 500px;
	top: 40%;
	left: 32%;
	font-size: 28px;
	
}

-->
</style>
</head>

<body background="images/backgroud.gif">

<div class="header"> Php URL shortener<hr /></div>
<div class="content">

<?php
$unv = $_POST['url'];

$con = mysqli_connect("localhost","root","", "short"); // Add password and correct mySQL DB name
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); // Basic test connection
  };
$urlinput=mysqli_real_escape_string($con, $unv);
$id=rand(1000000,9999999); // generates random number for url

$shorturl=base_convert($id,20,36);
$sql = "INSERT INTO shortr (id,url,shortened)
VALUES ('$id','$urlinput','$shorturl')"; // Replace with MySQL Table name

mysqli_query($con,$sql); 
echo "Shortened url is <a href=\"http://short.turtle-coin.com/". $shorturl ."\">http://short.turtle-coin.com/". $shorturl ."</a>"; // echo shorter url

mysqli_close($con); // Closes mysql connection



?>




</div>
<footer><P>made by <a href="https://watterikson.com">Watt Erikson</a></P></footer>
</body>
</html>