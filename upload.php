<?php
$password = "pshare";  
error_reporting(0);
require 'connect.php';
require 'security.php';
$records = array();
if(!empty($_POST)){		
    $name = $_FILES["File"]["name"];
	if(!empty($name)){
	    $tmp_name = $_FILES["File"]["tmp_name"];
	    $location = 'uploads/';
		$address = $location.$name;
		if(move_uploaded_file($tmp_name,$address))
		{
		echo "Uploaded!";
		}
	}else{$address ='';}
	if(isset($_POST['Subject'],$_POST['Book'],$_POST['Link'],$_POST['Author'],$_POST['School'],$_POST['Professor'],$_POST['Department'])){
		
		$subject = trim($_POST['Subject']);
		$department = trim($_POST['Department']);
		$book = trim($_POST['Book']);
		$link = trim($_POST['Link']);
		$author = trim($_POST['Author']);
		$school = trim($_POST['School']);
		$professor = trim($_POST['Professor']);
		if(!empty($subject) || !empty($book) || !empty($author) || !empty($school) || !empty($professor) || !empty($link) || !empty($department)){
			$insert=$db->prepare("INSERT INTO info(SUBJECT,DEPARTMENT,SLIDES,BOOK,LINK,AUTHOR,SCHOOL,PROFESSOR,CREATED) VALUE(?,?,?,?,?,?,?,?,NOW())");
			$insert->bind_param('ssssssss',$subject,$department,$address,$book,$link,$author,$school,$professor);
			if($insert->execute()){
			}
		}
	}
	$tablename=$db->query("SELECT ID FROM info WHERE SUBJECT='$subject'");
    $tablename1=$tablename->fetch_assoc();
	$number = $tablename1["ID"];
	$number = "comment{$number}";
	$db->query("
	CREATE TABLE $number(
        id    int NOT NULL AUTO_INCREMENT,
        ip    varchar(12) NOT NULL,
        time  varchar(10) NOT NULL,
        info  text,
        reply text,
        audit int(1) NOT NULL,
        PRIMARY KEY(id))
	");
}
if(isset($_GET['course'])){
	$sub = $_GET['course'];
}else{
       $sub = '';
}
if($result=$db->query("SELECT * FROM info WHERE SUBJECT LIKE '".$sub."%'")){
	if($result->num_rows){
		while($row=$result->fetch_object()){
			$records[]=$row;
		}
		$result->free();
	}
}
?>
<?php
if(isset($_POST["password"]) && ($_POST["password"]=="$password")){
	setcookie("verify","verify","0");
}
?>
<html>
<head>
<title>INFO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
P { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
TD { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
-->
</style>
</head>
<body>
<?php 
  print "<h2 align=\"center\">INFO</h2>";
// If password is valid let the user get access



if(isset($_COOKIE["verify"]) || (isset($_POST["password"]) && ($_POST["password"]=="$password"))){
//if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->

  <p align="center"><br><br><br>
  <b>You have gained access to upload info!</b></p>
  <form action="" method="GET">
     <input name="course" type="text" placeholder="subject">
	 <input type="submit" name = "search" value="search">
  </form>
  
   <hr>
	 <?php
	 if(!count($records)){
		 echo 'No records';
	 }else{
	 ?>
	 <table>
	   <thead>
	      <tr>
		      <th>Subject</th>
			  <th>Department</th>
			  <th>Slides</th>
			  <th>Book</th>
			  <th>Link</th>
			  <th>Author</th>
			  <th>School</th>
			  <th>Professor</th>
			  <th>Modify</th>
			  <th>Delete</th>
		  </tr>
	   </thead>
	   <tbody>
	      <?php
		  foreach($records as $r){
		  ?>
	       <tr>
		      <td><?php echo escape($r->SUBJECT);?></td>
			  <td><?php echo escape($r->DEPARTMENT);?></td>
		      <td><?php echo escape($r->SLIDES);?></td>
			  <td><?php echo escape($r->BOOK);?></td>
			  <td><?php echo escape($r->LINK);?></td>
			  <td><?php echo escape($r->AUTHOR);?></td>
			  <td><?php echo escape($r->SCHOOL);?></td>
			  <td><?php echo escape($r->PROFESSOR);?></td>
			  <td><input name="button" type="button" onclick="location.href='modify.php?id=<?php echo $r->ID ?>'" value="Modify" /></td>
			  <td><input name="button" type="button" onclick="if(confirm('Really?')){location.href='del.php?id=<?php echo $r->ID ?>'}" value="Delete" /></td>
		   </tr> 
		   <?php
		  }
		   ?>
	   </tbody>
	 </table>
	 <?php
	 }
	 ?>
	 <hr>
	 <form action="upload.php" method="post" enctype="multipart/form-data">
	     <p><div class="field">
		    <label for="subject">Subject</label>
			<input type="text" name="Subject" id="Subject" autocomplete="off">
		 </div></p>
		 <p><div class="field">
		    <label for="subject">Department</label>
			<input type="text" name="Department" id="Department" autocomplete="off">
		 </div></p>
		 <p><div class="field">
		    <label for="subject">Slides</label>
			<input type="file" name="File" id="File" autocomplete="off">
		 </div></p>
		 <p><div class="field">
		    <label for="subject">Book</label>
			<input type="text" name="Book" id="Book" autocomplete="off">
		 </div></p>
		 <p><div class="field">
		    <label for="subject">Link</label>
			<input type="text" name="Link" id="Link" autocomplete="off">
		 </div></p>
		 <p><div class="field">
		    <label for="subject">Author</label>
			<input type="text" name="Author" id="Author" autocomplete="off">
		 </div></p>
		 <p><div class="field">
		    <label for="subject">School</label>
			<input type="text" name="School" id="School" value="Stevens Institute of Technology" autocomplete="off">
		 </div></p>
		 <p><div class="field">
		    <label for="subject">Professor</label>
			<input type="text" name="Professor" id="Professor" autocomplete="off">
		 </div></p>
		 <input type="submit" value="Insert">
	 </form>
  
  
<!-- END OF HIDDEN HTML -->
<?php 
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";
}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}
?>
<?php
if (isset($_POST['Subject']))
{
    header('Location: upload.php');
}
?>
<BR>
</body>
</html>
