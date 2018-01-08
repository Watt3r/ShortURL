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
	top: 25%;
	left: 30%;
	
}

-->
</style>
</head>

<body>

<div class="header"> Php URL shortener<hr /></div>
<div class="content">
<form id="form1" name="form1" method="post" action="shorten.php">
  
  <p><strong> Url:</strong>
    <input type="text" name="url" id="url"  size="45"  />
  </p>
  <p>
    <input type="submit" name="Submit" id="Submit" value="Shorten" />
  </p>
  <p>&nbsp;</p>
</form>

</div>
<footer><P>made by <a href="https://watterikson.com">Watt Erikson</a></P></footer>
</body>
</html>