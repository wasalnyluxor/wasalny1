<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<h1> places </h1> <br />
 <h2><form method="post" >
place_id: <input type="text" name="p_id" ><br><br />
street_id:    <input type="text" name="st_id" ><br><br />
line_id:        <input type="text" name="l_id" ><br><br />
place_name:        <input type="text" name="p_name" ><br><br />
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
if ( isset($_POST['p_id']) && isset($_POST['l_id']) ) {
$sql = "INSERT INTO places  (pl_id,st_id,li_id,place_name) VALUES ('$_POST[p_id]' ,'$_POST[st_id]' ,'$_POST[l_id]' ,'$_POST[p_name]')" ;

} else {
$sql = '';
}
mysql_query($sql,$con) ;

mysql_close($con);

?>

</body>
</html>