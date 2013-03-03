        <?php include("header.php");?>

               
               <?php
				
				$id = $_GET['id'];
				$query = "Select * FROM subjects";
				$result = @mysql_query($query);
				$row = mysql_fetch_array($result);
				if ($row)
				{
				$query = "Delete from subjects WHERE id='$id'";
				mysql_query($query);
				header("Location:subjects.php?success=1");
				}
				?>

     <?php include("footer.php");?>