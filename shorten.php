



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
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #00843D;
  text-align: center;
}
.content {

	width: 50%;
	margin: auto;
	margin-top: 25%;
	
}
html{
	background: url("bg.jpg") no-repeat center center fixed; 
  	-webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
}
a{
	font-weight: bold;
	color: black;
}
a:visited {
    color: #393a3a;
}

a:hover {
   color: #586857;
}

a:active {
    color: #a6a8a3;
}
-->
</style>
</head>

<body background="images/backgroud.gif">

<div class="header"> Php URL shortener<hr /></div>
<div class="content">

<?php
$rawLink = $_POST['url'];
echo $rawLink;
echo $unv;
if (strpos($rawLink, 'http://') !== false) {
    $unv = $rawLink;
} else if (strpos($rawLink, 'https://') !== false) {
    $unv = $rawLink;
} else {
	$unv = "http://". $rawLink;
}
echo $rawLink;
echo $unv;

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
<footer><P>Made by <a href="https://watterikson.com">Watt Erikson</a></P></footer>
</body>
</html>