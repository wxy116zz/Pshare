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
<link href="/style.css" rel="stylesheet" type="text/css" />
<title>Modify database</title>
</head>

<body>
<?php
if(isset($_COOKIE["verify"])){?>
<?php
	$id=$_GET["id"];
	if($_POST["submit"]=="Modify")
	{
		$subject=$_POST["subject"];
		$department=$_POST["department"];
		$book=$_POST["book"];
		$link=$_POST["link"];
		$school=$_POST["school"];
		$author=$_POST["author"];
		$professor=$_POST["professor"];
		$db->query("UPDATE info SET SUBJECT='$subject',DEPARTMENT='$department',BOOK='$book',LINK='$link',SCHOOL='$school',AUTHOR='$author',PROFESSOR='$professor' WHERE ID=$id");
		header("Location: upload.php");
	}
	$sql="SELECT * FROM info WHERE id=".$id;
	$rs=$db->query($sql);
	$rows=$rs->fetch_assoc();
?>
<form id="form1" name="form1" method="post" action="">
<table width="540" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
<tr>
  <td bgcolor="#FFFFFF">Modify data:</td>
  <td align="right" bgcolor="#FFFFFF"><a href="upload.php">Back</a>&nbsp;</td>
</tr>
<tr>
	<td bgcolor="#FFFFFF">Subject:</td>
	<td bgcolor="#FFFFFF"><input type="text" name="subject" value="<?php echo $rows["SUBJECT"]?>" /></td>
</tr>
<tr>
	<td bgcolor="#FFFFFF">Department:</td>
	<td bgcolor="#FFFFFF"><input type="text" name="department" value="<?php echo $rows["DEPARTMENT"]?>" /></td>
</tr>
<tr>
	<td bgcolor="#FFFFFF">Book:</td>
	<td bgcolor="#FFFFFF"><input type="text" name="book" value="<?php echo $rows["BOOK"]?>" /></td>
</tr>
<tr>
	<td bgcolor="#FFFFFF">Link:</td>
	<td bgcolor="#FFFFFF"><textarea cols="25" rows="10" name="link"><?php echo $rows["LINK"]?></textarea></td>
</tr>
<tr>
	<td bgcolor="#FFFFFF">Author:</td>
	<td bgcolor="#FFFFFF"><input type="text" name="author" value="<?php echo $rows["AUTHOR"]?>" /></td>
</tr>
<tr>
	<td bgcolor="#FFFFFF">School:</td>
	<td bgcolor="#FFFFFF"><input type="text" name="school" value="<?php echo $rows["SCHOOL"]?>" /></td>
</tr>
<tr>
	<td bgcolor="#FFFFFF">Professor:</td>
	<td bgcolor="#FFFFFF"><input type="text" name="professor" value="<?php echo $rows["PROFESSOR"]?>" /></td>
</tr>
<tr>
	<td colspan="2" align="center" bgcolor="#FFFFFF">
	<input type="submit" name="submit" value="Modify" />
	<label>
	<input type="button" name="Submit" value="Cancel" onclick="history.go(-1)"/>
	</label>	</td>
</tr>
</table>
</form>
<?php }?>
</body>
</html>
