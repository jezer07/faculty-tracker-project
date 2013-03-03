        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li class="active"><a href="users.php"><i class="icon-eye-open"></i>View Users</a></li>
              <li><a href="addusers.php"><i class=" icon-plus-sign"></i>Add Users</a></li>
              

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span5">
               <?php
				
				$id = $_GET['id'];
				$query = "Select * FROM users";
				$result = @mysql_query($query);
				$row = mysql_fetch_array($result);
				if ($row)
				{
				$query = "Delete from users WHERE id='$id'";
				mysql_query($query);
				echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
				}
				?>
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>