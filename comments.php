<?php

session_start();
ob_start();
error_reporting(0);
require("connect.php");
date_default_timezone_set("America/New_York");
header('Content-Type: text/html; charset=UTF-8');

if(isset($_GET['comment'])){
	$_SESSION['num']=$_GET['comment'];
}else{
	$_SESSION['num']=$_SESSION['num'];
}

$comment = $_GET['comment'];

$admin_password = "admin";

$db_data = "comment{$_SESSION['num']}";

	
function convert($value){
	$value = htmlspecialchars($value,ENT_QUOTES);
	if(get_magic_quotes_gpc()) $value = stripslashes($value);
	return $value;
}

$id  = isset($_GET['id']) ? intval(trim($_GET['id'])) : '';
$cookie = isset($_COOKIE['cookie']) ? $_COOKIE['cookie'] : '';

if(isset($_POST['login'])){
	if($_POST['login']==$admin_password){
		setcookie('cookie','cookie');
		header("Location: comment.php?comment=".urlencode($_SESSION['num']));
	}else{
		header('refresh:1;url=?login');
		exit('
		<span style = "color:red;">Incorrect password</span>
		<a href="?login">Back</a>
		');
	}
}

if(isset($_GET['exit'])){
	setcookie('cookie','');
	header("Location: comment.php?comment=".urlencode($_SESSION['num']));
}

echo <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
    body{width:750px;margin:10px auto;border:#eee 5px solid;overflow:auto;padding:8px;word-wrap:break-word;}
    textarea{width:95%;height:80px;}
    input,select{font-size:12px;}
    body,textarea{font-size:14px;font-family:å®‹ä½“,Arial;line-height:25px;color:#333;}
    a{color:#168;text-decoration:none;}
    hr{height:1px;border:none;border-bottom:1px dashed #abc;}
    div{padding:15px;}
    span{color:#e33;}
    form{margin:0;}
</style>
<title>CommentS</title>
<link rel="shortcut icon" href="image/Pshare_ico.ico" type="image/x-icon" />
</head>
<body>
<a href="?" style="font-size: 18px;" align="center">Comments</a><hr/>
HTML;

if(isset($_GET['login']) && !$cookie){
	exit('
	<form method="post">
	Password: <input name = "login" type = "password"/>
	<input type = "submit" value = " Submit"/>
	</form>
	');
}

if($cookie == 'cookie'){
	if(isset($_GET['delete'])){
		$id = intval(trim($_GET['id']));
		$db->query("DELETE FROM $db_data WHERE id = $id");
		header("Location: comment.php?comment=".urlencode($_SESSION['num']));
	}
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$info = convert($_POST['content']);
		$reply = convert($_POST['reply']);
		$db->query("UPDATE $db_data SET
		           info = '$info',
			   reply = '$reply'
			   WHERE id = $id		
		");
		header("Location: comment.php?comment=".urlencode($_SESSION['num']));
	}
}


if(isset($_GET['reply']) && $cookie){
	$sql = $db->query("SELECT * FROM $db_data WHERE id= $id");
	$row = $sql->fetch_assoc();
	$ip = $row['ip'];
	$time = $row['time'];
	$time =  date('Y-m-d H:i:s',$time);
	$reply = $row['reply'];
	$content = $row['info'];
	echo<<<HTML
    <a>Updateã€€IDï¼š{$id}</a>ã€€|ã€€TIMEï¼š{$time}ã€€|ã€€IPï¼š{$ip}
    <form method="POST">
        Modifyï¼š <textarea name="content">{$content}</textarea><br/>
        Replyï¼š <textarea name="reply">{$reply}</textarea><br />
        <input type="hidden" name="id"    value="{$id}" />
        <input type="hidden" name="time"  value="{$time}" />
        <input type="submit" value="Submit" />ã€€
        <a href="?delete&id={$id}" onclick="return confirm('Confirm delete?');">Delete</a>
    </form>
HTML;
exit;
}

if($cookie){
	echo <<<HTML
        <a href="?exit">Log out</a>ã€€
    <p></p>
HTML;
}

if(!$cookie){
	$ip_all = $_SERVER["REMOTE_ADDR"]? $_SERVER["REMOTE_ADDR"] : '0,0,0,0';
	$ip     = preg_replace('~(\d+)\.(\d+)\.(\d+)\.(\d+)~', '$1.$2.$3.*', $ip_all);
	if(isset($_POST['add']) && $_POST['add']){
		ini_set('max_execution_time','60');
	    $time = time();
	    $content = convert($_POST['add']);
	    $db->query("
	      INSERT INTO $db_data(time,ip,info)
		  VALUES($time,'$ip_all','$content')
	     ");
	    header("Location: comment.php?comment=".urlencode($_SESSION['num']));
	}
	
	$date = date('Y-m-d',time());
	echo <<<HTML
	<form method="post">
		<textarea name="add"></textarea>
		<p>
		<input type="submit" value=" Submit " />
	    {$date}ã€€IPï¼š{$ip}
		</p>
	</form>
HTML;
}

$size = 10;
$countquery = $db->query("SELECT count(id) AS total FROM $db_data");
$countquery = $countquery->fetch_assoc();
$count = $countquery["total"]; 
$pagecount = ceil($count/$size);

if(isset($_GET['page']))  $page = trim($_GET['page']);
if(!isset($page) || $page<1) $page = 1;
if($page>$pagecount)  $page = $pagecount;
$page = intval($page);

$i=1;
$jump = ($page - 1) * $size;
$rs=$db->query("SELECT * FROM $db_data ORDER BY id DESC LIMIT $jump,$size");
while($count && $rows=$rs->fetch_assoc()){
	$id = $rows['id'];
	$ip = $rows['ip'];
	$time = $rows['time'];
	$time = date('Y-m-d H:i:s',$time);
	$reply = $rows['reply'];
	$reply = str_replace('  ','&nbsp;&nbsp;',nl2br($reply));
	$reply = $reply ? "<hr/><span>Reply:</span><br/>{$reply}" : '';
	$content = $rows['info'];
	$content = str_replace('  ','&nbsp;&nbsp;',nl2br($content));
	$color   = ($i%2) ? 'style="background-color:#f5f5f5;border:#eee 1px solid;"' : '';
    if($cookie){
		$admin ="<a href=\"?comment={$_SESSION['num']}&reply&id={$id}\">Manage</a>  |  ";
	}else{
		$ip  = preg_replace('~(\d+)\.(\d+)\.(\d+)\.(\d+)~', '$1.$2.$3.*', $ip);
		$admin = '';
	}
	echo <<<HTML
        <div {$color}>
            <span style="color:#888">
            {$admin}{$id} #ã€€|ã€€{$time}ã€€|ã€€IPï¼š{$ip}
            </span>
            <br/>
            {$content}{$reply}
        </div>
HTML;
$i++;
}
	
$last = $page - 1;
$next = $page + 1;
echo <<<HTML
<form method="get"><hr />
    <a href="?comment={$_SESSION['num']}&page={$last}">Previous</a>
    Page{$page}/{$pagecount}
    <a href="?comment={$_SESSION['num']}&page={$next}">Next</a>ã€€
    | Every page[{$size}ï¼½
    Total[{$count}ï¼½ |
    <a href="?login">Manage</a>
</form>
</body>
</html>
HTML;
?>
