        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addfaculty.php"><i class=" icon-plus-sign"></i>Add Faculty</a></li>
              <li class="active"><a href="faculty.php"><i class="icon-eye-open"></i>View Faculty</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span5">
               
               <?php
				
				$id = $_GET['id'];
				$query = "Select * FROM faculties";
				$result = @mysql_query($query);
				$row = mysql_fetch_array($result);
				if ($row)
				{
				$query = "Delete from faculties WHERE id='$id'";
				mysql_query($query);
				echo "<center><h2>Record has been deleted...</h2></center>";
				}
				?>
                   
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>