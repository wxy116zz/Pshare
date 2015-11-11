<?php
ob_start();
session_start();
require("connect.php");
error_reporting(0);
?>
<?php
$db->query("CREATE VIEW aa AS SELECT info.id,
	info.subject,
	COUNT(info_like_unlike.id) AS likes
	FROM info
	
	LEFT JOIN info_like_unlike
	ON info.id = info_like_unlike.xihuan
	
	GROUP BY info.id");
$db->query("CREATE VIEW bb AS SELECT info.id,
	info.subject,
	COUNT(info_like_unlike.id) AS unlikes
	FROM info
	
	LEFT JOIN info_like_unlike
	ON info.id = info_like_unlike.buxihuan
	
	GROUP BY info.id")
?>
<?php
$db->query("
    CREATE VIEW cc AS 
    SELECT aa.id,
	aa.subject,
	aa.likes,
	bb.unlikes
	FROM aa,bb
	WHERE aa.id=bb.id
");
//while($row = $subject_query->fetch_object()){
//	$subject[] = $row;
//}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<title>Pshare</title>
<link rel="shortcut icon" href="image/Pshare_ico.ico" type="image/x-icon" />
<style type="text/css">
<!--
.STYLE10 {font-family: "Times New Roman", Times, serif}
.STYLE13 {font-size: 36px}
-->
</style>
</head>
<body>
<table width="1191" border="0">
  <tr>
    <td>&nbsp;</td>
    <td width="66" align="center"><span class="STYLE10"><a href="department.php">Catalog</a></span></td>
  </tr>
</table>
<table width="1250" border="0">
  <tr>
    <td width="224" height="94"><a href="index.php"><img src="image/Pshare logo.png" alt="1" width="224" height="90" border="0" /></a></td>
    <th width="951"> <span class="STYLE13">Course and Textbook</span></th>
  </tr>
</table>
<table width="1250" border="0">
  <tr>
    <td width="46"><div align="center"><a href="catalog.php?id=A">A</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=B">B</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=C">C</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=D">D</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=E">E</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=F">F</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=G">G</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=H">H</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=I">I</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=J">J</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=K">K</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=L">L</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=M">M</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=N">N</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=O">O</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=P">P</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=Q">Q</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=R">R</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=S">S</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=T">T</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=U">U</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=V">V</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=W">W</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=X">X</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=Y">Y</a></div></td>
    <td width="46"><div align="center"><a href="catalog.php?id=Z">Z</a></div></td>  
  </tr>
</table>
<hr align="left" width="1250" />
<p>
  <?php
   $dp=$_GET["dp"];
   if($dp==""){
	   $dp="BME";
   }
?>
</p>
<p>&nbsp;</p>
<table width="219" border="1" cellspacing="0" bordercolor="#666666" style="float:left">
  <tr>
    <td width="213" height="25" align="center"><a href="department-catalog.php?dp=BME">Biomedical Engineering </a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=EE">Electical Engineering</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=BIA">Business Intelligence and Analytics</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=CH">Chemistry</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=FE">Financial Engineering</a> </td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=CS">Computer Science</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=CPE">Computer Engineering</a> </td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=MIS">Information System</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=CHE">Chemical Engineering</a> </td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=CE">Civil Engineering</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=MT">Material Engineering</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=ME">Mechanical Engineering</a> </td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=BT">Business and Technology</a> </td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=CM">Construction Management</a> </td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=EN">Environmental Engineering</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=ES">Enterprise System</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=H">Humanities</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=OE">Ocean Engineering</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=PME">Pharmaceutical Manufacturing</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=PE">Physical Education</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=MA">Mathematics</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=EM">Engineering Management</a> </td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=L">Language</a></td>
  </tr>
  <tr>
    <td height="25" align="center"><a href="department-catalog.php?dp=O">Other</a></td>
  </tr>
</table>

<?php
$size=10;
$countquery = $db->query("SELECT COUNT(info.ID) FROM info,cc WHERE cc.id=info.ID AND info.DEPARTMENT='$dp'");
$countquery = $countquery->fetch_assoc();
$count = $countquery["COUNT(info.ID)"];
$pagecount = ceil($count/$size);

if(isset($_GET['page']))  $page = trim($_GET['page']);
if(!isset($page) || $page<1) $page = 1;
if($page>$pagecount)  $page = $pagecount;
$page = intval($page);
$jump = ($page - 1) * $size;
?>

<?php
$sql="SELECT info.ID, info.SUBJECT,info.BOOK,info.LINK,info.AUTHOR,info.SLIDES,info.SCHOOL,info.PROFESSOR,cc.likes,cc.unlikes FROM info,cc WHERE cc.id=info.ID AND info.DEPARTMENT='$dp' ORDER BY likes DESC LIMIT $jump,$size";
//   $sql="SELECT * FROM info WHERE SUBJECT LIKE '".$id."%' LIMIT 0,10";
   $rs=$db->query($sql);
?>

<table width="1050" border="0" cellspacing="0">
  <tr>
<?php 
   while($rows1=$rs->fetch_assoc())
   {
	?>
    <td width="85" align="center">&nbsp;</td>
    <td width="207" align="center"><?php echo $rows1["SUBJECT"]?></td>
    <td colspan="9"><a href="<?php echo $rows1["LINK"]?>"> <?php echo $rows1["BOOK"]?></a> Writed By <?php echo $rows1["AUTHOR"]?></td>
  </tr>
  <tr>
    <td colspan="4" align="center"> <?php echo $rows1["SCHOOL"]?></td>
    <td width="110"><?php echo $rows1["PROFESSOR"]?></td>
    <td width="72" align="center">Slides</td>
    <td width="79" align="center"><a href="<?php echo $rows1["SLIDES"] ?>">Syllabus</a></td>
    <td width="125" align="center">Other Resourse </td>
    <td width="109"><p><a href="like.php?back=<?php echo $id?>&type=like&id=<?php echo $rows1["ID"]; ?>">Like</a></p>
    <p><?php echo $rows1["likes"]; ?> people like this.</p></td>
    <td width="105"><p><a href="like.php?back=<?php echo $id?>&type=unlike&id=<?php echo $rows1["ID"]; ?>">Unlike</a></p>
    <p><?php echo $rows1["unlikes"]; ?> people unlike this.</p></td>
    <td width="96" align="center"><a href="comment.php?comment=<?php echo $rows1["ID"] ?>">Comment</td>
  </tr>
  <?php
   } ?>
</table>
<hr align="center" width="650" />
<?php
$last = $page - 1;
$next = $page + 1;
?>
<form method="get" align="right">
    <a href="?id=<?php echo $id?>&page=<?php echo $last?>">Previous</a>
    Page<?php echo $page?>/<?php echo $pagecount?>
    <a href="?id=<?php echo $id?>&page=<?php echo $next?>">Next</a>
</form>
<?php
$sqlnumber = "SELECT COUNT(id) FROM users";
$visitor=$db->query($sqlnumber);
$visitor = $visitor->fetch_assoc();
?>
<table width="239" height="26" border="0">
  <tr>
    <td>Welcome! You are the <?php echo $visitor["COUNT(id)"]?> visitor.</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
