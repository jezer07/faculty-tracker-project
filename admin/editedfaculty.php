        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li class="active"><a href="faculty.php"><i class="icon-eye-open"></i>View Faculty</a></li>
              <li><a href="addfaculty.php"><i class=" icon-plus-sign"></i>Add Faculty</a></li>
              

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span5">
               
               <?php
                                   
                                        $id = $_POST['id'];
                                        $name = $_POST['name'];
										$num = $_POST['num'];
                                        $email = $_POST['email'];
                                        
                                        $query = "Select * FROM faculties";
                                        $result = @mysql_query($query);
                                        $row = mysql_fetch_array($result);
                                        if ($row)
                                        {
                                        $query = "Update faculties set id='$id', name='$name', contactno='$num', email='$email' WHERE id='$id'";
                                        mysql_query($query);
                                        
										header("location:faculty.php?success=1");
                                        }
                ?>
               
                   
            	</div>


        <!-- /container -->
     <?php include("footer.php");?>