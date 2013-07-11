<?
//$host = "https://www.realiseuwb.com";
$host = "https://www.realiseuwb.com";

$token = uniqid();
$a = fopen("tmp/".$token,"w+");
fwrite($a, $_SERVER['REMOTE_USER']);
fclose($a);
header("Location: ".$host."/wiki/Special:UserLogin?token=".$token);
?>
<html>
<head>
<title>Signing in...</title>
<style type="text/css">
#center	{position: absolute;
	 left: 50%;
	 top: 50%;
	 margin-top: -50px;
	 margin-left: -100px;
         height: 100px;
	 width: 200px;}
</style>
</head>
<body>
<div id="center"><center><img src="load.gif"><br /><b>Signing in as <? echo $_SERVER['REMOTE_USER']; ?>...</b></center></div>
</body>
</html>
