<?php
ob_start();
error_reporting(0);
session_start();
require 'connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>delete data</title>
</head>
<body>
<?php
if(isset($_COOKIE["verify"])){?>
<?php
	$id=$_GET["id"];
	$sql="DELETE FROM info WHERE ID=$id";
    $db->query($sql);
	header("location:upload.php");
?>
<?php }?>
</body>
</html>
