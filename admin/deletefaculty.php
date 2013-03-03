        <?php include("header.php");?>

               
               <?php
				
				$id = $_GET['id'];
				$query = "Select * FROM faculties";
				$result = @mysql_query($query);
				$row = mysql_fetch_array($result);
				if ($row)
				{
				$query = "Delete from faculties WHERE id='$id'";
				mysql_query($query);
				header("Location:faculty.php?success=1");
				}
				?>

     <?php include("footer.php");?>