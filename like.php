<?php
session_start();
require("connect.php");
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	$ip=$_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
	$ip=$_SERVER['REMOTE_ADDR'];
};
$ip = (int)ip2long($ip);
$db->query("
    REPLACE INTO users(userip,last_visit) VALUES('$ip',NOW())
");

if(isset($_GET['type'],$_GET['id'],$_GET['back'])){
	$type = $_GET['type'];
	$id   = $_GET['id'];
	$back = $_GET['back'];
	switch($type){
		case 'like':
		   $db->query("
		       INSERT INTO info_like_unlike (userip,xihuan,add_time)
			         SELECT {$ip},{$id},NOW() FROM info
			    WHERE NOT EXISTS
				(SELECT id FROM info_like_unlike WHERE userip = {$ip} AND xihuan = {$id})
				AND NOT EXISTS
				(SELECT id FROM info_like_unlike WHERE userip ={$ip} AND buxihuan = {$id})
				LIMIT 1
		   ");
		break;
		case 'unlike':
		   $db->query("
		       INSERT INTO info_like_unlike (userip,buxihuan,add_time)
			         SELECT {$ip},{$id},NOW() FROM info
			    WHERE NOT EXISTS
	            (SELECT id FROM info_like_unlike WHERE userip ={$ip} AND buxihuan = {$id})
				AND NOT EXISTS
				(SELECT id FROM info_like_unlike WHERE userip ={$ip} AND xihuan = {$id})
				LIMIT 1
		   ");
		break;
	}
}
header("Location: catalog.php?id=$back");
?>
