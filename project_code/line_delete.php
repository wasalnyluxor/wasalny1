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
	$sql = "SELECT * FROM linewalk" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
     <form method="post" action="">
      <input type="text" name="l_id" value="<?php echo "$row[li_id]"?>">
		 <input type="text" name="l_name" value="<?php echo "$row[li_name]"?>">
 				<input type="text" name="l_from" value="<?php echo "$row[li_From]"?>">
					 <input type="text" name="l_to" value="<?php echo "$row[li_To]"?>" >
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
	
	$uu_id= $_POST['l_id'] ;
	if ( isset($_POST['l_id'])) {
	$sql = "DELETE FROM linewalk WHERE li_id ='$uu_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?>

</body>
</html>