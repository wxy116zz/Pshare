<?php
$db= new mysqli('localhost','wxy116zz_jun','17101727Qq','wxy116zz_Jun');
//echo $db->conncet_errno;
if($db->connect_errno){
	die('database has problem');
}
?>
