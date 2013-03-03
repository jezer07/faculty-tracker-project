        <?php include("header.php");?>

               <?php
				
				$id = $_GET['id'];
				$query = "Select * FROM users";
				$result = @mysql_query($query);
				$row = mysql_fetch_array($result);
				if ($row)
				{
				$query = "Delete from users WHERE id='$id'";
				mysql_query($query);
				header("Location:users.php?success=1");
				}
				?>

     <?php include("footer.php");?>