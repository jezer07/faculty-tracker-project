        <?php include("header.php");?>

               
               <?php
				
				$id = $_GET['id'];
				$query = "Select * FROM sections";
				$result = @mysql_query($query);
				$row = mysql_fetch_array($result);
				if ($row)
				{
				$query = "Delete from sections WHERE id='$id'";
				mysql_query($query);
				header("Location:sections.php?success=1");
				}
				?>

     <?php include("footer.php");?>