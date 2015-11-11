<?php
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb2312">

<title>Pshare</title>
<link rel="shortcut icon" href="image/Pshare_ico.ico" type="image/x-icon" />
<style type="text/css">
<!--
.STYLE10 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>

<body>
<table width="1191" border="0">
  <tr>
    <td width="80">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="333">&nbsp;</td>
    <td width="166">&nbsp;</td>
    <td width="58">&nbsp;</td>
    <td width="55" align="left"> <span class="STYLE10"><a href="upload.php">Upload</a></span></td>
    <td width="55" align="left"><a href="contact.php">Contact</a></td>
  </tr>
</table>
<table width="1077" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="302" height="216">&nbsp;</td>
    <td width="51">      <label></label></td>
    <td width="450"><a href="department.php"><img src="image/Pshare logo.png" width="458" height="152" border="0" align="absmiddle" /></a></td>
    <td width="114">&nbsp;</td>
    <td width="9">&nbsp;</td>
    <td width="8">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="127">&nbsp;</td>
  </tr>
  <tr>
    <td height="75">&nbsp;</td>
	<form action="catalog.php" method="GET">
    <td colspan="2"><input name="id" type="text" placeholder="Course name"  style="height:32px; width:500px; size="80" /></td>
    <td><input type="submit" style="height:38px; width:100px;name="Submit2" value="   Search   " /></td>
	</form>
    <td><a href="department.php">Catalog</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>      <label></label>    </td>
  </tr>
</table>
<?php
//$sqlnumber = "SELECT COUNT(id) FROM users";
//$visitor=$db->query($sqlnumber);
//$visitor = $visitor->fetch_assoc();
$people_log = "people.txt";
$people=file($people_log);
$people = $people[0]+1;
$fp = fopen($people_log,"w");
fwrite($fp,$people);
?>
<table width="1261" border="0">
  <tr>
    <td width="64" height="96" rowspan="2">&nbsp;</td>
    <td width="64" rowspan="2">&nbsp;</td>
    <td width="128" rowspan="2">&nbsp;</td>
    <td width="166" rowspan="2">&nbsp;</td>
    <td width="333">&nbsp;</td>
    <td width="32" rowspan="2">&nbsp;</td>
    <td width="128" rowspan="2">&nbsp;</td>
    <td width="12" rowspan="2">&nbsp;</td>
    <td width="128" rowspan="2">&nbsp;</td>
    <td width="164" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>Welcome! You are the <?php echo $people ?> visitor. </td>
  </tr>
</table>
</body>
</html>
