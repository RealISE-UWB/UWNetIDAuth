<?
//$host = "https://www.realiseuwb.com";
$host = "http://laptop.thefinn93.com";
if(isset($_REQUEST['dest'])) {
    if($_REQUEST['dest'] == "laptopproxy.thefinn93.com" || $_REQUEST['dest'] == "beta.realiseuwb.com") {
        $host = "http://".$_REQUEST['dest'];
    } else {
        error_log($_REQUEST['dest']." not in authorized domains");
    }
} else {
    error_log("No dest set, defaulting to ".$host);
}

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
