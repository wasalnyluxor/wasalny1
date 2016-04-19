<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1> Streets </h1> <br />
 <h2>		<form method="post" >
id:				 <input type="text" name="s_id" ><br><br />
name:				 <input type="text" name="s_name" ><br><br />
						<input type="submit" value="insert" />
						  </form></h2>

<?php 
$HostName="localhost";
$db_name="wasalny1";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf-8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['s_id']) && isset($_POST['s_name']) ) {
$sql = "INSERT INTO streets  (st_id,st_Name) VALUES ('$_POST[s_id]' ,'$_POST[s_name]')" ;

} else {
$sql = '';
}
mysql_query($sql,$con) ;

mysql_close($con);

?>
</body>
</html>