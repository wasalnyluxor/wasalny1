<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#9933CC">


<?php
$HostName="localhost";
$db_name="wasalny1";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf-8';");
	$sql = "SELECT * FROM places" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
<form  method="post" >
    <input type="hidden" name="p_id" value="<?php echo "$row[p_id]"?>">
    <input type="text" name="p_id" value="<?php echo "$row[pl_id]"?>">
   	 <input type="text" name="st_id" value="<?php echo "$row[st_id]"?>">
    	<input type="text" name="l_id" value="<?php echo "$row[li_id]"?>">
   		  <input type="text" name="p_name" value="<?php echo "$row[place_name]"?>">
                <input type="submit" value="delete" />
                        <hr />

     </form>
     
  <?php
	;}
	 mysql_close($con);
	?>

<?php
$HostName="localhost";
$db_name="wasalny1";
$LoginName="root";
$LoginPassword="";   
?>
<?php
$HostName="localhost";
$db_name="wasalny1";
$LoginName="root";
$LoginPassword="";   
?>
<?php

	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$uu_id= $_POST['p_id'] ;
	if ( isset($_POST['p_id'])) {
	$sql = "DELETE FROM places WHERE pl_id ='$uu_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?>

</body>
</html>