        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addsubjects.php"><i class=" icon-plus-sign"></i>Add Subjects</a></li>
              <li class="active"><a href="subjects.php"><i class="icon-eye-open"></i>View Subjects</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
               
                <div class="span9">
               
               <?php
				
				$id = $_GET['id'];
				$query = "Select * FROM subjects";
				$result = @mysql_query($query);
				$row = mysql_fetch_array($result);
				if ($row)
				{
				$query = "Delete from subjects WHERE id='$id'";
				mysql_query($query);
				echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
				}
				?>
                   
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>