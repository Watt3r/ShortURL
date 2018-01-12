<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Url Shortener</title>
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

<body>

<div class="header">Php URL shortener</div>
<div class="content">
<form id="form1" name="form1" method="post" action="shorten.php">
  
  <p><strong>Url:</strong>
    <input type="text" name="url" id="url"  size="45"  />
  </p>
  <p>
    <input type="submit" name="Submit" id="Submit" value="Shorten" />
  </p>
  <p>&nbsp;</p>
</form>

</div>
<footer><P>Made by <a href="https://watterikson.com">Watt Erikson</a></P></footer>
</body>
</html>