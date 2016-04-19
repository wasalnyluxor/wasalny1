<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<h1> Admin </h1> <br />
 <h2><form method="post" action="">
       <input type="hidden" name="a_id" value="<?php echo "$row[un_id]"?>" />

Name: <input type="text" name="a_name" ><br><br />
UserName: <input type="text" name="a_username" ><br><br />
Password: <input type="text" name="a_password" ><br><br />
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
if ( isset($_POST['a_name']) && isset($_POST['a_username']) ) {
$sql = "INSERT INTO admin (A_name,A_username,A_password) VALUES ('$_POST[a_name]' ,'$_POST[a_username]'  ,'$_POST[a_password]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>

</body>
</html>