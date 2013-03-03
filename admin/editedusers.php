        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addusers.php"><i class=" icon-plus-sign"></i>Add Users</a></li>
              <li class="active"><a href="users.php"><i class="icon-eye-open"></i>View Users</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span9">
                <?php
                                   
										$id = $_POST['id'];
										$name = $_POST['name'];
										$new = $_POST['new'];
										$type = $_POST['type'];
                                       
                                        
                                        $query = "Select * FROM users";
                                        $results = @mysql_query($query);
                                        $row = mysql_fetch_array($results);
                                        if ($row)
                                        {
                                        $query = "Update users set username='$name', password=SHA('$new'), type='$type' WHERE id='$id'";
                                        mysql_query($query);
                                        echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
                                        }
                ?>
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>