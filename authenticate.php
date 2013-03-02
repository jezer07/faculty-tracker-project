<?php
require 'mysql_connect.php';

$username =$_POST["user"];
$password =$_POST["password"];

$qUser = "SELECT * FROM users where username='$username' AND password=SHA('$password')";

echo $qUser;

//$eUser = mysql_query($qUser);

echo $eUser;
echo $qUser;

if(mysql_num_rows($eUser)==1){
	$getType = mysql_result($eUser,0,3);
	session_start();
	switch($getType){
		
		case "admin":{
			
			$_SESSION["userid"] = mysql_result($eUser,0,1);
			header("Location:admin/index.php");
			break;
			}
		case "student":{
			$_SESSION["userid"] = mysql_result($eUser,0,1);
			header("Location:student/sname.php");
				
			break;
			}
		case "operator":{
			$_SESSION["userid"] = mysql_result($eUser,0,1);
			header("Location:operator/sname.php");
			break;
			}
		
	}//end switch statement
	
	
	
	
	}
	else {
		?>
        
        
	<script>
alert("<?php echo('Invalid username or password please check if the capslock is on ');?>");
window.location.href="index.php";
		</script>
        
        <?php
	
		}



 ?>