<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CC99CC" >
<!--//<img src="9a2fcd9d0940f3a80a464fe4613affa1.jpg" style="width:80% ;  height:80%;" />
-->
<br />
<br />
<br />
<br />

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
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM admin" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form  method="get" >
      <input type="hidden" name="a_id" value="<?php echo "$row[A_id]"?>" />
         <input type="text" name="a_name" value="<?php echo "$row[A_name]"?>" />
            <input type="text" name="a_username" value="<?php echo "$row[A_username]"?>" />
              <input type="text" name="a_password" value="<?php echo "$row[A_password]"?>" />
               
                <a href="admin_update.php" > <input type="button" value="update" style="background-color:#C39" /> </a>
                    <a href="admin_delete.php" > <input type="button" value="delete" style="background-color:#C39" /></a>

                        <hr />

     </form>
     
     
     
     
  <?php
	;}
	 mysql_close($con);
	?>

</body>
</html>